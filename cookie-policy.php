<?php
require_once 'config.php';
$page_title = "Cookie Policy";
$page_description = "SingBD Cookie Policy - Learn how we use cookies and tracking technologies to improve your experience on our website. We are committed to transparency in cookie usage.";
$page_keywords = "cookie policy, cookies, tracking technologies, SingBD cookies, website cookies, cookie management";
$canonical_url = $baseUrl . "/cookie-policy.php";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Hero Section -->
    <section class="legal-hero">
        <div class="legal-hero__container">
            <div class="legal-hero__content" data-aos="fade-up">
                <div class="legal-hero__icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <h1 class="legal-hero__title">Cookie Policy</h1>
                <p class="legal-hero__subtitle">Understanding how we use cookies to enhance your experience</p>
                <div class="legal-hero__meta">
                    <span class="legal-hero__date">Last updated: <?php echo date('F j, Y'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Overview -->
    <section class="legal-overview">
        <div class="legal-overview__container">
            <div class="legal-overview__content" data-aos="fade-up" data-aos-delay="200">
                <h2 class="legal-overview__title">What You Need to Know</h2>
                <div class="legal-overview__grid">
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 12l2 2 4-4"/>
                                <path d="M21 12c-1.5 0-3-1-3-3s1.5-3 3-3 3 1 3 3-1.5 3-3 3"/>
                                <path d="M3 12c1.5 0 3-1 3-3s-1.5-3-3-3-3 1-3 3 1.5 3 3 3"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Essential Cookies Only</h3>
                        <p class="legal-overview__card-text">We prioritize your privacy with minimal essential cookies</p>
                    </div>
                    
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <circle cx="12" cy="16" r="1"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Your Control</h3>
                        <p class="legal-overview__card-text">Manage your cookie preferences anytime</p>
                    </div>
                    
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="500">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Transparent Use</h3>
                        <p class="legal-overview__card-text">Clear information about how we use cookies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="legal-content">
        <div class="legal-content__container">
            <div class="legal-content__grid">
                <!-- Introduction Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 6v6l4 2"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">1. Introduction</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>This Cookie Policy explains how SingBD ("we," "our," or "us") uses cookies and similar technologies when you visit our website. This policy should be read alongside our Privacy Policy, which explains how we use your personal information.</p>
                    </div>
                </div>

                <!-- What Are Cookies Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="3"/>
                                <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">2. What Are Cookies?</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>Cookies are small text files that are stored on your device (computer, tablet, or mobile phone) when you visit a website. They help websites remember information about your visit, such as your preferred language and other settings, which can make your next visit easier and the site more useful to you.</p>
                    </div>
                </div>

                <!-- How We Use Cookies Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 12l2 2 4-4"/>
                                <path d="M21 12c-1.5 0-3-1-3-3s1.5-3 3-3 3 1 3 3-1.5 3-3 3"/>
                                <path d="M3 12c1.5 0 3-1 3-3s-1.5-3-3-3-3 1-3 3 1.5 3 3 3"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">3. How We Use Cookies</h2>
                    </div>
                    <div class="legal-card__content">
                <p>We use cookies for several purposes, including:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Essential Cookies:</strong> These cookies are necessary for the website to function properly and cannot be disabled
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 3v18h18"/>
                                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Performance Cookies:</strong> These cookies help us understand how visitors interact with our website
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                                        <polyline points="14,2 14,8 20,8"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Functional Cookies:</strong> These cookies enable enhanced functionality and personalization
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Marketing Cookies:</strong> These cookies are used to track visitors across websites to display relevant advertisements
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Types of Cookies Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">4. Types of Cookies We Use</h2>
                    </div>
                    <div class="legal-card__content">
                        <h3 style="margin-bottom: 1rem; color: var(--heading-color);">Essential Cookies</h3>
                        <p>These cookies are essential for the website to function properly. They enable basic functions like page navigation, access to secure areas, and form submissions. The website cannot function properly without these cookies.</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 6v6l4 2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Session Cookies:</strong> Temporary cookies that expire when you close your browser
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Security Cookies:</strong> Help protect against fraud and ensure website security
                                </div>
                            </div>
                        </div>

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Performance Cookies</h3>
                        <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously.</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 3v18h18"/>
                                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Analytics Cookies:</strong> Help us understand how visitors use our website
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                                        <line x1="12" y1="9" x2="12" y2="13"/>
                                        <line x1="12" y1="17" x2="12.01" y2="17"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Error Tracking:</strong> Help us identify and fix technical issues
                                </div>
                            </div>
                        </div>

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Functional Cookies</h3>
                        <p>These cookies enable enhanced functionality and personalization, such as remembering your preferences and settings.</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Preference Cookies:</strong> Remember your language and region preferences
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                                        <path d="M7 15h0M2 4h20v16H2z"/>
                                        <circle cx="17" cy="10" r="1"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>User Interface Cookies:</strong> Remember your interface customization choices
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third-Party Cookies Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">5. Third-Party Cookies</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>We may use third-party services that place cookies on your device. These services include:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 3v18h18"/>
                                        <path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Google Analytics:</strong> For website analytics and performance monitoring
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Google Maps:</strong> For displaying location information and interactive maps
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Social Media Platforms:</strong> For social media integration and sharing functionality
                                </div>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem;">These third-party services have their own privacy policies and cookie policies. We encourage you to review them as we are not responsible for their practices.</p>
                    </div>
                </div>

                <!-- Cookie Management Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">6. Managing Your Cookie Preferences</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>You can control and manage cookies in several ways:</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Browser Settings</h3>
                        <p>Most web browsers allow you to control cookies through their settings preferences. You can:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Delete existing cookies from your browser</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M4.93 4.93l14.14 14.14"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Block cookies from being set in the future</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Set your browser to notify you when cookies are being set</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="9"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Choose which cookies to accept or reject selectively</div>
                            </div>
                        </div>

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Cookie Consent Management</h3>
                        <p>When you first visit our website, you will see a cookie consent banner. You can manage your preferences by:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="9"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Accepting all cookies for full website functionality</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M4.93 4.93l14.14 14.14"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Rejecting non-essential cookies while keeping essential ones</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Customizing your cookie preferences by category</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Impact of Disabling Cookies Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="700">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                                <line x1="12" y1="9" x2="12" y2="13"/>
                                <line x1="12" y1="17" x2="12.01" y2="17"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">7. Impact of Disabling Cookies</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>If you choose to disable cookies, some features of our website may not function properly. Specifically, you may experience:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Repeated Information Entry:</strong> You may need to re-enter information each time you visit different pages
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Reduced Functionality:</strong> Some website features may not work as expected or may be unavailable
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Generic Experience:</strong> Your browsing experience may be less personalized and tailored
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Service Limitations:</strong> We may not be able to provide you with the best possible service and user experience
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Updates Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="800">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">8. Updates to This Policy</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>We may update this Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. When we make changes, we will:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Notify you of any material changes by posting the new Cookie Policy on this page</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 6v6l4 2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Update the "Last updated" date at the top of this policy</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                        <polyline points="22,6 12,13 2,6"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Provide notice through email or website banner for significant changes</div>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem;">Your continued use of our website after any changes to this policy constitutes acceptance of the updated terms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>


