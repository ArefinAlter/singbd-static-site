<?php 
// Include configuration
require_once __DIR__ . '/../config.php';
?>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer__floating-elements">
            <div class="footer__floating-element footer__floating-element--1"></div>
            <div class="footer__floating-element footer__floating-element--2"></div>
            <div class="footer__floating-element footer__floating-element--3"></div>
        </div>
        <div class="footer__container">
            <div class="footer__content">
                <div class="footer__section">
                    <img src="<?php echo $baseUrl; ?>/images/SingBD-logo-Final-01.png" alt="SingBD Logo" class="footer__logo-img">
                    <h3 class="footer__title">SingBD</h3>
                    <p class="footer__description">
                        Leading manufacturer of high-quality garments and textiles, committed to sustainable practices and innovation.
                    </p>
                </div>
                
                <div class="footer__section">
                    <h4 class="footer__subtitle">Quick Links</h4>
                    <ul class="footer__links">
                        <li><a href="<?php echo $baseUrl; ?>/" class="footer__link">Home</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/products.php" class="footer__link">Products</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/about.php" class="footer__link">About</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/contact.php" class="footer__link">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer__section">
                    <h4 class="footer__subtitle">Legal</h4>
                    <ul class="footer__links">
                        <li><a href="<?php echo $baseUrl; ?>/privacy-policy.php" class="footer__link">Privacy Policy</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/terms-of-service.php" class="footer__link">Terms of Service</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/cookie-policy.php" class="footer__link">Cookie Policy</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/gdpr.php" class="footer__link">GDPR</a></li>
                    </ul>
                </div>
                
                <div class="footer__section">
                    <h4 class="footer__subtitle">Contact Info</h4>
                    <div class="footer__contact">
                        <p class="footer__contact-item">
                            <strong>Email:</strong> info@singbd.com
                        </p>
                        <p class="footer__contact-item">
                            <strong>Phone:</strong> +880 1234 567890
                        </p>
                        <p class="footer__contact-item">
                            <strong>Address:</strong> Dhaka, Bangladesh
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="footer__bottom">
                <p class="footer__copyright">
                    &copy; <?php echo date('Y'); ?> SingBD. All rights reserved.
                </p>
            </div>
        </div>
    </footer>



    <!-- JavaScript -->
    <script src="<?php echo $baseUrl; ?>/js/main.js?v=<?php echo time(); ?>"></script>
    <script src="<?php echo $baseUrl; ?>/js/world-map.js"></script>
    <script src="<?php echo $baseUrl; ?>/js/chat-widget.js"></script>
</body>
</html>
