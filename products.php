<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - SingBD</title>
    <meta name="description" content="Explore our comprehensive range of high-quality products including woven tops, coats & jackets, sportswear, and more.">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <?php include 'partials/_header.php'; ?>
</head>
<body>

    <div class="page-content">
        <!-- Product Catalogue Section -->
    <section class="product-catalogue" id="product-catalogue">
        <div class="product-catalogue__container">
            <div class="product-catalogue__header">
                <h2 class="section__title" data-aos="fade-up">Product Catalogue</h2>
                <p class="section__subtitle" data-aos="fade-up" data-aos-delay="100">Browse our complete collection of premium products</p>
                <div class="product-catalogue__actions" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?php echo $baseUrl; ?>/contact.php" class="product-catalogue__cta">
                        Get a Quote
                        <svg class="product-catalogue__cta-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Two Column Layout -->
            <div class="products-layout">
                <!-- Left Column - Category Cards -->
                <div class="products-sidebar">
                    <div class="products-categories">
                        <div class="products-category__item products-category__item--active" data-category="woven-tops">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Woven_Tops.svg" alt="Woven Tops" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Woven Tops</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="coats-jackets">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Coats_Jackets.svg" alt="Coats & Jackets" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Coats & Jackets</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="sportswear">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Sportswear.svg" alt="Sportswear" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Sportswear</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="woven-bottoms">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms.svg" alt="Woven Bottoms" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Woven Bottoms</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="knitwear">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Knitwear.svg" alt="Knitwear" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Knitwear</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="homeware">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Homewear.svg" alt="Homeware" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Homeware</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="handicrafts">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Handicraft.svg" alt="Handicrafts" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Handicrafts</h3>
                        </div>
                        
                        <div class="products-category__item" data-category="accessories">
                            <div class="products-category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Accessories.svg" alt="Accessories" class="products-category__icon-img">
                            </div>
                            <h3 class="products-category__title">Accessories</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Product Display -->
                <div class="products-main">
                    <!-- Large Product Display -->
                    <div class="product-display">
                        <div class="product-display__breadcrumbs" id="main-product-breadcrumbs">
                            <span class="product-display__breadcrumb">Products</span>
                            <span class="product-display__breadcrumb-separator">/</span>
                            <span class="product-display__breadcrumb" id="main-product-category-breadcrumb">Woven Tops</span>
                            <span class="product-display__breadcrumb-separator">/</span>
                            <span class="product-display__breadcrumb" id="main-product-title-breadcrumb">Premium Cotton Shirt</span>
                        </div>
                        <div class="product-display__content">
                            <div class="product-display__image">
                                <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Product Display" class="product-display__img" id="main-product-image">
                            </div>
                            <div class="product-display__info">
                                <h2 class="product-display__title" id="main-product-title">Premium Cotton Shirt</h2>
                                <p class="product-display__description" id="main-product-description">High-quality cotton shirt with modern fit and comfortable design. Perfect for both casual and professional settings.</p>
                                <div class="product-display__meta">
                                    <span class="product-display__category" id="main-product-category">Woven Tops</span>
                                    <span class="product-display__code" id="main-product-code">WT-001</span>
                                </div>
                                <div class="product-display__features">
                                    <div class="product-display__feature">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4"/>
                                        </svg>
                                        <span>Premium cotton fabric</span>
                                    </div>
                                    <div class="product-display__feature">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4"/>
                                        </svg>
                                        <span>Modern fit design</span>
                                    </div>
                                    <div class="product-display__feature">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M9 12l2 2 4-4"/>
                                        </svg>
                                        <span>Easy care maintenance</span>
                                    </div>
                                </div>
                                <a href="<?php echo $baseUrl; ?>/contact.php" class="product-display__cta">
                                    Get Quote
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Grid -->
                    <div class="products-grid" id="products-grid">
                        <!-- Products will be loaded here dynamically -->
                    </div>
                </div>
            </div>



        </div>
    </section>
    </div>

    <?php include 'partials/_footer.php'; ?>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
