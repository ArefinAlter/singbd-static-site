<?php
$page_title = "Home";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Hero Section -->
    <section class="hero">
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
                    <h1 class="hero__title">
                        Connecting <span class="hero__title-highlight">Global Brands</span> with Quality Manufacturers
                    </h1>
                    <p class="hero__description">
                        From our hub in Singapore, we bridge the gap between international fashion brands 
                        and premium manufacturers worldwide. Your trusted partner in apparel sourcing.
                    </p>
                    <div class="hero__buttons">
                        <a href="#services" class="btn btn--primary">
                            Explore Services
                            <svg class="btn__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#contact" class="btn btn--secondary">
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
                        <img src="/images/world-map.png" alt="World Map" class="hero__map-image">
                        <div class="hero__map-points">
                            <div class="hero__map-point" data-location="singapore">
                                <div class="hero__map-dot"></div>
                                <span class="hero__map-label">Singapore</span>
                            </div>
                            <div class="hero__map-point" data-location="bangladesh">
                                <div class="hero__map-dot"></div>
                                <span class="hero__map-label">Bangladesh</span>
                            </div>
                            <div class="hero__map-point" data-location="vietnam">
                                <div class="hero__map-dot"></div>
                                <span class="hero__map-label">Vietnam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients" id="clients">
        <div class="clients__container">
            <div class="clients__header">
                <h2 class="section__title">Our Trusted Clients</h2>
                <p class="section__subtitle">
                    We partner with leading international brands and retailers to deliver exceptional 
                    apparel sourcing solutions worldwide.
                </p>
            </div>
            <div class="clients__slider">
                <div class="clients__track">
                    <div class="clients__slide">
                        <div class="client__logo" data-client="auchan">
                            <img src="/images/auchan.png" alt="Auchan" class="client__image">
                        </div>
                        <div class="client__logo" data-client="cna">
                            <img src="/images/cna.png" alt="CNA" class="client__image">
                        </div>
                        <div class="client__logo" data-client="dragon-sourcing">
                            <img src="/images/dragon_sourcing.png" alt="Dragon Sourcing" class="client__image">
                        </div>
                        <div class="client__logo" data-client="hm">
                            <img src="/images/HM-Logo.png" alt="H&M" class="client__image">
                        </div>
                        <div class="client__logo" data-client="inditex">
                            <img src="/images/inditex.png" alt="Inditex" class="client__image">
                        </div>
                        <div class="client__logo" data-client="mudgear">
                            <img src="/images/mudgear.png" alt="MudGear" class="client__image">
                        </div>
                        <div class="client__logo" data-client="pullnbear">
                            <img src="/images/pullnbear.png" alt="Pull&Bear" class="client__image">
                        </div>
                        <div class="client__logo" data-client="sears">
                            <img src="/images/sears.png" alt="Sears" class="client__image">
                        </div>
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="clients__slide">
                        <div class="client__logo" data-client="auchan">
                            <img src="/images/auchan.png" alt="Auchan" class="client__image">
                        </div>
                        <div class="client__logo" data-client="cna">
                            <img src="/images/cna.png" alt="CNA" class="client__image">
                        </div>
                        <div class="client__logo" data-client="dragon-sourcing">
                            <img src="/images/dragon_sourcing.png" alt="Dragon Sourcing" class="client__image">
                        </div>
                        <div class="client__logo" data-client="hm">
                            <img src="/images/HM-Logo.png" alt="H&M" class="client__image">
                        </div>
                        <div class="client__logo" data-client="inditex">
                            <img src="/images/inditex.png" alt="Inditex" class="client__image">
                        </div>
                        <div class="client__logo" data-client="mudgear">
                            <img src="/images/mudgear.png" alt="MudGear" class="client__image">
                        </div>
                        <div class="client__logo" data-client="pullnbear">
                            <img src="/images/pullnbear.png" alt="Pull&Bear" class="client__image">
                        </div>
                        <div class="client__logo" data-client="sears">
                            <img src="/images/sears.png" alt="Sears" class="client__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about__container">
            <div class="about__content">
                <div class="about__text">
                    <h2 class="section__title">About Us</h2>
                    <p class="about__description">
                        SingBD is a leading manufacturer of high-quality garments and textiles, serving clients worldwide with innovative solutions and sustainable practices. We specialize in producing a wide range of garments including woven tops, coats & jackets, sportswear, knitwear, and accessories.
                    </p>
                    <p class="about__description">
                        Our state-of-the-art facilities and skilled workforce ensure that every product meets the highest standards of quality and craftsmanship. We are committed to environmental stewardship and reducing our ecological footprint through sustainable practices.
                    </p>
                    <div class="about__stats">
                        <div class="about__stat">
                            <div class="about__stat-number">15+</div>
                            <div class="about__stat-label">Years Experience</div>
                        </div>
                        <div class="about__stat">
                            <div class="about__stat-number">500+</div>
                            <div class="about__stat-label">Happy Clients</div>
                        </div>
                        <div class="about__stat">
                            <div class="about__stat-number">50+</div>
                            <div class="about__stat-label">Countries Served</div>
                        </div>
                    </div>
                    <a href="/about.php" class="btn btn--outline">Learn More</a>
                </div>
                <div class="about__images">
                    <div class="about__image-slider">
                        <div class="about__image-track">
                            <div class="about__image-slide">
                                <img src="/images/671232c93c967b1f9989734d_ADSC_6605.jpg" alt="Manufacturing Process" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="/images/671232c97d20587cf7b75155_ADSC_6579.jpg" alt="Quality Control" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="/images/671232c98bb146c1180f9b13_ADSC_6548.jpg" alt="Production Line" class="about__image">
                            </div>
                            <div class="about__image-slide">
                                <img src="/images/671762cccb51d83fc75c936d_Front Center up Blue knitting.jpg" alt="Textile Production" class="about__image">
                            </div>
                        </div>
                        <div class="about__image-controls">
                            <button class="about__image-control about__image-control--prev" aria-label="Previous image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M15 18l-6-6 6-6"/>
                                </svg>
                            </button>
                            <button class="about__image-control about__image-control--next" aria-label="Next image">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 18l6-6-6-6"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="services__container">
            <div class="services__header">
                <h2 class="section__title">What We Do</h2>
                <p class="section__subtitle">
                    Comprehensive apparel sourcing and manufacturing solutions tailored to your needs
                </p>
            </div>
            <div class="services__tabs">
                <div class="services__tab-list">
                    <button class="services__tab services__tab--active" data-tab="sourcing">
                        <svg class="services__tab-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="M21 21l-4.35-4.35"/>
                        </svg>
                        Global Sourcing
                    </button>
                    <button class="services__tab" data-tab="manufacturing">
                        <svg class="services__tab-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4"/>
                            <path d="M21 12c-1 0-2-1-2-2s1-2 2-2 2 1 2 2-1 2-2 2z"/>
                            <path d="M3 12c1 0 2-1 2-2s-1-2-2-2-2 1-2 2 1 2 2 2z"/>
                            <path d="M12 3c0 1-1 2-2 2s-2-1-2-2 1-2 2-2 2 1 2 2z"/>
                            <path d="M12 21c0-1 1-2 2-2s2 1 2 2-1 2-2 2-2-1-2-2z"/>
                        </svg>
                        Manufacturing
                    </button>
                    <button class="services__tab" data-tab="quality">
                        <svg class="services__tab-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        Quality Control
                    </button>
                    <button class="services__tab" data-tab="sustainability">
                        <svg class="services__tab-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        Sustainability
                    </button>
                </div>
                <div class="services__content">
                    <div class="services__panel services__panel--active" data-panel="sourcing">
                        <div class="services__panel-content">
                            <div class="services__panel-text">
                                <h3 class="services__panel-title">Global Sourcing Network</h3>
                                <p class="services__panel-description">
                                    We maintain a vast network of trusted manufacturers across Asia, Europe, and the Americas. Our sourcing experts identify the best partners for your specific requirements, ensuring quality, cost-effectiveness, and timely delivery.
                                </p>
                                <ul class="services__panel-features">
                                    <li>Vendor qualification and auditing</li>
                                    <li>Cost optimization and negotiation</li>
                                    <li>Supply chain transparency</li>
                                    <li>Risk management and compliance</li>
                                </ul>
                            </div>
                            <div class="services__panel-image">
                                <img src="/images/6717630ef740b09778711448_Screenshot 2024-10-19 at 3.46.07 PM.png" alt="Global Sourcing" class="services__image">
                            </div>
                        </div>
                    </div>
                    <div class="services__panel" data-panel="manufacturing">
                        <div class="services__panel-content">
                            <div class="services__panel-text">
                                <h3 class="services__panel-title">Advanced Manufacturing</h3>
                                <p class="services__panel-description">
                                    Our state-of-the-art manufacturing facilities utilize cutting-edge technology and sustainable practices. We specialize in various garment types and can handle both small-batch and large-scale production runs.
                                </p>
                                <ul class="services__panel-features">
                                    <li>Cutting-edge production technology</li>
                                    <li>Flexible manufacturing capabilities</li>
                                    <li>Custom design and development</li>
                                    <li>Efficient production planning</li>
                                </ul>
                            </div>
                            <div class="services__panel-image">
                                <img src="/images/671762f4776de5e0af934bc0_Garment factory.jpg" alt="Manufacturing" class="services__image">
                            </div>
                        </div>
                    </div>
                    <div class="services__panel" data-panel="quality">
                        <div class="services__panel-content">
                            <div class="services__panel-text">
                                <h3 class="services__panel-title">Rigorous Quality Control</h3>
                                <p class="services__panel-description">
                                    Quality is at the heart of everything we do. Our comprehensive quality control processes ensure that every product meets international standards and your specific requirements.
                                </p>
                                <ul class="services__panel-features">
                                    <li>Multi-stage quality inspections</li>
                                    <li>International standard compliance</li>
                                    <li>Material and fabric testing</li>
                                    <li>Performance and durability testing</li>
                                </ul>
                            </div>
                            <div class="services__panel-image">
                                <img src="/images/67175a663d9a425749bfa7d9_C-5.png" alt="Quality Control" class="services__image">
                            </div>
                        </div>
                    </div>
                    <div class="services__panel" data-panel="sustainability">
                        <div class="services__panel-content">
                            <div class="services__panel-text">
                                <h3 class="services__panel-title">Sustainable Practices</h3>
                                <p class="services__panel-description">
                                    We are committed to environmental responsibility and social sustainability. Our green manufacturing processes and ethical sourcing practices help reduce environmental impact while supporting local communities.
                                </p>
                                <ul class="services__panel-features">
                                    <li>Eco-friendly materials and processes</li>
                                    <li>Energy-efficient manufacturing</li>
                                    <li>Waste reduction and recycling</li>
                                    <li>Fair labor practices and compliance</li>
                                </ul>
                            </div>
                            <div class="services__panel-image">
                                <img src="/images/67175aaf13725e16569eca32_C-3.png" alt="Sustainability" class="services__image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="products" id="products">
        <div class="products__container">
            <div class="products__header">
                <h2 class="section__title">Our Product Categories</h2>
                <p class="section__subtitle">
                    Comprehensive range of high-quality garments and accessories
                </p>
            </div>
            <div class="products__layout">
                <div class="products__categories">
                    <ul class="categories__list">
                        <li class="category__item category__item--active" data-category="woven-tops">
                            <div class="category__icon">
                                <img src="/images/67123b9373b289c270dd4edf_Shirt.png" alt="Woven Tops" class="category__icon-image">
                            </div>
                            <span class="category__name">Woven Tops</span>
                        </li>
                        <li class="category__item" data-category="coats-jackets">
                            <div class="category__icon">
                                <img src="/images/67175b2e9a179330cd55b091_A-6.png" alt="Coats & Jackets" class="category__icon-image">
                            </div>
                            <span class="category__name">Coats & Jackets</span>
                        </li>
                        <li class="category__item" data-category="sportswear">
                            <div class="category__icon">
                                <img src="/images/67123b94552a03b62618572d_Pen.png" alt="Sportswear" class="category__icon-image">
                            </div>
                            <span class="category__name">Sportswear</span>
                        </li>
                        <li class="category__item" data-category="woven-bottoms">
                            <div class="category__icon">
                                <img src="/images/67123c086cafc61cfaa3acc8_Magnifying glass.png" alt="Woven Bottoms" class="category__icon-image">
                            </div>
                            <span class="category__name">Woven Bottoms</span>
                        </li>
                        <li class="category__item" data-category="knitwear">
                            <div class="category__icon">
                                <img src="/images/6713665b5f170efb0fc92ebc_Untitled design (23).png" alt="Knitwear" class="category__icon-image">
                            </div>
                            <span class="category__name">Knitwear</span>
                        </li>
                        <li class="category__item" data-category="homeware">
                            <div class="category__icon">
                                <img src="/images/671366877b8e1b5fed85dd30_Untitled (40 x 40 px).png" alt="Homeware" class="category__icon-image">
                            </div>
                            <span class="category__name">Homeware</span>
                        </li>
                        <li class="category__item" data-category="handicrafts">
                            <div class="category__icon">
                                <img src="/images/67123b9373b289c270dd4edf_Shirt.png" alt="Handicrafts" class="category__icon-image">
                            </div>
                            <span class="category__name">Handicrafts</span>
                        </li>
                        <li class="category__item" data-category="accessories">
                            <div class="category__icon">
                                <img src="/images/67123b94552a03b62618572d_Pen.png" alt="Accessories" class="category__icon-image">
                            </div>
                            <span class="category__name">Accessories</span>
                        </li>
                    </ul>
                </div>
                <div class="products__display">
                    <div class="products__content">
                        <div class="products__info">
                            <h3 class="products__category-title">Woven Tops</h3>
                            <p class="products__category-description">
                                High-quality woven tops including shirts, blouses, and tunics. Made from premium fabrics with attention to detail and comfort.
                            </p>
                            <div class="products__features">
                                <div class="products__feature">
                                    <svg class="products__feature-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                    </svg>
                                    <span>Premium cotton and silk blends</span>
                                </div>
                                <div class="products__feature">
                                    <svg class="products__feature-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                    </svg>
                                    <span>Professional and casual styles</span>
                                </div>
                                <div class="products__feature">
                                    <svg class="products__feature-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                    </svg>
                                    <span>Sustainable manufacturing</span>
                                </div>
                            </div>
                        </div>
                        <div class="products__gallery">
                            <div class="products__gallery-grid">
                                <div class="products__gallery-item">
                                    <img src="/images/671232c93c967b1f9989734d_ADSC_6605.jpg" alt="Woven Top 1" class="products__gallery-image">
                                </div>
                                <div class="products__gallery-item">
                                    <img src="/images/671232c97d20587cf7b75155_ADSC_6579.jpg" alt="Woven Top 2" class="products__gallery-image">
                                </div>
                                <div class="products__gallery-item">
                                    <img src="/images/671232c98bb146c1180f9b13_ADSC_6548.jpg" alt="Woven Top 3" class="products__gallery-image">
                                </div>
                                <div class="products__gallery-item">
                                    <img src="/images/671762cccb51d83fc75c936d_Front Center up Blue knitting.jpg" alt="Woven Top 4" class="products__gallery-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products__cta">
                <a href="/products.php" class="btn btn--primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team" id="team">
        <div class="team__container">
            <div class="team__header">
                <h2 class="section__title">Our Team</h2>
                <p class="section__subtitle">
                    Meet the experts behind our success in global apparel sourcing and manufacturing
                </p>
            </div>
            <div class="team__grid">
                <div class="team__member">
                    <div class="team__member-image">
                        <img src="/images/671232c93c967b1f9989734d_ADSC_6605.jpg" alt="Team Member" class="team__member-photo">
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Sarah Johnson</h3>
                        <p class="team__member-position">CEO & Founder</p>
                        <p class="team__member-description">
                            With over 15 years of experience in the apparel industry, Sarah leads our company with vision and expertise.
                        </p>
                    </div>
                </div>
                <div class="team__member">
                    <div class="team__member-image">
                        <img src="/images/671232c97d20587cf7b75155_ADSC_6579.jpg" alt="Team Member" class="team__member-photo">
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Michael Chen</h3>
                        <p class="team__member-position">Head of Operations</p>
                        <p class="team__member-description">
                            Michael oversees all manufacturing operations, ensuring quality and efficiency across our global network.
                        </p>
                    </div>
                </div>
                <div class="team__member">
                    <div class="team__member-image">
                        <img src="/images/671232c98bb146c1180f9b13_ADSC_6548.jpg" alt="Team Member" class="team__member-photo">
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">Emily Rodriguez</h3>
                        <p class="team__member-position">Quality Assurance Manager</p>
                        <p class="team__member-description">
                            Emily ensures that every product meets our rigorous quality standards and customer expectations.
                        </p>
                    </div>
                </div>
                <div class="team__member">
                    <div class="team__member-image">
                        <img src="/images/671762cccb51d83fc75c936d_Front Center up Blue knitting.jpg" alt="Team Member" class="team__member-photo">
                    </div>
                    <div class="team__member-info">
                        <h3 class="team__member-name">David Kim</h3>
                        <p class="team__member-position">Sustainability Director</p>
                        <p class="team__member-description">
                            David leads our sustainability initiatives, ensuring responsible practices throughout our supply chain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact" id="contact">
        <div class="contact__container">
            <div class="contact__header">
                <h2 class="section__title">Get in Touch</h2>
                <p class="section__subtitle">
                    Ready to start your next project? Let's discuss how we can help bring your vision to life.
                </p>
            </div>
            <div class="contact__form-wrapper">
                <form class="contact__form" action="/process_contact.php" method="POST">
                    <div class="form__row">
                        <div class="form__group">
                            <label for="fullname" class="form__label">Full Name *</label>
                            <input type="text" id="fullname" name="fullname" class="form__input" required>
                        </div>
                        
                        <div class="form__group">
                            <label for="email" class="form__label">Email Address *</label>
                            <input type="email" id="email" name="email" class="form__input" required>
                        </div>
                    </div>
                    
                    <div class="form__row">
                        <div class="form__group">
                            <label for="phone" class="form__label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form__input">
                        </div>
                        
                        <div class="form__group">
                            <label for="company" class="form__label">Company</label>
                            <input type="text" id="company" name="company" class="form__input">
                        </div>
                    </div>
                    
                    <div class="form__group">
                        <label for="subject" class="form__label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form__input">
                    </div>
                    
                    <div class="form__group">
                        <label for="message" class="form__label">Message *</label>
                        <textarea id="message" name="message" class="form__textarea" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn--primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>
