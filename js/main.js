// Main JavaScript file for SingBD website

document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }
    
    // Initialize all components
    initMobileMenu();
    initContactForms();
    initProductFilters();
    initSmoothScrolling();

    initAboutImageSlider();
    initWhatWeDoTabs();
    initProductCategories();
    initProductsPage();
    initQuickView();
    initAnimations();
    initHeroMapPoints();
    initPartnerSlider();
});

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileToggle = document.querySelector('.nav__mobile-toggle');
    const navMenu = document.querySelector('.nav__menu');
    
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('nav__menu--active');
            mobileToggle.classList.toggle('nav__mobile-toggle--active');
        });
    }
}

// About Section Image Slider
function initAboutImageSlider() {
    const imageTrack = document.querySelector('.about__image-track');
    const slides = document.querySelectorAll('.about__image-slide');
    const prevBtn = document.querySelector('.about__image-control--prev');
    const nextBtn = document.querySelector('.about__image-control--next');
    const indicators = document.querySelectorAll('.about__indicator');
    
    if (!imageTrack || slides.length === 0) return;
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoSlideInterval;
    
    function updateSlider() {
        const translateX = -currentSlide * 100;
        imageTrack.style.transform = `translateX(${translateX}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('about__indicator--active', index === currentSlide);
        });
        
        // Update button states (optional - remove disabled state for infinite loop)
        if (prevBtn) prevBtn.disabled = false;
        if (nextBtn) nextBtn.disabled = false;
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides; // Loop back to first slide
        updateSlider();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Loop to last slide
        updateSlider();
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }
    
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000); // 4 seconds
    }
    
    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
        }
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoSlide();
            startAutoSlide(); // Restart auto-slide
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoSlide();
            startAutoSlide(); // Restart auto-slide
        });
    }
    
    // Indicator event listeners
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            goToSlide(index);
            stopAutoSlide();
            startAutoSlide(); // Restart auto-slide
        });
    });
    
    // Pause auto-slide on hover
    const slider = document.querySelector('.about__image-slider');
    if (slider) {
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);
    }
    
    // Initialize
    updateSlider();
    startAutoSlide();
}

// What We Do Tabs Functionality
function initWhatWeDoTabs() {
    console.log('=== WHAT WE DO TABS INITIALIZATION ===');
    const tabs = document.querySelectorAll('.what-we-do__tab');
    const panels = document.querySelectorAll('.what-we-do__panel');
    
    console.log('Tabs found:', tabs.length);
    console.log('Panels found:', panels.length);
    
    if (tabs.length === 0 || panels.length === 0) {
        console.error('No tabs or panels found!');
        return;
    }
    
    // Animation timings
    const PANEL_TRANSITION_DELAY = 200;
    const CARD_STAGGER_DELAY = 100;
    
    function activateTab(targetTab, clickedTabElement) {
        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('what-we-do__tab--active'));
        
        // Add active class to clicked tab
        clickedTabElement.classList.add('what-we-do__tab--active');
        
        // Hide all panels first
        panels.forEach(p => {
            p.classList.remove('what-we-do__panel--active');
            // Reset card animations
            const cards = p.querySelectorAll('.what-we-do__card');
            cards.forEach((card, index) => {
                card.style.animation = 'none';
                card.style.opacity = '0';
                card.style.transform = 'translateY(40px)';
            });
        });
        
        // Show target panel after a short delay
        setTimeout(() => {
            const targetPanel = document.getElementById(targetTab);
            if (targetPanel) {
                targetPanel.classList.add('what-we-do__panel--active');
                
                // Animate cards with staggered delays
                const cards = targetPanel.querySelectorAll('.what-we-do__card');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.animation = `cardSlideUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards`;
                        card.style.animationDelay = `${index * CARD_STAGGER_DELAY}ms`;
                    }, index * CARD_STAGGER_DELAY);
                });
                
                // Re-trigger AOS animations for the new panel
                if (typeof AOS !== 'undefined') {
                    setTimeout(() => {
                        AOS.refresh();
                    }, 300);
                }
            }
        }, PANEL_TRANSITION_DELAY);
    }
    
    // Initialize first tab
    if (tabs.length > 0) {
        tabs[0].classList.add('what-we-do__tab--active');
    }
    if (panels.length > 0) {
        panels[0].classList.add('what-we-do__panel--active');
    }
    
    // Add click handlers
    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            const targetTab = this.getAttribute('data-tab');
            
            // Don't do anything if this tab is already active
            if (this.classList.contains('what-we-do__tab--active')) {
                return;
            }
            
            // Add ripple effect
            createRippleEffect(this, e);
            
            // Activate the tab
            activateTab(targetTab, this);
        });
        
        // Add keyboard support
        tab.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
    
    // Ripple effect for tab clicks
    function createRippleEffect(element, event) {
        const rect = element.getBoundingClientRect();
        const ripple = document.createElement('span');
        const size = Math.max(rect.width, rect.height);
        const x = event.clientX - rect.left - size / 2;
        const y = event.clientY - rect.top - size / 2;
        
        ripple.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            left: ${x}px;
            top: ${y}px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
        `;
        
        element.style.position = 'relative';
        element.style.overflow = 'hidden';
        element.appendChild(ripple);
        
        // Remove ripple after animation
        setTimeout(() => {
            if (ripple.parentNode) {
                ripple.parentNode.removeChild(ripple);
            }
        }, 600);
    }
}

