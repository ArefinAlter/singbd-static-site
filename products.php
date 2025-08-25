<?php
require_once 'config.php';
$page_title = "Products";
$page_description = "Explore SingBD's comprehensive product catalogue including woven tops, coats & jackets, sportswear, knitwear, homeware, handicrafts, and accessories. Premium quality apparel sourcing solutions.";
$page_keywords = "product catalogue, woven tops, coats jackets, sportswear, knitwear, homeware, handicrafts, accessories, apparel products, garment catalogue, textile products, sourcing catalogue";
$canonical_url = $baseUrl . "/products.php";
include 'partials/_header.php';
?>
<body>

    <div class="page-content products-page">
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

            <!-- Top Section: Categories and Cover Photo -->
            <div class="products-top-section">
                <!-- Left Column - Categories -->
                <div class="products-categories-panel">
                    <div class="products-categories-list">
                        <div class="products-category-tab products-category-tab--active" data-category="woven-tops">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Woven_Tops.svg" alt="Woven Tops" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Woven Tops</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="coats-jackets">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Coats_Jackets.svg" alt="Coats & Jackets" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Coats & Jackets</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="sportswear">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Sportswear.svg" alt="Sportswear" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Sportswear</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="woven-bottoms">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Woven_Bottoms.svg" alt="Woven Bottoms" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Woven Bottoms</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="knitwear">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Knitwear.svg" alt="Knitwear" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Knitwear</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="homeware">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Homewear.svg" alt="Homeware" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Homeware</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="handicrafts">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Handicraft.svg" alt="Handicrafts" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Handicrafts</h3>
                        </div>
                        
                        <div class="products-category-tab" data-category="accessories">
                            <div class="products-category-tab__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Accessories.svg" alt="Accessories" class="products-category-tab__icon-img">
                            </div>
                            <h3 class="products-category-tab__title">Accessories</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Cover Photo -->
                <div class="products-cover-photo">
                    <div class="products-cover-photo__container">
                        <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Woven Tops Cover" class="products-cover-photo__image" id="category-cover-image">
                        <div class="products-cover-photo__overlay">
                            <h3 class="products-cover-photo__title" id="category-cover-title">Woven Tops</h3>
                            <p class="products-cover-photo__description" id="category-cover-description">High-quality woven tops including shirts, blouses, and tunics</p>
                        </div>
                            </div>
                                </div>
                                    </div>

            <!-- Product Listing Section -->
            <div class="products-listing-section">
                <!-- Breadcrumbs -->
                <div class="products-breadcrumbs" id="products-breadcrumbs">
                    <span class="products-breadcrumb">Products</span>
                    <span class="products-breadcrumb-separator">/</span>
                    <span class="products-breadcrumb" id="current-category-breadcrumb">Woven Tops</span>
                                    </div>
                
                <!-- Product Grid -->
                <div class="products-grid" id="products-grid">
                    <!-- Woven Tops Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Premium Cotton Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                                    </div>
                                </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Premium Cotton Shirt</h3>
                            <p class="product-card__description">High-quality cotton shirt with modern fit and comfortable design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Classic Oxford Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Classic Oxford Shirt</h3>
                            <p class="product-card__description">Timeless Oxford shirt perfect for professional and casual settings.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-002</span>
                    </div>
                </div>
            </div>

                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Linen Blouse" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Linen Blouse</h3>
                            <p class="product-card__description">Breathable linen blouse perfect for warm weather and casual elegance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Silk Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Silk Shirt</h3>
                            <p class="product-card__description">Luxurious silk shirt with elegant drape and sophisticated appeal.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Denim Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Denim Shirt</h3>
                            <p class="product-card__description">Classic denim shirt with durable construction and timeless style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Chambray Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Chambray Shirt</h3>
                            <p class="product-card__description">Lightweight chambray shirt with a soft, breathable texture.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Poplin Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Poplin Shirt</h3>
                            <p class="product-card__description">Crisp poplin shirt with a smooth finish and professional appearance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Twill Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Twill Shirt</h3>
                            <p class="product-card__description">Durable twill shirt with diagonal weave pattern and strength.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Seersucker Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Seersucker Shirt</h3>
                            <p class="product-card__description">Textured seersucker shirt with puckered stripes and summer appeal.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Madras Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Madras Shirt</h3>
                            <p class="product-card__description">Colorful madras shirt with plaid pattern and lightweight cotton.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Gingham Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Gingham Shirt</h3>
                            <p class="product-card__description">Classic gingham shirt with checkered pattern and casual charm.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Herringbone Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Herringbone Shirt</h3>
                            <p class="product-card__description">Elegant herringbone shirt with distinctive V-shaped pattern.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Pinpoint Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Pinpoint Shirt</h3>
                            <p class="product-card__description">Refined pinpoint shirt with subtle texture and professional look.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Broadcloth Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Broadcloth Shirt</h3>
                            <p class="product-card__description">Smooth broadcloth shirt with tight weave and polished finish.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Jacquard Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Jacquard Shirt</h3>
                            <p class="product-card__description">Luxurious jacquard shirt with intricate woven patterns and texture.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Tops</span>
                                <span class="product-card__code">WT-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Coats & Jackets Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Premium Blazer" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Premium Blazer</h3>
                            <p class="product-card__description">Elegant blazer with structured fit and premium fabric.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Winter Coat" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Winter Coat</h3>
                            <p class="product-card__description">Warm and stylish winter coat for cold weather protection.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Trench Coat" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Trench Coat</h3>
                            <p class="product-card__description">Classic trench coat with belt and storm flap for timeless elegance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Leather Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Leather Jacket</h3>
                            <p class="product-card__description">Premium leather jacket with zipper details and edgy style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Denim Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Denim Jacket</h3>
                            <p class="product-card__description">Classic denim jacket with button front and casual appeal.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Bomber Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Bomber Jacket</h3>
                            <p class="product-card__description">Sporty bomber jacket with ribbed cuffs and waistband.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Peacoat" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Peacoat</h3>
                            <p class="product-card__description">Navy peacoat with double-breasted front and wool blend.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Puffer Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Puffer Jacket</h3>
                            <p class="product-card__description">Insulated puffer jacket with quilted design and warmth.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Suit Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Suit Jacket</h3>
                            <p class="product-card__description">Professional suit jacket with tailored fit and formal style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Windbreaker" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Windbreaker</h3>
                            <p class="product-card__description">Lightweight windbreaker with water-resistant finish.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Cardigan" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cardigan</h3>
                            <p class="product-card__description">Soft cardigan with button front and comfortable fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Hoodie" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Hoodie</h3>
                            <p class="product-card__description">Comfortable hoodie with drawstring hood and kangaroo pocket.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Fleece Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Fleece Jacket</h3>
                            <p class="product-card__description">Warm fleece jacket with soft texture and lightweight warmth.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket2.jpg" alt="Blouson Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Blouson Jacket</h3>
                            <p class="product-card__description">Stylish blouson jacket with elastic waist and modern design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg" alt="Track Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Track Jacket</h3>
                            <p class="product-card__description">Athletic track jacket with zip front and ribbed collar.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Coats & Jackets</span>
                                <span class="product-card__code">CJ-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sportswear Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear1.jpg" alt="Performance T-Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Performance T-Shirt</h3>
                            <p class="product-card__description">Moisture-wicking athletic shirt for optimal performance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear2.jpg" alt="Athletic Shorts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Athletic Shorts</h3>
                            <p class="product-card__description">Comfortable athletic shorts for sports and fitness activities.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear3.jpg" alt="Running Shoes" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Running Shoes</h3>
                            <p class="product-card__description">Lightweight running shoes with cushioned sole and breathable mesh.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear1.jpg" alt="Sports Bra" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Sports Bra</h3>
                            <p class="product-card__description">Supportive sports bra with moisture-wicking fabric and comfort fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear2.jpg" alt="Track Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Track Pants</h3>
                            <p class="product-card__description">Comfortable track pants with elastic waist and side pockets.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear3.jpg" alt="Gym Tank Top" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Gym Tank Top</h3>
                            <p class="product-card__description">Sleeveless gym tank top with breathable fabric and stretch fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear1.jpg" alt="Yoga Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Yoga Pants</h3>
                            <p class="product-card__description">Flexible yoga pants with high waist and stretchy fabric.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear2.jpg" alt="Swimming Trunks" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Swimming Trunks</h3>
                            <p class="product-card__description">Quick-dry swimming trunks with mesh lining and drawstring waist.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear3.jpg" alt="Cycling Jersey" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cycling Jersey</h3>
                            <p class="product-card__description">Aerodynamic cycling jersey with back pockets and moisture management.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear1.jpg" alt="Tennis Skirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Tennis Skirt</h3>
                            <p class="product-card__description">Classic tennis skirt with built-in shorts and ball pocket.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear2.jpg" alt="Basketball Jersey" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Basketball Jersey</h3>
                            <p class="product-card__description">Lightweight basketball jersey with mesh panels and team number.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear3.jpg" alt="Soccer Jersey" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Soccer Jersey</h3>
                            <p class="product-card__description">Breathable soccer jersey with team colors and player number.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear1.jpg" alt="Golf Polo" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Golf Polo</h3>
                            <p class="product-card__description">Classic golf polo with moisture-wicking fabric and UV protection.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear2.jpg" alt="Hiking Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Hiking Pants</h3>
                            <p class="product-card__description">Durable hiking pants with cargo pockets and water-resistant finish.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Sportswear3.jpg" alt="Ski Jacket" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Ski Jacket</h3>
                            <p class="product-card__description">Insulated ski jacket with waterproof shell and snow skirt.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Sportswear</span>
                                <span class="product-card__code">SW-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Woven Bottoms Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Classic Trousers" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Classic Trousers</h3>
                            <p class="product-card__description">Professional trousers with perfect fit and comfort.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Casual Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Casual Pants</h3>
                            <p class="product-card__description">Comfortable casual pants for everyday wear.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Chino Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Chino Pants</h3>
                            <p class="product-card__description">Versatile chino pants with cotton twill fabric and classic fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Khaki Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Khaki Pants</h3>
                            <p class="product-card__description">Classic khaki pants with durable cotton and relaxed fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Cargo Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cargo Pants</h3>
                            <p class="product-card__description">Functional cargo pants with multiple pockets and utility design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Pleated Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Pleated Pants</h3>
                            <p class="product-card__description">Elegant pleated pants with formal styling and comfortable fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Linen Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Linen Pants</h3>
                            <p class="product-card__description">Breathable linen pants perfect for warm weather and casual elegance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Corduroy Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Corduroy Pants</h3>
                            <p class="product-card__description">Textured corduroy pants with ribbed surface and vintage appeal.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Wool Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Wool Pants</h3>
                            <p class="product-card__description">Warm wool pants with natural insulation and professional look.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Suit Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Suit Pants</h3>
                            <p class="product-card__description">Formal suit pants with tailored fit and professional styling.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Jogger Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Jogger Pants</h3>
                            <p class="product-card__description">Modern jogger pants with elastic cuffs and tapered fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Harem Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Harem Pants</h3>
                            <p class="product-card__description">Comfortable harem pants with drop crotch and relaxed fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Culottes" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Culottes</h3>
                            <p class="product-card__description">Stylish culottes with wide leg and mid-calf length.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms2.jpg" alt="Palazzo Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Palazzo Pants</h3>
                            <p class="product-card__description">Elegant palazzo pants with wide legs and flowing silhouette.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg" alt="Paper Bag Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Paper Bag Pants</h3>
                            <p class="product-card__description">Trendy paper bag pants with gathered waist and wide legs.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Woven Bottoms</span>
                                <span class="product-card__code">WB-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Knitwear Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Cozy Sweater" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cozy Sweater</h3>
                            <p class="product-card__description">Soft and warm sweater perfect for cold weather.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Cardigan" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Cardigan</h3>
                            <p class="product-card__description">Elegant knit cardigan for layering and style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Cable Knit Sweater" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cable Knit Sweater</h3>
                            <p class="product-card__description">Classic cable knit sweater with textured pattern and warmth.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Turtleneck Sweater" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Turtleneck Sweater</h3>
                            <p class="product-card__description">Elegant turtleneck sweater with high neck and sophisticated style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="V-Neck Sweater" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">V-Neck Sweater</h3>
                            <p class="product-card__description">Versatile V-neck sweater perfect for layering and casual wear.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Dress" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Dress</h3>
                            <p class="product-card__description">Comfortable knit dress with stretchy fabric and flattering fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Knit Vest" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Vest</h3>
                            <p class="product-card__description">Sleeveless knit vest perfect for layering over shirts and blouses.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Tank Top" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Tank Top</h3>
                            <p class="product-card__description">Soft knit tank top with stretchy fabric and comfortable fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Knit Pants" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Pants</h3>
                            <p class="product-card__description">Comfortable knit pants with elastic waist and stretchy fabric.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Skirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Skirt</h3>
                            <p class="product-card__description">Stylish knit skirt with stretchy fabric and comfortable fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Knit Blazer" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Blazer</h3>
                            <p class="product-card__description">Sophisticated knit blazer with structured fit and professional look.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Shirt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Shirt</h3>
                            <p class="product-card__description">Comfortable knit shirt with stretchy fabric and casual style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Knit Hoodie" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Hoodie</h3>
                            <p class="product-card__description">Cozy knit hoodie with drawstring hood and kangaroo pocket.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear2.jpg" alt="Knit Poncho" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Poncho</h3>
                            <p class="product-card__description">Stylish knit poncho with open front and cozy warmth.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Knitwear1.jpg" alt="Knit Scarf" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Knit Scarf</h3>
                            <p class="product-card__description">Warm knit scarf with soft texture and versatile styling.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Knitwear</span>
                                <span class="product-card__code">KW-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Homeware Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Luxury Bedding Set" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Luxury Bedding Set</h3>
                            <p class="product-card__description">Premium cotton bedding for ultimate comfort and style.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Table Linen" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Table Linen</h3>
                            <p class="product-card__description">Elegant table linen for sophisticated dining experiences.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Bath Towels" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Bath Towels</h3>
                            <p class="product-card__description">Soft and absorbent bath towels for luxurious comfort.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Kitchen Towels" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Kitchen Towels</h3>
                            <p class="product-card__description">Durable kitchen towels with excellent absorbency and quick drying.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Curtains" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Curtains</h3>
                            <p class="product-card__description">Elegant curtains with beautiful patterns and light control.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Cushion Covers" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Cushion Covers</h3>
                            <p class="product-card__description">Decorative cushion covers to enhance home aesthetics.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Throw Blankets" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Throw Blankets</h3>
                            <p class="product-card__description">Cozy throw blankets for warmth and decorative appeal.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Pillow Cases" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Pillow Cases</h3>
                            <p class="product-card__description">Soft pillow cases with various designs and comfortable fabric.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Table Runners" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Table Runners</h3>
                            <p class="product-card__description">Elegant table runners for formal dining and special occasions.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Placemats" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Placemats</h3>
                            <p class="product-card__description">Stylish placemats to protect tables and enhance dining experience.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Napkins" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Napkins</h3>
                            <p class="product-card__description">Quality napkins for everyday use and special occasions.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Aprons" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Aprons</h3>
                            <p class="product-card__description">Functional aprons for cooking and kitchen activities.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Oven Mitts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Oven Mitts</h3>
                            <p class="product-card__description">Heat-resistant oven mitts for safe cooking and baking.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear2.jpg" alt="Pot Holders" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Pot Holders</h3>
                            <p class="product-card__description">Durable pot holders for handling hot cookware safely.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Homewear1.jpg" alt="Shower Curtains" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Shower Curtains</h3>
                            <p class="product-card__description">Waterproof shower curtains with attractive designs.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Homeware</span>
                                <span class="product-card__code">HW-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Handicrafts Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Artisanal Pottery" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Artisanal Pottery</h3>
                            <p class="product-card__description">Handcrafted pottery with unique designs and premium quality.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Handwoven Textiles" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Handwoven Textiles</h3>
                            <p class="product-card__description">Traditional handwoven textiles with cultural significance.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Bamboo Crafts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Bamboo Crafts</h3>
                            <p class="product-card__description">Eco-friendly bamboo crafts with sustainable materials.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Wooden Carvings" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Wooden Carvings</h3>
                            <p class="product-card__description">Intricate wooden carvings with traditional craftsmanship.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Metal Crafts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Metal Crafts</h3>
                            <p class="product-card__description">Beautiful metal crafts with artistic designs and durability.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Leather Goods" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Leather Goods</h3>
                            <p class="product-card__description">Handcrafted leather goods with premium quality and craftsmanship.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Ceramic Art" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Ceramic Art</h3>
                            <p class="product-card__description">Artistic ceramic pieces with unique glazes and designs.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Glass Art" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Glass Art</h3>
                            <p class="product-card__description">Beautiful glass art pieces with intricate designs and colors.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Textile Art" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Textile Art</h3>
                            <p class="product-card__description">Creative textile art with embroidery and unique patterns.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Paper Crafts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Paper Crafts</h3>
                            <p class="product-card__description">Delicate paper crafts with origami and artistic designs.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Stone Carvings" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Stone Carvings</h3>
                            <p class="product-card__description">Traditional stone carvings with cultural heritage and artistry.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Jewelry Crafts" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Jewelry Crafts</h3>
                            <p class="product-card__description">Handcrafted jewelry with precious metals and gemstones.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Beadwork" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Beadwork</h3>
                            <p class="product-card__description">Intricate beadwork with colorful patterns and traditional techniques.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts2.jpg" alt="Folk Art" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Folk Art</h3>
                            <p class="product-card__description">Traditional folk art pieces with cultural stories and heritage.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Handicrafts1.jpg" alt="Decorative Items" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Decorative Items</h3>
                            <p class="product-card__description">Beautiful decorative items to enhance home aesthetics.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Handicrafts</span>
                                <span class="product-card__code">HC-015</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Accessories Products -->
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Leather Wallet" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Leather Wallet</h3>
                            <p class="product-card__description">Premium leather wallet with multiple compartments.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-001</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Designer Bag" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Designer Bag</h3>
                            <p class="product-card__description">Stylish designer bag with premium materials and craftsmanship.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-002</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Sunglasses" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Sunglasses</h3>
                            <p class="product-card__description">Stylish sunglasses with UV protection and modern design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-003</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Watch" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Watch</h3>
                            <p class="product-card__description">Elegant watch with precision movement and sophisticated design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-004</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Belt" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Belt</h3>
                            <p class="product-card__description">Quality leather belt with classic buckle and durable construction.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-005</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Scarf" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Scarf</h3>
                            <p class="product-card__description">Soft scarf with beautiful patterns and warm comfort.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-006</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Hat" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Hat</h3>
                            <p class="product-card__description">Stylish hat with comfortable fit and sun protection.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-007</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Gloves" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Gloves</h3>
                            <p class="product-card__description">Warm gloves with soft lining and comfortable fit.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-008</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Jewelry" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Jewelry</h3>
                            <p class="product-card__description">Elegant jewelry pieces with precious metals and gemstones.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-009</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Backpack" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Backpack</h3>
                            <p class="product-card__description">Functional backpack with multiple compartments and durable design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-010</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Umbrella" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Umbrella</h3>
                            <p class="product-card__description">Stylish umbrella with wind-resistant design and compact fold.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-011</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Keychain" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Keychain</h3>
                            <p class="product-card__description">Durable keychain with unique design and practical functionality.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-012</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Phone Case" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Phone Case</h3>
                            <p class="product-card__description">Protective phone case with stylish design and shock absorption.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-013</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/accessories2.jpg" alt="Laptop Bag" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Laptop Bag</h3>
                            <p class="product-card__description">Professional laptop bag with padded protection and organized compartments.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-014</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="<?php echo $baseUrl; ?>/images/Accessories1.jpeg" alt="Travel Organizer" class="product-card__img">
                            <div class="product-card__overlay">
                                <button class="product-card__quick-view">Quick View</button>
                            </div>
                        </div>
                        <div class="product-card__content">
                            <h3 class="product-card__title">Travel Organizer</h3>
                            <p class="product-card__description">Practical travel organizer with multiple pockets and compact design.</p>
                            <div class="product-card__meta">
                                <span class="product-card__category">Accessories</span>
                                <span class="product-card__code">AC-015</span>
                            </div>
                        </div>
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

        // Category data with cover photos
        const categoryData = {
            'woven-tops': {
                title: 'Woven Tops',
                description: 'High-quality woven tops including shirts, blouses, and tunics',
                coverImage: '<?php echo $baseUrl; ?>/images/Woven_Top1.jpg'
            },
            'coats-jackets': {
                title: 'Coats & Jackets',
                description: 'Premium outerwear for all seasons and occasions',
                coverImage: '<?php echo $baseUrl; ?>/images/Coats_Jacket1.jpg'
            },
            'sportswear': {
                title: 'Sportswear',
                description: 'Performance-driven athletic wear and activewear',
                coverImage: '<?php echo $baseUrl; ?>/images/Sportswear1.jpg'
            },
            'woven-bottoms': {
                title: 'Woven Bottoms',
                description: 'Quality trousers, pants, and bottom wear',
                coverImage: '<?php echo $baseUrl; ?>/images/Woven_Bottoms1.jpg'
            },
            'knitwear': {
                title: 'Knitwear',
                description: 'Comfortable and stylish knitted garments',
                coverImage: '<?php echo $baseUrl; ?>/images/Knitwear1.jpg'
            },
            'homeware': {
                title: 'Homeware',
                description: 'Beautiful home textiles and furnishings',
                coverImage: '<?php echo $baseUrl; ?>/images/Homewear1.jpg'
            },
            'handicrafts': {
                title: 'Handicrafts',
                description: 'Artisanal handcrafted products and accessories',
                coverImage: '<?php echo $baseUrl; ?>/images/Handicrafts1.jpg'
            },
            'accessories': {
                title: 'Accessories',
                description: 'Complete your look with premium accessories',
                coverImage: '<?php echo $baseUrl; ?>/images/Accessories1.jpeg'
            }
        };

        // Category switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryTabs = document.querySelectorAll('.products-category-tab');
            const coverImage = document.getElementById('category-cover-image');
            const coverTitle = document.getElementById('category-cover-title');
            const coverDescription = document.getElementById('category-cover-description');
            const breadcrumbCategory = document.getElementById('current-category-breadcrumb');
            const productCards = document.querySelectorAll('.product-card');

            // Show all products by default
            showAllProducts();

            categoryTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.dataset.category;
                    
                    // Remove active class from all tabs
                    categoryTabs.forEach(t => t.classList.remove('products-category-tab--active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('products-category-tab--active');
                    
                    // Update cover photo and content
                    if (categoryData[category]) {
                        coverImage.src = categoryData[category].coverImage;
                        coverImage.alt = categoryData[category].title + ' Cover';
                        coverTitle.textContent = categoryData[category].title;
                        coverDescription.textContent = categoryData[category].description;
                        breadcrumbCategory.textContent = categoryData[category].title;
                    }
                    
                    // Filter product cards based on category
                    filterProductsByCategory(category);
                });
            });

            // Function to show all products
            function showAllProducts() {
                productCards.forEach(card => {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in-out';
                });
            }

            // Function to filter products by category
            function filterProductsByCategory(category) {
                productCards.forEach(card => {
                    const cardCategory = card.querySelector('.product-card__category').textContent;
                    const categoryTitle = categoryData[category] ? categoryData[category].title : category;
                    
                    if (cardCategory === categoryTitle) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeIn 0.5s ease-in-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Add CSS animation for smooth transitions
            const style = document.createElement('style');
            style.textContent = `
                @keyframes fadeIn {
                    from { opacity: 0; transform: translateY(20px); }
                    to { opacity: 1; transform: translateY(0); }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>
</html>
