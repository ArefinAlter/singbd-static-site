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
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'SingBD - Leading manufacturer of high-quality garments and textiles. Connect with global brands and premium manufacturers worldwide for apparel sourcing solutions.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'garments, textiles, manufacturing, Bangladesh, sustainable fashion, apparel sourcing, knitwear, woven garments, outerwear, functional apparel, homeware, accessories, handicrafts'; ?>">
    <meta name="author" content="SingBD">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo isset($canonical_url) ? $canonical_url : $baseUrl . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - SingBD' : 'SingBD - Quality Garments & Textiles'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Leading manufacturer of high-quality garments and textiles. Connect with global brands and premium manufacturers worldwide.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($canonical_url) ? $canonical_url : $baseUrl . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/'); ?>">
    <meta property="og:image" content="<?php echo $baseUrl; ?>/images/Logo/SingBD logo Final.svg">
    <meta property="og:site_name" content="SingBD">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - SingBD' : 'SingBD - Quality Garments & Textiles'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Leading manufacturer of high-quality garments and textiles. Connect with global brands and premium manufacturers worldwide.'; ?>">
    <meta name="twitter:image" content="<?php echo $baseUrl; ?>/images/Logo/SingBD logo Final.svg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $baseUrl; ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $baseUrl; ?>/images/apple-touch-icon.png">
    
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
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX', {
            'page_title': '<?php echo isset($page_title) ? $page_title : "Home"; ?>',
            'page_location': window.location.href
        });
    </script>
    
    <title><?php echo isset($page_title) ? $page_title . ' - SingBD' : 'SingBD - Quality Garments & Textiles'; ?></title>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "SingBD",
        "url": "<?php echo $baseUrl; ?>",
        "logo": "<?php echo $baseUrl; ?>/images/Logo/SingBD logo Final.svg",
        "description": "Leading manufacturer of high-quality garments and textiles. Connect with global brands and premium manufacturers worldwide for apparel sourcing solutions.",
        "foundingDate": "2014",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "100 Jln Sultan",
            "addressLocality": "Singapore",
            "postalCode": "199001",
            "addressCountry": "SG"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+65-1234-5678",
            "contactType": "customer service",
            "email": "info@singbd.com"
        },
        "sameAs": [
            "https://www.linkedin.com/company/singbd",
            "https://www.facebook.com/singbd"
        ]
    }
    </script>
</head>
<body class="<?php echo isset($page_title) ? strtolower(str_replace(' ', '-', $page_title)) . '-page' : 'home-page'; ?>">
    <!-- Header Navigation -->
    <header class="header">
        <nav class="nav">
            <div class="nav__container">
                <div class="nav__logo">
                    <a href="<?php echo $baseUrl; ?>/" class="nav__logo-link">
                        <img src="<?php echo $baseUrl; ?>/images/Logo/SingBD logo Final.svg" alt="SingBD Logo" class="nav__logo-img">
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
                        <a href="<?php echo $baseUrl; ?>/sustainability.php" class="nav__link">Sustainability</a>
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