// Product Categories
function initProductCategories() {
    const categoryItems = document.querySelectorAll('.category__item');
    const productTitle = document.querySelector('.categories__product-title');
    const productDescription = document.querySelector('.categories__product-description');
    const galleryGrid = document.querySelector('.categories__gallery');
    
    if (categoryItems.length === 0) return;
    
    // Product data
    const productData = {
        'woven-tops': {
            title: 'Woven Tops',
            description: 'High-quality woven tops including shirts, blouses, and tunics. Made from premium fabrics with attention to detail and comfort.',
            images: [
                'Woven_Top1.jpg',
                'Woven_Top2.jpg'
            ]
        },
        'coats-jackets': {
            title: 'Coats & Jackets',
            description: 'Stylish and functional outerwear for all seasons. From lightweight jackets to heavy winter coats.',
            images: [
                'Coats_Jacket1.jpg',
                'Coats_Jacket2.jpg'
            ]
        },
        'sportswear': {
            title: 'Sportswear',
            description: 'Performance-driven athletic wear designed for comfort and functionality during physical activities.',
            images: [
                'Sportswear1.jpg',
                'Sportswear2.jpg',
                'Sportswear3.jpg'
            ]
        },
        'woven-bottoms': {
            title: 'Woven Bottoms',
            description: 'Classic and contemporary bottom wear including trousers, pants, and skirts.',
            images: [
                'Woven_Bottoms1.jpg',
                'Woven_Bottoms2.jpg'
            ]
        },
        'knitwear': {
            title: 'Knitwear',
            description: 'Soft and comfortable knit garments perfect for layering and everyday wear.',
            images: [
                'Knitwear1.jpg',
                'Knitwear2.jpg'
            ]
        },
        'homeware': {
            title: 'Homeware',
            description: 'Beautiful and functional home textiles and accessories for modern living.',
            images: [
                'Homewear1.jpg',
                'Homewear2.jpg'
            ]
        },
        'handicrafts': {
            title: 'Handicrafts',
            description: 'Artisanal handcrafted items showcasing traditional craftsmanship and unique designs.',
            images: [
                'Handicrafts1.jpg',
                'Handicrafts2.jpg'
            ]
        },
        'accessories': {
            title: 'Accessories',
            description: 'Stylish accessories to complement any outfit and enhance personal style.',
            images: [
                'Accessories1.jpeg',
                'Accessories2.jpg',
                'Accessories3.jpg'
            ]
        }
    };
    
    function updateProductDisplay(category) {
        const data = productData[category];
        if (!data) return;
        
        // Update title and description
        if (productTitle) productTitle.textContent = data.title;
        if (productDescription) productDescription.textContent = data.description;
        

        
        // Update gallery slider
        if (galleryGrid) {
            const slider = galleryGrid.querySelector('.categories__gallery-slider');
            const controls = galleryGrid.querySelector('.categories__gallery-controls');
            
            if (slider) {
                slider.innerHTML = data.images.map((image, index) => `
                    <div class="categories__gallery-slide">
                        <img src="/singbd-static-site/images/${image}" alt="${data.title} ${index + 1}" class="categories__gallery-image">
                    </div>
                `).join('');
            }
            
            if (controls) {
                controls.innerHTML = data.images.map((_, index) => `
                    <div class="categories__gallery-dot ${index === 0 ? 'categories__gallery-dot--active' : ''}" data-slide="${index}"></div>
                `).join('');
            }
            
            // Reset slider position
            if (slider) {
                slider.style.transform = 'translateX(0)';
            }
            
            // Reinitialize slider functionality
            initCategorySlider();
        }
    }
    
    categoryItems.forEach(item => {
        item.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Remove active class from all items
            categoryItems.forEach(i => i.classList.remove('category__item--active'));
            
            // Add active class to clicked item
            this.classList.add('category__item--active');
            
            // Update product display
            updateProductDisplay(category);
        });
    });
    
    // Initialize slider for first category
    initCategorySlider();
}

