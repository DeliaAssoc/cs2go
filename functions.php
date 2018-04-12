<?php
/**
 * Cold Storage 2 Go functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cold_Storage_2_Go
 */

include( get_stylesheet_directory() . '/includes/customizer.php' );
// include( get_stylesheet_directory() . '/includes/wyswig_styles.php' );

if ( ! function_exists( 'cs2g_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cs2g_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cold Storage 2 Go, use a find and replace
		 * to change 'cs2g' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cs2g', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cs2g' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cs2g_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cs2g_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cs2g_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cs2g_content_width', 640 );
}
add_action( 'after_setup_theme', 'cs2g_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// Register Sidebars
function cs2g_sidebars() {

	$args = array(
		'id'            => 'default',
		'class'         => 'default',
		'name'          => __( 'Default Page Sidebar Area', 'text_domain' ),
		'description'   => __( 'Widget area for Default Template Pages', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'contact',
		'class'         => 'contact',
		'name'          => __( 'Contact Page Sidebar Area', 'text_domain' ),
		'description'   => __( 'Widget area for Contact Template Pages', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'news',
		'class'         => 'news',
		'name'          => __( 'News Page Sidebar Area', 'text_domain' ),
		'description'   => __( 'Widget area for News Template Pages', 'text_domain' ),
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'cs2g_sidebars' );

/**
 * Enqueue scripts and styles.
 */
function cs2g_scripts() {
	wp_enqueue_style( 'cs2g-style', get_stylesheet_uri() );

	// Styles brought over from old site
	wp_enqueue_style( 'cs2g-legacy', get_template_directory_uri() . '/legacy.css' );

	// prettyPhoto CSS
	wp_enqueue_style( 'cs2g-prettyPhoto', get_template_directory_uri() . '/prettyPhoto.css' );

	wp_enqueue_script( 'cs2g-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// prettyPhoto JS
	wp_enqueue_script( 'cs2g-pretty-js', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array( 'jquery' ), '20151215', true );

	// Custom JS
	wp_enqueue_script( 'cs2g-custom-js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cs2g_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Include custom post types
include( get_stylesheet_directory() . '/includes/posttypes.php' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Product Category Options',
		'menu_title'	=> 'Product Category Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-cart',
		'position'		=> 6,
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Refrigerated Options',
		'menu_title'	=> 'Refrigerated',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Insulated Options',
		'menu_title'	=> 'Insulated',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Landing Page Options',
		'menu_title'	=> 'Landing Page Options',
		'menu_slug' 	=> 'landing-page-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-analytics',
		'position'		=> 10,
		'redirect'		=> true
	));
	
}

show_admin_bar(false);