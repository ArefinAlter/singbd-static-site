<?php
// Product listing component for category pages
// Usage: include this file and call renderProductListing($category, $products)

function renderProductListing($category, $products) {
    global $baseUrl;
    
    $categoryTitles = [
        'woven-tops' => 'Woven Tops Collection',
        'woven-bottoms' => 'Woven Bottoms Collection', 
        'coats-jackets' => 'Coats & Jackets Collection',
        'denim' => 'Denim Collection',
        'knitwear' => 'Knitwear Collection',
        'sweater' => 'Sweater Collection',
        'sportswear' => 'Sportswear Collection',
        'homeware' => 'Homeware Collection',
        'handicrafts' => 'Handicrafts Collection',
        'workwear' => 'Workwear Collection'
    ];
    
    $categoryTitle = $categoryTitles[$category] ?? ucfirst(str_replace('-', ' ', $category)) . ' Collection';
    ?>
    
    <!-- Product Listings Section -->
    <section class="product-listings" id="product-listings">
        <div class="product-listings__container">
            <h2 class="section__title"><?php echo $categoryTitle; ?></h2>
            <p class="section__subtitle">Explore our complete collection of premium <?php echo str_replace('-', ' ', $category); ?> products</p>
            
            <div class="product-category product-category--active">
                <div class="product-category__grid">
                    <?php foreach ($products as $index => $product): ?>
                    <div class="product-item" data-aos="fade-up" data-aos-delay="<?php echo ($index + 1) * 100; ?>" 
                         data-product-name="<?php echo htmlspecialchars($product['name']); ?>"
                         data-product-description="<?php echo htmlspecialchars($product['description']); ?>"
                         data-product-image="<?php echo $baseUrl; ?>/images/Products/<?php echo $product['image_path']; ?>"
                         data-product-category="<?php echo $categoryTitle; ?>"
                         style="cursor: pointer;">
                        <img src="<?php echo $baseUrl; ?>/images/Products/<?php echo $product['image_path']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-item__image">
                        <div class="product-item__info">
                            <h4 class="product-item__title"><?php echo htmlspecialchars($product['name']); ?></h4>
                            <p class="product-item__description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <small class="product-item__hint">Click to view details</small>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Get a Quote Section -->
    <section class="products-quote">
        <div class="products-quote__container">
            <div class="products-quote__content">
                <h2 class="products-quote__title">Ready to Get Started?</h2>
                <p class="products-quote__subtitle">Contact us for custom manufacturing solutions and competitive quotes</p>
                <a href="<?php echo $baseUrl; ?>/contact.php" class="btn btn--primary btn--large">Get a Quote</a>
            </div>
        </div>
    </section>
    
    <?php
}

