<?php
require_once 'config.php';
$page_title = "GDPR Compliance";
$page_description = "SingBD GDPR Compliance - Learn about your data protection rights under GDPR. We are committed to protecting your personal data and ensuring compliance with European data protection regulations.";
$page_keywords = "GDPR compliance, data protection rights, European data protection, personal data rights, SingBD GDPR, data subject rights";
$canonical_url = $baseUrl . "/gdpr.php";
include 'partials/_header.php';
?>

<main class="main">
    <!-- Hero Section -->
    <section class="legal-hero">
        <div class="legal-hero__container">
            <div class="legal-hero__content" data-aos="fade-up">
                <div class="legal-hero__icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </div>
                <h1 class="legal-hero__title">GDPR Compliance</h1>
                <p class="legal-hero__subtitle">Your data protection rights under European law</p>
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
                <h2 class="legal-overview__title">Your GDPR Rights</h2>
                <div class="legal-overview__grid">
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Right to Access</h3>
                        <p class="legal-overview__card-text">Access your personal data and understand how we use it</p>
                    </div>
                    
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Right to Rectification</h3>
                        <p class="legal-overview__card-text">Correct inaccurate or incomplete personal data</p>
                    </div>
                    
                    <div class="legal-overview__card" data-aos="zoom-in" data-aos-delay="500">
                        <div class="legal-overview__card-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 6h18"/>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            </svg>
                        </div>
                        <h3 class="legal-overview__card-title">Right to Erasure</h3>
                        <p class="legal-overview__card-text">Request deletion of your personal data</p>
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
                        <p>SingBD is committed to protecting your privacy and ensuring compliance with the General Data Protection Regulation (GDPR) for users in the European Union. This page explains your rights under GDPR and how we handle your personal data.</p>
                    </div>
                </div>

                <!-- What is GDPR Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                <line x1="8" y1="21" x2="16" y2="21"/>
                                <line x1="12" y1="17" x2="12" y2="21"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">2. What is GDPR?</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>The General Data Protection Regulation (GDPR) is a comprehensive data protection law that came into effect on May 25, 2018. It applies to all organizations that process personal data of individuals in the European Union, regardless of where the organization is located.</p>
                    </div>
                </div>

                <!-- Your Rights Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">3. Your Rights Under GDPR</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>As an EU resident, you have the following rights regarding your personal data:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 6v6l4 2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Information:</strong> Be informed about how we collect, use, and process your personal data
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right of Access:</strong> Request access to your personal data and receive a copy
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                        <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Rectification:</strong> Request correction of inaccurate or incomplete personal data
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Erasure:</strong> Request deletion of your personal data in certain circumstances
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M9 9h6v6"/>
                                        <path d="M21 3l-6 6"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Restrict Processing:</strong> Request that we limit how we use your personal data
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14,2 14,8 20,8"/>
                                        <line x1="16" y1="13" x2="8" y2="13"/>
                                        <line x1="16" y1="17" x2="8" y2="17"/>
                                        <polyline points="10,9 9,9 8,9"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Data Portability:</strong> Receive your personal data in a structured, machine-readable format
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M4.93 4.93l14.14 14.14"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Right to Object:</strong> Object to the processing of your personal data in certain circumstances
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Processing Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="4" width="20" height="16" rx="2"/>
                                <path d="M7 15h0M2 4h20v16H2z"/>
                                <circle cx="17" cy="10" r="1"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">4. How We Process Your Data</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>We process your personal data based on the following legal grounds:</p>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="9"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Consent:</strong> When you have given clear consent for us to process your personal data
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
                                    <strong>Contract:</strong> When processing is necessary for the performance of a contract with you
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Legitimate Interest:</strong> When necessary for our legitimate interests, provided these don't override your rights
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14,2 14,8 20,8"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Legal Obligation:</strong> When processing is necessary for compliance with a legal obligation
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- International Data Transfers Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">5. International Data Transfers</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>Your personal data may be transferred to and processed in countries outside the European Economic Area (EEA). When we transfer your data outside the EEA, we ensure that appropriate safeguards are in place to protect your data.</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Safeguards We Use</h3>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="9"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Adequacy Decisions:</strong> Transfers to countries deemed adequate by the European Commission
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
                                    <strong>Standard Contractual Clauses:</strong> Approved by the European Commission for data protection
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Binding Corporate Rules:</strong> Internal data protection rules for multinational companies
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                        <circle cx="12" cy="16" r="1"/>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Additional Safeguards:</strong> Technical and organizational measures to ensure data protection
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exercising Rights Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 11H1v3h8v3l3-4-3-4v2z"/>
                                <path d="M22 12h0"/>
                                <path d="M22 6v12c0 1.1-.9 2-2 2h-8"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">6. Exercising Your Rights</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>To exercise any of your GDPR rights, you can contact us through our privacy email or designated channels. We will respond to your request within one month of receipt, unless the request is complex or we receive multiple requests from you.</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How to Make a Request</h3>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Provide Complete Information:</strong> Include your full name, contact information, and description of the right you wish to exercise
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Identity Verification:</strong> We may require proof of identity to protect your personal data from unauthorized access
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 6v6l4 2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Response Timeline:</strong> We will respond within one month, or up to three months for complex requests with proper notification
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <line x1="9" y1="9" x2="15" y2="15"/>
                                        <line x1="15" y1="9" x2="9" y2="15"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>No Cost:</strong> Exercising your GDPR rights is generally free of charge, unless requests are excessive or unfounded
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Protection Officer Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="700">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">7. Data Protection Officer</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>We have appointed a Data Protection Officer (DPO) to oversee our GDPR compliance and ensure your data protection rights are respected.</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">DPO Responsibilities</h3>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Monitoring Compliance:</strong> Overseeing data protection practices and GDPR compliance
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Training & Awareness:</strong> Providing data protection training and raising awareness within our organization
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Point of Contact:</strong> Acting as a contact point for data subjects and supervisory authorities
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
                                    <strong>Risk Assessment:</strong> Conducting data protection impact assessments and risk evaluations
                                </div>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem;">You can contact our DPO directly for any questions or concerns about our data processing activities at dpo@singbd.com.</p>
                    </div>
                </div>

                <!-- Complaints and Supervisory Authorities Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="800">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>
                                <line x1="4" y1="22" x2="4" y2="15"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">8. Complaints and Supervisory Authorities</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>If you have concerns about how we handle your personal data, you have the right to lodge a complaint with your local data protection authority. However, we encourage you to contact us first so we can address your concerns directly.</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Filing a Complaint</h3>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Contact Us First:</strong> We encourage direct communication to resolve concerns quickly and effectively
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <line x1="2" y1="12" x2="22" y2="12"/>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>Local Authority:</strong> You can file a complaint with the data protection authority in your EU member state
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
                                    <strong>Online Resources:</strong> Find your local authority at https://edpb.europa.eu/about-edpb/board/members_en
                                </div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <line x1="9" y1="9" x2="15" y2="15"/>
                                        <line x1="15" y1="9" x2="9" y2="15"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">
                                    <strong>No Cost:</strong> Filing a complaint with supervisory authorities is free of charge
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Updates and Changes Card -->
                <div class="legal-card" data-aos="fade-up" data-aos-delay="900">
                    <div class="legal-card__header">
                        <div class="legal-card__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </div>
                        <h2 class="legal-card__title">9. Updates to This Policy</h2>
                    </div>
                    <div class="legal-card__content">
                        <p>We may update this GDPR Compliance page from time to time to reflect changes in our practices or legal requirements. When we make significant changes, we will take appropriate steps to inform you.</p>
                        
                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How We Notify You</h3>
                        <div class="legal-list">
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Posting the updated policy on this page with a new "Last updated" date</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                        <polyline points="22,6 12,13 2,6"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Sending email notifications for material changes that affect your rights</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                                        <path d="M7 15h0M2 4h20v16H2z"/>
                                        <circle cx="17" cy="10" r="1"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Displaying prominent website banners for significant policy changes</div>
                            </div>
                            <div class="legal-list__item">
                                <div class="legal-list__icon">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="10"/>
                                        <path d="M12 6v6l4 2"/>
                                    </svg>
                                </div>
                                <div class="legal-list__content">Providing reasonable advance notice before changes take effect</div>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem;">Your continued use of our services after policy updates constitutes acceptance of the changes, unless you exercise your right to object or withdraw consent.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/_footer.php'; ?>

                                        <circle cx="12" cy="12" r="9"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Adequacy Decisions:</strong> Transfers to countries deemed adequate by the European Commission

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

                                    <strong>Standard Contractual Clauses:</strong> Approved by the European Commission for data protection

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Binding Corporate Rules:</strong> Internal data protection rules for multinational companies

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>

                                        <circle cx="12" cy="16" r="1"/>

                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Additional Safeguards:</strong> Technical and organizational measures to ensure data protection

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Exercising Rights Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="600">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M9 11H1v3h8v3l3-4-3-4v2z"/>

                                <path d="M22 12h0"/>

                                <path d="M22 6v12c0 1.1-.9 2-2 2h-8"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">6. Exercising Your Rights</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>To exercise any of your GDPR rights, you can contact us through our privacy email or designated channels. We will respond to your request within one month of receipt, unless the request is complex or we receive multiple requests from you.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How to Make a Request</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>

                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Provide Complete Information:</strong> Include your full name, contact information, and description of the right you wish to exercise

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>

                                        <circle cx="12" cy="12" r="3"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Identity Verification:</strong> We may require proof of identity to protect your personal data from unauthorized access

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <path d="M12 6v6l4 2"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Response Timeline:</strong> We will respond within one month, or up to three months for complex requests with proper notification

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="9" y1="9" x2="15" y2="15"/>

                                        <line x1="15" y1="9" x2="9" y2="15"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>No Cost:</strong> Exercising your GDPR rights is generally free of charge, unless requests are excessive or unfounded

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Data Protection Officer Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="700">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>

                                <circle cx="12" cy="7" r="4"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">7. Data Protection Officer</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>We have appointed a Data Protection Officer (DPO) to oversee our GDPR compliance and ensure your data protection rights are respected.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">DPO Responsibilities</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>

                                        <circle cx="12" cy="12" r="3"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Monitoring Compliance:</strong> Overseeing data protection practices and GDPR compliance

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>

                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Training & Awareness:</strong> Providing data protection training and raising awareness within our organization

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Point of Contact:</strong> Acting as a contact point for data subjects and supervisory authorities

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

                                    <strong>Risk Assessment:</strong> Conducting data protection impact assessments and risk evaluations

                                </div>

                            </div>

                        </div>

                        <p style="margin-top: 1.5rem;">You can contact our DPO directly for any questions or concerns about our data processing activities at dpo@singbd.com.</p>

                    </div>

                </div>



                <!-- Complaints and Supervisory Authorities Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="800">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>

                                <line x1="4" y1="22" x2="4" y2="15"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">8. Complaints and Supervisory Authorities</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>If you have concerns about how we handle your personal data, you have the right to lodge a complaint with your local data protection authority. However, we encourage you to contact us first so we can address your concerns directly.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Filing a Complaint</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Contact Us First:</strong> We encourage direct communication to resolve concerns quickly and effectively

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="2" y1="12" x2="22" y2="12"/>

                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Local Authority:</strong> You can file a complaint with the data protection authority in your EU member state

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

                                    <strong>Online Resources:</strong> Find your local authority at https://edpb.europa.eu/about-edpb/board/members_en

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="9" y1="9" x2="15" y2="15"/>

                                        <line x1="15" y1="9" x2="9" y2="15"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>No Cost:</strong> Filing a complaint with supervisory authorities is free of charge

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Updates and Changes Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="900">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">9. Updates to This Policy</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>We may update this GDPR Compliance page from time to time to reflect changes in our practices or legal requirements. When we make significant changes, we will take appropriate steps to inform you.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How We Notify You</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>

                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Posting the updated policy on this page with a new "Last updated" date</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>

                                        <polyline points="22,6 12,13 2,6"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Sending email notifications for material changes that affect your rights</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <rect x="2" y="4" width="20" height="16" rx="2"/>

                                        <path d="M7 15h0M2 4h20v16H2z"/>

                                        <circle cx="17" cy="10" r="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Displaying prominent website banners for significant policy changes</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <path d="M12 6v6l4 2"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Providing reasonable advance notice before changes take effect</div>

                            </div>

                        </div>

                        <p style="margin-top: 1.5rem;">Your continued use of our services after policy updates constitutes acceptance of the changes, unless you exercise your right to object or withdraw consent.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>



