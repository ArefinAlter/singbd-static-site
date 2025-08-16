<?php 
// Include configuration
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="SingBD - Leading manufacturer of high-quality garments and textiles">
    <meta name="keywords" content="garments, textiles, manufacturing, Bangladesh, sustainable fashion">
    <meta name="author" content="SingBD">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="SingBD - Quality Garments & Textiles">
    <meta property="og:description" content="Leading manufacturer of high-quality garments and textiles">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://singbd.com">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/dynamic-style.php">
    
    <!-- D3.js and TopoJSON -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://unpkg.com/topojson-client@3"></script>
    
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <title><?php echo isset($page_title) ? $page_title . ' - SingBD' : 'SingBD - Quality Garments & Textiles'; ?></title>
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <nav class="nav">
            <div class="nav__container">
                <div class="nav__logo">
                    <a href="<?php echo $baseUrl; ?>/" class="nav__logo-link">
                        <img src="<?php echo $baseUrl; ?>/images/SingBD-logo-Final-01.png" alt="SingBD Logo" class="nav__logo-img">
                    </a>
                </div>
                
                <ul class="nav__menu">
                    <li class="nav__item">
                        <a href="<?php echo $baseUrl; ?>/" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo $baseUrl; ?>/products.php" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo $baseUrl; ?>/about.php" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo $baseUrl; ?>/contact.php" class="nav__link">Contact</a>
                    </li>
                </ul>
                
                <div class="nav__mobile-toggle">
                    <span class="nav__mobile-icon"></span>
                    <span class="nav__mobile-icon"></span>
                    <span class="nav__mobile-icon"></span>
                </div>
            </div>
        </nav>
    </header>
