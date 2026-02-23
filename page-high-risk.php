<?php
/**
 * Template Name: High-Risk Landing Page
 *
 * A specialized template for CBD and high-risk payment processing SEO landing pages.
 *
 * @package ReliableSolutions
 */

get_header();
?>

<main id="primary" class="site-main site-container">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'high-risk-landing-page' ); ?>>
            <header class="entry-header" style="text-align: center; margin-bottom: 2rem;">
                <?php the_title( '<h1 class="entry-title" style="color: var(--primary-color); font-size: 2.5rem;">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <div class="hero-section" style="background: #f0f7ff; padding: 2rem; border-radius: 8px; margin-bottom: 2rem;">
                    <h2>Secure Payment Processing for Your Specific Industry</h2>
                    <p>We specialized in hard-to-place merchant accounts. Zero reserves, low rates, fast approvals.</p>
                    <a href="/contact-us/" class="button" style="display:inline-block; background: var(--primary-color); color: white; padding: 10px 20px; border-radius: 4px;">Get Approved Today</a>
                </div>

                <?php the_content(); ?>

                <div class="features-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 3rem;">
                    <div class="feature-card" style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                        <h3>Chargeback Protection</h3>
                        <p>Advanced tools to prevent fraud and manage disputes before they become chargebacks.</p>
                    </div>
                    <div class="feature-card" style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                        <h3>Multi-Platform Integration</h3>
                        <p>Seamlessly integrate with WooCommerce, Shopify, Magento, and more.</p>
                    </div>
                    <div class="feature-card" style="padding: 1rem; border: 1px solid #ccc; border-radius: 4px;">
                        <h3>Compliance Focus</h3>
                        <p>Stay up to date with changing regulations in the hemp and high-risk spaces.</p>
                    </div>
                </div>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->
        <?php
    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
