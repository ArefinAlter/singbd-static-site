<?php
require_once '../config.php';
$category = 'handicrafts';
$page_title = "Handicrafts - SingBD Products";
$page_description = "Explore SingBD's artisanal handicrafts collection showcasing traditional craftsmanship and unique designs.";
$page_keywords = "handicrafts, artisanal products, bamboo products, jute products, traditional crafts, SingBD products";
$canonical_url = $baseUrl . "/products/handicrafts.php";
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
