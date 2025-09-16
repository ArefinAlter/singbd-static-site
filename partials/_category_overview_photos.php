<?php
// partials/_category_overview_photos.php
function renderCategoryOverviewPhotos($category) {
    global $baseUrl;
    $categoryTitle = ucwords(str_replace('-', ' ', $category));
    
    // Define overview photos for each category
    $overviewPhotos = [
        'woven-tops' => [
            'images/Website Visuals/Product Category Overview/Woven Top/_Z5A0200.webp',
            'images/Website Visuals/Product Category Overview/Woven Top/_Z5A0814.webp'
        ],
        'woven-bottoms' => [
            'images/Website Visuals/Product Category Overview/Woven Bottom/111.webp',
            'images/Website Visuals/Product Category Overview/Woven Bottom/IMG_8297.webp'
        ],
        'coats-jackets' => [
            'images/Website Visuals/Product Category Overview/Coats_&_Jacket/_Z5A0203.webp',
            'images/Website Visuals/Product Category Overview/Coats_&_Jacket/_Z5A0220.webp'
        ],
        'denim' => [
            'images/Website Visuals/Product Category Overview/Denim/106.webp',
            'images/Website Visuals/Product Category Overview/Denim/108.webp'
        ],
        'knitwear' => [
            'images/Website Visuals/Product Category Overview/Knitwear/_Z5A0200.webp',
            'images/Website Visuals/Product Category Overview/Knitwear/_Z5A0233.webp'
        ],
        'sportswear' => [
            'images/Website Visuals/Product Category Overview/Sportswear/244.webp',
            'images/Website Visuals/Product Category Overview/Sportswear/_Z5A0225.webp'
        ],
        'sweater' => [
            'images/Website Visuals/Product Category Overview/Sweater/111.webp',
            'images/Website Visuals/Product Category Overview/Sweater/_Z5A0207.webp'
        ],
        'homeware' => [
            'images/Website Visuals/Product Category Overview/Homewear/afav s.webp',
            'images/Website Visuals/Product Category Overview/Homewear/fgvdxb.webp'
        ],
        'handicrafts' => [
            'images/Website Visuals/Product Category Overview/Handicrafts/3w42.webp',
            'images/Website Visuals/Product Category Overview/Handicrafts/arfa.webp'
        ],
        'workwear' => [
            'images/Website Visuals/Product Category Overview/Workwear/q2.webp',
            'images/Website Visuals/Product Category Overview/Workwear/sfef.webp'
        ]
    ];
    
    $photos = $overviewPhotos[$category] ?? [];
    if (empty($photos)) return;
    ?>
    
    <section class="category-overview-photos">
        <div class="category-overview-photos__container">
            <div class="category-overview-photos__grid">
                <?php foreach ($photos as $index => $photo): ?>
                <div class="category-overview-photos__photo" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 200; ?>">
                    <img src="<?php echo $baseUrl; ?>/<?php echo $photo; ?>" 
                         alt="<?php echo $categoryTitle; ?> Overview Photo <?php echo $index + 1; ?>" 
                         class="category-overview-photos__image">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
}
?>
