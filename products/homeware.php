<?php
require_once '../config.php';
$category = 'homeware';
$page_title = "Homeware - SingBD Products";
$page_description = "Explore SingBD's beautiful homeware collection including textiles, cushions, and home accessories for modern living.";
$page_keywords = "homeware, home textiles, cushions, bedding, home accessories, SingBD products";
$canonical_url = $baseUrl . "/products/homeware.php";
include '../partials/_header.php';
include '../partials/_product_listing.php';
?>

<main class="main products">

    <?php renderProductListing($category, $productData[$category]); ?>
</main>

<?php include '../partials/_footer.php'; ?>