// Products Page Functionality
function initProductsPage() {
    const categoryItems = document.querySelectorAll('.products-category__item');
    const productsGrid = document.getElementById('products-grid');
    const mainProductImage = document.getElementById('main-product-image');
    const mainProductTitle = document.getElementById('main-product-title');
    const mainProductDescription = document.getElementById('main-product-description');
    const mainProductCategory = document.getElementById('main-product-category');
    const mainProductCode = document.getElementById('main-product-code');
    const mainProductCategoryBreadcrumb = document.getElementById('main-product-category-breadcrumb');
    const mainProductTitleBreadcrumb = document.getElementById('main-product-title-breadcrumb');
    
    if (categoryItems.length === 0) return;
    
    // Product data for each category
    const productData = {
        'woven-tops': [
            {
                title: 'Premium Cotton Shirt',
                description: 'High-quality cotton shirt with modern fit and comfortable design. Perfect for both casual and professional settings.',
                image: '/singbd-static-site/images/Woven_Top1.jpg',
                category: 'Woven Tops',
                code: 'WT-001',
                features: ['Premium cotton fabric', 'Modern fit design', 'Easy care maintenance']
            },
            {
                title: 'Silk Blend Blouse',
                description: 'Elegant silk blend blouse for professional wear with sophisticated styling and premium finish.',
                image: '/singbd-static-site/images/Woven_Top2.jpg',
                category: 'Woven Tops',
                code: 'WT-002',
                features: ['Silk blend fabric', 'Professional styling', 'Wrinkle resistant']
            },
            {
                title: 'Casual Linen Top',
                description: 'Comfortable linen top for everyday wear with breathable fabric and relaxed fit.',
                image: '/singbd-static-site/images/Woven_Top1.jpg',
                category: 'Woven Tops',
                code: 'WT-003',
                features: ['Natural linen fabric', 'Breathable design', 'Casual comfort']
            },
            {
                title: 'Formal Dress Shirt',
                description: 'Classic formal shirt for business occasions with crisp finish and professional appearance.',
                image: '/singbd-static-site/images/Woven_Top2.jpg',
                category: 'Woven Tops',
                code: 'WT-004',
                features: ['Crisp cotton fabric', 'Professional fit', 'Easy ironing']
            },
            {
                title: 'Summer Tunic',
                description: 'Lightweight tunic perfect for summer with flowy design and comfortable styling.',
                image: '/singbd-static-site/images/Woven_Top1.jpg',
                category: 'Woven Tops',
                code: 'WT-005',
                features: ['Lightweight fabric', 'Flowy design', 'Summer comfort']
            },
            {
                title: 'Oxford Button-Down',
                description: 'Timeless oxford shirt with button-down collar and classic styling for versatile wear.',
                image: '/singbd-static-site/images/Woven_Top2.jpg',
                category: 'Woven Tops',
                code: 'WT-006',
                features: ['Oxford cotton fabric', 'Button-down collar', 'Classic styling']
            }
        ],
        'coats-jackets': [
            {
                title: 'Winter Wool Coat',
                description: 'Warm wool coat for cold weather with premium insulation and elegant design.',
                image: '/singbd-static-site/images/Coats_Jacket1.jpg',
                category: 'Coats & Jackets',
                code: 'CJ-001',
                features: ['Premium wool fabric', 'Warm insulation', 'Elegant design']
            },
            {
                title: 'Leather Jacket',
                description: 'Classic leather jacket with modern styling and durable construction for long-lasting wear.',
                image: '/singbd-static-site/images/Coats_Jacket2.jpg',
                category: 'Coats & Jackets',
                code: 'CJ-002',
                features: ['Genuine leather', 'Modern styling', 'Durable construction']
            },
            {
                title: 'Trench Coat',
                description: 'Elegant trench coat for formal occasions with sophisticated design and weather protection.',
                image: '/singbd-static-site/images/Coats_Jacket1.jpg',
                category: 'Coats & Jackets',
                code: 'CJ-003',
                features: ['Water-resistant fabric', 'Sophisticated design', 'Weather protection']
            },
            {
                title: 'Denim Jacket',
                description: 'Casual denim jacket for everyday wear with comfortable fit and classic styling.',
                image: '/singbd-static-site/images/Coats_Jacket2.jpg',
                category: 'Coats & Jackets',
                code: 'CJ-004',
                features: ['Premium denim', 'Comfortable fit', 'Classic styling']
            },
            {
                title: 'Puffer Jacket',
                description: 'Lightweight puffer jacket for outdoor activities with excellent insulation and mobility.',
                image: '/singbd-static-site/images/Coats_Jacket1.jpg',
                category: 'Coats & Jackets',
                code: 'CJ-005',
                features: ['Lightweight insulation', 'Outdoor ready', 'High mobility']
            }
        ],
        'sportswear': [
            {
                title: 'Performance T-Shirt',
                description: 'Moisture-wicking performance t-shirt designed for athletic activities and comfort.',
                image: '/singbd-static-site/images/Sportswear1.jpg',
                category: 'Sportswear',
                code: 'SW-001',
                features: ['Moisture-wicking fabric', 'Performance fit', 'Quick drying']
            },
            {
                title: 'Athletic Shorts',
                description: 'Comfortable athletic shorts for training with stretch fabric and secure fit.',
                image: '/singbd-static-site/images/Sportswear2.jpg',
                category: 'Sportswear',
                code: 'SW-002',
                features: ['Stretch fabric', 'Secure fit', 'Training ready']
            },
            {
                title: 'Track Jacket',
                description: 'Lightweight track jacket for outdoor sports with breathable design and mobility.',
                image: '/singbd-static-site/images/Sportswear3.jpg',
                category: 'Sportswear',
                code: 'SW-003',
                features: ['Lightweight fabric', 'Breathable design', 'High mobility']
            },
            {
                title: 'Leggings',
                description: 'High-performance leggings for yoga and fitness with compression and flexibility.',
                image: '/singbd-static-site/images/Sportswear1.jpg',
                category: 'Sportswear',
                code: 'SW-004',
                features: ['Compression fit', 'High flexibility', 'Performance fabric']
            },
            {
                title: 'Hoodie',
                description: 'Comfortable hoodie for casual workouts with soft fabric and relaxed fit.',
                image: '/singbd-static-site/images/Sportswear2.jpg',
                category: 'Sportswear',
                code: 'SW-005',
                features: ['Soft fabric', 'Relaxed fit', 'Casual comfort']
            }
        ],
        'woven-bottoms': [
            {
                title: 'Classic Trousers',
                description: 'Professional trousers with perfect fit and comfortable design for business wear.',
                image: '/singbd-static-site/images/Woven_Bottoms1.jpg',
                category: 'Woven Bottoms',
                code: 'WB-001',
                features: ['Professional fit', 'Comfortable design', 'Business ready']
            },
            {
                title: 'Casual Pants',
                description: 'Comfortable casual pants with relaxed fit and versatile styling for everyday wear.',
                image: '/singbd-static-site/images/Woven_Bottoms2.jpg',
                category: 'Woven Bottoms',
                code: 'WB-002',
                features: ['Relaxed fit', 'Versatile styling', 'Everyday comfort']
            },
            {
                title: 'Formal Skirt',
                description: 'Elegant formal skirt with sophisticated design and professional appearance.',
                image: '/singbd-static-site/images/Woven_Bottoms1.jpg',
                category: 'Woven Bottoms',
                code: 'WB-003',
                features: ['Elegant design', 'Sophisticated styling', 'Professional look']
            },
            {
                title: 'Cargo Pants',
                description: 'Functional cargo pants with multiple pockets and durable construction.',
                image: '/singbd-static-site/images/Woven_Bottoms2.jpg',
                category: 'Woven Bottoms',
                code: 'WB-004',
                features: ['Multiple pockets', 'Durable construction', 'Functional design']
            },
            {
                title: 'Pleated Trousers',
                description: 'Classic pleated trousers with timeless design and comfortable fit.',
                image: '/singbd-static-site/images/Woven_Bottoms1.jpg',
                category: 'Woven Bottoms',
                code: 'WB-005',
                features: ['Timeless design', 'Comfortable fit', 'Classic styling']
            }
        ],
        'knitwear': [
            {
                title: 'Cashmere Sweater',
                description: 'Luxurious cashmere sweater with soft texture and elegant design for premium comfort.',
                image: '/singbd-static-site/images/Knitwear1.jpg',
                category: 'Knitwear',
                code: 'KW-001',
                features: ['Luxurious cashmere', 'Soft texture', 'Elegant design']
            },
            {
                title: 'Cotton Cardigan',
                description: 'Comfortable cotton cardigan with versatile styling and easy care maintenance.',
                image: '/singbd-static-site/images/Knitwear2.jpg',
                category: 'Knitwear',
                code: 'KW-002',
                features: ['Comfortable cotton', 'Versatile styling', 'Easy care']
            },
            {
                title: 'Wool Pullover',
                description: 'Warm wool pullover with cozy design and excellent insulation for cold weather.',
                image: '/singbd-static-site/images/Knitwear1.jpg',
                category: 'Knitwear',
                code: 'KW-003',
                features: ['Warm wool', 'Cozy design', 'Excellent insulation']
            },
            {
                title: 'Lace Knit Top',
                description: 'Delicate lace knit top with feminine design and breathable fabric.',
                image: '/singbd-static-site/images/Knitwear2.jpg',
                category: 'Knitwear',
                code: 'KW-004',
                features: ['Delicate lace', 'Feminine design', 'Breathable fabric']
            },
            {
                title: 'Ribbed Sweater',
                description: 'Classic ribbed sweater with textured design and comfortable stretch fit.',
                image: '/singbd-static-site/images/Knitwear1.jpg',
                category: 'Knitwear',
                code: 'KW-005',
                features: ['Textured design', 'Stretch fit', 'Classic styling']
            }
        ],
        'homeware': [
            {
                title: 'Cotton Bedding Set',
                description: 'Premium cotton bedding set with soft texture and elegant design for comfortable sleep.',
                image: '/singbd-static-site/images/Homewear1.jpg',
                category: 'Homeware',
                code: 'HW-001',
                features: ['Premium cotton', 'Soft texture', 'Elegant design']
            },
            {
                title: 'Linen Tablecloth',
                description: 'Natural linen tablecloth with sophisticated design and easy care maintenance.',
                image: '/singbd-static-site/images/Homewear2.jpg',
                category: 'Homeware',
                code: 'HW-002',
                features: ['Natural linen', 'Sophisticated design', 'Easy care']
            },
            {
                title: 'Silk Cushions',
                description: 'Luxurious silk cushions with elegant design and premium finish for home decoration.',
                image: '/singbd-static-site/images/Homewear1.jpg',
                category: 'Homeware',
                code: 'HW-003',
                features: ['Luxurious silk', 'Elegant design', 'Premium finish']
            },
            {
                title: 'Cotton Towels',
                description: 'Absorbent cotton towels with soft texture and quick drying properties.',
                image: '/singbd-static-site/images/Homewear2.jpg',
                category: 'Homeware',
                code: 'HW-004',
                features: ['Absorbent cotton', 'Soft texture', 'Quick drying']
            },
            {
                title: 'Wool Blanket',
                description: 'Warm wool blanket with cozy design and excellent insulation for cold weather.',
                image: '/singbd-static-site/images/Homewear1.jpg',
                category: 'Homeware',
                code: 'HW-005',
                features: ['Warm wool', 'Cozy design', 'Excellent insulation']
            }
        ],
        'handicrafts': [
            {
                title: 'Embroidered Cushion',
                description: 'Handcrafted embroidered cushion with traditional techniques and unique design.',
                image: '/singbd-static-site/images/Handicrafts1.jpg',
                category: 'Handicrafts',
                code: 'HC-001',
                features: ['Handcrafted', 'Traditional techniques', 'Unique design']
            },
            {
                title: 'Woven Basket',
                description: 'Artisanal woven basket with natural materials and traditional craftsmanship.',
                image: '/singbd-static-site/images/Handicrafts2.jpg',
                category: 'Handicrafts',
                code: 'HC-002',
                features: ['Natural materials', 'Traditional craftsmanship', 'Artisanal quality']
            },
            {
                title: 'Ceramic Vase',
                description: 'Handcrafted ceramic vase with unique glaze and artistic design.',
                image: '/singbd-static-site/images/Handicrafts1.jpg',
                category: 'Handicrafts',
                code: 'HC-003',
                features: ['Handcrafted ceramic', 'Unique glaze', 'Artistic design']
            },
            {
                title: 'Leather Bag',
                description: 'Handcrafted leather bag with premium materials and traditional techniques.',
                image: '/singbd-static-site/images/Handicrafts2.jpg',
                category: 'Handicrafts',
                code: 'HC-004',
                features: ['Premium leather', 'Traditional techniques', 'Handcrafted quality']
            },
            {
                title: 'Wooden Bowl',
                description: 'Artisanal wooden bowl with natural finish and traditional woodworking techniques.',
                image: '/singbd-static-site/images/Handicrafts1.jpg',
                category: 'Handicrafts',
                code: 'HC-005',
                features: ['Natural finish', 'Traditional techniques', 'Artisanal quality']
            }
        ],
        'accessories': [
            {
                title: 'Leather Wallet',
                description: 'Premium leather wallet with multiple compartments and durable construction.',
                image: '/singbd-static-site/images/Accessories1.jpeg',
                category: 'Accessories',
                code: 'AC-001',
                features: ['Premium leather', 'Multiple compartments', 'Durable construction']
            },
            {
                title: 'Silk Scarf',
                description: 'Luxurious silk scarf with elegant design and versatile styling options.',
                image: '/singbd-static-site/images/Accessories2.jpg',
                category: 'Accessories',
                code: 'AC-002',
                features: ['Luxurious silk', 'Elegant design', 'Versatile styling']
            },
            {
                title: 'Leather Belt',
                description: 'Classic leather belt with adjustable fit and timeless design.',
                image: '/singbd-static-site/images/Accessories3.jpg',
                category: 'Accessories',
                code: 'AC-003',
                features: ['Classic leather', 'Adjustable fit', 'Timeless design']
            },
            {
                title: 'Cotton Hat',
                description: 'Comfortable cotton hat with breathable design and casual styling.',
                image: '/singbd-static-site/images/Accessories1.jpeg',
                category: 'Accessories',
                code: 'AC-004',
                features: ['Comfortable cotton', 'Breathable design', 'Casual styling']
            },
            {
                title: 'Wool Gloves',
                description: 'Warm wool gloves with excellent insulation and comfortable fit for cold weather.',
                image: '/singbd-static-site/images/Accessories2.jpg',
                category: 'Accessories',
                code: 'AC-005',
                features: ['Warm wool', 'Excellent insulation', 'Comfortable fit']
            }
        ]
    };
    
    function updateProductDisplay(category) {
        const products = productData[category] || [];
        
        // Update main product display with first product
        if (products.length > 0) {
            const mainProduct = products[0];
            mainProductImage.src = mainProduct.image;
            mainProductTitle.textContent = mainProduct.title;
            mainProductDescription.textContent = mainProduct.description;
            mainProductCategory.textContent = mainProduct.category;
            mainProductCode.textContent = mainProduct.code;
            mainProductCategoryBreadcrumb.textContent = mainProduct.category;
            mainProductTitleBreadcrumb.textContent = mainProduct.title;
        }
        
        // Update products grid
        productsGrid.innerHTML = products.map((product, index) => `
            <div class="product-card" data-product-index="${index}" data-category="${category}">
                <div class="product-card__image">
                    <img src="${product.image}" alt="${product.title}" class="product-card__img">
                    <div class="product-card__overlay">
                        <button class="product-card__quick-view">Quick View</button>
                    </div>
                </div>
                <div class="product-card__content">
                    <h4 class="product-card__title">${product.title}</h4>
                    <p class="product-card__description">${product.description}</p>
                    <div class="product-card__meta">
                        <span class="product-card__category">${product.category}</span>
                        <span class="product-card__code">${product.code}</span>
                    </div>
                </div>
            </div>
        `).join('');
        
        // Add click handlers to product cards
        const productCards = productsGrid.querySelectorAll('.product-card');
        productCards.forEach(card => {
            card.addEventListener('click', function() {
                const productIndex = parseInt(this.dataset.productIndex);
                const product = products[productIndex];
                
                // Update main product display
                mainProductImage.src = product.image;
                mainProductTitle.textContent = product.title;
                mainProductDescription.textContent = product.description;
                mainProductCategory.textContent = product.category;
                mainProductCode.textContent = product.code;
                mainProductCategoryBreadcrumb.textContent = product.category;
                mainProductTitleBreadcrumb.textContent = product.title;
                
                // Add active class to clicked card
                productCards.forEach(c => c.classList.remove('product-card--active'));
                this.classList.add('product-card--active');
            });
        });
    }
    
    categoryItems.forEach(item => {
        item.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Remove active class from all items
            categoryItems.forEach(i => i.classList.remove('products-category__item--active'));
            
            // Add active class to clicked item
            this.classList.add('products-category__item--active');
            
            // Update product display
            updateProductDisplay(category);
        });
    });
    
    // Initialize with first category
    const firstCategory = categoryItems[0].dataset.category;
    updateProductDisplay(firstCategory);
}

