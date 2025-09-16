<?php
require_once '../config.php';
$category = 'knitwear';
$page_title = "Knitwear - SingBD Products";
$page_description = "Explore SingBD's soft and comfortable knitwear collection. Perfect for layering and everyday wear with premium quality materials.";
$page_keywords = "knitwear, knit tops, t-shirts, sweaters, hoodies, comfortable clothing, SingBD products";
$canonical_url = $baseUrl . "/products/knitwear.php";
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
