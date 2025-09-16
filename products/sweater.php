<?php
require_once '../config.php';
$category = 'sweater';
$page_title = "Sweaters - SingBD Products";
$page_description = "Explore SingBD's premium sweater collection with intricate designs and superior quality materials for all ages.";
$page_keywords = "sweaters, knit sweaters, premium sweaters, comfortable clothing, SingBD products";
$canonical_url = $baseUrl . "/products/sweater.php";
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