// Quick View Modal
function initQuickView() {
    const quickViewButtons = document.querySelectorAll('.product-card__quick-view');
    
    quickViewButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            
            const card = this.closest('.product-card');
            const title = card.querySelector('.product-card__title').textContent;
            const description = card.querySelector('.product-card__description').textContent;
            const image = card.querySelector('.product-card__img').src;
            const category = card.querySelector('.product-card__category').textContent;
            const code = card.querySelector('.product-card__code').textContent;
            
            // Create modal
            const modal = document.createElement('div');
            modal.className = 'quick-view-modal';
            modal.innerHTML = `
                <div class="quick-view-modal__overlay">
                    <div class="quick-view-modal__content">
                        <button class="quick-view-modal__close">&times;</button>
                        <div class="quick-view-modal__body">
                            <div class="quick-view-modal__image">
                                <img src="${image}" alt="${title}">
                            </div>
                            <div class="quick-view-modal__info">
                                <h3>${title}</h3>
                                <p>${description}</p>
                                <div class="quick-view-modal__meta">
                                    <span class="quick-view-modal__category">${category}</span>
                                    <span class="quick-view-modal__code">${code}</span>
                                </div>
                                <a href="<?php echo $baseUrl; ?>/contact.php" class="quick-view-modal__cta">
                                    Get Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(modal);
            
            // Close modal functionality
            const closeBtn = modal.querySelector('.quick-view-modal__close');
            const overlay = modal.querySelector('.quick-view-modal__overlay');
            
            function closeModal() {
                modal.remove();
            }
            
            closeBtn.addEventListener('click', closeModal);
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) {
                    closeModal();
                }
            });
            
            // ESC key to close
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            });
        });
    });
}

// Category Slider Functionality
function initCategorySlider() {
    const slider = document.querySelector('.categories__gallery-slider');
    const dots = document.querySelectorAll('.categories__gallery-dot');
    const prevBtn = document.querySelector('.categories__gallery-nav--prev');
    const nextBtn = document.querySelector('.categories__gallery-nav--next');
    
    if (!slider || dots.length === 0) return;
    
    let currentSlide = 0;
    const totalSlides = dots.length;
    
    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('categories__gallery-dot--active', index === currentSlide);
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });
    
    // Auto-slide
    let autoSlideInterval = setInterval(nextSlide, 5000);
    
    // Pause auto-slide on hover
    slider.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(nextSlide, 5000);
    });
}

// Hero Map Points Animation
function initHeroMapPoints() {
    const mapPoints = document.querySelectorAll('.hero__map-point');
    
    mapPoints.forEach((point, index) => {
        // Add staggered animation delay
        point.style.animationDelay = `${index * 0.5}s`;
        
        // Add click interaction
        point.addEventListener('click', function() {
            const location = this.dataset.location;
            showLocationInfo(location);
        });
    });
}

function showLocationInfo(location) {
    const locationInfo = {
        'singapore': 'Our headquarters in Singapore serves as the central hub for global operations and client relations.',
        'bangladesh': 'Major manufacturing facilities in Bangladesh with state-of-the-art production capabilities.',
        'vietnam': 'Strategic manufacturing partnerships in Vietnam for specialized garment production.'
    };
    
    const info = locationInfo[location];
    if (info) {
        showNotification(info, 'info');
    }
}

// Contact Form Handling
function initContactForms() {
    const contactForms = document.querySelectorAll('.contact__form, .contact-form');
    
    contactForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            // Show loading state
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            
            // Submit form data
            fetch('/process_contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification('Message sent successfully!', 'success');
                    form.reset();
                } else {
                    showNotification(data.message || 'Error sending message. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Error sending message. Please try again.', 'error');
            })
            .finally(() => {
                // Reset button state
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });
    });
}

// Product Filtering (for products page)
function initProductFilters() {
    const filterButtons = document.querySelectorAll('.filter__button');
    const productsGrid = document.getElementById('productsGrid');
    
    if (filterButtons.length && productsGrid) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.dataset.category;
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('filter__button--active'));
                this.classList.add('filter__button--active');
                
                // Filter products (this would be implemented with actual product data)
                filterProducts(category);
            });
        });
    }
}

// Product filtering function
function filterProducts(category) {
    // This would be implemented to filter actual product data
    console.log('Filtering products by category:', category);
    
    // Example implementation:
    // const products = document.querySelectorAll('.product-item');
    // products.forEach(product => {
    //     if (category === 'all' || product.dataset.category === category) {
    //         product.style.display = 'block';
    //     } else {
    //         product.style.display = 'none';
    //     }
    // });
}

// Smooth Scrolling for Anchor Links
function initSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}



// Animations
function initAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.section__title, .section__subtitle, .about__stat, .team__member, .client__logo');
    animateElements.forEach(el => observer.observe(el));
}

// Notification System
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification--${type}`;
    notification.innerHTML = `
        <div class="notification__content">
            <span class="notification__message">${message}</span>
            <button class="notification__close">&times;</button>
        </div>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#4CAF50' : type === 'error' ? '#f44336' : '#2196F3'};
        color: white;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 10000;
        max-width: 300px;
        animation: slideIn 0.3s ease;
    `;
    
    // Add to page
    document.body.appendChild(notification);
    
    // Close button functionality
    const closeButton = notification.querySelector('.notification__close');
    closeButton.addEventListener('click', () => {
        notification.remove();
    });
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Add CSS animation for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
document.head.appendChild(style);

// Utility Functions

// Debounce function for performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for scroll events
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Form validation helper
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\+]?[1-9][\d]{0,15}$/;
    return re.test(phone);
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Initialize lazy loading if images exist
if (document.querySelectorAll('img[data-src]').length > 0) {
    initLazyLoading();
}

