<?php
require_once 'config.php';
$page_title = "About Us";
$page_description = "Learn about SingBD - a dynamic buying house in Singapore with 10+ years of experience in sourcing high-quality knitwear, woven garments, outerwear, and functional apparel. Sister concern of Fakir Apparels Ltd.";
$page_keywords = "about SingBD, buying house Singapore, garment sourcing, textile manufacturing, Fakir Apparels, knitwear sourcing, woven garments, outerwear, functional apparel, 10 years experience, global partners, quality assurance";
$canonical_url = $baseUrl . "/about.php";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="breadcrumbs__container">
            <ol class="breadcrumbs__nav">
                <li><a href="<?php echo $baseUrl; ?>/" class="breadcrumbs__link">Home</a></li>
                <li><span class="breadcrumbs__separator">/</span></li>
                <li><span class="breadcrumbs__current">About Us</span></li>
            </ol>
        </div>
    </nav>
    
    <!-- About Section (matching homepage structure) -->
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

    <!-- Sustainability Initiatives -->
    <section class="sustainability-initiatives">
        <div class="sustainability-initiatives__container">
            <h2 class="section__title">Our Sustainability Initiatives</h2>
            <div class="sustainability-initiatives__grid">
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="100">
                    <div class="initiative__icon">
                        <img src="<?php echo $baseUrl; ?>/images/GOTS.png" alt="GOTS Certified" class="initiative__img">
                    </div>
                    <h3 class="initiative__title">Green Manufacturing</h3>
                    <p class="initiative__description">
                        Implementing eco-friendly manufacturing processes and reducing waste generation across all our partner facilities.
                    </p>
                </div>
                
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="200">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 6h18l-2 13H5L3 6z"/>
                            <path d="M3 6l2-4h14l2 4"/>
                            <circle cx="9" cy="20" r="1"/>
                            <circle cx="20" cy="20" r="1"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Sustainable Materials</h3>
                    <p class="initiative__description">
                        Using sustainable and recycled materials in our production processes, prioritizing organic and eco-friendly fabrics.
                    </p>
                </div>
                
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="300">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Energy Efficiency</h3>
                    <p class="initiative__description">
                        Optimizing energy consumption and implementing renewable energy solutions in partnership with our manufacturing network.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values">
        <div class="values__container">
            <h2 class="section__title">Our Values</h2>
            <div class="values__grid">
                <div class="value__card" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="value__title">Quality Excellence</h3>
                    <p class="value__description">
                        We maintain the highest standards in every aspect of our operations, from sourcing to delivery.
                    </p>
                </div>
                
                <div class="value__card" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="value__title">Sustainable Practices</h3>
                    <p class="value__description">
                        Environmental responsibility is at the core of everything we do, ensuring a better future for all.
                    </p>
                </div>
                
                <div class="value__card" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="value__title">Global Partnership</h3>
                    <p class="value__description">
                        Building strong, long-term relationships between brands and manufacturers across the globe.
                    </p>
                </div>
                
                <div class="value__card" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="value__title">Innovation</h3>
                    <p class="value__description">
                        Continuously evolving our processes and technologies to meet the changing needs of the industry.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>
