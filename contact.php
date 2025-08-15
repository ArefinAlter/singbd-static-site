<?php
$page_title = "Contact Us";
require_once 'config.php';
include 'partials/_header.php';
?>

<main class="main">
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

<?php include 'partials/_footer.php'; ?>
