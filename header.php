<?php
/**
 * The header for our premium theme
 *
 * @package ReliableSolutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Preconnect to Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'reliablesolutions' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			if ( has_nav_menu( 'menu-1' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			} else {
				// Premium Fallback Menu
				echo '<ul>';
				echo '<li><a href="/">Home</a></li>';
				echo '<li><a href="/high-risk/">High Risk</a></li>';
				echo '<li><a href="#services">Services</a></li>';
				echo '<li><a href="/contact-us/" class="btn btn-primary" style="padding: 0.5rem 1.2rem; margin-top:-0.5rem;">Get Approved</a></li>';
				echo '</ul>';
			}
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
