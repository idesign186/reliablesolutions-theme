<?php
/**
 * Template Name: High-Risk Service Page
 * Description: An SEO-optimized landing page template for High-Risk payment processing (CBD, THC, etc.)
 *
 * @package ReliableSolutions
 */

get_header(); ?>

<main id="primary" class="site-main page-high-risk">

    <!-- SEO Optimized Hero Section -->
    <section class="hero-section high-risk-hero">
        <div class="hero-content site-container">
            <!-- Target Keyword in H1 -->
            <h1 class="hero-title animate-up">Expert Payment Processing for High-Risk Industries</h1>
            <p class="hero-subtitle animate-up delay-1">Secure, reliable merchant accounts specialized for CBD, THC, Telemedicine, and other complex verticals. Stop worrying about frozen funds and start scaling.</p>
            <div class="hero-cta animate-up delay-2">
                <a href="/contact-us/" class="btn btn-primary btn-large">Get Pre-Approved</a>
                <a href="#industries" class="btn btn-secondary btn-large">View Industries</a>
            </div>
        </div>
        <div class="hero-background-glow glow-red"></div> <!-- Unique glow for high-risk page -->
    </section>

    <!-- The "Why Us" Section / Overcoming Objections -->
    <section class="highlight-section section-padding">
        <div class="site-container highlight-grid">
            <div class="highlight-image glass-panel">
                <div class="mock-dashboard">
                    <h3>Approvals in 48 Hours</h3>
                    <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">We bypass the red tape of traditional banks.</p>
                    <div class="mock-stats">
                        <div class="mock-stat-box" style="padding: 1rem; border-left: 4px solid var(--accent-color);">
                            <span style="font-size: 2rem; font-weight: bold; color: white;">98%</span>
                            <span style="display: block; color: var(--text-muted); font-size: 0.8rem;">Approval Rate for CBD</span>
                        </div>
                        <div class="mock-stat-box" style="padding: 1rem; border-left: 4px solid var(--primary-color);">
                            <span style="font-size: 2rem; font-weight: bold; color: white;">0</span>
                            <span style="display: block; color: var(--text-muted); font-size: 0.8rem;">Rolling Reserves (for qualified merchants)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="highlight-text">
                <h2>Why is CBD & High-Risk Processing So Difficult?</h2>
                <p>Most traditional banks classify industries like CBD, vapes, and credit repair as "high risk" due to regulatory scrutiny or higher chargeback ratios. If you use a standard gateway (like Stripe or PayPal), you risk sudden account closures and frozen funds.</p>
                <p><strong>We do things differently.</strong> We partner directly with high-risk acquiring banks to ensure your merchant account is stable and secure from day one.</p>
                <ul class="highlight-list">
                    <li><span class="check">✓</span> <strong>Domestic & Offshore Solutions:</strong> Tailored to your specific risk profile.</li>
                    <li><span class="check">✓</span> <strong>Chargeback Mitigation:</strong> Intercept disputes before they become chargebacks.</li>
                    <li><span class="check">✓</span> <strong>E-commerce Ready:</strong> Seamless API integration with WooCommerce & Shopify.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Specific Industries Supported (SEO Focus Areas) -->
    <section id="industries" class="industries-section section-padding">
        <div class="site-container">
            <h2 class="section-title text-center">Industries We Support</h2>
            <p class="section-subtitle text-center">We provide stable merchant accounts for high-volume, regulated sectors.</p>
            
            <div class="services-carousel-wrapper">
                <div class="services-carousel">
                    <!-- Industry 1: SEO Focus -->
                    <div class="service-card glass-panel">
                        <div class="service-icon">🌿</div>
                        <h3 class="service-title">CBD & Hemp</h3>
                        <p class="service-desc">Complete payment gateways for CBD oils, gummies, topicals, and Delta-8/9/10 products. We keep your Shopify or WooCommerce store compliant and running.</p>
                    </div>
                    
                    <!-- Industry 2 -->
                    <div class="service-card glass-panel">
                        <div class="service-icon">💨</div>
                        <h3 class="service-title">Vape & E-Cigarettes</h3>
                        <p class="service-desc">Overcome PACT Act hurdles with age-verified, secure payment solutions tailored for online vape retailers.</p>
                    </div>

                    <!-- Industry 3 -->
                    <div class="service-card glass-panel">
                        <div class="service-icon">🩺</div>
                        <h3 class="service-title">Telemedicine</h3>
                        <p class="service-desc">Secure, HIPAA-compliant billing gateways for virtual clinics, online pharmacies, and telehealth professionals.</p>
                    </div>

                    <!-- Industry 4 -->
                    <div class="service-card glass-panel">
                        <div class="service-icon">📈</div>
                        <h3 class="service-title">Credit Repair</h3>
                        <p class="service-desc">Recurring billing solutions for credit repair agencies, ensuring consistent cash flow without interruption.</p>
                    </div>
                    
                    <!-- Industry 5 -->
                    <div class="service-card glass-panel">
                        <div class="service-icon">🎯</div>
                        <h3 class="service-title">Adult & Dating</h3>
                        <p class="service-desc">Discreet, chargeback-protected gateways for adult entertainment and dating applications.</p>
                    </div>
                </div>
                <!-- CSS-only scroll indicator -->
                <div class="scroll-indicator"><span>&larr; Swipe to explore industries &rarr;</span></div>
            </div>
        </div>
    </section>

    <!-- Integration Section -->
    <section class="integration-section section-padding" style="background: rgba(255,255,255,0.02); border-top: 1px solid var(--border-glass);">
        <div class="site-container text-center">
            <h2>Seamless E-Commerce Integrations</h2>
            <p style="max-width: 600px; margin: 0 auto 3rem auto; color: var(--text-muted);">Don't change your platform. Connect our high-risk gateways directly to your existing store using our simple plugins and APIs.</p>
            <div class="trust-logos" style="opacity: 0.8; gap: 4rem;">
                <!-- Replace with actual SVG logos later -->
                <div class="trust-logo" style="font-size: 1.5rem;">🛍️ Shopify</div>
                <div class="trust-logo" style="font-size: 1.5rem;">🛒 WooCommerce</div>
                <div class="trust-logo" style="font-size: 1.5rem;">Ⓜ️ Magento</div>
                <div class="trust-logo" style="font-size: 1.5rem;">📦 BigCommerce</div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="cta-section section-padding">
        <div class="site-container text-center cta-box glass-panel-dark">
            <h2>Stop Settling for Second-Tier Processors</h2>
            <p>Get a robust, scalable high-risk merchant account approved this week.</p>
            <a href="/contact-us/" class="btn btn-primary btn-large">Start Your Application</a>
        </div>
    </section>

</main><!-- #main -->

<!-- Embedded styles specific to High-Risk page tweaks -->
<style>
.high-risk-hero {
    min-height: 70vh;
}
.glow-red {
    background: radial-gradient(circle, rgba(246, 11, 62, 0.15) 0%, rgba(254, 131, 0, 0.05) 50%, transparent 70%);
}
</style>

<?php
get_footer();
