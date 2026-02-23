<?php
/**
 * Reliable Solutions Theme functions and definitions
 *
 * @package ReliableSolutions
 */

if ( ! function_exists( 'reliablesolutions_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function reliablesolutions_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register Navigation Menus
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'reliablesolutions' ),
				'menu-2' => esc_html__( 'Footer', 'reliablesolutions' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'reliablesolutions_setup' );

/**
 * Enqueue scripts and styles.
 */
function reliablesolutions_scripts() {
	wp_enqueue_style( 'reliablesolutions-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'reliablesolutions_scripts' );
