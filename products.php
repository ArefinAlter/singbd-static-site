<?php
require_once 'config.php';
$page_title = "Products";
$page_description = "Explore SingBD's comprehensive product catalogue including woven tops, coats & jackets, sportswear, knitwear, homeware, handicrafts, and accessories. Premium quality apparel sourcing solutions.";
$page_keywords = "product catalogue, woven tops, coats jackets, sportswear, knitwear, homeware, handicrafts, accessories, apparel products, garment catalogue, textile products, sourcing catalogue";
$canonical_url = $baseUrl . "/products.php";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="breadcrumbs__container">
            <ol class="breadcrumbs__nav">
                <li><a href="<?php echo $baseUrl; ?>/" class="breadcrumbs__link">Home</a></li>
                <li><span class="breadcrumbs__separator">/</span></li>
                <li><span class="breadcrumbs__current">Products</span></li>
            </ol>
        </div>
    </nav>

    <!-- Top Section - Two Column Layout -->
    <section class="products-hero">
        <div class="products-hero__container">
            <!-- Left Column - Category Selection (2 rows, 5 categories each) -->
            <div class="products-hero__categories">
                <h2 class="products-hero__title">Product Categories</h2>
                <p class="products-hero__subtitle">Select a category to explore our products</p>
                
                <div class="products-hero__category-grid">
                    <!-- Row 1 -->
                    <div class="products-hero__category-row">
                        <button class="products-hero__category-tab products-hero__category-tab--active" data-category="woven-tops">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Woven Tops.webp" alt="Woven Tops">
                            </div>
                            <h3 class="products-hero__category-tab-title">Woven Tops</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="woven-bottoms">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Woven Bottoms.webp" alt="Woven Bottoms">
                            </div>
                            <h3 class="products-hero__category-tab-title">Woven Bottoms</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="coats-jackets">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Coats & Jackets.webp" alt="Coats & Jackets">
                            </div>
                            <h3 class="products-hero__category-tab-title">Coats & Jackets</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="denim">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Denim.webp" alt="Denim">
                            </div>
                            <h3 class="products-hero__category-tab-title">Denim</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="knitwear">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Knit Wear.webp" alt="Knitwear">
                            </div>
                            <h3 class="products-hero__category-tab-title">Knitwear</h3>
                        </button>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="products-hero__category-row">
                        <button class="products-hero__category-tab" data-category="sweater">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Accessories.webp" alt="Sweater">
                            </div>
                            <h3 class="products-hero__category-tab-title">Sweater</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="sportswear">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Sports Wear.webp" alt="Sportswear">
                            </div>
                            <h3 class="products-hero__category-tab-title">Sportswear</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="homeware">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Home Wear.webp" alt="Homeware">
                            </div>
                            <h3 class="products-hero__category-tab-title">Homeware</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="handicrafts">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Handicraft.webp" alt="Handicrafts">
                            </div>
                            <h3 class="products-hero__category-tab-title">Handicrafts</h3>
                        </button>
                        
                        <button class="products-hero__category-tab" data-category="workwear">
                            <div class="products-hero__category-tab-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Work Wear.webp" alt="Workwear">
                            </div>
                            <h3 class="products-hero__category-tab-title">Workwear</h3>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Category Overview Photo -->
            <div class="products-hero__overview">
                <h3 class="products-hero__overview-title">Category Overview</h3>
                <div class="products-hero__overview-photo">
                    <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dsrgdb.webp" alt="Woven Tops Overview" class="products-hero__overview-photo-image" id="category-overview-photo">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Listings Section -->
    <section class="product-listings">
        <div class="product-listings__container">
            <h2 class="section__title">Product Listings</h2>
            <p class="section__subtitle">Explore our complete collection of premium products</p>
            
            <!-- Woven Tops Products -->
            <div class="product-category product-category--active" id="woven-tops-products">
                <h3 class="product-category__title">Woven Tops Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Shirts.webp" alt="Shirts" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Premium Shirts</h4>
                            <p class="product-item__description">High-quality woven shirts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Parka.webp" alt="Parka" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Stylish Parka</h4>
                            <p class="product-item__description">Modern parka design</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt.webp" alt="Men's Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Men's Shirt</h4>
                            <p class="product-item__description">Classic men's woven shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Jacket.webp" alt="Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Jacket</h4>
                            <p class="product-item__description">Elegant woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Kids' Top.webp" alt="Kids' Top" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Kids' Top</h4>
                            <p class="product-item__description">Comfortable kids' woven top</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/109.webp" alt="Woven Top 109" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Top 109</h4>
                            <p class="product-item__description">Premium woven top design</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Coats & Jackets Products -->
            <div class="product-category" id="coats-jackets-products">
                <h3 class="product-category__title">Coats & Jackets Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Quilted Parker.webp" alt="Quilted Parker" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted Parker</h4>
                            <p class="product-item__description">Premium quilted parker jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Quilted Bomber.webp" alt="Quilted Bomber" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted Bomber</h4>
                            <p class="product-item__description">Stylish bomber jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Puffer Jacket.webp" alt="Puffer Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Puffer Jacket</h4>
                            <p class="product-item__description">Warm and comfortable puffer</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Ladies Jacket.webp" alt="Ladies Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Jacket</h4>
                            <p class="product-item__description">Elegant ladies' jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Hunter Jacket.webp" alt="Hunter Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Hunter Jacket</h4>
                            <p class="product-item__description">Durable hunting jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Fleece Jacket.webp" alt="Fleece Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fleece Jacket</h4>
                            <p class="product-item__description">Soft and warm fleece</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sportswear Products -->
            <div class="product-category" id="sportswear-products">
                <h3 class="product-category__title">Sportswear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Windbreaker.webp" alt="Windbreaker" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Windbreaker</h4>
                            <p class="product-item__description">Lightweight wind protection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Swim Short.webp" alt="Swim Short" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Swim Short</h4>
                            <p class="product-item__description">Comfortable swimwear</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Ski Jacket.webp" alt="Ski Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ski Jacket</h4>
                            <p class="product-item__description">Warm ski protection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Ski Pant.webp" alt="Ski Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ski Pant</h4>
                            <p class="product-item__description">Comfortable ski pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Padded Ski Suit.webp" alt="Padded Ski Suit" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Ski Suit</h4>
                            <p class="product-item__description">Warm padded ski suit</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Woven Bottoms Products -->
            <div class="product-category" id="woven-bottoms-products">
                <h3 class="product-category__title">Woven Bottoms Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Woven_Bottoms1.jpg" alt="Woven Bottom 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Classic Woven Bottom</h4>
                            <p class="product-item__description">Premium quality woven fabric</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Woven_Bottoms2.jpg" alt="Woven Bottom 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Modern Woven Bottom</h4>
                            <p class="product-item__description">Contemporary woven design</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Knitwear Products -->
            <div class="product-category" id="knitwear-products">
                <h3 class="product-category__title">Knitwear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knitwear1.jpg" alt="Knitwear 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Premium Knitwear</h4>
                            <p class="product-item__description">High-quality knit garments</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knitwear2.jpg" alt="Knitwear 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Comfortable Knitwear</h4>
                            <p class="product-item__description">Soft and cozy knit pieces</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Homeware Products -->
            <div class="product-category" id="homeware-products">
                <h3 class="product-category__title">Homeware Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Homewear1.jpg" alt="Homeware 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Premium Homeware</h4>
                            <p class="product-item__description">High-quality home textiles</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Homewear2.jpg" alt="Homeware 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Elegant Homeware</h4>
                            <p class="product-item__description">Beautiful home accessories</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Handicrafts Products -->
            <div class="product-category" id="handicrafts-products">
                <h3 class="product-category__title">Handicrafts Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Handicrafts1.jpg" alt="Handicraft 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Artisan Handicraft</h4>
                            <p class="product-item__description">Handcrafted with care</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Handicrafts2.jpg" alt="Handicraft 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Traditional Handicraft</h4>
                            <p class="product-item__description">Heritage craftsmanship</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Denim Products -->
            <div class="product-category" id="denim-products">
                <h3 class="product-category__title">Denim Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Denim Jacket.webp" alt="Denim Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Denim Jacket</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Denim Shirt.webp" alt="Denim Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Denim Shirt</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sweater Products -->
            <div class="product-category" id="sweater-products">
                <h3 class="product-category__title">Sweater Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/_Z5A0207.webp" alt="Sweater 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">_Z5A0207</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/_Z5A0724.webp" alt="Sweater 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">_Z5A0724</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/111.webp" alt="Sweater 3" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">111</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/bfb dbdxfb.webp" alt="Sweater 4" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">bfb dbdxfb</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/fb dndb.webp" alt="Sweater 5" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">fb dndb</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/Our Collection.webp" alt="Sweater 6" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Our Collection</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Workwear Products -->
            <div class="product-category" id="workwear-products">
                <h3 class="product-category__title">Workwear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Work Wear 1.webp" alt="Work Wear 1" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Work Wear 1</h4>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Work Wear 2.webp" alt="Work Wear 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Work Wear 2</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Two Overview Photos Section -->
    <section class="products-overview-photos">
        <div class="products-overview-photos__container">
            <h2 class="section__title">Category Overview</h2>
            <p class="section__subtitle">Additional insights into our manufacturing process</p>
            
            <div class="products-overview-photos__grid">
                <div class="products-overview-photos__photo" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dr bdxf.webp" alt="Manufacturing Process 1" class="products-overview-photos__image" id="overview-photo-1">
                </div>
                
                <div class="products-overview-photos__photo" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/bfb dbdxfb.webp" alt="Manufacturing Process 2" class="products-overview-photos__image" id="overview-photo-2">
                </div>
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
