<?php
/**
 * cperko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cperko
 */

if ( ! function_exists( 'cperko_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cperko_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cperko, use a find and replace
	 * to change 'cperko' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cperko', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'cperko' ),
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
	add_theme_support( 'custom-background', apply_filters( 'cperko_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'cperko_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cperko_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cperko_content_width', 640 );
}
add_action( 'after_setup_theme', 'cperko_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cperko_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cperko' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cperko' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cperko_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cperko_scripts() {
	wp_enqueue_style( 'cperko-style', get_stylesheet_uri() );
	wp_enqueue_style( 'cperko-custom-style', get_template_directory_uri() . '/dist/custom.css' );

	wp_enqueue_script( 'cperko-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cperko-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'cperko-header', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '20170202', true );

	wp_enqueue_script( 'cperko-contact-form', get_template_directory_uri() . '/js/contact-form.js', array( 'jquery' ), '20170202', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cperko_scripts' );

function cperko_excerpt( $more ) {
	return '...&nbsp;&nbsp;<a class="read-more" href="' . get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'cperko_excerpt' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load shortcodes
 */
 require get_stylesheet_directory() . '/inc/shortcodes.php';

/**
 * Admin functions
 */
require get_stylesheet_directory() . '/inc/functions-admin.php';

/**
 * Custom Post Types
 */
require get_stylesheet_directory() . '/inc/function-custom-post-type.php';

/**
 * Ajax
 */
require get_stylesheet_directory() . '/inc/ajax.php';

/**
 * Customizer
 */
require get_stylesheet_directory() . '/inc/customizer/customize-front-page.php';