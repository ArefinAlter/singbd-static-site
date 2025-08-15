# Security Guidelines
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### 1. Security Overview

#### Security Philosophy
- **Defense in Depth:** Multiple layers of security protection
- **Principle of Least Privilege:** Minimal access rights for users and systems
- **Security by Design:** Security integrated from the beginning
- **Regular Audits:** Continuous security monitoring and assessment
- **Incident Response:** Prepared response to security incidents

#### Security Objectives
- **Data Protection:** Secure handling of user and business data
- **System Integrity:** Protection against unauthorized modifications
- **Availability:** Ensuring system availability and uptime
- **Compliance:** Meeting GDPR and other regulatory requirements
- **User Privacy:** Protecting user privacy and personal information

### 2. Infrastructure Security

#### Server Security
```apache
# Apache Security Configuration
# Disable server signature
ServerSignature Off
ServerTokens Prod

# Security Headers
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
Header always set Referrer-Policy "strict-origin-when-cross-origin"
Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com;"

# Disable directory browsing
Options -Indexes

# Protect sensitive files
<Files "*.php">
    <RequireAll>
        Require all granted
    </RequireAll>
</Files>

<Files "*.log">
    Require all denied
</Files>

<Files ".htaccess">
    Require all denied
</Files>

<Files "wp-config.php">
    Require all denied
</Files>
```

#### SSL/TLS Configuration
```apache
# SSL Configuration
SSLEngine on
SSLProtocol all -SSLv2 -SSLv3 -TLSv1 -TLSv1.1
SSLCipherSuite ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:ECDHE-RSA-AES128-SHA256
SSLHonorCipherOrder on
SSLCompression off
SSLSessionTickets off

# HSTS Configuration
Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"
```

#### PHP Security Settings
```ini
; PHP Security Configuration
expose_php = Off
allow_url_fopen = Off
allow_url_include = Off
file_uploads = On
upload_max_filesize = 10M
post_max_size = 10M
max_input_vars = 3000

; Session Security
session.cookie_httponly = 1
session.cookie_secure = 1
session.use_strict_mode = 1
session.cookie_samesite = "Strict"
session.gc_maxlifetime = 3600

; Error Handling
display_errors = Off
log_errors = On
error_log = /path/to/secure/error.log
```

### 3. Application Security

#### Input Validation and Sanitization
```php
<?php
// Input validation class
class SecurityValidator {
    
    // Sanitize string input
    public static function sanitizeString($input, $maxLength = 255) {
        $input = trim($input);
        $input = substr($input, 0, $maxLength);
        return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }
    
    // Validate email address
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    // Sanitize email address
    public static function sanitizeEmail($email) {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }
    
    // Validate phone number
    public static function validatePhone($phone) {
        return preg_match('/^[\+]?[1-9][\d]{0,15}$/', $phone);
    }
    
    // Validate file upload
    public static function validateFile($file, $allowedTypes, $maxSize) {
        if (!isset($file['error']) || is_array($file['error'])) {
            return false;
        }
        
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }
        
        if ($file['size'] > $maxSize) {
            return false;
        }
        
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($file['tmp_name']);
        
        return in_array($mimeType, $allowedTypes);
    }
    
    // Validate and sanitize HTML content
    public static function sanitizeHTML($html, $allowedTags = []) {
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', implode(',', $allowedTags));
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($html);
    }
    
    // Validate CSRF token
    public static function validateCSRFToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
    
    // Generate CSRF token
    public static function generateCSRFToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
}
?>
```

#### Database Security
```php
<?php
// Secure database connection class
class SecureDatabase {
    private $pdo;
    
    public function __construct($host, $dbname, $username, $password) {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
        ];
        
        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw new Exception("Database connection failed");
        }
    }
    
    // Secure query execution with prepared statements
    public function query($sql, $params = []) {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            error_log("Database query failed: " . $e->getMessage());
            throw new Exception("Database query failed");
        }
    }
    
    // Secure transaction handling
    public function beginTransaction() {
        return $this->pdo->beginTransaction();
    }
    
    public function commit() {
        return $this->pdo->commit();
    }
    
    public function rollback() {
        return $this->pdo->rollback();
    }
}
?>
```

