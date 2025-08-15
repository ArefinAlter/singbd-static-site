<?php
// Contact Form Processing Script
// This script handles form submissions from the contact form

// Include configuration
require_once 'config.php';

// Start session for CSRF protection
session_start();

// Set content type to JSON
header('Content-Type: application/json');

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to send email
function send_email($to, $subject, $message, $headers) {
    return mail($to, $subject, $message, $headers);
}

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Check for CSRF token (if implemented)
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    // For now, we'll skip CSRF check but it should be implemented in production
    // echo json_encode(['success' => false, 'message' => 'Invalid CSRF token']);
    // exit;
}

try {
    // Get and sanitize form data
    $firstName = sanitize_input($_POST['firstName'] ?? '');
    $lastName = sanitize_input($_POST['lastName'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $company = sanitize_input($_POST['company'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($firstName)) {
        $errors[] = 'First name is required';
    }
    
    if (empty($lastName)) {
        $errors[] = 'Last name is required';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!validate_email($email)) {
        $errors[] = 'Please enter a valid email address';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    // If there are validation errors, return them
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
        exit;
    }
    
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Prepare and execute the insert statement
    $stmt = $pdo->prepare("
        INSERT INTO contact_submissions 
        (first_name, last_name, email, company, message, ip_address, user_agent, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
    ");
    
    $stmt->execute([
        $firstName,
        $lastName,
        $email,
        $company,
        $message,
        $_SERVER['REMOTE_ADDR'] ?? '',
        $_SERVER['HTTP_USER_AGENT'] ?? ''
    ]);
    
    // Send email notification to admin
    $admin_subject = "New Contact Form Submission - SingBD Website";
    $admin_message = "
    New contact form submission received:
    
    Name: {$firstName} {$lastName}
    Email: {$email}
    Company: {$company}
    Message: {$message}
    
    Submitted on: " . date('Y-m-d H:i:s') . "
    IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "
    ";
    
    $admin_headers = "From: $from_name <$from_email>\r\n";
    $admin_headers .= "Reply-To: $email\r\n";
    $admin_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    send_email($admin_email, $admin_subject, $admin_message, $admin_headers);
    
    // Send auto-reply to user
    $user_subject = "Thank you for contacting SingBD";
    $user_message = "
    Dear {$firstName} {$lastName},
    
    Thank you for contacting SingBD. We have received your message and will get back to you within 24-48 hours.
    
    Your message:
    {$message}
    
    Best regards,
    The SingBD Team
    
    ---
    This is an automated response. Please do not reply to this email.
    ";
    
    $user_headers = "From: $from_name <$from_email>\r\n";
    $user_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    send_email($email, $user_subject, $user_message, $user_headers);
    
    // Return success response
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you for your message! We will get back to you soon.'
    ]);
    
} catch (PDOException $e) {
    // Log database error (in production, log to file)
    error_log("Database error: " . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error processing your request. Please try again later.'
    ]);
    
} catch (Exception $e) {
    // Log general error
    error_log("General error: " . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Sorry, there was an error processing your request. Please try again later.'
    ]);
}
?>
