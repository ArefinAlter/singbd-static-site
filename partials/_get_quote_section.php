<?php
// partials/_get_quote_section.php
function renderGetQuoteSection() {
    global $baseUrl;
    ?>
    
    <!-- Get a Quote Section -->
    <section class="products-quote">
        <div class="products-quote__container">
            <div class="products-quote__content">
                <h2 class="products-quote__title">Ready to Get Started?</h2>
                <p class="products-quote__subtitle">Contact us for custom manufacturing solutions and competitive quotes</p>
                <a href="<?php echo $baseUrl; ?>/contact.php" class="btn btn--primary btn--large">Get a Quote</a>
            </div>
        </div>
    </section>
    
    <?php
}
?>
