# Backend Architecture
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### 1. Architecture Overview

#### System Architecture
```
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   Client Layer  │    │   Web Server    │    │  Database Layer │
│                 │    │                 │    │                 │
│ - Web Browser   │◄──►│ - Apache 2.4+   │◄──►│ - MySQL 8.0+    │
│ - Mobile Apps   │    │ - PHP 8.0+      │    │ - InnoDB Engine │
│ - Search Bots   │    │ - SSL/TLS       │    │ - UTF8MB4       │
└─────────────────┘    └─────────────────┘    └─────────────────┘
                              │
                              ▼
                       ┌─────────────────┐
                       │  File System    │
                       │                 │
                       │ - Static Assets │
                       │ - Uploads       │
                       │ - Logs          │
                       └─────────────────┘
```

#### Technology Stack
- **Web Server:** Apache HTTP Server 2.4+
- **Backend Language:** PHP 8.0+
- **Database:** MySQL 8.0+ with InnoDB engine
- **Hosting Platform:** cPanel with shared hosting
- **Security:** SSL/TLS encryption, HTTPS enforcement

### 2. Server Architecture

#### Apache Configuration
```apache
# Virtual Host Configuration
<VirtualHost *:80>
    ServerName singbd.com
    ServerAlias www.singbd.com
    DocumentRoot /home/singbd/public_html
    
    # Redirect HTTP to HTTPS
    RewriteEngine On
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
</VirtualHost>

<VirtualHost *:443>
    ServerName singbd.com
    ServerAlias www.singbd.com
    DocumentRoot /home/singbd/public_html
    
    # SSL Configuration
    SSLEngine on
    SSLCertificateFile /path/to/certificate.crt
    SSLCertificateKeyFile /path/to/private.key
    
    # Security Headers
    Header always set X-Content-Type-Options nosniff
    Header always set X-Frame-Options DENY
    Header always set X-XSS-Protection "1; mode=block"
    Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains"
    
    # PHP Configuration
    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>
    
    # Performance Optimization
    <IfModule mod_expires.c>
        ExpiresActive On
        ExpiresByType text/css "access plus 1 year"
        ExpiresByType application/javascript "access plus 1 year"
        ExpiresByType image/png "access plus 1 year"
        ExpiresByType image/jpg "access plus 1 year"
        ExpiresByType image/jpeg "access plus 1 year"
        ExpiresByType image/gif "access plus 1 year"
        ExpiresByType image/webp "access plus 1 year"
    </IfModule>
</VirtualHost>
```

#### PHP Configuration
```ini
; php.ini Configuration
memory_limit = 256M
max_execution_time = 30
upload_max_filesize = 10M
post_max_size = 10M
max_input_vars = 3000

; Error Reporting (Development)
error_reporting = E_ALL
display_errors = On
log_errors = On
error_log = /path/to/error.log

; Security Settings
allow_url_fopen = Off
allow_url_include = Off
expose_php = Off
session.cookie_httponly = 1
session.cookie_secure = 1
session.use_strict_mode = 1

; Performance Settings
opcache.enable = 1
opcache.memory_consumption = 128
opcache.interned_strings_buffer = 8
opcache.max_accelerated_files = 4000
opcache.revalidate_freq = 2
opcache.fast_shutdown = 1
```

### 3. Database Architecture

#### Database Schema Design

##### Core Tables (Phase 1)
```sql
-- Contact Form Submissions
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

-- Site Configuration
CREATE TABLE `site_config` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `config_key` varchar(100) NOT NULL,
    `config_value` text NOT NULL,
    `description` text DEFAULT NULL,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `config_key` (`config_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Admin Users (Simple Authentication)
