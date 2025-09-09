<?php
require_once 'config.php';
$page_title = "Home";
$page_description = "SingBD - Your trusted partner in apparel sourcing. Connect with global brands and premium manufacturers worldwide for high-quality garments, textiles, and sustainable fashion solutions.";
$page_keywords = "apparel sourcing, garment manufacturing, textile manufacturing, sustainable fashion, global brands, premium manufacturers, knitwear, woven garments, outerwear, functional apparel, homeware, accessories, handicrafts, Bangladesh manufacturing, Singapore sourcing";
$canonical_url = $baseUrl . "/";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Video Overview Section -->
    <section class="video-overview" id="video-overview">
        <div class="video-overview__container">
            <div class="video-overview__content">
                <div class="video-overview__video-container">
                    <iframe 
                        class="video-overview__iframe"
                        src="https://iframe.mediadelivery.net/embed/489779/ec23caa6-8128-4870-abbf-bb57daf2e32d?autoplay=true&loop=true&muted=true&preload=true&responsive=true"
                        loading="lazy"
                        style="border:0;width:100%;height:100%;max-width:800px;aspect-ratio:16/9;"
                        allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero__background">
            <div class="hero__overlay"></div>
            <div class="hero__floating-elements">
                <div class="hero__floating-element hero__floating-element--1"></div>
                <div class="hero__floating-element hero__floating-element--2"></div>
                <div class="hero__floating-element hero__floating-element--3"></div>
            </div>
        </div>
        <div class="hero__container">
            <div class="hero__content">
                <div class="hero__text">
                    <!-- 10 Years Experience badge removed -->
                    <h1 class="hero__title">
                        Connecting <span class="hero__title-highlight">Global Brands</span> & Manufacturers
                    </h1>
                    <p class="hero__description">
                        From Singapore, we connect global fashion brands with premium manufacturers — your trusted apparel sourcing partner.
                    </p>
                    <div class="hero__buttons">
                        <a href="#services" class="hero__btn hero__btn--primary">
                            Explore Services
                            <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#contact" class="hero__btn hero__btn--secondary">
                            <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="hero__visual">
                    <div class="hero__animation">
                        <img src="<?php echo $baseUrl; ?>/images/Icon/Animation.gif" alt="SingBD Global Operations Animation" class="hero__animation-gif">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="what-we-do" id="services">
        <div class="what-we-do__container">
            <div class="what-we-do__header">
                <h2 class="section__title">What We Do</h2>
                <p class="section__subtitle">Comprehensive solutions across sourcing, quality control, and cross-border business</p>
            </div>
            
            <!-- Tab Navigation -->
            <div class="what-we-do__tabs">
                <button class="what-we-do__tab what-we-do__tab--active" data-tab="sourcing">
                    <span>Sourcing</span>
                </button>
                <button class="what-we-do__tab" data-tab="qa-qc">
                    <span>QA, QC & Audit</span>
                </button>
                <button class="what-we-do__tab" data-tab="cross-border">
                    <span>Cross Border</span>
                </button>
            </div>
            
            <!-- Tab Content -->
            <div class="what-we-do__content">
                <!-- Sourcing Tab -->
                <div class="what-we-do__panel what-we-do__panel--active" id="sourcing">
                    <div class="what-we-do__grid">
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="100">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/Factory-Intoduction.webp" alt="Factory Introduction">
                            </div>
                            <h3 class="what-we-do__card-title">Factory Introduction</h3>
                            <p class="what-we-do__card-description">
                                With 20+ years of experience, SingBD connects you with top factories that meet your specific needs, ensuring quality and reliability for all your manufacturing requirements.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="200">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/product-development.webp" alt="Product Development">
                            </div>
                            <h3 class="what-we-do__card-title">Product Development</h3>
                            <p class="what-we-do__card-description">
                                We transform your concepts into reality with expert guidance. From design to production, we refine ideas, source materials, and manage manufacturing, ensuring seamless execution.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="300">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/costing.webp" alt="Costing">
                            </div>
                            <h3 class="what-we-do__card-title">Costing</h3>
                            <p class="what-we-do__card-description">
                                We collaborate with factories to provide accurate pricing based on your specifications. We work with your target price to achieve optimal cost-efficiency and value.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="400">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/merchandising.webp" alt="Merchandising">
                            </div>
                            <h3 class="what-we-do__card-title">Merchandising</h3>
                            <p class="what-we-do__card-description">
                                We manage sampling, approvals, production planning, and shipping documentation to deliver comprehensive final landed pricing and approval samples.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- QA, QC & Audit Tab -->
                <div class="what-we-do__panel" id="qa-qc">
                    <div class="what-we-do__grid what-we-do__grid--three">
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="100">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/QC.webp" alt="Quality Control">
                            </div>
                            <h3 class="what-we-do__card-title">Quality Control</h3>
                            <p class="what-we-do__card-description">
                                We have a team of experienced QA and QC professionals. We provide in-line and final inspection services to ensure your expectations are consistently exceeded.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="200">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/Factory-Assesment.webp" alt="Factory Assessments">
                            </div>
                            <h3 class="what-we-do__card-title">Factory Assessments</h3>
                            <p class="what-we-do__card-description">
                                We perform comprehensive audit visits to factories to evaluate social and environmental compliance levels. We produce detailed reports and Corrective Action Plans (CAP).
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="300">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/Audit.webp" alt="Compliance Audit">
                            </div>
                            <h3 class="what-we-do__card-title">Compliance Audit</h3>
                            <p class="what-we-do__card-description">
                                We conduct thorough compliance audits ensuring adherence to international standards, labor regulations, and ethical manufacturing practices, providing comprehensive compliance certification.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Cross Border Tab -->
                <div class="what-we-do__panel" id="cross-border">
                    <div class="what-we-do__grid what-we-do__grid--three">
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="100">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Icon/Icons/Services/Cross-Country-Supply-Chain.webp" alt="Cross Country Supply Chain">
                            </div>
                            <h3 class="what-we-do__card-title">Cross Country Supply Chain</h3>
                            <p class="what-we-do__card-description">
                                We manage end-to-end supply chains across multiple countries, ensuring smooth coordination between sourcing, production, and delivery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
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
                
                <!-- Right Column - Product Display -->
                <div class="categories__display">
                    <div class="categories__product-info">
                        <h3 class="categories__product-title">Woven Tops</h3>
                        <p class="categories__product-description">High-quality woven tops including shirts, blouses, and tunics. Made from premium fabrics with attention to detail and comfort.</p>
                    </div>
                    
                                         <div class="categories__gallery">
                         <div class="categories__gallery-slider">
                             <!-- Woven Tops Images -->
                             <div class="categories__gallery-slide" data-category="woven-tops">
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dsrgdb.webp?v=2" alt="Woven Tops Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-tops">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/dr bdxf.webp" alt="Woven Tops Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-tops">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/bfb dbdxfb.webp" alt="Woven Tops Quality" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-tops">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/_Z5A0814.webp" alt="Woven Tops Collection" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-tops">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Top/_Z5A0200.webp" alt="Woven Tops Style" class="categories__gallery-image">
                             </div>
                             
                             <!-- Woven Bottoms Images -->
                             <div class="categories__gallery-slide" data-category="woven-bottoms">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Bottom/safv.webp" alt="Woven Bottoms Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-bottoms">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Bottom/pg nfv.webp" alt="Woven Bottoms Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-bottoms">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Bottom/IMG_8297.webp" alt="Woven Bottoms Quality" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="woven-bottoms">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Woven Bottom/111.webp" alt="Woven Bottoms Collection" class="categories__gallery-image">
                             </div>
                             
                             <!-- Coats & Jackets Images -->
                             <div class="categories__gallery-slide" data-category="coats-jackets">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Coats & Jacket/_Z5A0220.webp" alt="Coats & Jackets Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="coats-jackets">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Coats & Jacket/_Z5A0203.webp" alt="Coats & Jackets Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="coats-jackets">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Coats & Jacket/_Z5A0203 (2).webp" alt="Coats & Jackets Quality" class="categories__gallery-image">
                             </div>
                             
                             <!-- Denim Images -->
                             <div class="categories__gallery-slide" data-category="denim">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/_Z5A0203.webp" alt="Denim Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="denim">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/1dd08.webp" alt="Denim Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="denim">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/108.webp" alt="Denim Quality" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="denim">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/106wr.webp" alt="Denim Collection" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="denim">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Denim/106.webp" alt="Denim Style" class="categories__gallery-image">
                             </div>
                             
                             <!-- Knitwear Images -->
                             <div class="categories__gallery-slide" data-category="knitwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Knitwear/_Z5A0835.webp" alt="Knitwear Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="knitwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Knitwear/_Z5A0233.webp" alt="Knitwear Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="knitwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Knitwear/_Z5A0200.webp" alt="Knitwear Quality" class="categories__gallery-image">
                             </div>
                             
                             <!-- Sweater Images -->
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/fb dndb.webp" alt="Sweater Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/bfb dbdxfb.webp" alt="Sweater Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/_Z5A0724.webp" alt="Sweater Quality" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/_Z5A0207.webp" alt="Sweater Collection" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/Our Collection.webp" alt="Sweater Style" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sweater">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sweater/111.webp" alt="Sweater Fashion" class="categories__gallery-image">
                             </div>
                             
                             <!-- Sportswear Images -->
                             <div class="categories__gallery-slide" data-category="sportswear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sportswear/dsrgdb.webp" alt="Sportswear Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sportswear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sportswear/_Z5A0225.webp" alt="Sportswear Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="sportswear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Sportswear/244.webp" alt="Sportswear Quality" class="categories__gallery-image">
                             </div>
                             
                             <!-- Homeware Images -->
                             <div class="categories__gallery-slide" data-category="homeware">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Homewear/sdbb.webp" alt="Homeware Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="homeware">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Homewear/fgvdxb.webp" alt="Homeware Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="homeware">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Homewear/afav s.webp" alt="Homeware Quality" class="categories__gallery-image">
                             </div>
                             
                             <!-- Handicrafts Images -->
                             <div class="categories__gallery-slide" data-category="handicrafts">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Handicrafts/qefc.webp" alt="Handicrafts Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="handicrafts">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Handicrafts/arfa.webp" alt="Handicrafts Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="handicrafts">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Handicrafts/3w42.webp" alt="Handicrafts Quality" class="categories__gallery-image">
                             </div>
                             
                             <!-- Workwear Images -->
                             <div class="categories__gallery-slide" data-category="workwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Workwear/wef.webp" alt="Workwear Manufacturing" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="workwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Workwear/sfef.webp" alt="Workwear Process" class="categories__gallery-image">
                             </div>
                             <div class="categories__gallery-slide" data-category="workwear">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Product Category Overview/Workwear/q2.webp" alt="Workwear Quality" class="categories__gallery-image">
                             </div>
                         </div>
                        
                        <!-- Navigation Controls -->
                        <button class="categories__gallery-nav categories__gallery-nav--prev">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 18l-6-6 6-6"/>
                            </svg>
                        </button>
                        <button class="categories__gallery-nav categories__gallery-nav--next">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 18l6-6-6-6"/>
                            </svg>
                        </button>
                        
                                                 <!-- Dot Indicators -->
                         <div class="categories__gallery-controls">
                             <!-- Dots will be dynamically generated based on active category -->
                         </div>
                    </div>
                </div>
            </div>
            
            <!-- View All Products Button -->
            <div class="categories__cta">
                <a href="<?php echo $baseUrl; ?>/products.php" class="categories__cta-button">
                    View All Products
                    <svg class="categories__cta-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners" id="partners">
        <div class="partners__container">
            <div class="partners__header">
                <h2 class="section__title">Our Trusted Partners</h2>
                                    <p class="section__subtitle">
                        We partner with leading international brands and retailers to deliver exceptional 
                        <a href="<?php echo $baseUrl; ?>/products.php" class="section__link">apparel sourcing solutions</a> worldwide.
                </p>
            </div>
                         <div class="partners__slider">
                 <div class="partners__track">
                     <?php
                     // Define partners array
                     $partners = [
                         ['partner' => 'camel-active', 'image' => 'Camel-Actice.webp', 'alt' => 'Camel Active'],
                         ['partner' => 'denim-flower', 'image' => 'Denim-&-Flower.webp', 'alt' => 'Denim & Flower'],
                         ['partner' => 'switch', 'image' => 'switch-logo.webp', 'alt' => 'Switch'],
                         ['partner' => 'etossa', 'image' => 'ETOSSA.webp', 'alt' => 'ETOSSA']
                     ];
                     
                     // Generate 15 sets of logos for seamless loop
                     for ($set = 0; $set < 15; $set++) {
                         foreach ($partners as $partner) {
                             echo '<a href="#" class="partner__logo" data-partner="' . $partner['partner'] . '">';
                             echo '<img src="' . $baseUrl . '/images/Icon/Client List Logo/' . $partner['image'] . '" alt="' . $partner['alt'] . '" class="partner__image">';
                             echo '</a>';
                         }
                     }
                     ?>
                    </div>
                    </div>
                </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about__container">
            <!-- Two Column Layout -->
            <div class="about__content">
                <!-- Left Column - Image Slider -->
                <div class="about__images">
                    <div class="about__image-slider">
                                                 <div class="about__image-track">
                             <div class="about__image-slide">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0722.webp" alt="SingBD Team" class="about__image">
                             </div>
                             <div class="about__image-slide">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0612.webp" alt="Manufacturing Process" class="about__image">
                             </div>
                             <div class="about__image-slide">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0560.webp" alt="Quality Control" class="about__image">
                             </div>
                             <div class="about__image-slide">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0544.webp" alt="Production Facility" class="about__image">
                    </div>
                             <div class="about__image-slide">
                                 <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0216.webp" alt="Global Partners" class="about__image">
                    </div>
                </div>
                        <!-- Slider Controls -->
                        <button class="about__image-control about__image-control--prev" aria-label="Previous image">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="15,18 9,12 15,6"></polyline>
                            </svg>
                        </button>
                        <button class="about__image-control about__image-control--next" aria-label="Next image">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9,18 15,12 9,6"></polyline>
                        </svg>
                        </button>
                                                 <!-- Slider Indicators -->
                         <div class="about__image-indicators">
                             <button class="about__indicator about__indicator--active" data-slide="0"></button>
                             <button class="about__indicator" data-slide="1"></button>
                             <button class="about__indicator" data-slide="2"></button>
                             <button class="about__indicator" data-slide="3"></button>
                             <button class="about__indicator" data-slide="4"></button>
                    </div>
                    </div>
                </div>
                
                <!-- Right Column - Text Content -->
                <div class="about__text">
                    <div class="about__badge">
                        <svg class="about__badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span>10 Years Experience</span>
                    </div>
                    <h2 class="section__title">About Us</h2>
                    <p class="section__subtitle">
                        Based in Singapore, we are a dynamic buying house sourcing and producing premium knitwear, woven garments, outerwear, functional apparel, and lifestyle accessories.
                    </p>
                    <p class="about__description about__description--centered">
                        We are a sister concern of Fakir Apparels Ltd, in Bangladesh, one of the leading and largest privately owned multi-product knit, woven, and fabric manufacturing groups of companies.
                    </p>
                    
                    <!-- Key Stats -->
                    <div class="about__stats">
                        <div class="about__stat">
                            <div class="about__stat-number">10+</div>
                            <div class="about__stat-label">Years Experience</div>
                        </div>
                        <div class="about__stat">
                            <div class="about__stat-number">50+</div>
                            <div class="about__stat-label">Global Partners</div>
                        </div>
                        <div class="about__stat">
                            <div class="about__stat-number">100%</div>
                            <div class="about__stat-label">Quality Assured</div>
                        </div>
                    </div>
                    </div>
                </div>
                
        </div>
    </section>

    <!-- What Sets Us Apart Section -->
    <section class="about" id="what-sets-us-apart">
        <div class="about__container">
            <!-- What Sets Us Apart -->
            <div class="about__features-section">
                <h3 class="about__features-title">What Sets Us Apart</h3>
                <div class="about__features-container">
                    <!-- Left Column - Tab Navigation -->
                    <div class="about__features-tabs">
                        <button class="about__feature-tab about__feature-tab--active" data-tab="erp-driven">
                            <h3 class="about__feature-tab-title">ERP Driven</h3>
                            <p class="about__feature-tab-description">streamlined ERP for efficiency</p>
                        </button>
                        
                        <button class="about__feature-tab" data-tab="ethical">
                            <h3 class="about__feature-tab-title">Ethical</h3>
                            <p class="about__feature-tab-description">Sustainable and responsible practices</p>
                        </button>
                        
                        <button class="about__feature-tab" data-tab="quality">
                            <h3 class="about__feature-tab-title">Quality</h3>
                            <p class="about__feature-tab-description">Premium standards in every product</p>
                        </button>
                    </div>
                    
                    <!-- Right Column - Photo Display -->
                    <div class="about__features-photos">
                        <div class="about__feature-photo about__feature-photo--active" id="erp-driven-photo">
                            <img src="<?php echo $baseUrl; ?>/images/Icon/What Sets Us Apart/Timely.webp?v=3" alt="ERP Driven Efficiency" class="about__feature-photo-image">
                    </div>
                        
                        <div class="about__feature-photo" id="ethical-photo">
                            <img src="<?php echo $baseUrl; ?>/images/Icon/What Sets Us Apart/Ehical.webp" alt="Ethical Practices" class="about__feature-photo-image">
                </div>
                
                        <div class="about__feature-photo" id="quality-photo">
                            <img src="<?php echo $baseUrl; ?>/images/Icon/What Sets Us Apart/Quality.webp" alt="Quality Standards" class="about__feature-photo-image">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact__container">
            <h2 class="section__title">Contact Us</h2>
            
            <div class="contact__content">
                <!-- Contact Form -->
                <div class="contact__form-wrapper">
                    <form class="contact__form" action="<?php echo $baseUrl; ?>/process_contact.php" method="POST">
                        <div class="contact__form-row">
                            <div class="contact__form-group">
                                <label for="firstName" class="contact__form-label">First Name</label>
                                <input type="text" id="firstName" name="firstName" class="contact__form-input" placeholder="Your first name" required>
                            </div>
                            <div class="contact__form-group">
                                <label for="lastName" class="contact__form-label">Last Name</label>
                                <input type="text" id="lastName" name="lastName" class="contact__form-input" placeholder="Your last name" required>
                            </div>
                        </div>
                        <div class="contact__form-group">
                            <label for="email" class="contact__form-label">Email</label>
                            <input type="email" id="email" name="email" class="contact__form-input" placeholder="your.email@example.com" required>
                        </div>
                        <div class="contact__form-row">
                            <div class="contact__form-group">
                                <label for="company" class="contact__form-label">Company</label>
                                <input type="text" id="company" name="company" class="contact__form-input" placeholder="Your company name">
                            </div>
                            <div class="contact__form-group">
                                <label for="subject" class="contact__form-label">Subject</label>
                                <input type="text" id="subject" name="subject" class="contact__form-input" placeholder="Message subject">
                            </div>
                        </div>
                        <div class="contact__form-group">
                            <label for="message" class="contact__form-label">Message</label>
                            <textarea id="message" name="message" rows="4" class="contact__form-textarea" placeholder="Tell us about your sourcing needs..." required></textarea>
                        </div>
                        <button type="submit" class="contact__form-submit">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info and Map -->
                <div class="contact__info">
                    <div class="contact__info-card">
                        <h3 class="contact__info-title">Office Location</h3>
                        <div class="contact__info-items">
                            <div class="contact__info-item">
                                <svg class="contact__info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                                <span>100 Jln Sultan, Singapore 199001</span>
                            </div>
                            <div class="contact__info-item">
                                <svg class="contact__info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                                <span>+65 1234 5678</span>
                            </div>
                            <div class="contact__info-item">
                                <svg class="contact__info-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                                <span>info@singbd.com</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact__map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.819123456789!2d103.8583!3d1.3000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTgnMDAuMCJOIDEwM8KwNTEnMjkuOSJF!5e0!3m2!1sen!2ssg!4v1234567890"
                            width="100%" 
                            height="500" 
                            style="border: 0;" 
                            allowfullscreen 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- FAQ Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What services does SingBD offer?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SingBD offers comprehensive apparel sourcing services including knitwear, woven garments, outerwear, functional outdoor apparel, homeware, accessories, and handicrafts. We connect global brands with premium manufacturers worldwide."
                }
            },
            {
                "@type": "Question",
                "name": "Where is SingBD located?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SingBD is based in Singapore at 100 Jln Sultan, Singapore 199001. We serve clients worldwide from our strategic location."
                }
            },
            {
                "@type": "Question",
                "name": "How long has SingBD been in business?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SingBD has over 10 years of experience in apparel sourcing and manufacturing. We are a sister concern of Fakir Apparels Ltd, one of Bangladesh's leading manufacturing groups."
                }
            },
            {
                "@type": "Question",
                "name": "What quality standards does SingBD maintain?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SingBD maintains rigorous quality standards including pre-production QC, in-line QC, final QC, and multiple quality checks before shipment. We work with certified manufacturers and maintain compliance with international standards."
                }
            }
        ]
    }
    </script>

<?php include 'partials/_footer.php'; ?>