// Product data for each category
$productData = [
    'woven-tops' => [
        ['name' => 'Jacket', 'description' => 'Premium woven jacket', 'image_path' => 'Woven Tops/Jacket.webp'],
        ['name' => 'Kids\' Top', 'description' => 'Comfortable kids\' woven top', 'image_path' => 'Woven Tops/Kids\' Top.webp'],
        ['name' => 'Mens Jacket w Rib', 'description' => 'Men\'s jacket with rib detailing', 'image_path' => 'Woven Tops/Mens Jacket w Rib.webp'],
        ['name' => 'Mens\' Shirt (2)', 'description' => 'Classic men\'s dress shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (2).webp'],
        ['name' => 'Mens\' Shirt (3)', 'description' => 'Premium men\'s woven shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (3).webp'],
        ['name' => 'Mens\' Shirt (4)', 'description' => 'Stylish men\'s woven shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (4).webp'],
        ['name' => 'Mens\' Shirt (5)', 'description' => 'Modern men\'s woven shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (5).webp'],
        ['name' => 'Mens\' Shirt (6)', 'description' => 'Contemporary men\'s shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (6).webp'],
        ['name' => 'Mens\' Shirt (7)', 'description' => 'Elegant men\'s woven shirt', 'image_path' => 'Woven Tops/Mens\' Shirt (7).webp']
    ],
    'coats-jackets' => [
        ['name' => 'Ladies Jacket (2)', 'description' => 'Stylish women\'s jacket', 'image_path' => 'Coats & Jackets/Ladies Jacket (2).webp'],
        ['name' => 'Ladies Jacket', 'description' => 'Elegant ladies\' jacket', 'image_path' => 'Coats & Jackets/Ladies Jacket.webp'],
        ['name' => 'Ladies Puffer', 'description' => 'Women\'s puffer jacket', 'image_path' => 'Coats & Jackets/Ladies Puffer.webp'],
        ['name' => 'Long Padded Jacket', 'description' => 'Extended length padded jacket', 'image_path' => 'Coats & Jackets/Long Padded Jacket.webp'],
        ['name' => 'Padded Hoodie', 'description' => 'Warm hooded jacket', 'image_path' => 'Coats & Jackets/Padded Hoodie.webp'],
        ['name' => 'Padded Jacket (2)', 'description' => 'Premium padded jacket', 'image_path' => 'Coats & Jackets/Padded Jacket (2).webp'],
        ['name' => 'Padded Jacket (3)', 'description' => 'Insulated padded jacket', 'image_path' => 'Coats & Jackets/Padded Jacket (3).webp'],
        ['name' => 'Padded Jacket', 'description' => 'Classic padded jacket', 'image_path' => 'Coats & Jackets/Padded Jacket.webp'],
        ['name' => 'Padded Parka', 'description' => 'Warm padded parka', 'image_path' => 'Coats & Jackets/Padded Parka.webp'],
        ['name' => 'Parka', 'description' => 'Classic parka jacket', 'image_path' => 'Coats & Jackets/Parka.webp'],
        ['name' => 'Parker Jacket', 'description' => 'Stylish parker jacket', 'image_path' => 'Coats & Jackets/Parker Jacket.webp'],
        ['name' => 'PU Jacket 2', 'description' => 'Synthetic leather jacket', 'image_path' => 'Coats & Jackets/PU Jacket 2.webp'],
        ['name' => 'PU jacket 3', 'description' => 'Premium PU leather jacket', 'image_path' => 'Coats & Jackets/PU jacket 3.webp'],
        ['name' => 'PU Jacket 4', 'description' => 'Modern PU jacket', 'image_path' => 'Coats & Jackets/PU Jacket 4.webp'],
        ['name' => 'PU Jacket', 'description' => 'Classic PU leather jacket', 'image_path' => 'Coats & Jackets/PU Jacket.webp'],
        ['name' => 'Puffer Jacket', 'description' => 'Warm and comfortable puffer', 'image_path' => 'Coats & Jackets/Puffer Jacket.webp'],
        ['name' => 'Quilted & Fleece Jacket', 'description' => 'Quilted fleece combination', 'image_path' => 'Coats & Jackets/Quilted & Fleece Jacket.webp'],
        ['name' => 'Quilted Bomber', 'description' => 'Stylish bomber jacket', 'image_path' => 'Coats & Jackets/Quilted Bomber.webp'],
        ['name' => 'Quilted Parker', 'description' => 'Premium quilted parker jacket', 'image_path' => 'Coats & Jackets/Quilted Parker.webp'],
        ['name' => 'Sports Jacket', 'description' => 'Athletic performance jacket', 'image_path' => 'Coats & Jackets/Sports Jacket.webp'],
        ['name' => 'Woven Jacket 2', 'description' => 'Premium woven jacket', 'image_path' => 'Coats & Jackets/Woven Jacket 2.webp'],
        ['name' => 'Woven Jacket 3', 'description' => 'Elegant woven jacket', 'image_path' => 'Coats & Jackets/Woven Jacket 3.webp'],
        ['name' => 'Woven Jacket', 'description' => 'Classic woven jacket', 'image_path' => 'Coats & Jackets/Woven Jacket.webp'],
        ['name' => 'Woven Padded', 'description' => 'Padded woven jacket', 'image_path' => 'Coats & Jackets/Woven Padded.webp'],
        ['name' => 'Woven Top', 'description' => 'Lightweight woven jacket', 'image_path' => 'Coats & Jackets/Woven Top.webp'],
        ['name' => 'Auto Bonded Quilted', 'description' => 'Advanced quilted technology', 'image_path' => 'Coats & Jackets/Auto Bonded Quilted.webp'],
        ['name' => 'Bomber', 'description' => 'Classic bomber jacket', 'image_path' => 'Coats & Jackets/Bomber.webp'],
        ['name' => 'Fake Down Jacket (2)', 'description' => 'Synthetic down alternative', 'image_path' => 'Coats & Jackets/Fake Down Jacket (2).webp'],
        ['name' => 'Fake Down Jacket', 'description' => 'Eco-friendly down alternative', 'image_path' => 'Coats & Jackets/Fake Down Jacket.webp'],
        ['name' => 'Fleece Jacket', 'description' => 'Soft and warm fleece', 'image_path' => 'Coats & Jackets/Fleece Jacket.webp'],
        ['name' => 'Furr Jacket', 'description' => 'Luxurious fur-lined jacket', 'image_path' => 'Coats & Jackets/Furr Jacket.webp'],
        ['name' => 'Heavy Padded', 'description' => 'Extra insulated jacket', 'image_path' => 'Coats & Jackets/Heavy Padded.webp'],
        ['name' => 'Heavy Parka', 'description' => 'Heavy-duty winter parka', 'image_path' => 'Coats & Jackets/Heavy Parka.webp'],
        ['name' => 'Heavy Parker', 'description' => 'Robust parker jacket', 'image_path' => 'Coats & Jackets/Heavy Parker.webp'],
        ['name' => 'Hunter Jacket', 'description' => 'Durable hunting jacket', 'image_path' => 'Coats & Jackets/Hunter Jacket.webp']
    ],
    'sportswear' => [
        ['name' => 'Swim Short (2)', 'description' => 'Premium swim shorts', 'image_path' => 'Sportswear/Swim Short (2).webp'],
        ['name' => 'Swim Short (3)', 'description' => 'Athletic swim shorts', 'image_path' => 'Sportswear/Swim Short (3).webp'],
        ['name' => 'Swim Short', 'description' => 'Comfortable swimwear', 'image_path' => 'Sportswear/Swim Short.webp'],
        ['name' => 'Windbreaker', 'description' => 'Lightweight wind protection', 'image_path' => 'Sportswear/Windbreaker.webp'],
        ['name' => 'Padded Ski Jacket', 'description' => 'Insulated ski jacket', 'image_path' => 'Sportswear/Padded Ski Jacket.webp'],
        ['name' => 'Padded Ski Suit', 'description' => 'Warm padded ski suit', 'image_path' => 'Sportswear/Padded Ski Suit.webp'],
        ['name' => 'Ski Jacket', 'description' => 'Warm ski protection', 'image_path' => 'Sportswear/Ski Jacket.webp'],
        ['name' => 'Ski Pant', 'description' => 'Comfortable ski pants', 'image_path' => 'Sportswear/Ski Pant.webp']
    ],
    'woven-bottoms' => [
        ['name' => 'Ladies Trouser (2)', 'description' => 'Elegant women\'s woven trouser', 'image_path' => 'Woven Bottoms/Ladies Trouser (2).webp'],
        ['name' => 'Ladies Trouser', 'description' => 'Classic women\'s woven trouser', 'image_path' => 'Woven Bottoms/Ladies Trouser.webp'],
        ['name' => 'Long Pant (2)', 'description' => 'Contemporary long pants', 'image_path' => 'Woven Bottoms/Long Pant (2).webp'],
        ['name' => 'Long Pant', 'description' => 'Premium long pants', 'image_path' => 'Woven Bottoms/Long Pant.webp'],
        ['name' => 'Mens\' Trouser', 'description' => 'Classic men\'s woven trouser', 'image_path' => 'Woven Bottoms/Mens\' Trouser.webp'],
        ['name' => 'Trouser (2)', 'description' => 'Stylish woven trouser', 'image_path' => 'Woven Bottoms/Trouser (2).webp'],
        ['name' => 'Trouser (3)', 'description' => 'Modern woven trouser', 'image_path' => 'Woven Bottoms/Trouser (3).webp'],
        ['name' => 'Trouser', 'description' => 'Premium woven trouser', 'image_path' => 'Woven Bottoms/Trouser.webp'],
        ['name' => 'Twill Pant', 'description' => 'Durable twill fabric pants', 'image_path' => 'Woven Bottoms/Twill Pant.webp']
    ],
    'knitwear' => [
        ['name' => 'Fleece Jacket', 'description' => 'Warm and cozy fleece jacket', 'image_path' => 'Kintwear/Fleece Jacket.webp'],
        ['name' => 'Full Sleeve T Shirt', 'description' => 'Long sleeve knit t-shirt', 'image_path' => 'Kintwear/Full Sleeve T Shirt.webp'],
        ['name' => 'Heavy Knitted Tops', 'description' => 'Thick knit tops for warmth', 'image_path' => 'Kintwear/Heavy Knitted Tops.webp'],
        ['name' => 'Knit Hoodie', 'description' => 'Comfortable knit hoodie', 'image_path' => 'Kintwear/Knit Hoodie.webp'],
        ['name' => 'Knit Jacket (2)', 'description' => 'Premium knit jacket', 'image_path' => 'Kintwear/Knit Jacket (2).webp'],
        ['name' => 'Knit Jacket', 'description' => 'Classic knit jacket', 'image_path' => 'Kintwear/Knit Jacket.webp'],
        ['name' => 'Knit Sweater', 'description' => 'Cozy knit sweater', 'image_path' => 'Kintwear/Knit Sweater.webp'],
        ['name' => 'Knit Tops Bottom Set', 'description' => 'Matching knit top and bottom set', 'image_path' => 'Kintwear/Knit Tops Bottom Set.webp'],
        ['name' => 'Knit T-Shirt', 'description' => 'Soft knit t-shirt', 'image_path' => 'Kintwear/Knit T-Shirt.webp'],
        ['name' => 'Knitted Padded Vest (2)', 'description' => 'Insulated knit vest', 'image_path' => 'Kintwear/Knitted Padded Vest (2).webp'],
        ['name' => 'Knitted Padded Vest', 'description' => 'Warm knitted vest', 'image_path' => 'Kintwear/Knitted Padded Vest.webp'],
        ['name' => 'Knitted Sweater', 'description' => 'Traditional knitted sweater', 'image_path' => 'Kintwear/Knitted Sweater.webp'],
        ['name' => 'Laser Designed Ladies Tops', 'description' => 'Laser-cut women\'s knit tops', 'image_path' => 'Kintwear/Laser Designed Ladies Tops.webp'],
        ['name' => 'Printed T Shirt (2)', 'description' => 'Stylish printed t-shirt', 'image_path' => 'Kintwear/Printed T Shirt (2).webp'],
        ['name' => 'Printed T Shirt (3)', 'description' => 'Designer printed t-shirt', 'image_path' => 'Kintwear/Printed T Shirt (3).webp'],
        ['name' => 'Printed T Shirt', 'description' => 'Classic printed t-shirt', 'image_path' => 'Kintwear/Printed T Shirt.webp'],
        ['name' => 'Sweat Shirt', 'description' => 'Comfortable sweatshirt', 'image_path' => 'Kintwear/Sweat Shirt.webp'],
        ['name' => 'T Shirt (2)', 'description' => 'Premium knit t-shirt', 'image_path' => 'Kintwear/T Shirt (2).webp'],
        ['name' => 'T Shirt', 'description' => 'Basic knit t-shirt', 'image_path' => 'Kintwear/T Shirt.webp'],
        ['name' => 'Washed & Embroidered T Shirt', 'description' => 'Embroidered washed t-shirt', 'image_path' => 'Kintwear/Washed & Embroidered T Shirt.webp']
    ],
    'homeware' => [
        ['name' => 'Quilted Bed Spread', 'description' => 'Luxurious quilted bedding', 'image_path' => 'Homeware/Quilted Bed Spread.webp'],
        ['name' => 'Towel', 'description' => 'Soft absorbent towels', 'image_path' => 'Homeware/Towel.webp'],
        ['name' => 'Wooden Chopper', 'description' => 'Handcrafted wooden chopping board', 'image_path' => 'Homeware/Wooden Chopper.webp'],
        ['name' => 'Wooden Spoon', 'description' => 'Natural wooden kitchen utensil', 'image_path' => 'Homeware/Wooden Spoon.webp'],
        ['name' => 'Wooden Tray', 'description' => 'Elegant wooden serving tray', 'image_path' => 'Homeware/Wooden Tray.webp'],
        ['name' => 'Basket', 'description' => 'Woven storage basket', 'image_path' => 'Homeware/Basket.webp'],
        ['name' => 'Bathrobe', 'description' => 'Comfortable terry bathrobe', 'image_path' => 'Homeware/Bathrobe.webp'],
        ['name' => 'Bed Spread', 'description' => 'Premium bedding spread', 'image_path' => 'Homeware/Bed Spread.webp'],
        ['name' => 'Bowl', 'description' => 'Handcrafted serving bowl', 'image_path' => 'Homeware/Bowl.webp'],
        ['name' => 'Comforter (2)', 'description' => 'Warm winter comforter', 'image_path' => 'Homeware/Comforter (2).webp'],
        ['name' => 'Comforter', 'description' => 'Soft comfortable bedding', 'image_path' => 'Homeware/Comforter.webp'],
        ['name' => 'Curtain', 'description' => 'Elegant window curtains', 'image_path' => 'Homeware/Currtain.webp'],
        ['name' => 'Cushion Set', 'description' => 'Coordinated cushion collection', 'image_path' => 'Homeware/Cushhion Set.webp'],
        ['name' => 'Cushion Set', 'description' => 'Matching cushion set', 'image_path' => 'Homeware/Cushion Set.webp'],
        ['name' => 'Cushion', 'description' => 'Comfortable throw cushion', 'image_path' => 'Homeware/Cushion.webp'],
        ['name' => 'Decorative Cushion', 'description' => 'Stylish decorative pillow', 'image_path' => 'Homeware/Decorative Cushion.webp'],
        ['name' => 'Floor Cushion', 'description' => 'Large floor seating cushion', 'image_path' => 'Homeware/Floor Cushion.webp'],
        ['name' => 'Floor Matt (2)', 'description' => 'Premium floor mat', 'image_path' => 'Homeware/Floor Matt (2).webp'],
        ['name' => 'Floor Matt', 'description' => 'Durable floor mat', 'image_path' => 'Homeware/Floor Matt.webp'],
        ['name' => 'Pottery', 'description' => 'Handcrafted ceramic pottery', 'image_path' => 'Homeware/Pottery.webp'],
        ['name' => 'Pouf (2)', 'description' => 'Versatile ottoman pouf', 'image_path' => 'Homeware/Pouf (2).webp'],
        ['name' => 'Pouf', 'description' => 'Stylish seating pouf', 'image_path' => 'Homeware/Pouf.webp']
    ],
    'handicrafts' => [
        ['name' => 'Sleeping Bag', 'description' => 'Comfortable outdoor sleeping bag', 'image_path' => 'Handicrafts/Sleeping Bag.webp'],
        ['name' => 'Tote Bag (2)', 'description' => 'Stylish handcrafted tote bag', 'image_path' => 'Handicrafts/Tote Bag (2).webp'],
        ['name' => 'Tote Bag', 'description' => 'Eco-friendly tote bag', 'image_path' => 'Handicrafts/Tote Bag.webp'],
        ['name' => 'Wooden Fruit Tray', 'description' => 'Handcrafted wooden serving tray', 'image_path' => 'Handicrafts/Woodedn Fruit Tray.webp'],
        ['name' => 'Wooden & Jute Tool', 'description' => 'Natural fiber kitchen tools', 'image_path' => 'Handicrafts/Wooden & Jute Tool.webp'],
        ['name' => 'Bamboo Flower Pot', 'description' => 'Sustainable bamboo planter', 'image_path' => 'Handicrafts/Bamboo Flower Pot.webp'],
        ['name' => 'Bamboo Handicraft', 'description' => 'Traditional bamboo crafts', 'image_path' => 'Handicrafts/Bamboo Handicraft.webp'],
        ['name' => 'Bamboo Mattress', 'description' => 'Natural bamboo sleeping mat', 'image_path' => 'Handicrafts/Bamboo Mattress.webp'],
        ['name' => 'Bamboo Tool', 'description' => 'Eco-friendly bamboo utensils', 'image_path' => 'Handicrafts/Bamboo Tool.webp'],
        ['name' => 'Bamboo', 'description' => 'Premium bamboo products', 'image_path' => 'Handicrafts/Bamboo.webp'],
        ['name' => 'Jute Bag', 'description' => 'Sustainable jute shopping bag', 'image_path' => 'Handicrafts/Jute Bag.webp'],
        ['name' => 'Jute Basket (2)', 'description' => 'Handwoven jute storage basket', 'image_path' => 'Handicrafts/Jute Basket (2).webp'],
        ['name' => 'Jute Basket-Laundry', 'description' => 'Large jute laundry basket', 'image_path' => 'Handicrafts/Jute Basket-Laundry.webp'],
        ['name' => 'Kids\' Purse', 'description' => 'Cute handcrafted children\'s purse', 'image_path' => 'Handicrafts/Kids\' Purse.webp'],
        ['name' => 'Organizer', 'description' => 'Handcrafted storage organizer', 'image_path' => 'Handicrafts/Oraganizer.webp']
    ],
    'denim' => [
        ['name' => 'Light Weight Short', 'description' => 'Comfortable lightweight denim shorts', 'image_path' => 'Denim/Light Weight Short.webp'],
        ['name' => 'Long Pant', 'description' => 'Classic denim long pants', 'image_path' => 'Denim/Long Pant.webp'],
        ['name' => 'Pant (2)', 'description' => 'Premium denim pants', 'image_path' => 'Denim/Pant (2).webp'],
        ['name' => 'Pant', 'description' => 'Classic denim pants', 'image_path' => 'Denim/Pant.webp'],
        ['name' => 'Shirt', 'description' => 'Stylish denim shirt', 'image_path' => 'Denim/Shirt.webp'],
        ['name' => 'Shorts', 'description' => 'Casual denim shorts', 'image_path' => 'Denim/Shorts.webp'],
        ['name' => 'Cargo Shorts (2)', 'description' => 'Functional cargo denim shorts', 'image_path' => 'Denim/Cargo Shorts (2).webp'],
        ['name' => 'Cargo Shorts', 'description' => 'Multi-pocket cargo shorts', 'image_path' => 'Denim/Cargo Shorts.webp'],
        ['name' => 'Cargo Trouser', 'description' => 'Denim cargo trousers', 'image_path' => 'Denim/Cargo Trouser.webp'],
        ['name' => 'Denim with Furr Lined', 'description' => 'Warm fur-lined denim jacket', 'image_path' => 'Denim/Denim with  Furr Lined.webp'],
        ['name' => 'Destroyed Washed Jacket', 'description' => 'Distressed denim jacket', 'image_path' => 'Denim/Destroyed Washed Jacket.webp'],
        ['name' => 'Fancy Cargo Shorts', 'description' => 'Designer cargo shorts', 'image_path' => 'Denim/Fancy Cargo Shorts.webp'],
        ['name' => 'Heavy Washed Shorts (2)', 'description' => 'Heavy wash denim shorts', 'image_path' => 'Denim/Heavy Washed Shorts (2).webp'],
        ['name' => 'Heavy Washed Shorts', 'description' => 'Vintage washed denim shorts', 'image_path' => 'Denim/Heavy Washed Shorts.webp'],
        ['name' => 'Ladies Denim', 'description' => 'Women\'s denim collection', 'image_path' => 'Denim/Ladies Denim.webp'],
        ['name' => 'Laser Designed Jacket', 'description' => 'Laser-etched denim jacket', 'image_path' => 'Denim/Laser Designed Jacket.webp']
    ],
    'sweater' => [
        ['name' => 'Boys\' Sweater', 'description' => 'Comfortable boys\' sweater', 'image_path' => 'Sweater/Boys\' Sweater.webp'],
        ['name' => 'Ladies Sweater (2)', 'description' => 'Elegant women\'s sweater', 'image_path' => 'Sweater/Ladies Sweater (2).webp'],
        ['name' => 'Ladies Sweater', 'description' => 'Premium women\'s sweater', 'image_path' => 'Sweater/Ladies Sweater.webp']
    ],
    'workwear' => [
        ['name' => 'Workwear Pant', 'description' => 'Durable work pants', 'image_path' => 'Workwear/Workwear Pant.webp'],
        ['name' => 'Workwear Suit (2)', 'description' => 'Professional work suit', 'image_path' => 'Workwear/Workwear Suit (2).webp'],
        ['name' => 'Workwear Suit', 'description' => 'Heavy-duty work suit', 'image_path' => 'Workwear/Workwear Suit.webp'],
        ['name' => 'Workwear', 'description' => 'Industrial workwear', 'image_path' => 'Workwear/Workwear.webp']
    ]
];
?>