#### Authentication and Authorization
```php
<?php
// Secure authentication system
class SecureAuth {
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
        $this->initSession();
    }
    
    private function initSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_name('SINGBD_SESSION');
            session_start();
        }
    }
    
    // Secure login with password hashing
    public function login($username, $password) {
        // Rate limiting
        if (!$this->checkRateLimit($username)) {
            return ['success' => false, 'message' => 'Too many login attempts'];
        }
        
        $sql = "SELECT id, username, password_hash, role, is_active FROM admin_users WHERE username = ?";
        $stmt = $this->db->query($sql, [$username]);
        $user = $stmt->fetch();
        
        if ($user && $user['is_active'] && password_verify($password, $user['password_hash'])) {
            // Regenerate session ID to prevent session fixation
            session_regenerate_id(true);
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['logged_in'] = true;
            $_SESSION['login_time'] = time();
            
            // Update last login
            $this->db->query("UPDATE admin_users SET last_login = NOW() WHERE id = ?", [$user['id']]);
            
            return ['success' => true, 'message' => 'Login successful'];
        }
        
        return ['success' => false, 'message' => 'Invalid credentials'];
    }
    
    // Secure logout
    public function logout() {
        session_destroy();
        return true;
    }
    
    // Check if user is authenticated
    public function isAuthenticated() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }
    
    // Check user role
    public function hasRole($role) {
        return $this->isAuthenticated() && $_SESSION['role'] === $role;
    }
    
    // Require authentication
    public function requireAuth() {
        if (!$this->isAuthenticated()) {
            header('Location: /admin/login.php');
            exit;
        }
    }
    
    // Rate limiting for login attempts
    private function checkRateLimit($username) {
        $key = "login_attempts:$username";
        $attempts = $this->getLoginAttempts($username);
        
        if ($attempts >= 5) {
            return false;
        }
        
        $this->incrementLoginAttempts($username);
        return true;
    }
    
    private function getLoginAttempts($username) {
        // Implementation with Redis or file-based storage
        return 0; // Placeholder
    }
    
    private function incrementLoginAttempts($username) {
        // Implementation with Redis or file-based storage
    }
}
?>
```

### 4. Form Security

#### CSRF Protection
```php
<?php
// CSRF protection for forms
class CSRFProtection {
    
    public static function generateToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    public static function validateToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
    
    public static function requireToken() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !self::validateToken($_POST['csrf_token'])) {
                http_response_code(403);
                die('Invalid CSRF token');
            }
        }
    }
}
?>

<!-- Form with CSRF protection -->
<form method="POST" action="/contact.php">
    <input type="hidden" name="csrf_token" value="<?php echo CSRFProtection::generateToken(); ?>">
    <!-- Form fields -->
</form>
```

