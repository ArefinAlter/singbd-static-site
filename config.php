<?php
/**
 * SingBD Website Configuration
 * Central configuration file for the website
 */

// Base URL for the project (auto-detect environment)
if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['HTTP_HOST'] === '127.0.0.1') {
    // Local development
    $baseUrl = "/singbd-static-site";
} else {
    // Production (auto-detect domain)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $baseUrl = $protocol . '://' . $host;
}

// Site settings
$site_title = "SingBD - Quality Garments & Textiles";
$site_description = "Leading manufacturer of high-quality garments and textiles";

// Contact information
$contact_email = "info@singbd.com";
$contact_phone = "+880 1234 567890";
$contact_address = "Dhaka, Bangladesh";

// Database configuration
$db_host = 'localhost';
$db_name = 'singbd_website';
$db_user = 'root';
$db_pass = '';

// Email configuration
$admin_email = 'info@singbd.com';
$from_email = 'noreply@singbd.com';
$from_name = 'SingBD Website';

// Social media links
$social_facebook = '';
$social_twitter = '';
$social_linkedin = '';
$social_instagram = '';

// WhatsApp number
$whatsapp_number = '8801234567890';

// Development mode (set to false in production)
$dev_mode = true;

// Error reporting (only in development)
if ($dev_mode) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>

