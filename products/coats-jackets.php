<?php
require_once '../config.php';
$category = 'coats-jackets';
$page_title = "Coats & Jackets - SingBD Products";
$page_description = "Explore SingBD's stylish coats and jackets collection. From lightweight jackets to heavy winter coats, premium outerwear for all seasons.";
$page_keywords = "coats, jackets, outerwear, winter coats, padded jackets, parkas, bomber jackets, SingBD products";
$canonical_url = $baseUrl . "/products/coats-jackets.php";
include '../partials/_header.php';
include '../partials/_product_listing.php';
?>

<main class="main products">

    <?php renderProductListing($category, $productData[$category]); ?>
</main>

<?php include '../partials/_footer.php'; ?>
