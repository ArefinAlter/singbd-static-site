<?php
require_once 'config.php';
$page_title = "Sustainability";
$page_description = "Learn about SingBD's commitment to environmental responsibility, sustainable manufacturing practices, and our 2030 sustainability goals.";
$page_keywords = "sustainability, sustainable manufacturing, environmental responsibility, GOTS certified, OEKO-TEX, Better Cotton Initiative, Cradle to Cradle, green manufacturing, eco-friendly";
$canonical_url = $baseUrl . "/sustainability.php";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs" aria-label="Breadcrumb">
        <div class="breadcrumbs__container">
            <ol class="breadcrumbs__nav">
                <li><a href="<?php echo $baseUrl; ?>/" class="breadcrumbs__link">Home</a></li>
                <li><span class="breadcrumbs__separator">/</span></li>
                <li><span class="breadcrumbs__current">Sustainability</span></li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="sustainability-hero">
        <div class="sustainability-hero__container">
            <div class="sustainability-hero__content">
                <h1 class="sustainability-hero__title">Sustainability</h1>
                <p class="sustainability-hero__subtitle">Our commitment to environmental responsibility</p>
                <h2 class="sustainability-hero__heading">Sustainable Manufacturing</h2>
                <p class="sustainability-hero__heading-subtitle">for a Better Tomorrow</p>
                <p class="sustainability-hero__description">
                    We're committed to creating high-quality garments while minimizing our environmental impact through innovative sustainable practices and responsible manufacturing.
                </p>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="certifications">
        <div class="certifications__container">
            <h2 class="section__title">Our Certifications</h2>
            <p class="section__subtitle">Recognized by leading industry organizations for our commitment to sustainability</p>
            
            <div class="certifications__grid">
                <div class="certification__card" data-aos="fade-up" data-aos-delay="100">
                    <div class="certification__icon">
                        <img src="<?php echo $baseUrl; ?>/images/GOTS.png" alt="GOTS Certified" class="certification__img">
                    </div>
                    <h3 class="certification__title">GOTS Certified</h3>
                    <div class="certification__status">Certified</div>
                    <p class="certification__description">Global Organic Textile Standard for organic fibers</p>
                </div>
                
                <div class="certification__card" data-aos="fade-up" data-aos-delay="200">
                    <div class="certification__icon">
                        <img src="<?php echo $baseUrl; ?>/images/OEKO_TEX.png" alt="OEKO-TEX Standard 100" class="certification__img">
                    </div>
                    <h3 class="certification__title">OEKO-TEX Standard 100</h3>
                    <div class="certification__status">Certified</div>
                    <p class="certification__description">Textile products tested for harmful substances</p>
                </div>
                
                <div class="certification__card" data-aos="fade-up" data-aos-delay="300">
                    <div class="certification__icon">
                        <img src="<?php echo $baseUrl; ?>/images/Better_Cotton_Initiative.png" alt="Better Cotton Initiative" class="certification__img">
                    </div>
                    <h3 class="certification__title">Better Cotton Initiative</h3>
                    <div class="certification__status">Member</div>
                    <p class="certification__description">Sustainable cotton sourcing program</p>
                </div>
                
                <div class="certification__card" data-aos="fade-up" data-aos-delay="400">
                    <div class="certification__icon">
                        <img src="<?php echo $baseUrl; ?>/images/CradletoCradleLogo.jpg" alt="Cradle to Cradle" class="certification__img">
                    </div>
                    <h3 class="certification__title">Cradle to Cradle</h3>
                    <div class="certification__status">Silver Level</div>
                    <p class="certification__description">Circular economy design methodology</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Initiatives Section -->
    <section class="initiatives">
        <div class="initiatives__container">
            <h2 class="section__title">Our Initiatives</h2>
            <p class="section__subtitle">Concrete actions we're taking to reduce our environmental footprint</p>
            
            <div class="initiatives__grid">
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="100">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Water Conservation</h3>
                    <div class="initiative__metric">40% reduction in water usage</div>
                    <p class="initiative__description">Advanced water recycling systems reduce consumption by 40%</p>
                </div>
                
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="200">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Renewable Energy</h3>
                    <div class="initiative__metric">70% renewable energy</div>
                    <p class="initiative__description">Solar panels power 70% of our manufacturing facilities</p>
                </div>
                
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="300">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 6h18l-2 13H5L3 6z"/>
                            <path d="M3 6l2-4h14l2 4"/>
                            <circle cx="9" cy="20" r="1"/>
                            <circle cx="20" cy="20" r="1"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Zero Waste Program</h3>
                    <div class="initiative__metric">95% waste diverted from landfills</div>
                    <p class="initiative__description">Fabric scraps recycled into new products and materials</p>
                </div>
                
                <div class="initiative__card" data-aos="fade-up" data-aos-delay="400">
                    <div class="initiative__icon">
                        <svg class="initiative__svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="initiative__title">Fair Labor Practices</h3>
                    <div class="initiative__metric">100% audited suppliers</div>
                    <p class="initiative__description">Ensuring ethical working conditions throughout our supply chain</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2030 Goals Section -->
    <section class="goals-2030">
        <div class="goals-2030__container">
            <h2 class="section__title">2030 Sustainability Goals</h2>
            <p class="section__subtitle">Our ambitious targets for creating a more sustainable future</p>
            
            <div class="goals-2030__grid">
                <div class="goal__card" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="goal__title">Carbon Neutral by 2030</h3>
                    <p class="goal__description">Reducing greenhouse gas emissions across operations</p>
                    <div class="goal__progress">
                        <div class="goal__progress-bar">
                            <div class="goal__progress-fill" style="width: 65%"></div>
                        </div>
                        <div class="goal__progress-text">65% Complete</div>
                    </div>
                </div>
                
                <div class="goal__card" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="goal__title">100% Sustainable Materials</h3>
                    <p class="goal__description">Transitioning to eco-friendly raw materials</p>
                    <div class="goal__progress">
                        <div class="goal__progress-bar">
                            <div class="goal__progress-fill" style="width: 80%"></div>
                        </div>
                        <div class="goal__progress-text">80% Complete</div>
                    </div>
                </div>
                
                <div class="goal__card" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="goal__title">Zero Liquid Discharge</h3>
                    <p class="goal__description">Eliminating wastewater discharge from facilities</p>
                    <div class="goal__progress">
                        <div class="goal__progress-bar">
                            <div class="goal__progress-fill" style="width: 45%"></div>
                        </div>
                        <div class="goal__progress-text">45% Complete</div>
                    </div>
                </div>
                
                <div class="goal__card" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="goal__title">Circular Supply Chain</h3>
                    <p class="goal__description">Creating closed-loop manufacturing processes</p>
                    <div class="goal__progress">
                        <div class="goal__progress-bar">
                            <div class="goal__progress-fill" style="width: 55%"></div>
                        </div>
                        <div class="goal__progress-text">55% Complete</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sustainability-cta">
        <div class="sustainability-cta__container">
            <h2 class="sustainability-cta__title">Partner with Us for Sustainable Manufacturing</h2>
            <p class="sustainability-cta__description">
                Join us in creating a more sustainable future while maintaining the highest quality standards for your garment manufacturing needs.
            </p>
            <div class="sustainability-cta__buttons">
                <a href="<?php echo $baseUrl; ?>/contact.php" class="btn btn--primary">Request Sustainability Report</a>
                <a href="#certifications" class="btn btn--secondary">Learn More About Our Practices</a>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>
