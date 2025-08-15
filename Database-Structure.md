# Database Structure
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### Overview
This document outlines the database structure for the SingBD website migration. The database will be used for contact form submissions in Phase 1 and will be expanded for WordPress CMS functionality in Phase 2.

### Phase 1: Contact Form Database

#### Database Configuration
- **Database Name:** `singbd_website`
- **Character Set:** `utf8mb4`
- **Collation:** `utf8mb4_unicode_ci`
- **Engine:** InnoDB

#### Contact Form Table Structure

```sql
CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('new','read','replied','archived') NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`),
  KEY `idx_submission_date` (`submission_date`),
  KEY `idx_status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

#### Table Field Descriptions

| Field | Type | Description | Required |
|-------|------|-------------|----------|
| `id` | int(11) | Unique identifier for each submission | Yes (Auto) |
| `fullname` | varchar(255) | Full name of the person submitting | Yes |
| `email` | varchar(255) | Email address for contact | Yes |
| `phone` | varchar(50) | Phone number (optional) | No |
| `company` | varchar(255) | Company name (optional) | No |
| `subject` | varchar(255) | Subject line for the inquiry | No |
| `message` | text | Main message content | Yes |
| `submission_date` | timestamp | When the form was submitted | Yes (Auto) |
| `ip_address` | varchar(45) | IP address of submitter | No |
| `user_agent` | text | Browser/device information | No |
| `status` | enum | Current status of the submission | Yes |
| `admin_notes` | text | Internal notes for admin use | No |

#### Status Values
- **new:** Just submitted, not yet reviewed
- **read:** Admin has read the submission
- **replied:** Response has been sent to the user
- **archived:** Submission has been archived

### Database Connection Configuration

#### PHP Database Connection File (includes/db.php)

```php
<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'singbd_website');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_CHARSET', 'utf8mb4');

// Create database connection
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        return false;
    }
}

// Test database connection
function testDBConnection() {
    $pdo = getDBConnection();
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT 1");
            return true;
        } catch (PDOException $e) {
            error_log("Database test failed: " . $e->getMessage());
            return false;
        }
    }
    return false;
}
?>
```

### Contact Form Processing

#### Form Submission Handler (process_contact.php)

```php
<?php
require_once 'includes/db.php';

// Validate and process form submission
function processContactForm($data) {
    // Validate required fields
    if (empty($data['fullname']) || empty($data['email']) || empty($data['message'])) {
        return ['success' => false, 'message' => 'Please fill in all required fields.'];
    }
    
    // Validate email format
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Please enter a valid email address.'];
    }
    
    // Sanitize input data
    $fullname = htmlspecialchars(trim($data['fullname']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
    $phone = isset($data['phone']) ? htmlspecialchars(trim($data['phone']), ENT_QUOTES, 'UTF-8') : null;
    $company = isset($data['company']) ? htmlspecialchars(trim($data['company']), ENT_QUOTES, 'UTF-8') : null;
    $subject = isset($data['subject']) ? htmlspecialchars(trim($data['subject']), ENT_QUOTES, 'UTF-8') : null;
    $message = htmlspecialchars(trim($data['message']), ENT_QUOTES, 'UTF-8');
    
    // Get additional data
    $ip_address = $_SERVER['REMOTE_ADDR'] ?? null;
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? null;
    
    // Insert into database
    $pdo = getDBConnection();
    if (!$pdo) {
        return ['success' => false, 'message' => 'Database connection failed. Please try again later.'];
    }
    
    try {
        $sql = "INSERT INTO contact_submissions (fullname, email, phone, company, subject, message, ip_address, user_agent) 
                VALUES (:fullname, :email, :phone, :company, :subject, :message, :ip_address, :user_agent)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':fullname' => $fullname,
            ':email' => $email,
            ':phone' => $phone,
            ':company' => $company,
            ':subject' => $subject,
            ':message' => $message,
            ':ip_address' => $ip_address,
            ':user_agent' => $user_agent
        ]);
        
        return ['success' => true, 'message' => 'Thank you for your message. We will get back to you soon.'];
        
    } catch (PDOException $e) {
        error_log("Contact form submission error: " . $e->getMessage());
        return ['success' => false, 'message' => 'An error occurred. Please try again later.'];
    }
}

// Handle AJAX form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = processContactForm($_POST);
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}
?>
```

### Admin Interface for Contact Submissions

#### Simple Admin Panel (admin/contact_submissions.php)

```php
<?php
require_once '../includes/db.php';

// Basic authentication (replace with proper authentication in production)
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

// Get submissions with pagination
function getContactSubmissions($page = 1, $limit = 20) {
    $pdo = getDBConnection();
    if (!$pdo) return false;
    
    $offset = ($page - 1) * $limit;
    
    try {
        $sql = "SELECT * FROM contact_submissions ORDER BY submission_date DESC LIMIT :limit OFFSET :offset";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Error fetching contact submissions: " . $e->getMessage());
        return false;
    }
}

