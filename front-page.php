<?php
/**
 * The template for displaying the front page (Home)
 *
 * @package ReliableSolutions
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-content site-container">
            <h1 class="hero-title animate-up">Premium Payment Processing for High-Risk & E-Commerce</h1>
            <p class="hero-subtitle animate-up delay-1">Streamline your transactions. Zero reserves, low rates, and fast approvals tailored for CBD, THC, and other complex industries.</p>
            <div class="hero-cta animate-up delay-2">
                <a href="#services" class="btn btn-primary">Explore Solutions</a>
                <a href="/contact-us/" class="btn btn-secondary">Get Approved Today</a>
            </div>
        </div>
        <div class="hero-background-glow"></div>
    </section>

    <!-- TRUST LOGOS / PARTNERS -->
    <section class="trust-section">
        <div class="site-container">
            <p class="trust-label">Trusted by leading businesses in challenging markets</p>
            <div class="trust-logos">
                <!-- Replace with actual client or partner logos if available -->
                <div class="trust-logo">HighRisk Partner</div>
                <div class="trust-logo">SecurePayments</div>
                <div class="trust-logo">EcomSolutions</div>
                <div class="trust-logo">CryptoGate</div>
                <div class="trust-logo">ZenithFinancial</div>
            </div>
        </div>
    </section>

    <!-- SERVICES OVERVIEW -->
    <section id="services" class="services-section section-padding">
        <div class="site-container">
            <h2 class="section-title text-center">Our Specialized Services</h2>
            <p class="section-subtitle text-center">We provide tailored solutions that standard processors won't.</p>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card glass-panel">
                    <div class="service-icon">🛡️</div>
                    <h3 class="service-title">High-Risk Processing</h3>
                    <p class="service-desc">Reliable, secure, and compliant payment gateways for CBD, telemedicine, and more.</p>
                    <a href="/high-risk/" class="service-link">Learn More &rarr;</a>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card glass-panel">
                    <div class="service-icon">💳</div>
                    <h3 class="service-title">Chargeback Management</h3>
                    <p class="service-desc">Advanced proactive tools to prevent fraud and manage disputes instantly.</p>
                    <a href="/services/#chargeback" class="service-link">Learn More &rarr;</a>
                </div>

                <!-- Service 3 -->
                <div class="service-card glass-panel">
                    <div class="service-icon">🌐</div>
                    <h3 class="service-title">E-Commerce Integration</h3>
                    <p class="service-desc">Seamless API integrations with WooCommerce, Shopify, Magento, and Wix.</p>
                    <a href="/services/#retail" class="service-link">Learn More &rarr;</a>
                </div>

                <!-- Service 4 -->
                <div class="service-card glass-panel">
                    <div class="service-icon">💵</div>
                    <h3 class="service-title">Cash Discount Programs</h3>
                    <p class="service-desc">Compliance-focused cash discount flows to save you money on processing fees.</p>
                    <a href="/services/#cash" class="service-link">Learn More &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGHLIGHT SECTION -->
    <section class="highlight-section section-padding">
        <div class="site-container highlight-grid">
            <div class="highlight-text">
                <h2 class="section-title">Scale Your Business Globally Without Boundaries</h2>
                <p>Integrating preferred payment methods for your international customers is as simple as a click. Let us handle the complex technical integration, ensuring your payment system is flawlessly connected.</p>
                <ul class="highlight-list">
                    <li><span class="check">✓</span> 99.9% Uptime Guarantee</li>
                    <li><span class="check">✓</span> Advanced Fraud Protection</li>
                    <li><span class="check">✓</span> 24/7 Dedicated Support</li>
                </ul>
            </div>
            <div class="highlight-image glass-panel">
                <!-- Abstract UI representation of dashboard -->
                <div class="mock-dashboard">
                    <div class="mock-header"></div>
                    <div class="mock-body">
                        <div class="mock-chart"></div>
                        <div class="mock-stats">
                            <div class="mock-stat-box"></div>
                            <div class="mock-stat-box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="cta-section section-padding">
        <div class="site-container text-center cta-box glass-panel-dark">
            <h2>Ready to Elevate Your Payment Experience?</h2>
            <p>Join hundreds of high-volume merchants processing securely today.</p>
            <a href="/contact-us/" class="btn btn-primary btn-large">Request Your Demo Now</a>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();
