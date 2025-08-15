<?php
// Include configuration
require_once __DIR__ . '/../config.php';

// Set content type to CSS
header('Content-Type: text/css');

// Get the base URL for images
$imageBaseUrl = $baseUrl . '/images';
?>

/* Dynamic CSS with PHP variables */
.hero__background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #ffffff !important;
    opacity: 1;
}

/* Fallback if hero background image doesn't exist */
.hero__background {
    background: #ffffff !important;
    opacity: 1;
}
