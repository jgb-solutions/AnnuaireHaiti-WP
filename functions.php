<?php


if ( ! function_exists( 'ah_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ah_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'ah-logo', 319, 319, true );
		add_image_size( 'ah-banner', 768, 317, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'ah' ),
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'ah_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );
	}
endif; // ah_setup
add_action( 'after_setup_theme', 'ah_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ah_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Right' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	$args = array(
		'name'          => __('Sidebar Footer %d'),
	    'id'            => 'sidebar-footer',
		'description'   => 'Sidebar in the footer',
		'class'         => '',
		'before_widget' => '<div class="col-sm-3 col-xs-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>' );
	register_sidebars( 4, $args );
}
add_action( 'widgets_init', 'ah_widgets_init' );

require_once 'scripts.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require 'wp_bootstrap_navwalker.php';
require 'custom_functions.php';
require 'pagination.php';