// Update submission status
function updateSubmissionStatus($id, $status, $notes = null) {
    $pdo = getDBConnection();
    if (!$pdo) return false;
    
    try {
        $sql = "UPDATE contact_submissions SET status = :status, admin_notes = :notes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':status' => $status,
            ':notes' => $notes,
            ':id' => $id
        ]);
        
        return true;
    } catch (PDOException $e) {
        error_log("Error updating submission status: " . $e->getMessage());
        return false;
    }
}
?>
```

### Phase 2: WordPress Database Structure

#### WordPress Core Tables
When migrating to WordPress, the following core tables will be added:

```sql
-- WordPress core tables (automatically created during installation)
wp_posts
wp_posts_meta
wp_users
wp_usermeta
wp_terms
wp_term_relationships
wp_term_taxonomy
wp_comments
wp_commentmeta
wp_options
wp_links
```

#### Custom Tables for SingBD Features

```sql
-- Partners showcase table
CREATE TABLE `wp_singbd_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo_url` varchar(500) NOT NULL,
  `website_url` varchar(500) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `active` tinyint(1) DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Services table
CREATE TABLE `wp_singbd_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0,
  `active` tinyint(1) DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Enhanced contact form submissions (WordPress version)
CREATE TABLE `wp_singbd_contact_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `status` enum('new','read','replied','archived') NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `priority` enum('low','medium','high','urgent') DEFAULT 'medium',
  `tags` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_email` (`email`),
  KEY `idx_submission_date` (`submission_date`),
  KEY `idx_status` (`status`),
  KEY `idx_assigned_to` (`assigned_to`),
  FOREIGN KEY (`assigned_to`) REFERENCES `wp_users`(`ID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

### Database Security Considerations

#### Security Best Practices
1. **Use Prepared Statements:** Always use PDO prepared statements to prevent SQL injection
2. **Input Validation:** Validate and sanitize all user inputs
3. **Error Handling:** Don't expose database errors to users
4. **Access Control:** Limit database user permissions
5. **Regular Backups:** Implement automated backup procedures
6. **Connection Security:** Use SSL for database connections in production

#### Database User Permissions
```sql
-- Create limited user for website
CREATE USER 'singbd_web'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT SELECT, INSERT, UPDATE ON singbd_website.* TO 'singbd_web'@'localhost';

-- Create admin user for management
CREATE USER 'singbd_admin'@'localhost' IDENTIFIED BY 'very_strong_password_here';
GRANT ALL PRIVILEGES ON singbd_website.* TO 'singbd_admin'@'localhost';
```

### Backup Strategy

#### Automated Backup Script
```bash
#!/bin/bash
# backup_database.sh

DATE=$(date +%Y%m%d_%H%M%S)
DB_NAME="singbd_website"
BACKUP_DIR="/path/to/backups"
RETENTION_DAYS=30

# Create backup
mysqldump -u username -p'password' $DB_NAME > $BACKUP_DIR/singbd_website_$DATE.sql

# Compress backup
gzip $BACKUP_DIR/singbd_website_$DATE.sql

# Remove old backups
find $BACKUP_DIR -name "singbd_website_*.sql.gz" -mtime +$RETENTION_DAYS -delete

echo "Backup completed: singbd_website_$DATE.sql.gz"
```

#### Cron Job Setup
```bash
# Add to crontab for daily backups at 2 AM
0 2 * * * /path/to/backup_database.sh
```

### Performance Optimization

#### Database Indexes
```sql
-- Additional indexes for better performance
CREATE INDEX idx_contact_email_date ON contact_submissions(email, submission_date);
CREATE INDEX idx_contact_status_date ON contact_submissions(status, submission_date);
CREATE INDEX idx_partners_active ON wp_singbd_partners(active, sort_order);
CREATE INDEX idx_services_active ON wp_singbd_services(active, sort_order);
```

#### Query Optimization
- Use LIMIT clauses for pagination
- Implement proper indexing strategy
- Monitor slow queries and optimize
- Use database connection pooling in production

### Migration Notes

#### From Phase 1 to Phase 2
1. **Data Preservation:** Export all contact submissions before WordPress installation
2. **Table Migration:** Import contact submissions into WordPress custom table
3. **URL Structure:** Update any hardcoded database references
4. **Testing:** Verify all data integrity after migration

#### WordPress Integration
1. **Custom Post Types:** Use WordPress custom post types for services and partners
2. **Meta Fields:** Store additional data in WordPress post meta
3. **User Roles:** Create custom user roles for different access levels
4. **API Integration:** Use WordPress REST API for dynamic content
