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
    initWhatsAppPopover();
    initAboutImageSlider();
    initWhatWeDoTabs();
    initProductCategories();
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
    const categoryTitle = document.querySelector('.products__category-title');
    const categoryDescription = document.querySelector('.products__category-description');
    const categoryFeatures = document.querySelector('.products__features');
    const galleryGrid = document.querySelector('.products__gallery-grid');
    
    if (categoryItems.length === 0) return;
    
    // Product data
    const productData = {
        'woven-tops': {
            title: 'Woven Tops',
            description: 'High-quality woven tops including shirts, blouses, and tunics. Made from premium fabrics with attention to detail and comfort.',
            features: [
                'Premium cotton and silk blends',
                'Professional and casual styles',
                'Sustainable manufacturing'
            ],
            images: [
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg',
                '/images/671762cccb51d83fc75c936d_Front Center up Blue knitting.jpg'
            ]
        },
        'coats-jackets': {
            title: 'Coats & Jackets',
            description: 'Stylish and functional outerwear for all seasons. From lightweight jackets to heavy winter coats.',
            features: [
                'Weather-resistant materials',
                'Contemporary designs',
                'Durable construction'
            ],
            images: [
                '/images/67175b2e9a179330cd55b091_A-6.png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'sportswear': {
            title: 'Sportswear',
            description: 'Performance-driven athletic wear designed for comfort and functionality during physical activities.',
            features: [
                'Moisture-wicking fabrics',
                'Flexible and breathable',
                'Performance-oriented design'
            ],
            images: [
                '/images/67123b94552a03b62618572d_Pen.png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'woven-bottoms': {
            title: 'Woven Bottoms',
            description: 'Classic and contemporary bottom wear including trousers, pants, and skirts.',
            features: [
                'Comfortable fit',
                'Versatile styling',
                'Quality craftsmanship'
            ],
            images: [
                '/images/67123c086cafc61cfaa3acc8_Magnifying glass.png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'knitwear': {
            title: 'Knitwear',
            description: 'Soft and comfortable knit garments perfect for layering and everyday wear.',
            features: [
                'Soft, breathable materials',
                'Versatile layering pieces',
                'Comfortable fit'
            ],
            images: [
                '/images/6713665b5f170efb0fc92ebc_Untitled design (23).png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'homeware': {
            title: 'Homeware',
            description: 'Beautiful and functional home textiles and accessories for modern living.',
            features: [
                'Premium home textiles',
                'Elegant designs',
                'Quality materials'
            ],
            images: [
                '/images/671366877b8e1b5fed85dd30_Untitled (40 x 40 px).png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'handicrafts': {
            title: 'Handicrafts',
            description: 'Artisanal handcrafted items showcasing traditional craftsmanship and unique designs.',
            features: [
                'Handcrafted quality',
                'Traditional techniques',
                'Unique designs'
            ],
            images: [
                '/images/67123b9373b289c270dd4edf_Shirt.png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        },
        'accessories': {
            title: 'Accessories',
            description: 'Stylish accessories to complement any outfit and enhance personal style.',
            features: [
                'Trendy designs',
                'Quality materials',
                'Versatile styling'
            ],
            images: [
                '/images/67123b94552a03b62618572d_Pen.png',
                '/images/671232c93c967b1f9989734d_ADSC_6605.jpg',
                '/images/671232c97d20587cf7b75155_ADSC_6579.jpg',
                '/images/671232c98bb146c1180f9b13_ADSC_6548.jpg'
            ]
        }
    };
    
    function updateProductDisplay(category) {
        const data = productData[category];
        if (!data) return;
        
        // Update title and description
        if (categoryTitle) categoryTitle.textContent = data.title;
        if (categoryDescription) categoryDescription.textContent = data.description;
        
        // Update features
        if (categoryFeatures) {
            categoryFeatures.innerHTML = data.features.map(feature => `
                <div class="products__feature">
                    <svg class="products__feature-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                    <span>${feature}</span>
                </div>
            `).join('');
        }
        
        // Update gallery
        if (galleryGrid) {
            galleryGrid.innerHTML = data.images.map((image, index) => `
                <div class="products__gallery-item">
                    <img src="${image}" alt="${data.title} ${index + 1}" class="products__gallery-image">
                </div>
            `).join('');
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

// WhatsApp Popover
function initWhatsAppPopover() {
    const whatsappPopover = document.getElementById('whatsappPopover');
    
    if (whatsappPopover) {
        // Show popover after 5 seconds
        setTimeout(() => {
            whatsappPopover.style.display = 'block';
        }, 5000);
        
        // Hide popover when clicked
        whatsappPopover.addEventListener('click', function() {
            this.style.display = 'none';
        });
    }
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
