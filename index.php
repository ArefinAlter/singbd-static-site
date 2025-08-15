<?php
$page_title = "Home";
include 'partials/_header.php';
?>

<main class="main">
    <h1 class="main__title">Welcome to SingBD</h1>
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero__container">
            <div class="hero__content">
                <h2 class="hero__title">Leading Manufacturer of Quality Garments</h2>
                <p class="hero__description">
                    We specialize in producing high-quality garments and textiles with a commitment to sustainable practices and innovation.
                </p>
                <div class="hero__buttons">
                    <a href="/products.php" class="btn btn--primary">View Our Products</a>
                    <a href="/contact.php" class="btn btn--secondary">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients">
        <div class="clients__container">
            <h2 class="section__title">Our Trusted Clients</h2>
            <div class="clients__grid">
                <!-- Client logos will be added here -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="about__container">
            <div class="about__content">
                <div class="about__text">
                    <h2 class="section__title">About Us</h2>
                    <p class="about__description">
                        SingBD is a leading manufacturer of high-quality garments and textiles, serving clients worldwide with innovative solutions and sustainable practices.
                    </p>
                    <a href="/about.php" class="btn btn--outline">Learn More</a>
                </div>
                <div class="about__images">
                    <!-- Sliding images will be implemented here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="services__container">
            <h2 class="section__title">What We Do</h2>
            <div class="services__tabs">
                <!-- Service tabs will be implemented here -->
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="products">
        <div class="products__container">
            <h2 class="section__title">Our Product Categories</h2>
            <div class="products__layout">
                <div class="products__categories">
                    <ul class="categories__list">
                        <li class="category__item" data-category="woven-tops">Woven Tops</li>
                        <li class="category__item" data-category="coats-jackets">Coats & Jackets</li>
                        <li class="category__item" data-category="sportswear">Sportswear</li>
                        <li class="category__item" data-category="woven-bottoms">Woven Bottoms</li>
                        <li class="category__item" data-category="knitwear">Knitwear</li>
                        <li class="category__item" data-category="homeware">Homeware</li>
                        <li class="category__item" data-category="handicrafts">Handicrafts</li>
                        <li class="category__item" data-category="accessories">Accessories</li>
                    </ul>
                </div>
                <div class="products__display">
                    <!-- Product display will be implemented here -->
                </div>
            </div>
            <div class="products__cta">
                <a href="/products.php" class="btn btn--primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="team__container">
            <h2 class="section__title">Our Team</h2>
            <div class="team__grid">
                <!-- Team members will be added here -->
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact">
        <div class="contact__container">
            <h2 class="section__title">Get in Touch</h2>
            <div class="contact__form-wrapper">
                <form class="contact__form" action="/process_contact.php" method="POST">
                    <div class="form__group">
                        <label for="fullname" class="form__label">Full Name *</label>
                        <input type="text" id="fullname" name="fullname" class="form__input" required>
                    </div>
                    
                    <div class="form__group">
                        <label for="email" class="form__label">Email Address *</label>
                        <input type="email" id="email" name="email" class="form__input" required>
                    </div>
                    
                    <div class="form__group">
                        <label for="phone" class="form__label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form__input">
                    </div>
                    
                    <div class="form__group">
                        <label for="company" class="form__label">Company</label>
                        <input type="text" id="company" name="company" class="form__input">
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