#### Contact Form Security
```php
<?php
// Secure contact form processing
class SecureContactForm {
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    public function processSubmission($data) {
        // Rate limiting
        if (!$this->checkRateLimit()) {
            return ['success' => false, 'message' => 'Too many submissions. Please try again later.'];
        }
        
        // Validate required fields
        $errors = $this->validateInput($data);
        if (!empty($errors)) {
            return ['success' => false, 'message' => implode(', ', $errors)];
        }
        
        // Sanitize input
        $sanitizedData = $this->sanitizeInput($data);
        
        // Store in database
        try {
            $sql = "INSERT INTO contact_submissions (fullname, email, phone, company, subject, message, ip_address, user_agent) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            $this->db->query($sql, [
                $sanitizedData['fullname'],
                $sanitizedData['email'],
                $sanitizedData['phone'],
                $sanitizedData['company'],
                $sanitizedData['subject'],
                $sanitizedData['message'],
                $_SERVER['REMOTE_ADDR'],
                $_SERVER['HTTP_USER_AGENT']
            ]);
            
            // Send email notification
            $this->sendNotification($sanitizedData);
            
            return ['success' => true, 'message' => 'Thank you for your message. We will get back to you soon.'];
            
        } catch (Exception $e) {
            error_log("Contact form error: " . $e->getMessage());
            return ['success' => false, 'message' => 'An error occurred. Please try again later.'];
        }
    }
    
    private function validateInput($data) {
        $errors = [];
        
        if (empty($data['fullname']) || strlen($data['fullname']) > 255) {
            $errors[] = 'Valid full name is required';
        }
        
        if (empty($data['email']) || !SecurityValidator::validateEmail($data['email'])) {
            $errors[] = 'Valid email address is required';
        }
        
        if (empty($data['message']) || strlen($data['message']) > 5000) {
            $errors[] = 'Message is required (max 5000 characters)';
        }
        
        if (!empty($data['phone']) && !SecurityValidator::validatePhone($data['phone'])) {
            $errors[] = 'Invalid phone number format';
        }
        
        return $errors;
    }
    
    private function sanitizeInput($data) {
        return [
            'fullname' => SecurityValidator::sanitizeString($data['fullname']),
            'email' => SecurityValidator::sanitizeEmail($data['email']),
            'phone' => isset($data['phone']) ? SecurityValidator::sanitizeString($data['phone']) : null,
            'company' => isset($data['company']) ? SecurityValidator::sanitizeString($data['company']) : null,
            'subject' => isset($data['subject']) ? SecurityValidator::sanitizeString($data['subject']) : null,
            'message' => SecurityValidator::sanitizeString($data['message'])
        ];
    }
    
    private function checkRateLimit() {
        $ip = $_SERVER['REMOTE_ADDR'];
        $key = "contact_form:$ip";
        
        // Implementation with Redis or file-based storage
        return true; // Placeholder
    }
    
    private function sendNotification($data) {
        // Secure email sending implementation
    }
}
?>
```

### 5. File Upload Security

#### Secure File Upload
```php
<?php
// Secure file upload handler
class SecureFileUpload {
    private $uploadDir;
    private $maxFileSize;
    private $allowedTypes;
    
    public function __construct($uploadDir, $maxFileSize = 10485760, $allowedTypes = []) {
        $this->uploadDir = $uploadDir;
        $this->maxFileSize = $maxFileSize;
        $this->allowedTypes = $allowedTypes ?: [
            'image/jpeg',
            'image/png',
            'image/gif',
            'image/webp'
        ];
    }
    
    public function uploadFile($file) {
        // Validate file
        if (!$this->validateFile($file)) {
            return ['success' => false, 'message' => 'Invalid file'];
        }
        
        // Generate secure filename
        $filename = $this->generateSecureFilename($file['name']);
        $filepath = $this->uploadDir . $filename;
        
        // Move uploaded file
        if (move_uploaded_file($file['tmp_name'], $filepath)) {
            // Set proper permissions
            chmod($filepath, 0644);
            
            return ['success' => true, 'filename' => $filename];
        }
        
        return ['success' => false, 'message' => 'File upload failed'];
    }
    
    private function validateFile($file) {
        // Check for upload errors
        if (!isset($file['error']) || is_array($file['error'])) {
            return false;
        }
        
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }
        
        // Check file size
        if ($file['size'] > $this->maxFileSize) {
            return false;
        }
        
        // Check MIME type
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($file['tmp_name']);
        
        if (!in_array($mimeType, $this->allowedTypes)) {
            return false;
        }
        
        // Additional security checks
        if (!$this->isImageFile($file['tmp_name'])) {
            return false;
        }
        
        return true;
    }
    
    private function isImageFile($filepath) {
        $imageInfo = getimagesize($filepath);
        return $imageInfo !== false;
    }
    
    private function generateSecureFilename($originalName) {
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);
        $filename = bin2hex(random_bytes(16)) . '.' . $extension;
        return $filename;
    }
}
?>
```

### 6. Session Security

