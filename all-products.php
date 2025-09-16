<?php
require_once 'config.php';
$page_title = "All Products - SingBD";
$page_description = "Browse our complete collection of premium apparel and textile products. From woven tops to sportswear, discover quality garments for every need.";
$page_keywords = "all products, complete collection, apparel, garments, textiles, woven tops, sportswear, knitwear, homeware, handicrafts, workwear";
$canonical_url = $baseUrl . "/all-products.php";

// Include product data
include 'partials/_product_listing.php';

// Pagination settings
$products_per_page = 12;
$current_page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($current_page - 1) * $products_per_page;

// Get all products from all categories
$allProducts = [];
$categories = ['woven-tops', 'woven-bottoms', 'coats-jackets', 'denim', 'knitwear', 'sportswear', 'sweater', 'homeware', 'handicrafts', 'workwear'];

foreach ($categories as $category) {
    if (isset($productData[$category])) {
        foreach ($productData[$category] as $product) {
            $product['category'] = $category;
            $product['category_name'] = ucwords(str_replace('-', ' ', $category));
            $allProducts[] = $product;
        }
    }
}

$total_products = count($allProducts);
$total_pages = ceil($total_products / $products_per_page);
$paginated_products = array_slice($allProducts, $offset, $products_per_page);

// Debug: Uncomment the line below to see product count
// echo "<!-- Debug: Total products found: " . $total_products . " -->";

include 'partials/_header.php';
?>

<main class="main products">
    <!-- All Products Header -->
    <section class="all-products-hero">
        <div class="all-products-hero__container">
            <h1 class="all-products-hero__title">All Products</h1>
            <p class="all-products-hero__subtitle">Explore our complete collection of premium apparel and textile products</p>
            <div class="all-products-hero__stats">
                <span class="all-products-hero__stat">
                    <strong><?php echo $total_products; ?></strong> Products
                </span>
                <span class="all-products-hero__stat">
                    <strong><?php echo count($categories); ?></strong> Categories
                </span>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="all-products-grid">
        <div class="all-products-grid__container">
            <div class="all-products-grid__grid">
                <?php foreach ($paginated_products as $index => $product): ?>
                <div class="all-products-grid__item" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>" 
                     data-product-name="<?php echo htmlspecialchars($product['name']); ?>"
                     data-product-description="<?php echo htmlspecialchars($product['description']); ?>"
                     data-product-image="<?php echo $baseUrl; ?>/images/Products/<?php echo $product['image_path']; ?>"
                     data-product-category="<?php echo $product['category_name']; ?>"
                     style="cursor: pointer;">
                    <div class="all-products-grid__image-wrapper">
                        <img src="<?php echo $baseUrl; ?>/images/Products/<?php echo $product['image_path']; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>" 
                             class="all-products-grid__image">
                        <div class="all-products-grid__category-badge">
                            <?php echo $product['category_name']; ?>
                        </div>
                    </div>
                    <div class="all-products-grid__info">
                        <h3 class="all-products-grid__title"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p class="all-products-grid__description"><?php echo htmlspecialchars($product['description']); ?></p>
                        <small class="all-products-grid__hint">Click to view details</small>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <div class="all-products-pagination">
                <div class="all-products-pagination__container">
                    <?php if ($current_page > 1): ?>
                    <a href="?page=<?php echo $current_page - 1; ?>" class="all-products-pagination__btn all-products-pagination__btn--prev">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15,18 9,12 15,6"></polyline>
                        </svg>
                        Previous
                    </a>
                    <?php endif; ?>

                    <div class="all-products-pagination__pages">
                        <?php
                        $start_page = max(1, $current_page - 2);
                        $end_page = min($total_pages, $current_page + 2);
                        
                        if ($start_page > 1): ?>
                            <a href="?page=1" class="all-products-pagination__page">1</a>
                            <?php if ($start_page > 2): ?>
                                <span class="all-products-pagination__ellipsis">...</span>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                            <a href="?page=<?php echo $i; ?>" 
                               class="all-products-pagination__page <?php echo $i == $current_page ? 'all-products-pagination__page--active' : ''; ?>">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>

                        <?php if ($end_page < $total_pages): ?>
                            <?php if ($end_page < $total_pages - 1): ?>
                                <span class="all-products-pagination__ellipsis">...</span>
                            <?php endif; ?>
                            <a href="?page=<?php echo $total_pages; ?>" class="all-products-pagination__page"><?php echo $total_pages; ?></a>
                        <?php endif; ?>
                    </div>

                    <?php if ($current_page < $total_pages): ?>
                    <a href="?page=<?php echo $current_page + 1; ?>" class="all-products-pagination__btn all-products-pagination__btn--next">
                        Next
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9,18 15,12 9,6"></polyline>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
                
                <div class="all-products-pagination__info">
                    Showing <?php echo $offset + 1; ?>-<?php echo min($offset + $products_per_page, $total_products); ?> of <?php echo $total_products; ?> products
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>
