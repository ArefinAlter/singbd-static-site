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
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0722.webp" alt="SingBD Manufacturing Process" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0612.webp" alt="Quality Control Process" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0560.webp" alt="Production Facility" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0544.webp" alt="Global Partners" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="<?php echo $baseUrl; ?>/images/Website Visuals/Home Page Slides/_Z5A0216.webp" alt="Innovation and Sustainability" class="about__image">
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
                <div class="about__features-container">
                    <!-- Left Column - Tab Navigation -->
                    <div class="about__features-tabs">
                        <button class="about__feature-tab about__feature-tab--active" data-tab="timely">
                            <h3 class="about__feature-tab-title">Timely</h3>
                            <p class="about__feature-tab-description">Fast and efficient delivery timelines</p>
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
                        <div class="about__feature-photo about__feature-photo--active" id="timely-photo">
                            <img src="<?php echo $baseUrl; ?>/images/Icon/What Sets Us Apart/Timely.webp" alt="Timely Delivery" class="about__feature-photo-image">
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