// Parallax effect for hero section
function initParallax() {
    const hero = document.querySelector('.hero');
    if (!hero) return;
    
    window.addEventListener('scroll', throttle(() => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        const heroBackground = hero.querySelector('.hero__background');
        if (heroBackground) {
            heroBackground.style.transform = `translateY(${rate}px)`;
        }
    }, 16));
}

// Initialize parallax
initParallax();

// Partner Logo Slider with Mouse Control
function initPartnerSlider() {
    const slider = document.querySelector('.partners__slider');
    const track = document.querySelector('.partners__track');
    
    if (!slider || !track) return;
    
    let isMouseDown = false;
    let startX = 0;
    let scrollLeft = 0;
    let animationPaused = false;
    
    // Pause animation on mouse enter
    slider.addEventListener('mouseenter', () => {
        if (!isMouseDown) {
            track.style.animationPlayState = 'paused';
            animationPaused = true;
        }
    });
    
    // Resume animation on mouse leave (if not dragging)
    slider.addEventListener('mouseleave', () => {
        if (!isMouseDown) {
            track.style.animationPlayState = 'running';
            animationPaused = false;
        }
    });
    
    // Mouse down event
    slider.addEventListener('mousedown', (e) => {
        isMouseDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = track.scrollLeft;
        
        // Pause animation during drag
        track.style.animationPlayState = 'paused';
        animationPaused = true;
        
        slider.style.cursor = 'grabbing';
    });
    
    // Mouse leave event
    slider.addEventListener('mouseleave', () => {
        isMouseDown = false;
        slider.style.cursor = 'grab';
        
        // Resume animation if it was paused
        if (animationPaused) {
            track.style.animationPlayState = 'running';
            animationPaused = false;
        }
    });
    
    // Mouse up event
    slider.addEventListener('mouseup', () => {
        isMouseDown = false;
        slider.style.cursor = 'grab';
        
        // Resume animation if it was paused
        if (animationPaused) {
            track.style.animationPlayState = 'running';
            animationPaused = false;
        }
    });
    
    // Mouse move event
    slider.addEventListener('mousemove', (e) => {
        if (!isMouseDown) return;
        
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // Scroll speed multiplier
        
        // Calculate the scroll position
        const scrollPosition = scrollLeft - walk;
        
        // Apply scroll transform
        track.style.transform = `translateX(${scrollPosition}px)`;
    });
    
    // Prevent default drag behavior on images
    const partnerImages = document.querySelectorAll('.partner__image');
    partnerImages.forEach(img => {
        img.addEventListener('dragstart', (e) => {
            e.preventDefault();
        });
    });
    
    // Add touch support for mobile devices
    let touchStartX = 0;
    let touchStartY = 0;
    
    slider.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
        
        // Pause animation on touch
        track.style.animationPlayState = 'paused';
        animationPaused = true;
    });
    
    slider.addEventListener('touchmove', (e) => {
        if (!touchStartX || !touchStartY) return;
        
        e.preventDefault();
        
        const touchX = e.touches[0].clientX;
        const touchY = e.touches[0].clientY;
        
        const diffX = touchStartX - touchX;
        const diffY = touchStartY - touchY;
        
        // Only handle horizontal scrolling
        if (Math.abs(diffX) > Math.abs(diffY)) {
            const walk = diffX * 2;
            track.style.transform = `translateX(${-walk}px)`;
        }
    });
    
    slider.addEventListener('touchend', () => {
        touchStartX = 0;
        touchStartY = 0;
        
        // Resume animation
        if (animationPaused) {
            track.style.animationPlayState = 'running';
            animationPaused = false;
        }
    });
}