<?php include 'partials/_footer.php'; ?>



                                        <circle cx="12" cy="12" r="9"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Adequacy Decisions:</strong> Transfers to countries deemed adequate by the European Commission

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

                                    <strong>Standard Contractual Clauses:</strong> Approved by the European Commission for data protection

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Binding Corporate Rules:</strong> Internal data protection rules for multinational companies

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>

                                        <circle cx="12" cy="16" r="1"/>

                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Additional Safeguards:</strong> Technical and organizational measures to ensure data protection

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Exercising Rights Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="600">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M9 11H1v3h8v3l3-4-3-4v2z"/>

                                <path d="M22 12h0"/>

                                <path d="M22 6v12c0 1.1-.9 2-2 2h-8"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">6. Exercising Your Rights</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>To exercise any of your GDPR rights, you can contact us through our privacy email or designated channels. We will respond to your request within one month of receipt, unless the request is complex or we receive multiple requests from you.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How to Make a Request</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>

                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Provide Complete Information:</strong> Include your full name, contact information, and description of the right you wish to exercise

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>

                                        <circle cx="12" cy="12" r="3"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Identity Verification:</strong> We may require proof of identity to protect your personal data from unauthorized access

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <path d="M12 6v6l4 2"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Response Timeline:</strong> We will respond within one month, or up to three months for complex requests with proper notification

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="9" y1="9" x2="15" y2="15"/>

                                        <line x1="15" y1="9" x2="9" y2="15"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>No Cost:</strong> Exercising your GDPR rights is generally free of charge, unless requests are excessive or unfounded

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Data Protection Officer Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="700">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>

                                <circle cx="12" cy="7" r="4"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">7. Data Protection Officer</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>We have appointed a Data Protection Officer (DPO) to oversee our GDPR compliance and ensure your data protection rights are respected.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">DPO Responsibilities</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>

                                        <circle cx="12" cy="12" r="3"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Monitoring Compliance:</strong> Overseeing data protection practices and GDPR compliance

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>

                                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Training & Awareness:</strong> Providing data protection training and raising awareness within our organization

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Point of Contact:</strong> Acting as a contact point for data subjects and supervisory authorities

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

                                    <strong>Risk Assessment:</strong> Conducting data protection impact assessments and risk evaluations

                                </div>

                            </div>

                        </div>

                        <p style="margin-top: 1.5rem;">You can contact our DPO directly for any questions or concerns about our data processing activities at dpo@singbd.com.</p>

                    </div>

                </div>



                <!-- Complaints and Supervisory Authorities Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="800">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>

                                <line x1="4" y1="22" x2="4" y2="15"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">8. Complaints and Supervisory Authorities</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>If you have concerns about how we handle your personal data, you have the right to lodge a complaint with your local data protection authority. However, we encourage you to contact us first so we can address your concerns directly.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">Filing a Complaint</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Contact Us First:</strong> We encourage direct communication to resolve concerns quickly and effectively

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="2" y1="12" x2="22" y2="12"/>

                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>Local Authority:</strong> You can file a complaint with the data protection authority in your EU member state

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

                                    <strong>Online Resources:</strong> Find your local authority at https://edpb.europa.eu/about-edpb/board/members_en

                                </div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <line x1="9" y1="9" x2="15" y2="15"/>

                                        <line x1="15" y1="9" x2="9" y2="15"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">

                                    <strong>No Cost:</strong> Filing a complaint with supervisory authorities is free of charge

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- Updates and Changes Card -->

                <div class="legal-card" data-aos="fade-up" data-aos-delay="900">

                    <div class="legal-card__header">

                        <div class="legal-card__icon">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>

                            </svg>

                        </div>

                        <h2 class="legal-card__title">9. Updates to This Policy</h2>

                    </div>

                    <div class="legal-card__content">

                        <p>We may update this GDPR Compliance page from time to time to reflect changes in our practices or legal requirements. When we make significant changes, we will take appropriate steps to inform you.</p>

                        

                        <h3 style="margin: 2rem 0 1rem; color: var(--heading-color);">How We Notify You</h3>

                        <div class="legal-list">

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>

                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Posting the updated policy on this page with a new "Last updated" date</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>

                                        <polyline points="22,6 12,13 2,6"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Sending email notifications for material changes that affect your rights</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <rect x="2" y="4" width="20" height="16" rx="2"/>

                                        <path d="M7 15h0M2 4h20v16H2z"/>

                                        <circle cx="17" cy="10" r="1"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Displaying prominent website banners for significant policy changes</div>

                            </div>

                            <div class="legal-list__item">

                                <div class="legal-list__icon">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">

                                        <circle cx="12" cy="12" r="10"/>

                                        <path d="M12 6v6l4 2"/>

                                    </svg>

                                </div>

                                <div class="legal-list__content">Providing reasonable advance notice before changes take effect</div>

                            </div>

                        </div>

                        <p style="margin-top: 1.5rem;">Your continued use of our services after policy updates constitutes acceptance of the changes, unless you exercise your right to object or withdraw consent.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>



<?php include 'partials/_footer.php'; ?>