#### Secure Session Management
```php
<?php
// Secure session configuration
class SecureSession {
    
    public static function init() {
        // Secure session configuration
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', 1);
        ini_set('session.use_strict_mode', 1);
        ini_set('session.cookie_samesite', 'Strict');
        ini_set('session.gc_maxlifetime', 3600);
        
        // Custom session name
        session_name('SINGBD_SESSION');
        
        // Start session
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Regenerate session ID periodically
        if (!isset($_SESSION['last_regeneration'])) {
            $_SESSION['last_regeneration'] = time();
        } elseif (time() - $_SESSION['last_regeneration'] > 300) {
            session_regenerate_id(true);
            $_SESSION['last_regeneration'] = time();
        }
    }
    
    public static function destroy() {
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
    }
    
    public static function isExpired() {
        if (!isset($_SESSION['login_time'])) {
            return true;
        }
        
        $timeout = 3600; // 1 hour
        return (time() - $_SESSION['login_time']) > $timeout;
    }
}
?>
```

### 7. WordPress Security (Phase 2)

#### WordPress Security Configuration
```php
<?php
// wp-config.php security additions
// Disable file editing
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);

// Security keys (generate unique keys)
define('AUTH_KEY', 'your-unique-auth-key');
define('SECURE_AUTH_KEY', 'your-unique-secure-auth-key');
define('LOGGED_IN_KEY', 'your-unique-logged-in-key');
define('NONCE_KEY', 'your-unique-nonce-key');
define('AUTH_SALT', 'your-unique-auth-salt');
define('SECURE_AUTH_SALT', 'your-unique-secure-auth-salt');
define('LOGGED_IN_SALT', 'your-unique-logged-in-salt');
define('NONCE_SALT', 'your-unique-nonce-salt');

// Database table prefix
$table_prefix = 'wp_singbd_';

// Disable WordPress version display
remove_action('wp_head', 'wp_generator');

// Limit login attempts
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
?>
```

#### WordPress Security Headers
```php
<?php
// Add to functions.php or security plugin
function add_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
}
add_action('send_headers', 'add_security_headers');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove WordPress version
remove_action('wp_head', 'wp_generator');

// Disable file editing
define('DISALLOW_FILE_EDIT', true);
?>
```

### 8. Monitoring and Logging

#### Security Logging
```php
<?php
// Security event logging
class SecurityLogger {
    private $logFile;
    
    public function __construct($logFile = '../logs/security.log') {
        $this->logFile = $logFile;
    }
    
    public function logSecurityEvent($event, $details = []) {
        $logEntry = [
            'timestamp' => date('Y-m-d H:i:s'),
            'event' => $event,
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
            'url' => $_SERVER['REQUEST_URI'] ?? 'Unknown',
            'details' => $details
        ];
        
        $logLine = json_encode($logEntry) . "\n";
        file_put_contents($this->logFile, $logLine, FILE_APPEND | LOCK_EX);
    }
    
    public function logFailedLogin($username) {
        $this->logSecurityEvent('failed_login', ['username' => $username]);
    }
    
    public function logSuccessfulLogin($username) {
        $this->logSecurityEvent('successful_login', ['username' => $username]);
    }
    
    public function logCSRFViolation() {
        $this->logSecurityEvent('csrf_violation');
    }
    
    public function logSQLInjectionAttempt($query) {
        $this->logSecurityEvent('sql_injection_attempt', ['query' => $query]);
    }
    
    public function logXSSAttempt($input) {
        $this->logSecurityEvent('xss_attempt', ['input' => $input]);
    }
}
?>
```

### 9. Incident Response

