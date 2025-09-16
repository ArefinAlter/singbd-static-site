<?php
require_once '../config.php';
$category = 'woven-tops';
$page_title = "Woven Tops - SingBD Products";
$page_description = "Explore SingBD's premium woven tops collection including shirts, blouses, and tunics. High-quality fabrics with attention to detail and comfort.";
$page_keywords = "woven tops, shirts, blouses, tunics, premium fabrics, garment manufacturing, SingBD products";
$canonical_url = $baseUrl . "/products/woven-tops.php";
include '../partials/_header.php';
include '../partials/_product_listing.php';
include '../partials/_category_overview_photos.php';
include '../partials/_get_quote_section.php';
?>

<main class="main products">

    <?php renderProductListing($category, $productData[$category]); ?>
    
    <?php renderCategoryOverviewPhotos($category); ?>
    
    <?php renderGetQuoteSection(); ?>
</main>

<?php include '../partials/_footer.php'; ?>
