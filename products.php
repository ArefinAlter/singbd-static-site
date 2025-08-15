<?php
$page_title = "Products";
include 'partials/_header.php';
?>

<main class="main">
    <h1 class="main__title">Our Products</h1>
    
    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="breadcrumb__container">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="/" class="breadcrumb__link">Home</a>
                </li>
                <li class="breadcrumb__item">
                    <span class="breadcrumb__current">Products</span>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Products Grid -->
    <section class="products-grid">
        <div class="products-grid__container">
            <div class="products-grid__filters">
                <h2 class="section__title">Product Categories</h2>
                <ul class="filters__list">
                    <li class="filter__item">
                        <button class="filter__button filter__button--active" data-category="all">All Products</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="woven-tops">Woven Tops</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="coats-jackets">Coats & Jackets</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="sportswear">Sportswear</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="woven-bottoms">Woven Bottoms</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="knitwear">Knitwear</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="homeware">Homeware</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="handicrafts">Handicrafts</button>
                    </li>
                    <li class="filter__item">
                        <button class="filter__button" data-category="accessories">Accessories</button>
                    </li>
                </ul>
            </div>

            <div class="products-grid__content">
                <div class="products-grid__header">
                    <h2 class="section__title">Product Catalog</h2>
                    <div class="products-grid__controls">
                        <select class="products-grid__sort" id="sortProducts">
                            <option value="name-asc">Name A-Z</option>
                            <option value="name-desc">Name Z-A</option>
                            <option value="category">Category</option>
                        </select>
                    </div>
                </div>

                <div class="products-grid__items" id="productsGrid">
                    <!-- Product items will be dynamically loaded here -->
                </div>

                <div class="products-grid__pagination">
                    <button class="pagination__button pagination__button--prev" disabled>Previous</button>
                    <div class="pagination__numbers">
                        <button class="pagination__number pagination__number--active">1</button>
                        <button class="pagination__number">2</button>
                        <button class="pagination__number">3</button>
                    </div>
                    <button class="pagination__button pagination__button--next">Next</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Modal -->
    <div class="product-modal" id="productModal">
        <div class="product-modal__overlay">
            <div class="product-modal__content">
                <button class="product-modal__close" id="closeModal">&times;</button>
                <div class="product-modal__body">
                    <!-- Product details will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'partials/_footer.php'; ?>
