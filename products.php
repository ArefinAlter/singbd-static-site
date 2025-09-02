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

    <!-- Product Categories Section - Same structure as Home Page -->
    <section class="categories" id="categories">
        <div class="categories__container">
            <h2 class="section__title">Product Categories</h2>
            
            <div class="categories__content">
                <!-- Left Column - Categories -->
                <div class="categories__sidebar">
                    <div class="categories__list">
                        <div class="category__item category__item--active" data-category="woven-tops">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Woven Tops.webp" alt="Woven Tops" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Woven Tops</h3>
                        </div>
                        <div class="category__item" data-category="woven-bottoms">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Woven Bottoms.webp" alt="Woven Bottoms" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Woven Bottoms</h3>
                        </div>
                        <div class="category__item" data-category="coats-jackets">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Coats & Jackets.webp" alt="Coats & Jackets" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Coats & Jackets</h3>
                        </div>
                        <div class="category__item" data-category="denim">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Denim.webp" alt="Denim" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Denim</h3>
                        </div>
                        <div class="category__item" data-category="knitwear">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Knit Wear.webp" alt="Knitwear" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Knitwear</h3>
                    </div>
                        <div class="category__item" data-category="sweater">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Accessories.webp" alt="Sweater" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Sweater</h3>
                        </div>
                        <div class="category__item" data-category="sportswear">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Sports Wear.webp" alt="Sportswear" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Sportswear</h3>
                        </div>
                        <div class="category__item" data-category="homeware">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Home Wear.webp" alt="Homeware" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Homeware</h3>
                        </div>
                        <div class="category__item" data-category="handicrafts">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Handicraft.webp" alt="Handicrafts" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Handicrafts</h3>
                        </div>
                        <div class="category__item" data-category="workwear">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Categories/Work Wear.webp" alt="Workwear" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Workwear</h3>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Product Display (Single Photo Only) -->
                <div class="categories__display">
                    <div class="categories__product-info">
                        <h3 class="categories__product-title">Woven Tops</h3>
                        <p class="categories__product-description">High-quality woven tops including shirts, blouses, and tunics. Made from premium fabrics with attention to detail and comfort.</p>
                    </div>
                    
                    <div class="categories__gallery">
                        <!-- Single photo display for each category -->
                        <div class="categories__single-photo">
                            <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dsrgdb.webp" alt="Woven Tops Overview" class="categories__single-photo-image" id="category-single-photo">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Product Listings Section -->
    <section class="product-listings" id="product-listings">
        <div class="product-listings__container">
            <!-- Breadcrumbs -->
            <nav class="breadcrumbs" aria-label="Product Category Breadcrumb">
                <div class="breadcrumbs__container">
                    <ol class="breadcrumbs__nav">
                        <li><a href="<?php echo $baseUrl; ?>/" class="breadcrumbs__link">Home</a></li>
                        <li><span class="breadcrumbs__separator">/</span></li>
                        <li><a href="<?php echo $baseUrl; ?>/products.php" class="breadcrumbs__link">Products</a></li>
                        <li><span class="breadcrumbs__separator">/</span></li>
                        <li><span class="breadcrumbs__current" id="category-breadcrumb">Woven Tops</span></li>
                    </ol>
                </div>
            </nav>
            
            <h2 class="section__title">Product Listings</h2>
            <p class="section__subtitle">Explore our complete collection of premium products</p>
            
            <!-- Woven Tops Products -->
            <div class="product-category product-category--active" id="woven-tops-products">
                <h3 class="product-category__title">Woven Tops Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Jacket.webp" alt="Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Jacket</h4>
                            <p class="product-item__description">Premium woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Kids' Top.webp" alt="Kids' Top" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Kids' Top</h4>
                            <p class="product-item__description">Comfortable kids' woven top</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens Jacket w Rib.webp" alt="Mens Jacket w Rib" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens Jacket w Rib</h4>
                            <p class="product-item__description">Men's jacket with rib detailing</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (2).webp" alt="Mens' Shirt (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (2)</h4>
                            <p class="product-item__description">Classic men's dress shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (3).webp" alt="Mens' Shirt (3)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (3)</h4>
                            <p class="product-item__description">Premium men's woven shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (4).webp" alt="Mens' Shirt (4)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (4)</h4>
                            <p class="product-item__description">Stylish men's woven shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (5).webp" alt="Mens' Shirt (5)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (5)</h4>
                            <p class="product-item__description">Modern men's woven shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (6).webp" alt="Mens' Shirt (6)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (6)</h4>
                            <p class="product-item__description">Contemporary men's shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Tops/Mens' Shirt (7).webp" alt="Mens' Shirt (7)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Shirt (7)</h4>
                            <p class="product-item__description">Elegant men's woven shirt</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Coats & Jackets Products -->
            <div class="product-category" id="coats-jackets-products">
                <h3 class="product-category__title">Coats & Jackets Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Ladies Jacket (2).webp" alt="Ladies Jacket (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Jacket (2)</h4>
                            <p class="product-item__description">Stylish women's jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Ladies Jacket.webp" alt="Ladies Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Jacket</h4>
                            <p class="product-item__description">Elegant ladies' jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Ladies Puffer.webp" alt="Ladies Puffer" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Puffer</h4>
                            <p class="product-item__description">Women's puffer jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Long Padded Jacket.webp" alt="Long Padded Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Long Padded Jacket</h4>
                            <p class="product-item__description">Extended length padded jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Padded Hoodie.webp" alt="Padded Hoodie" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Hoodie</h4>
                            <p class="product-item__description">Warm hooded jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Padded Jacket (2).webp" alt="Padded Jacket (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Jacket (2)</h4>
                            <p class="product-item__description">Premium padded jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Padded Jacket (3).webp" alt="Padded Jacket (3)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Jacket (3)</h4>
                            <p class="product-item__description">Insulated padded jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Padded Jacket.webp" alt="Padded Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Jacket</h4>
                            <p class="product-item__description">Classic padded jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Padded Parka.webp" alt="Padded Parka" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Parka</h4>
                            <p class="product-item__description">Warm padded parka</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Parka.webp" alt="Parka" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Parka</h4>
                            <p class="product-item__description">Classic parka jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Parker Jacket.webp" alt="Parker Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Parker Jacket</h4>
                            <p class="product-item__description">Stylish parker jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/PU Jacket 2.webp" alt="PU Jacket 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">PU Jacket 2</h4>
                            <p class="product-item__description">Synthetic leather jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/PU jacket 3.webp" alt="PU jacket 3" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">PU jacket 3</h4>
                            <p class="product-item__description">Premium PU leather jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/PU Jacket 4.webp" alt="PU Jacket 4" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">PU Jacket 4</h4>
                            <p class="product-item__description">Modern PU jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/PU Jacket.webp" alt="PU Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">PU Jacket</h4>
                            <p class="product-item__description">Classic PU leather jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Puffer Jacket.webp" alt="Puffer Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Puffer Jacket</h4>
                            <p class="product-item__description">Warm and comfortable puffer</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Quilted & Fleece Jacket.webp" alt="Quilted & Fleece Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted & Fleece Jacket</h4>
                            <p class="product-item__description">Quilted fleece combination</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Quilted Bomber.webp" alt="Quilted Bomber" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted Bomber</h4>
                            <p class="product-item__description">Stylish bomber jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Quilted Parker.webp" alt="Quilted Parker" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted Parker</h4>
                            <p class="product-item__description">Premium quilted parker jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Sports Jacket.webp" alt="Sports Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Sports Jacket</h4>
                            <p class="product-item__description">Athletic performance jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Woven Jacket 2.webp" alt="Woven Jacket 2" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Jacket 2</h4>
                            <p class="product-item__description">Premium woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Woven Jacket 3.webp" alt="Woven Jacket 3" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Jacket 3</h4>
                            <p class="product-item__description">Elegant woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Woven Jacket.webp" alt="Woven Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Jacket</h4>
                            <p class="product-item__description">Classic woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Woven Padded.webp" alt="Woven Padded" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Padded</h4>
                            <p class="product-item__description">Padded woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Woven Top.webp" alt="Woven Top" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Woven Top</h4>
                            <p class="product-item__description">Lightweight woven jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Auto Bonded Quilted.webp" alt="Auto Bonded Quilted" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Auto Bonded Quilted</h4>
                            <p class="product-item__description">Advanced quilted technology</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Bomber.webp" alt="Bomber" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bomber</h4>
                            <p class="product-item__description">Classic bomber jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Fake Down Jacket (2).webp" alt="Fake Down Jacket (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fake Down Jacket (2)</h4>
                            <p class="product-item__description">Synthetic down alternative</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Fake Down Jacket.webp" alt="Fake Down Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fake Down Jacket</h4>
                            <p class="product-item__description">Eco-friendly down alternative</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Fleece Jacket.webp" alt="Fleece Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fleece Jacket</h4>
                            <p class="product-item__description">Soft and warm fleece</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Furr Jacket.webp" alt="Furr Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Furr Jacket</h4>
                            <p class="product-item__description">Luxurious fur-lined jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Heavy Padded.webp" alt="Heavy Padded" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Padded</h4>
                            <p class="product-item__description">Extra insulated jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Heavy Parka.webp" alt="Heavy Parka" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Parka</h4>
                            <p class="product-item__description">Heavy-duty winter parka</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Heavy Parker.webp" alt="Heavy Parker" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Parker</h4>
                            <p class="product-item__description">Robust parker jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="3500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Coats & Jackets/Hunter Jacket.webp" alt="Hunter Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Hunter Jacket</h4>
                            <p class="product-item__description">Durable hunting jacket</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sportswear Products -->
            <div class="product-category" id="sportswear-products">
                <h3 class="product-category__title">Sportswear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Swim Short (2).webp" alt="Swim Short (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Swim Short (2)</h4>
                            <p class="product-item__description">Premium swim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Swim Short (3).webp" alt="Swim Short (3)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Swim Short (3)</h4>
                            <p class="product-item__description">Athletic swim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Swim Short.webp" alt="Swim Short" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Swim Short</h4>
                            <p class="product-item__description">Comfortable swimwear</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Windbreaker.webp" alt="Windbreaker" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Windbreaker</h4>
                            <p class="product-item__description">Lightweight wind protection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Padded Ski Jacket.webp" alt="Padded Ski Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Ski Jacket</h4>
                            <p class="product-item__description">Insulated ski jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Padded Ski Suit.webp" alt="Padded Ski Suit" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Padded Ski Suit</h4>
                            <p class="product-item__description">Warm padded ski suit</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Ski Jacket.webp" alt="Ski Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ski Jacket</h4>
                            <p class="product-item__description">Warm ski protection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sportswear/Ski Pant.webp" alt="Ski Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ski Pant</h4>
                            <p class="product-item__description">Comfortable ski pants</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Woven Bottoms Products -->
            <div class="product-category" id="woven-bottoms-products">
                <h3 class="product-category__title">Woven Bottoms Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Ladies Trouser (2).webp" alt="Ladies Trouser (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Trouser (2)</h4>
                            <p class="product-item__description">Elegant women's woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Ladies Trouser.webp" alt="Ladies Trouser" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Trouser</h4>
                            <p class="product-item__description">Classic women's woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Long Pant (2).webp" alt="Long Pant (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Long Pant (2)</h4>
                            <p class="product-item__description">Contemporary long pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Long Pant.webp" alt="Long Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Long Pant</h4>
                            <p class="product-item__description">Premium long pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Mens' Trouser.webp" alt="Mens' Trouser" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Mens' Trouser</h4>
                            <p class="product-item__description">Classic men's woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Trouser (2).webp" alt="Trouser (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Trouser (2)</h4>
                            <p class="product-item__description">Stylish woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Trouser (3).webp" alt="Trouser (3)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Trouser (3)</h4>
                            <p class="product-item__description">Modern woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Trouser.webp" alt="Trouser" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Trouser</h4>
                            <p class="product-item__description">Premium woven trouser</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Woven Bottoms/Twill Pant.webp" alt="Twill Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Twill Pant</h4>
                            <p class="product-item__description">Durable twill fabric pants</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Knitwear Products -->
            <div class="product-category" id="knitwear-products">
                <h3 class="product-category__title">Knitwear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Fleece Jacket.webp" alt="Fleece Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fleece Jacket</h4>
                            <p class="product-item__description">Warm and cozy fleece jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Full Sleeve T Shirt.webp" alt="Full Sleeve T Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Full Sleeve T Shirt</h4>
                            <p class="product-item__description">Long sleeve knit t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Heavy Knitted Tops.webp" alt="Heavy Knitted Tops" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Knitted Tops</h4>
                            <p class="product-item__description">Thick knit tops for warmth</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit Hoodie.webp" alt="Knit Hoodie" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit Hoodie</h4>
                            <p class="product-item__description">Comfortable knit hoodie</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit Jacket (2).webp" alt="Knit Jacket (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit Jacket (2)</h4>
                            <p class="product-item__description">Premium knit jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit Jacket.webp" alt="Knit Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit Jacket</h4>
                            <p class="product-item__description">Classic knit jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit Sweater.webp" alt="Knit Sweater" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit Sweater</h4>
                            <p class="product-item__description">Cozy knit sweater</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit Tops Bottom Set.webp" alt="Knit Tops Bottom Set" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit Tops Bottom Set</h4>
                            <p class="product-item__description">Matching knit top and bottom set</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knit T-Shirt.webp" alt="Knit T-Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knit T-Shirt</h4>
                            <p class="product-item__description">Soft knit t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knitted Padded Vest (2).webp" alt="Knitted Padded Vest (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knitted Padded Vest (2)</h4>
                            <p class="product-item__description">Insulated knit vest</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knitted Padded Vest.webp" alt="Knitted Padded Vest" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knitted Padded Vest</h4>
                            <p class="product-item__description">Warm knitted vest</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Knitted Sweater.webp" alt="Knitted Sweater" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Knitted Sweater</h4>
                            <p class="product-item__description">Traditional knitted sweater</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Laser Designed Ladies Tops.webp" alt="Laser Designed Ladies Tops" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Laser Designed Ladies Tops</h4>
                            <p class="product-item__description">Laser-cut women's knit tops</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Printed T Shirt (2).webp" alt="Printed T Shirt (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Printed T Shirt (2)</h4>
                            <p class="product-item__description">Stylish printed t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Printed T Shirt (3).webp" alt="Printed T Shirt (3)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Printed T Shirt (3)</h4>
                            <p class="product-item__description">Designer printed t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Printed T Shirt.webp" alt="Printed T Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Printed T Shirt</h4>
                            <p class="product-item__description">Classic printed t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Sweat Shirt.webp" alt="Sweat Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Sweat Shirt</h4>
                            <p class="product-item__description">Comfortable sweatshirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/T Shirt (2).webp" alt="T Shirt (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">T Shirt (2)</h4>
                            <p class="product-item__description">Premium knit t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/T Shirt.webp" alt="T Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">T Shirt</h4>
                            <p class="product-item__description">Basic knit t-shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Kintwear/Washed & Embroidered T Shirt.webp" alt="Washed & Embroidered T Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Washed & Embroidered T Shirt</h4>
                            <p class="product-item__description">Embroidered washed t-shirt</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Homeware Products -->
            <div class="product-category" id="homeware-products">
                <h3 class="product-category__title">Homeware Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Quilted Bed Spread.webp" alt="Quilted Bed Spread" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Quilted Bed Spread</h4>
                            <p class="product-item__description">Luxurious quilted bedding</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Towel.webp" alt="Towel" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Towel</h4>
                            <p class="product-item__description">Soft absorbent towels</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Wooden Chopper.webp" alt="Wooden Chopper" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Wooden Chopper</h4>
                            <p class="product-item__description">Handcrafted wooden chopping board</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Wooden Spoon.webp" alt="Wooden Spoon" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Wooden Spoon</h4>
                            <p class="product-item__description">Natural wooden kitchen utensil</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Wooden Tray.webp" alt="Wooden Tray" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Wooden Tray</h4>
                            <p class="product-item__description">Elegant wooden serving tray</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Basket.webp" alt="Basket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Basket</h4>
                            <p class="product-item__description">Woven storage basket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Bathrobe.webp" alt="Bathrobe" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bathrobe</h4>
                            <p class="product-item__description">Comfortable terry bathrobe</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Bed Spread.webp" alt="Bed Spread" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bed Spread</h4>
                            <p class="product-item__description">Premium bedding spread</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Bowl.webp" alt="Bowl" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bowl</h4>
                            <p class="product-item__description">Handcrafted serving bowl</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Comforter (2).webp" alt="Comforter (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Comforter (2)</h4>
                            <p class="product-item__description">Warm winter comforter</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Comforter.webp" alt="Comforter" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Comforter</h4>
                            <p class="product-item__description">Soft comfortable bedding</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Currtain.webp" alt="Currtain" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Curtain</h4>
                            <p class="product-item__description">Elegant window curtains</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Cushhion Set.webp" alt="Cushhion Set" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cushion Set</h4>
                            <p class="product-item__description">Coordinated cushion collection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Cushion Set.webp" alt="Cushion Set" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cushion Set</h4>
                            <p class="product-item__description">Matching cushion set</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Cushion.webp" alt="Cushion" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cushion</h4>
                            <p class="product-item__description">Comfortable throw cushion</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Decorative Cushion.webp" alt="Decorative Cushion" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Decorative Cushion</h4>
                            <p class="product-item__description">Stylish decorative pillow</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Floor Cushion.webp" alt="Floor Cushion" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Floor Cushion</h4>
                            <p class="product-item__description">Large floor seating cushion</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Floor Matt (2).webp" alt="Floor Matt (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Floor Matt (2)</h4>
                            <p class="product-item__description">Premium floor mat</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Floor Matt.webp" alt="Floor Matt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Floor Matt</h4>
                            <p class="product-item__description">Durable floor mat</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Pottery.webp" alt="Pottery" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Pottery</h4>
                            <p class="product-item__description">Handcrafted ceramic pottery</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Pouf (2).webp" alt="Pouf (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Pouf (2)</h4>
                            <p class="product-item__description">Versatile ottoman pouf</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="2200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Homeware/Pouf.webp" alt="Pouf" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Pouf</h4>
                            <p class="product-item__description">Stylish seating pouf</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Handicrafts Products -->
            <div class="product-category" id="handicrafts-products">
                <h3 class="product-category__title">Handicrafts Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Sleeping Bag.webp" alt="Sleeping Bag" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Sleeping Bag</h4>
                            <p class="product-item__description">Comfortable outdoor sleeping bag</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Tote Bag (2).webp" alt="Tote Bag (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Tote Bag (2)</h4>
                            <p class="product-item__description">Stylish handcrafted tote bag</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Tote Bag.webp" alt="Tote Bag" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Tote Bag</h4>
                            <p class="product-item__description">Eco-friendly tote bag</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Woodedn Fruit Tray.webp" alt="Woodedn Fruit Tray" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Wooden Fruit Tray</h4>
                            <p class="product-item__description">Handcrafted wooden serving tray</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Wooden & Jute Tool.webp" alt="Wooden & Jute Tool" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Wooden & Jute Tool</h4>
                            <p class="product-item__description">Natural fiber kitchen tools</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Bamboo Flower Pot.webp" alt="Bamboo Flower Pot" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bamboo Flower Pot</h4>
                            <p class="product-item__description">Sustainable bamboo planter</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Bamboo Handicraft.webp" alt="Bamboo Handicraft" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bamboo Handicraft</h4>
                            <p class="product-item__description">Traditional bamboo crafts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Bamboo Mattress.webp" alt="Bamboo Mattress" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bamboo Mattress</h4>
                            <p class="product-item__description">Natural bamboo sleeping mat</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Bamboo Tool.webp" alt="Bamboo Tool" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bamboo Tool</h4>
                            <p class="product-item__description">Eco-friendly bamboo utensils</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Bamboo.webp" alt="Bamboo" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Bamboo</h4>
                            <p class="product-item__description">Premium bamboo products</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Jute Bag.webp" alt="Jute Bag" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Jute Bag</h4>
                            <p class="product-item__description">Sustainable jute shopping bag</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Jute Basket (2).webp" alt="Jute Basket (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Jute Basket (2)</h4>
                            <p class="product-item__description">Handwoven jute storage basket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Jute Basket-Laundry.webp" alt="Jute Basket-Laundry" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Jute Basket-Laundry</h4>
                            <p class="product-item__description">Large jute laundry basket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Kids' Purse.webp" alt="Kids' Purse" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Kids' Purse</h4>
                            <p class="product-item__description">Cute handcrafted children's purse</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Handicrafts/Oraganizer.webp" alt="Oraganizer" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Organizer</h4>
                            <p class="product-item__description">Handcrafted storage organizer</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Denim Products -->
            <div class="product-category" id="denim-products">
                <h3 class="product-category__title">Denim Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Light Weight Short.webp" alt="Light Weight Short" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Light Weight Short</h4>
                            <p class="product-item__description">Comfortable lightweight denim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Long Pant.webp" alt="Long Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Long Pant</h4>
                            <p class="product-item__description">Classic denim long pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Pant (2).webp" alt="Pant (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Pant (2)</h4>
                            <p class="product-item__description">Premium denim pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Pant.webp" alt="Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Pant</h4>
                            <p class="product-item__description">Classic denim pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Shirt.webp" alt="Shirt" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Shirt</h4>
                            <p class="product-item__description">Stylish denim shirt</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Shorts.webp" alt="Shorts" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Shorts</h4>
                            <p class="product-item__description">Casual denim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="700">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Cargo Shorts (2).webp" alt="Cargo Shorts (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cargo Shorts (2)</h4>
                            <p class="product-item__description">Functional cargo denim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="800">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Cargo Shorts.webp" alt="Cargo Shorts" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cargo Shorts</h4>
                            <p class="product-item__description">Multi-pocket cargo shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="900">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Cargo Trouser.webp" alt="Cargo Trouser" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Cargo Trouser</h4>
                            <p class="product-item__description">Denim cargo trousers</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1000">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Denim with  Furr Lined.webp" alt="Denim with Furr Lined" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Denim with Furr Lined</h4>
                            <p class="product-item__description">Warm fur-lined denim jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Destroyed Washed Jacket.webp" alt="Destroyed Washed Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Destroyed Washed Jacket</h4>
                            <p class="product-item__description">Distressed denim jacket</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Fancy Cargo Shorts.webp" alt="Fancy Cargo Shorts" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Fancy Cargo Shorts</h4>
                            <p class="product-item__description">Designer cargo shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Heavy Washed Shorts (2).webp" alt="Heavy Washed Shorts (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Washed Shorts (2)</h4>
                            <p class="product-item__description">Heavy wash denim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Heavy Washed Shorts.webp" alt="Heavy Washed Shorts" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Heavy Washed Shorts</h4>
                            <p class="product-item__description">Vintage washed denim shorts</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1500">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Ladies Denim.webp" alt="Ladies Denim" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Denim</h4>
                            <p class="product-item__description">Women's denim collection</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="1600">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Denim/Laser Designed Jacket.webp" alt="Laser Designed Jacket" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Laser Designed Jacket</h4>
                            <p class="product-item__description">Laser-etched denim jacket</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sweater Products -->
            <div class="product-category" id="sweater-products">
                <h3 class="product-category__title">Sweater Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/Boys' Sweater.webp" alt="Boys' Sweater" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Boys' Sweater</h4>
                            <p class="product-item__description">Comfortable boys' sweater</p>
                        </div>
                    </div>

                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/Ladies Sweater (2).webp" alt="Ladies Sweater (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Sweater (2)</h4>
                            <p class="product-item__description">Elegant women's sweater</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Sweater/Ladies Sweater.webp" alt="Ladies Sweater" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Ladies Sweater</h4>
                            <p class="product-item__description">Premium women's sweater</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Workwear Products -->
            <div class="product-category" id="workwear-products">
                <h3 class="product-category__title">Workwear Collection</h3>
                <div class="product-category__grid">
                    <div class="product-item" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Workwear Pant.webp" alt="Workwear Pant" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Workwear Pant</h4>
                            <p class="product-item__description">Durable work pants</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Workwear Suit (2).webp" alt="Workwear Suit (2)" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Workwear Suit (2)</h4>
                            <p class="product-item__description">Professional work suit</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Workwear Suit.webp" alt="Workwear Suit" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Workwear Suit</h4>
                            <p class="product-item__description">Heavy-duty work suit</p>
                        </div>
                    </div>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="400">
                        <img src="<?php echo $baseUrl; ?>/images/Products/Workwear/Workwear.webp" alt="Workwear" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title">Workwear</h4>
                            <p class="product-item__description">Industrial workwear</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Overview Photos Section -->
    <section class="category-overview-photos">
        <div class="category-overview-photos__container">
            <div class="category-overview-photos__grid">
                <div class="category-overview-photos__photo" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dr bdxf.webp" alt="Manufacturing Process 1" class="category-overview-photos__image" id="overview-photo-1">
                </div>
                
                <div class="category-overview-photos__photo" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/bfb dbdxfb.webp" alt="Manufacturing Process 2" class="category-overview-photos__image" id="overview-photo-2">
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <div class="category-overview-photos__navigation">
                <button class="category-overview-photos__nav-btn category-overview-photos__nav-btn--prev" id="overview-prev-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <button class="category-overview-photos__nav-btn category-overview-photos__nav-btn--next" id="overview-next-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
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