#### Security Incident Response Plan
```php
<?php
// Security incident response
class SecurityIncidentResponse {
    private $logger;
    private $adminEmail;
    
    public function __construct($logger, $adminEmail) {
        $this->logger = $logger;
        $this->adminEmail = $adminEmail;
    }
    
    public function handleSecurityIncident($incident, $details = []) {
        // Log the incident
        $this->logger->logSecurityEvent($incident, $details);
        
        // Determine severity
        $severity = $this->assessSeverity($incident, $details);
        
        // Take immediate action
        $this->takeImmediateAction($incident, $severity);
        
        // Notify administrators if high severity
        if ($severity === 'high') {
            $this->notifyAdministrators($incident, $details);
        }
        
        // Block IP if necessary
        if ($this->shouldBlockIP($incident, $details)) {
            $this->blockIP($_SERVER['REMOTE_ADDR']);
        }
    }
    
    private function assessSeverity($incident, $details) {
        $highSeverityEvents = [
            'sql_injection_attempt',
            'file_upload_violation',
            'admin_login_attempt'
        ];
        
        return in_array($incident, $highSeverityEvents) ? 'high' : 'medium';
    }
    
    private function takeImmediateAction($incident, $severity) {
        switch ($incident) {
            case 'sql_injection_attempt':
                http_response_code(403);
                die('Access denied');
                break;
                
            case 'file_upload_violation':
                http_response_code(400);
                die('Invalid file upload');
                break;
                
            case 'csrf_violation':
                http_response_code(403);
                die('Invalid request');
                break;
        }
    }
    
    private function notifyAdministrators($incident, $details) {
        $subject = "Security Alert: $incident";
        $message = "A security incident has been detected:\n\n";
        $message .= "Incident: $incident\n";
        $message .= "Time: " . date('Y-m-d H:i:s') . "\n";
        $message .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n";
        $message .= "Details: " . json_encode($details) . "\n";
        
        mail($this->adminEmail, $subject, $message);
    }
    
    private function shouldBlockIP($incident, $details) {
        // Implement IP blocking logic
        return false; // Placeholder
    }
    
    private function blockIP($ip) {
        // Implement IP blocking
    }
}
?>
```

### 10. Security Testing

#### Security Testing Checklist
- [ ] **Input Validation Testing**
  - [ ] SQL injection attempts
  - [ ] XSS attempts
  - [ ] File upload validation
  - [ ] CSRF token validation
  
- [ ] **Authentication Testing**
  - [ ] Brute force attack simulation
  - [ ] Session management testing
  - [ ] Password strength validation
  - [ ] Account lockout testing
  
- [ ] **Authorization Testing**
  - [ ] Access control verification
  - [ ] Role-based access testing
  - [ ] Privilege escalation attempts
  
- [ ] **Configuration Testing**
  - [ ] Server configuration review
  - [ ] SSL/TLS configuration
  - [ ] Security headers verification
  - [ ] File permissions check

#### Automated Security Testing
```php
<?php
// Security testing script
class SecurityTester {
    
    public function runSecurityTests() {
        $results = [];
        
        $results['ssl'] = $this->testSSL();
        $results['headers'] = $this->testSecurityHeaders();
        $results['csrf'] = $this->testCSRFProtection();
        $results['sql_injection'] = $this->testSQLInjection();
        $results['xss'] = $this->testXSS();
        
        return $results;
    }
    
    private function testSSL() {
        $url = 'https://singbd.com';
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ]
        ]);
        
        $response = file_get_contents($url, false, $context);
        return $response !== false;
    }
    
    private function testSecurityHeaders() {
        $headers = get_headers('https://singbd.com', 1);
        
        $requiredHeaders = [
            'X-Content-Type-Options',
            'X-Frame-Options',
            'X-XSS-Protection',
            'Strict-Transport-Security'
        ];
        
        $results = [];
        foreach ($requiredHeaders as $header) {
            $results[$header] = isset($headers[$header]);
        }
        
        return $results;
    }
    
    // Additional test methods...
}
?>
```

### 11. Compliance and Regulations

#### GDPR Compliance
- **Data Minimization:** Collect only necessary data
- **Consent Management:** Clear consent mechanisms
- **Data Portability:** Allow data export
- **Right to Erasure:** Data deletion capability
- **Privacy Policy:** Clear privacy information

#### Data Protection Measures
- **Encryption:** Data encryption at rest and in transit
- **Access Control:** Role-based access management
- **Audit Logging:** Comprehensive activity logging
- **Data Backup:** Secure backup procedures
- **Incident Response:** Data breach response plan

### 12. Security Maintenance

#### Regular Security Tasks
- **Weekly:** Security updates and patches
- **Monthly:** Security audit and review
- **Quarterly:** Penetration testing
- **Annually:** Security policy review

#### Security Monitoring
- **Real-time Monitoring:** Security event monitoring
- **Log Analysis:** Regular log review
- **Vulnerability Scanning:** Automated vulnerability checks
- **Performance Monitoring:** Security impact on performance

This comprehensive security framework ensures the SingBD website maintains the highest security standards throughout development and operation.
