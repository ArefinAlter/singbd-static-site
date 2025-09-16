<?php
require_once '../config.php';
$category = 'denim';
$page_title = "Denim - SingBD Products";
$page_description = "Explore SingBD's classic denim collection. Timeless style with modern comfort and durability for all occasions.";
$page_keywords = "denim, jeans, denim jackets, denim shorts, cargo pants, SingBD products";
$canonical_url = $baseUrl . "/products/denim.php";
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
