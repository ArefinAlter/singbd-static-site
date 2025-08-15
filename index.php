<?php
$page_title = "Home";
require_once 'config.php';
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
                        and premium manufacturers worldwide. Your trusted partner in apparel sourcing.
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
                    apparel sourcing solutions worldwide.
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
            <div class="about__header">
                <div class="about__badge">
                    <svg class="about__badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <span>10 Years Experience</span>
                </div>
                <h2 class="section__title">About Us</h2>
                <p class="section__subtitle">
                    We are a dynamic buying house based in Singapore, specializing in the sourcing and production of high-quality knitwear, woven garments, outerwear, and functional outdoor apparel. We are working with homeware, accessories like bags and handicrafts.
                </p>
                <p class="about__description">
                    We are a sister concern of Fakir Apparels Ltd, in Bangladesh, one of the leading and largest privately owned multi-product knit, woven, and fabric manufacturing groups of companies.
                </p>
            </div>

            <!-- What Sets Us Apart -->
            <div class="about__features">
                <div class="about__feature">
                    <div class="about__feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                        </svg>
                    </div>
                    <h3 class="about__feature-title">Timely</h3>
                    <p class="about__feature-description">Fast and efficient delivery timelines</p>
                </div>
                <div class="about__feature">
                    <div class="about__feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="about__feature-title">Ethical</h3>
                    <p class="about__feature-description">Sustainable and responsible practices</p>
                </div>
                <div class="about__feature">
                    <div class="about__feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="about__feature-title">Quality</h3>
                    <p class="about__feature-description">Premium standards in every product</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="services__container">
            <div class="services__header">
                <h2 class="section__title">What We Do</h2>
                <p class="section__subtitle">Your End-to-End Apparel Partner</p>
            </div>

            <div class="services__grid">
                <div class="service__card">
                    <div class="service__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <h3 class="service__title">Sourcing</h3>
                    <p class="service__description">Find the perfect manufacturers for your apparel needs with our extensive global network.</p>
                </div>
                <div class="service__card">
                    <div class="service__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="service__title">QA, QC, Audits</h3>
                    <p class="service__description">Comprehensive quality assurance and control processes to ensure product excellence.</p>
                </div>
                <div class="service__card">
                    <div class="service__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 3h15v13H1z"/>
                            <path d="M16 8h4l3 3v5h-7V8z"/>
                        </svg>
                    </div>
                    <h3 class="service__title">Cross Border</h3>
                    <p class="service__description">Seamless international logistics and supply chain management across borders.</p>
                </div>
                <div class="service__card">
                    <div class="service__icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </div>
                    <h3 class="service__title">Factory Introduction</h3>
                    <p class="service__description">Connect with verified and certified manufacturing partners worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="categories" id="categories">
        <div class="categories__container">
            <h2 class="section__title">Product Categories</h2>
            
            <div class="categories__grid">
                <div class="category__item" data-category="t-shirt">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67123b9373b289c270dd4edf_Shirt.png" alt="T-shirt" class="category__icon-img">
                    </div>
                    <h3 class="category__title">T-shirt</h3>
                </div>
                <div class="category__item" data-category="jacket">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67175b2e9a179330cd55b091_A-6.png" alt="Jacket" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Jacket</h3>
                </div>
                <div class="category__item" data-category="polo-shirt">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67175aaf13725e16569eca32_C-3.png" alt="Polo Shirt" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Polo Shirt</h3>
                </div>
                <div class="category__item" data-category="vest">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67175a663d9a425749bfa7d9_C-5.png" alt="Vest" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Vest</h3>
                </div>
                <div class="category__item" data-category="tie">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67123c086cafc61cfaa3acc8_Magnifying glass.png" alt="Tie" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Tie</h3>
                </div>
                <div class="category__item" data-category="ladies-vest">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/67123b94552a03b62618572d_Pen.png" alt="Ladies Vest" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Ladies Vest</h3>
                </div>
                <div class="category__item" data-category="trousers">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/6713665b5f170efb0fc92ebc_Untitled design (23).png" alt="Trousers" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Trousers</h3>
                </div>
                <div class="category__item" data-category="shorts">
                    <div class="category__icon">
                        <img src="<?php echo $baseUrl; ?>/images/671366877b8e1b5fed85dd30_Untitled (40 x 40 px).png" alt="Shorts" class="category__icon-img">
                    </div>
                    <h3 class="category__title">Shorts</h3>
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
                        <div class="contact__form-group">
                            <label for="company" class="contact__form-label">Company</label>
                            <input type="text" id="company" name="company" class="contact__form-input" placeholder="Your company name">
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

<?php include 'partials/_footer.php'; ?>
