<?php
$page_title = "Contact Us";
require_once 'config.php';
include 'partials/_header.php';
?>

<main class="main">
    <h1 class="main__title">Contact Us</h1>
    
    <!-- Contact Section -->
    <section class="contact-page">
        <div class="contact-page__container">
            <div class="contact-page__content">
                <div class="contact-page__info">
                    <h2 class="section__title">Get in Touch</h2>
                    <p class="contact-page__description">
                        We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                    </p>
                    
                    <div class="contact-page__details">
                        <div class="contact-detail">
                            <div class="contact-detail__icon">📧</div>
                            <div class="contact-detail__content">
                                <h3 class="contact-detail__title">Email</h3>
                                <p class="contact-detail__text">info@singbd.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <div class="contact-detail__icon">📞</div>
                            <div class="contact-detail__content">
                                <h3 class="contact-detail__title">Phone</h3>
                                <p class="contact-detail__text">+880 1234 567890</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <div class="contact-detail__icon">📍</div>
                            <div class="contact-detail__content">
                                <h3 class="contact-detail__title">Address</h3>
                                <p class="contact-detail__text">Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <div class="contact-detail__icon">🕒</div>
                            <div class="contact-detail__content">
                                <h3 class="contact-detail__title">Business Hours</h3>
                                <p class="contact-detail__text">Monday - Friday: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-page__form">
                    <h2 class="section__title">Send us a Message</h2>
                    <form class="contact-form" action="/process_contact.php" method="POST">
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
                            <textarea id="message" name="message" class="form__textarea" rows="6" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn--primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-section__container">
            <h2 class="section__title">Find Us</h2>
            <div class="map-section__content">
                <div class="map-section__map">
                    <!-- Google Maps or other map integration will be added here -->
                    <div class="map-placeholder">
                        <p>Map will be integrated here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>
