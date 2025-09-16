<?php
require_once 'config.php';
$page_title = "Products";
$page_description = "Explore SingBD's comprehensive product catalogue including woven tops, coats & jackets, sportswear, knitwear, homeware, handicrafts, and accessories. Premium quality apparel sourcing solutions.";
$page_keywords = "product catalogue, woven tops, coats jackets, sportswear, knitwear, homeware, handicrafts, accessories, apparel products, garment catalogue, textile products, sourcing catalogue";
$canonical_url = $baseUrl . "/products.php";
include 'partials/_header.php';
?>

<main class="main">

    <!-- Product Categories Section -->
    <section class="categories" id="categories">
        <div class="categories__container">
            <h2 class="section__title">Product Categories</h2>
            <p class="section__subtitle">Select a category to explore our complete product collection</p>
            
            <!-- Product Categories Grid -->
            <div class="categories__grid">
                <!-- Row 1 -->
                <a href="<?php echo $baseUrl; ?>/products/woven-tops.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dsrgdb.webp?v=2" alt="Woven Top" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Woven Top</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/woven-bottoms.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Bottom/pg nfv.webp" alt="Woven Bottom" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Woven Bottom</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/coats-jackets.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Coats_&_Jacket/Z5A0203.webp" alt="Coats & Jackets" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Coats & Jackets</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/denim.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/_Z5A0203.webp" alt="Denim" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Denim</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/knitwear.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Knitwear/_Z5A0233.webp" alt="Knitwear" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Knitwear</h3>
                    </div>
                </a>
                
                <!-- Row 2 -->
                <a href="<?php echo $baseUrl; ?>/products/sweater.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/_Z5A0207.webp" alt="Sweater" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Sweater</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/sportswear.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sportswear/dsrgdb.webp" alt="Sportswear" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Sportswear</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/homeware.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Homewear/afav s.webp" alt="Homeware" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Homeware</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/handicrafts.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Handicrafts/3w42.webp" alt="Handicrafts" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Handicrafts</h3>
                    </div>
                </a>
                
                <a href="<?php echo $baseUrl; ?>/products/workwear.php" class="category__card">
                    <div class="category__card-image">
                        <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Workwear/sfef.webp" alt="Workwear" class="category__card-img">
                    </div>
                    <div class="category__card-overlay">
                        <h3 class="category__card-title">Workwear</h3>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Get a Quote Section -->
    <section class="products-quote">
        <div class="products-quote__container">
            <div class="products-quote__content">
                <h2 class="products-quote__title">Ready to Get Started?</h2>
                <p class="products-quote__subtitle">Contact us for custom manufacturing solutions and competitive quotes</p>
                <a href="<?php echo $baseUrl; ?>/contact.php" class="btn btn--primary btn--large">Get a Quote</a>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>