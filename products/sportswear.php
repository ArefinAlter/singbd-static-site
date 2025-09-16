<?php
require_once '../config.php';
$category = 'sportswear';
$page_title = "Sportswear - SingBD Products";
$page_description = "Explore SingBD's performance-driven sportswear collection. Athletic wear designed for comfort and functionality during physical activities.";
$page_keywords = "sportswear, athletic wear, swimwear, ski wear, windbreakers, performance clothing, SingBD products";
$canonical_url = $baseUrl . "/products/sportswear.php";
include '../partials/_header.php';
include '../partials/_product_listing.php';
?>

<main class="main products">

    <?php renderProductListing($category, $productData[$category]); ?>
</main>

<?php include '../partials/_footer.php'; ?>
