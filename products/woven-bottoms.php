<?php
require_once '../config.php';
$category = 'woven-bottoms';
$page_title = "Woven Bottoms - SingBD Products";
$page_description = "Explore SingBD's woven bottoms collection including trousers, pants, and skirts. Classic and contemporary bottom wear with premium quality.";
$page_keywords = "woven bottoms, trousers, pants, skirts, bottom wear, premium fabrics, SingBD products";
$canonical_url = $baseUrl . "/products/woven-bottoms.php";
include '../partials/_header.php';
include '../partials/_product_listing.php';
?>

<main class="main products">

    <?php renderProductListing($category, $productData[$category]); ?>
</main>

<?php include '../partials/_footer.php'; ?>
