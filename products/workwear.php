<?php
require_once '../config.php';
$category = 'workwear';
$page_title = "Workwear - SingBD Products";
$page_description = "Explore SingBD's professional workwear collection. Durable, comfortable, and compliant with industry standards.";
$page_keywords = "workwear, professional clothing, safety wear, industrial clothing, work suits, SingBD products";
$canonical_url = $baseUrl . "/products/workwear.php";
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
