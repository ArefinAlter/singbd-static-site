<?php
require_once 'config.php';
$page_title = "Home";
$page_description = "SingBD - Your trusted partner in apparel sourcing. Connect with global brands and premium manufacturers worldwide for high-quality garments, textiles, and sustainable fashion solutions.";
$page_keywords = "apparel sourcing, garment manufacturing, textile manufacturing, sustainable fashion, global brands, premium manufacturers, knitwear, woven garments, outerwear, functional apparel, homeware, accessories, handicrafts, Bangladesh manufacturing, Singapore sourcing";
$canonical_url = $baseUrl . "/";
include 'partials/_header.php';
?>

<main class="main">
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
                        Connecting <span class="hero__title-highlight">Global Brands</span> with Quality Manufacturers
                    </h1>
                    <p class="hero__description">
                        From our hub in Singapore, we bridge the gap between international fashion brands 
                        and premium manufacturers worldwide. Your trusted partner in <a href="<?php echo $baseUrl; ?>/products.php" class="hero__link">apparel sourcing</a>.
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
                    <div class="hero__world-map">
                        <div id="hero-world-map"></div>
                    </div>
                </div>
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
                     <!-- First set of logos -->
                     <div class="partners__slide">
                         <a href="https://www.auchan.com" target="_blank" class="partner__logo" data-partner="auchan">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/auchan.png" alt="Auchan" class="partner__image">
                         </a>
                         <a href="https://www.cna.com" target="_blank" class="partner__logo" data-partner="cna">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/cna.png" alt="CNA" class="partner__image">
                         </a>
                         <a href="https://www.dragonsourcing.com" target="_blank" class="partner__logo" data-partner="dragon-sourcing">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/dragon_sourcing.png" alt="Dragon Sourcing" class="partner__image">
                         </a>
                         <a href="https://www.hm.com" target="_blank" class="partner__logo" data-partner="hm">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/HM-Logo.png" alt="H&M" class="partner__image">
                         </a>
                         <a href="https://www.inditex.com" target="_blank" class="partner__logo" data-partner="inditex">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/inditex.png" alt="Inditex" class="partner__image">
                         </a>
                         <a href="https://www.mudgear.com" target="_blank" class="partner__logo" data-partner="mudgear">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/mudgear.png" alt="MudGear" class="partner__image">
                         </a>
                         <a href="https://www.pullandbear.com" target="_blank" class="partner__logo" data-partner="pullnbear">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/pullnbear.png" alt="Pull&Bear" class="partner__image">
                         </a>
                         <a href="https://www.sears.com" target="_blank" class="partner__logo" data-partner="sears">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/sears.png" alt="Sears" class="partner__image">
                         </a>
                     </div>
                     
                     <!-- Gap spacer to maintain consistent spacing -->
                     <div class="partners__gap-spacer"></div>
                     
                     <!-- Duplicate set for seamless loop -->
                     <div class="partners__slide">
                         <a href="https://www.auchan.com" target="_blank" class="partner__logo" data-partner="auchan">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/auchan.png" alt="Auchan" class="partner__image">
                         </a>
                         <a href="https://www.cna.com" target="_blank" class="partner__logo" data-partner="cna">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/cna.png" alt="CNA" class="partner__image">
                         </a>
                         <a href="https://www.dragonsourcing.com" target="_blank" class="partner__logo" data-partner="dragon-sourcing">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/dragon_sourcing.png" alt="Dragon Sourcing" class="partner__image">
                         </a>
                         <a href="https://www.hm.com" target="_blank" class="partner__logo" data-partner="hm">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/HM-Logo.png" alt="H&M" class="partner__image">
                         </a>
                         <a href="https://www.inditex.com" target="_blank" class="partner__logo" data-partner="inditex">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/inditex.png" alt="Inditex" class="partner__image">
                         </a>
                         <a href="https://www.mudgear.com" target="_blank" class="partner__logo" data-partner="mudgear">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/mudgear.png" alt="MudGear" class="partner__image">
                         </a>
                         <a href="https://www.pullandbear.com" target="_blank" class="partner__logo" data-partner="pullnbear">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/pullnbear.png" alt="Pull&Bear" class="partner__image">
                         </a>
                         <a href="https://www.sears.com" target="_blank" class="partner__logo" data-partner="sears">
                             <img src="<?php echo $baseUrl; ?>/images/optimized/sears.png" alt="Sears" class="partner__image">
                         </a>
                     </div>
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
                                <img src="<?php echo $baseUrl; ?>/images/about_us1.jpeg" alt="SingBD Team" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us2.png" alt="Manufacturing Process" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us3.jpg" alt="Quality Control" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us4.jpg" alt="Production Facility" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us5.jpg" alt="Global Partners" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us6.jpg" alt="Sustainability" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/about_us7.jpg" alt="Innovation" class="about__image">
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
                            <button class="about__indicator" data-slide="5"></button>
                            <button class="about__indicator" data-slide="6"></button>
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
                        We are a dynamic buying house based in Singapore, specializing in the sourcing and production of high-quality knitwear, woven garments, outerwear, and functional outdoor apparel. We work with homeware, accessories like bags and handicrafts.
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

            <!-- What Sets Us Apart -->
            <div class="about__features-section">
                <h3 class="about__features-title">What Sets Us Apart</h3>
                <div class="about__features">
                    <div class="about__feature feature-card-1" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="600">
                        <div class="about__feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <h3 class="about__feature-title">Timely</h3>
                        <p class="about__feature-description">Fast and efficient delivery timelines</p>
                    </div>
                    
                    <div class="about__feature feature-card-2" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="600">
                        <div class="about__feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h3 class="about__feature-title">Ethical</h3>
                        <p class="about__feature-description">Sustainable and responsible practices</p>
                    </div>
                    
                    <div class="about__feature feature-card-3" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="600">
                        <div class="about__feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3 class="about__feature-title">Quality</h3>
                        <p class="about__feature-description">Premium standards in every product</p>
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
                    <img src="<?php echo $baseUrl; ?>/images/Sourcing.png" alt="Sourcing" class="what-we-do__tab-icon">
                    <span>Sourcing</span>
                </button>
                <button class="what-we-do__tab" data-tab="qa-qc">
                    <img src="<?php echo $baseUrl; ?>/images/QA_QC_Audit.png" alt="QA, QC & Audit" class="what-we-do__tab-icon">
                    <span>QA, QC & Audit</span>
                </button>
                <button class="what-we-do__tab" data-tab="cross-border">
                    <img src="<?php echo $baseUrl; ?>/images/cross_border_business.png" alt="Cross Border" class="what-we-do__tab-icon">
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
                                <img src="<?php echo $baseUrl; ?>/images/Factory_introduction.png" alt="Factory Introduction">
                            </div>
                            <h3 class="what-we-do__card-title">Factory Introduction</h3>
                            <p class="what-we-do__card-description">
                                With 20+ years of experience, SingBD connects you with top factories that meet your specific needs, ensuring quality and reliability for all your manufacturing requirements.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="200">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Product_development.png" alt="Product Development">
                            </div>
                            <h3 class="what-we-do__card-title">Product Development</h3>
                            <p class="what-we-do__card-description">
                                We transform your concepts into reality with expert guidance. From design to production, we refine ideas, source materials, and manage manufacturing, ensuring seamless execution.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="300">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Costing.png" alt="Costing">
                            </div>
                            <h3 class="what-we-do__card-title">Costing</h3>
                            <p class="what-we-do__card-description">
                                We collaborate with factories to provide accurate pricing based on your specifications. We work with your target price to achieve optimal cost-efficiency and value.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="400">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Merchendising.png" alt="Merchandising">
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
                                <img src="<?php echo $baseUrl; ?>/images/QA_QC.png" alt="Quality Control">
                            </div>
                            <h3 class="what-we-do__card-title">Quality Control</h3>
                            <p class="what-we-do__card-description">
                                We have a team of experienced QA and QC professionals. We provide in-line and final inspection services to ensure your expectations are consistently exceeded.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="200">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/factory_audit.png" alt="Factory Assessments">
                            </div>
                            <h3 class="what-we-do__card-title">Factory Assessments</h3>
                            <p class="what-we-do__card-description">
                                We perform comprehensive audit visits to factories to evaluate social and environmental compliance levels. We produce detailed reports and Corrective Action Plans (CAP).
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="300">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Compliance_audit.png" alt="Compliance Audit">
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
                                <img src="<?php echo $baseUrl; ?>/images/Consulting.png" alt="Consulting">
                            </div>
                            <h3 class="what-we-do__card-title">Consulting</h3>
                            <p class="what-we-do__card-description">
                                We provide strategic consulting services for factories, brands, and investors looking to establish manufacturing facilities, offices, or other business activities in the region.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="200">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Staff_Search.png" alt="Staff Search & Hosting">
                            </div>
                            <h3 class="what-we-do__card-title">Staff Search & Hosting</h3>
                            <p class="what-we-do__card-description">
                                We help you find qualified staff to work in Vietnam and provide comprehensive hosting services for your team members throughout their assignment in the region.
                            </p>
                        </div>
                        <div class="what-we-do__card" data-aos="fade-up" data-aos-delay="300">
                            <div class="what-we-do__card-icon">
                                <img src="<?php echo $baseUrl; ?>/images/Business_set_up.png" alt="Business Set-Up">
                            </div>
                            <h3 class="what-we-do__card-title">Business Set-Up</h3>
                            <p class="what-we-do__card-description">
                                We help companies establish their businesses in Vietnam and Cambodia, managing everything from legal setup to staff recruitment, ensuring smooth and successful market entry.
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
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Woven_Tops.svg" alt="Woven Tops" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Woven Tops</h3>
                        </div>
                        <div class="category__item" data-category="coats-jackets">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Coats_Jackets.svg" alt="Coats & Jackets" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Coats & Jackets</h3>
                        </div>
                        <div class="category__item" data-category="sportswear">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Sportswear.svg" alt="Sportswear" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Sportswear</h3>
                        </div>
                        <div class="category__item" data-category="woven-bottoms">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Woven_Bottoms.svg" alt="Woven Bottoms" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Woven Bottoms</h3>
                        </div>
                        <div class="category__item" data-category="knitwear">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Knitwear.svg" alt="Knitwear" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Knitwear</h3>
                        </div>
                        <div class="category__item" data-category="homeware">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Homewear.svg" alt="Homeware" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Homeware</h3>
                        </div>
                        <div class="category__item" data-category="handicrafts">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Handicraft.svg" alt="Handicrafts" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Handicrafts</h3>
                        </div>
                        <div class="category__item" data-category="accessories">
                            <div class="category__icon">
                                <img src="<?php echo $baseUrl; ?>/images/SVG/Accessories.svg" alt="Accessories" class="category__icon-img">
                            </div>
                            <h3 class="category__title">Accessories</h3>
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
                            <div class="categories__gallery-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Woven_Top1.jpg" alt="Woven Tops 1" class="categories__gallery-image">
                            </div>
                            <div class="categories__gallery-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Woven_Top2.jpg" alt="Woven Tops 2" class="categories__gallery-image">
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
                            <div class="categories__gallery-dot categories__gallery-dot--active"></div>
                            <div class="categories__gallery-dot"></div>
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

    <!-- Our Team Section -->
    <section class="team" id="team">
        <div class="team__container">
            <div class="team__header">
                <h2 class="section__title" data-aos="fade-up">Our Team</h2>
                <p class="section__subtitle" data-aos="fade-up" data-aos-delay="100">
                    Meet the dedicated professionals behind SingBD's success in global apparel sourcing
                </p>
            </div>
            
            <div class="team__grid">
                <div class="team__member" data-aos="fade-up" data-aos-delay="200">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Ahmed Rahman</h3>
                        <p class="team__member-position">Founder & CEO</p>
                        <p class="team__member-description">
                            With over 15 years of experience in the garment industry, Ahmed leads our mission to connect global brands with quality manufacturers.
                        </p>
                    </div>
                </div>
                
                <div class="team__member" data-aos="fade-up" data-aos-delay="300">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Sarah Lim</h3>
                        <p class="team__member-position">Sourcing Manager</p>
                        <p class="team__member-description">
                            Sarah oversees our sourcing operations across Asia, ensuring quality standards and timely delivery for all our clients.
                        </p>
                    </div>
                </div>
                
                <div class="team__member" data-aos="fade-up" data-aos-delay="400">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Mohammad Hassan</h3>
                        <p class="team__member-position">QC Coordinator</p>
                        <p class="team__member-description">
                            Mohammad ensures every product meets our rigorous quality standards through comprehensive inspection and testing protocols.
                        </p>
                    </div>
                </div>
                
                <div class="team__member" data-aos="fade-up" data-aos-delay="500">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Priya Patel</h3>
                        <p class="team__member-position">Sourcing Staff</p>
                        <p class="team__member-description">
                            Priya works closely with manufacturers to source the best materials and ensure smooth production processes.
                        </p>
                    </div>
                </div>
                
                <div class="team__member" data-aos="fade-up" data-aos-delay="600">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">David Chen</h3>
                        <p class="team__member-position">Operations Manager</p>
                        <p class="team__member-description">
                            David manages our day-to-day operations, ensuring efficient processes and excellent customer service delivery.
                        </p>
                    </div>
                </div>
                
                <div class="team__member" data-aos="fade-up" data-aos-delay="700">
                    <div class="team__member-image">
                        <svg class="team__member-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Fatima Khan</h3>
                        <p class="team__member-position">Client Relations</p>
                        <p class="team__member-description">
                            Fatima builds and maintains strong relationships with our international clients, ensuring their satisfaction and success.
                        </p>
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
                            height="300" 
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
