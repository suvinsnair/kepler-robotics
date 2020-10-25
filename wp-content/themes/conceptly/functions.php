<?php
if ( ! function_exists( 'conceptly_setup' ) ) :
function conceptly_setup() {
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'conceptly');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'conceptly' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', conceptly_google_font() ) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'conceptly_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'conceptly_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function conceptly_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'conceptly_content_width', 1170 );
}
add_action( 'after_setup_theme', 'conceptly_content_width', 0 );

/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';


/**
 * Called Breadcrumb
 */
require_once get_template_directory() . '/inc/breadcrumb/breadcrumb.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


// custom control
require_once get_template_directory() . '/inc/custom-controls/customizer-controls.php';

/**
 * Customizer additions.
 */
 require get_template_directory() . '/inc/customizer-repeater/functions.php';
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require_once get_template_directory() . '/inc/jetpack.php';

/**
 * Load Sanitization file.
 */
require_once get_template_directory() . '/inc/sanitization.php';


/**
 * Called all the Customize file.
 */
require( get_template_directory() . '/inc/customize/customizer_recommended_plugin.php');
require( get_template_directory() . '/inc/customize/customizer_import_data.php'); 
require( get_template_directory() . '/inc/customize/conceptly-header-section.php');
require( get_template_directory() . '/inc/customize/conceptly-blog.php');
require( get_template_directory() . '/inc/customize/conceptly-footer-section.php');
require( get_template_directory() . '/inc/customize/conceptly-general.php');
require( get_template_directory() . '/inc/customize/conceptly-premium.php');
require( get_stylesheet_directory() . '/template-parts/sections/section-blog.php');