CREATE TABLE `admin_users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password_hash` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `role` enum('admin','editor') NOT NULL DEFAULT 'editor',
    `last_login` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `is_active` tinyint(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

##### WordPress Tables (Phase 2)
```sql
-- WordPress Core Tables (Auto-generated)
wp_posts
wp_postmeta
wp_users
wp_usermeta
wp_terms
wp_term_relationships
wp_term_taxonomy
wp_comments
wp_commentmeta
wp_options
wp_links

-- Custom Tables for SingBD Features
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

CREATE TABLE `wp_singbd_products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `slug` varchar(255) NOT NULL,
    `category` varchar(100) NOT NULL,
    `description` text NOT NULL,
    `image_url` varchar(500) DEFAULT NULL,
    `specifications` json DEFAULT NULL,
    `sort_order` int(11) DEFAULT 0,
    `active` tinyint(1) DEFAULT 1,
    `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `slug` (`slug`),
    KEY `idx_category` (`category`),
    KEY `idx_active` (`active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

#### Database Connection Management
```php
<?php
// Database connection class
class Database {
    private static $instance = null;
    private $pdo;
    
    private function __construct() {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
        ];
        
        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw new Exception("Database connection failed");
        }
    }
    
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->pdo;
    }
    
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
}
?>
```

### 4. Application Architecture

#### Directory Structure
```
singbd-static-site/
├── index.php                 # Homepage
├── about.php                 # About page
├── products.php              # Products page
├── contact.php               # Contact page
├── privacy.php               # Privacy policy
├── terms.php                 # Terms of service
├── includes/                 # PHP includes
│   ├── config.php            # Configuration
│   ├── database.php          # Database connection
│   ├── functions.php         # Common functions
│   ├── auth.php              # Authentication
│   ├── header.php            # Common header
│   ├── footer.php            # Common footer
│   └── nav.php               # Navigation
├── admin/                    # Admin panel
│   ├── index.php             # Admin dashboard
│   ├── login.php             # Admin login
│   ├── submissions.php       # Contact submissions
│   └── config.php            # Site configuration
├── api/                      # API endpoints
│   ├── contact.php           # Contact form API
│   ├── products.php          # Products API
│   └── auth.php              # Authentication API
├── assets/                   # Static assets
│   ├── css/                  # Stylesheets
│   ├── js/                   # JavaScript
│   ├── images/               # Images
│   └── fonts/                # Fonts
├── uploads/                  # User uploads
├── logs/                     # Application logs
└── cache/                    # Cache files
```

#### Configuration Management
```php
<?php
// config.php - Central configuration
define('ENVIRONMENT', $_SERVER['HTTP_HOST'] === 'localhost' ? 'development' : 'production');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'singbd_website');
define('DB_USER', 'singbd_user');
define('DB_PASS', 'secure_password_here');
define('DB_CHARSET', 'utf8mb4');

// Site Configuration
define('SITE_NAME', 'SingBD');
define('SITE_URL', 'https://singbd.com');
define('SITE_EMAIL', 'info@singbd.com');
define('ADMIN_EMAIL', 'admin@singbd.com');

// Security Configuration
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_NAME', 'singbd_session');
define('PASSWORD_COST', 12);

// File Upload Configuration
define('MAX_FILE_SIZE', 10 * 1024 * 1024); // 10MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('UPLOAD_PATH', __DIR__ . '/../uploads/');

// Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'noreply@singbd.com');
define('SMTP_PASS', 'email_password_here');

// Environment-specific settings
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    define('DEBUG', true);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
    define('DEBUG', false);
}
?>
```

### 5. Security Architecture

#### Authentication System
```php
<?php
// auth.php - Authentication management
class Auth {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
        $this->initSession();
    }
    
    private function initSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_name(SESSION_NAME);
            session_start();
        }
    }
    
    public function login($username, $password) {
        $sql = "SELECT id, username, password_hash, role FROM admin_users WHERE username = ? AND is_active = 1";
        $stmt = $this->db->query($sql, [$username]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password_hash'])) {
            // Update last login
            $this->db->query("UPDATE admin_users SET last_login = NOW() WHERE id = ?", [$user['id']]);
            
            // Set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['logged_in'] = true;
            
            return true;
        }
        return false;
    }
    
    public function logout() {
        session_destroy();
        return true;
    }
    
    public function isLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }
    
    public function requireAuth() {
        if (!$this->isLoggedIn()) {
            header('Location: /admin/login.php');
            exit;
        }
    }
    
    public function generateCSRFToken() {
        if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
            $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
        }
        return $_SESSION[CSRF_TOKEN_NAME];
    }
    
    public function validateCSRFToken($token) {
        return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
    }
}
?>
```

#### Input Validation and Sanitization
```php
<?php
// functions.php - Input validation functions
class InputValidator {
    
    public static function sanitizeString($input) {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
    
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    public static function validatePhone($phone) {
        // Basic phone validation
        return preg_match('/^[\+]?[1-9][\d]{0,15}$/', $phone);
    }
    
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
        
        $allowedMimes = [
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp'
        ];
        
        return in_array($mimeType, array_values($allowedMimes));
    }
    
    public static function rateLimit($key, $maxAttempts, $timeWindow) {
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        
        $current = $redis->get($key);
        if ($current === false) {
            $redis->setex($key, $timeWindow, 1);
            return true;
        }
        
        if ($current >= $maxAttempts) {
            return false;
        }
        
        $redis->incr($key);
        return true;
    }
}
?>
```

### 6. API Architecture

#### RESTful API Design
```php
<?php
// api/contact.php - Contact form API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../includes/config.php';
require_once '../includes/database.php';
require_once '../includes/functions.php';

class ContactAPI {
    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance();
    }
    
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['error' => 'Method not allowed']);
            return;
        }
        
        $input = json_decode(file_get_contents('php://input'), true);
        
        if (!$input) {
            http_response_code(400);
            echo json_encode(['error' => 'Invalid JSON']);
            return;
        }
        
        $result = $this->processContactForm($input);
        echo json_encode($result);
    }
    
    private function processContactForm($data) {
        // Rate limiting
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!InputValidator::rateLimit("contact_form:$ip", 5, 3600)) {
            return ['success' => false, 'message' => 'Too many requests. Please try again later.'];
        }
        
        // Validation
        $errors = [];
        
        if (empty($data['fullname'])) {
            $errors[] = 'Full name is required';
        }
        
        if (empty($data['email']) || !InputValidator::validateEmail($data['email'])) {
            $errors[] = 'Valid email is required';
        }
        
        if (empty($data['message'])) {
            $errors[] = 'Message is required';
        }
        
        if (!empty($errors)) {
            return ['success' => false, 'message' => implode(', ', $errors)];
        }
        
        // Sanitization
        $fullname = InputValidator::sanitizeString($data['fullname']);
        $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
        $phone = isset($data['phone']) ? InputValidator::sanitizeString($data['phone']) : null;
        $company = isset($data['company']) ? InputValidator::sanitizeString($data['company']) : null;
        $subject = isset($data['subject']) ? InputValidator::sanitizeString($data['subject']) : null;
        $message = InputValidator::sanitizeString($data['message']);
        
        // Database insertion
        try {
            $sql = "INSERT INTO contact_submissions (fullname, email, phone, company, subject, message, ip_address, user_agent) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            
            $this->db->query($sql, [
                $fullname, $email, $phone, $company, $subject, $message,
                $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']
            ]);
            
            // Send email notification
            $this->sendEmailNotification($data);
            
            return ['success' => true, 'message' => 'Thank you for your message. We will get back to you soon.'];
            
        } catch (Exception $e) {
            error_log("Contact form error: " . $e->getMessage());
            return ['success' => false, 'message' => 'An error occurred. Please try again later.'];
        }
    }
    
    private function sendEmailNotification($data) {
        $to = ADMIN_EMAIL;
        $subject = "New Contact Form Submission - " . SITE_NAME;
        
        $message = "New contact form submission received:\n\n";
        $message .= "Name: " . $data['fullname'] . "\n";
        $message .= "Email: " . $data['email'] . "\n";
        $message .= "Phone: " . ($data['phone'] ?? 'Not provided') . "\n";
        $message .= "Company: " . ($data['company'] ?? 'Not provided') . "\n";
        $message .= "Subject: " . ($data['subject'] ?? 'Not provided') . "\n";
        $message .= "Message: " . $data['message'] . "\n";
        
        $headers = "From: " . SITE_EMAIL . "\r\n";
        $headers .= "Reply-To: " . $data['email'] . "\r\n";
        
        mail($to, $subject, $message, $headers);
    }
}

// Handle API request
$api = new ContactAPI();
$api->handleRequest();
?>
```

### 7. Caching Strategy

#### File-based Caching
```php
<?php
// cache.php - Caching system
class Cache {
    private $cacheDir;
    private $defaultTTL;
    
    public function __construct($cacheDir = '../cache/', $defaultTTL = 3600) {
        $this->cacheDir = $cacheDir;
        $this->defaultTTL = $defaultTTL;
        
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true);
        }
    }
    
    public function get($key) {
        $filename = $this->getCacheFilename($key);
        
        if (!file_exists($filename)) {
            return false;
        }
        
        $data = unserialize(file_get_contents($filename));
        
        if ($data['expires'] < time()) {
            unlink($filename);
            return false;
        }
        
        return $data['value'];
    }
    
    public function set($key, $value, $ttl = null) {
        $filename = $this->getCacheFilename($key);
        $ttl = $ttl ?: $this->defaultTTL;
        
        $data = [
            'value' => $value,
            'expires' => time() + $ttl
        ];
        
        return file_put_contents($filename, serialize($data)) !== false;
    }
    
    public function delete($key) {
        $filename = $this->getCacheFilename($key);
        return file_exists($filename) ? unlink($filename) : true;
    }
    
    public function clear() {
        $files = glob($this->cacheDir . '*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
        return true;
    }
    
    private function getCacheFilename($key) {
        return $this->cacheDir . md5($key) . '.cache';
    }
}
?>
```

### 8. Error Handling and Logging

#### Error Management System
```php
<?php
// error_handler.php - Error handling and logging
class ErrorHandler {
    private $logFile;
    
    public function __construct($logFile = '../logs/error.log') {
        $this->logFile = $logFile;
        $this->setupErrorHandling();
    }
    
    private function setupErrorHandling() {
        set_error_handler([$this, 'handleError']);
        set_exception_handler([$this, 'handleException']);
        register_shutdown_function([$this, 'handleFatalError']);
    }
    
    public function handleError($errno, $errstr, $errfile, $errline) {
        if (!(error_reporting() & $errno)) {
            return false;
        }
        
        $error = [
            'type' => 'Error',
            'message' => $errstr,
            'file' => $errfile,
            'line' => $errline,
            'timestamp' => date('Y-m-d H:i:s'),
            'url' => $_SERVER['REQUEST_URI'] ?? 'Unknown'
        ];
        
        $this->logError($error);
        
        if (ENVIRONMENT === 'development') {
            echo "<h2>Error</h2>";
            echo "<p><strong>Message:</strong> {$error['message']}</p>";
            echo "<p><strong>File:</strong> {$error['file']}:{$error['line']}</p>";
        }
        
        return true;
    }
    
    public function handleException($exception) {
        $error = [
            'type' => 'Exception',
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString(),
            'timestamp' => date('Y-m-d H:i:s'),
            'url' => $_SERVER['REQUEST_URI'] ?? 'Unknown'
        ];
        
        $this->logError($error);
        
        if (ENVIRONMENT === 'development') {
            echo "<h2>Exception</h2>";
            echo "<p><strong>Message:</strong> {$error['message']}</p>";
            echo "<p><strong>File:</strong> {$error['file']}:{$error['line']}</p>";
            echo "<pre>{$error['trace']}</pre>";
        } else {
            http_response_code(500);
            echo "An error occurred. Please try again later.";
        }
    }
    
    public function handleFatalError() {
        $error = error_get_last();
        
        if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
            $this->handleError($error['type'], $error['message'], $error['file'], $error['line']);
        }
    }
    
    private function logError($error) {
        $logEntry = sprintf(
            "[%s] %s: %s in %s on line %d\nURL: %s\n%s\n",
            $error['timestamp'],
            $error['type'],
            $error['message'],
            $error['file'],
            $error['line'],
            $error['url'],
            isset($error['trace']) ? "Stack trace:\n{$error['trace']}\n" : '',
            str_repeat('-', 80) . "\n"
        );
        
        file_put_contents($this->logFile, $logEntry, FILE_APPEND | LOCK_EX);
    }
}

// Initialize error handling
new ErrorHandler();
?>
```

### 9. Performance Optimization

#### Database Optimization
```sql
-- Database indexes for performance
CREATE INDEX idx_contact_email_date ON contact_submissions(email, submission_date);
CREATE INDEX idx_contact_status_date ON contact_submissions(status, submission_date);
CREATE INDEX idx_products_category_active ON wp_singbd_products(category, active);
CREATE INDEX idx_products_slug ON wp_singbd_products(slug);

-- Query optimization examples
-- Use LIMIT for pagination
SELECT * FROM contact_submissions ORDER BY submission_date DESC LIMIT 20 OFFSET 0;

-- Use prepared statements for security and performance
SELECT * FROM wp_singbd_products WHERE category = ? AND active = 1 ORDER BY sort_order;

-- Use COUNT(*) for efficient counting
SELECT COUNT(*) as total FROM contact_submissions WHERE status = 'new';
```

#### Caching Implementation
```php
<?php
// Performance optimization with caching
class ProductService {
    private $db;
    private $cache;
    
    public function __construct() {
        $this->db = Database::getInstance();
        $this->cache = new Cache();
    }
    
    public function getProducts($category = null) {
        $cacheKey = "products_" . ($category ?: 'all');
        
        // Try to get from cache first
        $cached = $this->cache->get($cacheKey);
        if ($cached !== false) {
            return $cached;
        }
        
        // Query database
        $sql = "SELECT * FROM wp_singbd_products WHERE active = 1";
        $params = [];
        
        if ($category) {
            $sql .= " AND category = ?";
            $params[] = $category;
        }
        
        $sql .= " ORDER BY sort_order, title";
        
        $stmt = $this->db->query($sql, $params);
        $products = $stmt->fetchAll();
        
        // Cache for 1 hour
        $this->cache->set($cacheKey, $products, 3600);
        
        return $products;
    }
    
    public function getProductBySlug($slug) {
        $cacheKey = "product_" . $slug;
        
        $cached = $this->cache->get($cacheKey);
        if ($cached !== false) {
            return $cached;
        }
        
        $sql = "SELECT * FROM wp_singbd_products WHERE slug = ? AND active = 1";
        $stmt = $this->db->query($sql, [$slug]);
        $product = $stmt->fetch();
        
        if ($product) {
            $this->cache->set($cacheKey, $product, 3600);
        }
        
        return $product;
    }
}
?>
```

### 10. Monitoring and Maintenance

#### Health Check System
```php
<?php
// health_check.php - System health monitoring
class HealthCheck {
    private $db;
    private $results = [];
    
    public function __construct() {
        $this->db = Database::getInstance();
    }
    
    public function runChecks() {
        $this->checkDatabase();
        $this->checkDiskSpace();
        $this->checkFilePermissions();
        $this->checkErrorLogs();
        
        return $this->results;
    }
    
    private function checkDatabase() {
        try {
            $stmt = $this->db->query("SELECT 1");
            $this->results['database'] = ['status' => 'OK', 'message' => 'Database connection successful'];
        } catch (Exception $e) {
            $this->results['database'] = ['status' => 'ERROR', 'message' => $e->getMessage()];
        }
    }
    
    private function checkDiskSpace() {
        $freeSpace = disk_free_space('/');
        $totalSpace = disk_total_space('/');
        $usedPercentage = (($totalSpace - $freeSpace) / $totalSpace) * 100;
        
        if ($usedPercentage > 90) {
            $this->results['disk_space'] = ['status' => 'WARNING', 'message' => "Disk usage: {$usedPercentage}%"];
        } else {
            $this->results['disk_space'] = ['status' => 'OK', 'message' => "Disk usage: {$usedPercentage}%"];
        }
    }
    
    private function checkFilePermissions() {
        $criticalFiles = [
            '../logs/error.log' => 'writable',
            '../cache/' => 'writable',
            '../uploads/' => 'writable'
        ];
        
        foreach ($criticalFiles as $file => $requirement) {
            if ($requirement === 'writable' && !is_writable($file)) {
                $this->results['permissions'][$file] = ['status' => 'ERROR', 'message' => 'Not writable'];
            } else {
                $this->results['permissions'][$file] = ['status' => 'OK', 'message' => 'Permissions correct'];
            }
        }
    }
    
    private function checkErrorLogs() {
        $logFile = '../logs/error.log';
        if (file_exists($logFile)) {
            $lastModified = filemtime($logFile);
            $hoursSinceLastError = (time() - $lastModified) / 3600;
            
            if ($hoursSinceLastError < 1) {
                $this->results['error_logs'] = ['status' => 'WARNING', 'message' => 'Recent errors detected'];
            } else {
                $this->results['error_logs'] = ['status' => 'OK', 'message' => 'No recent errors'];
            }
        }
    }
}

// Run health check (for admin panel or monitoring)
if (isset($_GET['health_check'])) {
    $health = new HealthCheck();
    $results = $health->runChecks();
    header('Content-Type: application/json');
    echo json_encode($results);
}
?>
```

This backend architecture provides a robust, secure, and scalable foundation for the SingBD website migration, ensuring optimal performance and maintainability throughout the development process and beyond.
