// Main JavaScript file for SingBD website

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initMobileMenu();
    initContactForms();
    initProductFilters();
    initSmoothScrolling();
    initWhatsAppPopover();
    initAboutImageSlider();
    initServicesTabs();
    initProductCategories();
    initAnimations();
    initHeroMapPoints();
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
    
    if (!imageTrack || slides.length === 0) return;
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    
    function updateSlider() {
        const translateX = -currentSlide * 100;
        imageTrack.style.transform = `translateX(${translateX}%)`;
        
        // Update button states
        if (prevBtn) prevBtn.disabled = currentSlide === 0;
        if (nextBtn) nextBtn.disabled = currentSlide === totalSlides - 1;
    }
    
    function nextSlide() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateSlider();
        }
    }
    
    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        }
    }
    
    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    // Auto-slide every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Initialize
    updateSlider();
}

// Services Tabs
function initServicesTabs() {
    const tabs = document.querySelectorAll('.services__tab');
    const panels = document.querySelectorAll('.services__panel');
    
    if (tabs.length === 0 || panels.length === 0) return;
    
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetPanel = this.dataset.tab;
            
            // Remove active class from all tabs and panels
            tabs.forEach(t => t.classList.remove('services__tab--active'));
            panels.forEach(p => p.classList.remove('services__panel--active'));
            
            // Add active class to clicked tab and corresponding panel
            this.classList.add('services__tab--active');
            const activePanel = document.querySelector(`[data-panel="${targetPanel}"]`);
            if (activePanel) {
                activePanel.classList.add('services__panel--active');
            }
        });
    });
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
