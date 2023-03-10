<?php
/**
 * tigerland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tigerland
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tigerland_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on tigerland, use a find and replace
		* to change 'tigerland' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tigerland', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tigerland' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tigerland_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tigerland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tigerland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tigerland_content_width', 640 );
}
add_action( 'after_setup_theme', 'tigerland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tigerland_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tigerland' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tigerland' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tigerland_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tigerland_scripts() {
	wp_enqueue_style('UIKIT-css', get_template_directory_uri() . '/assets/css/uikit.css');
	wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.css');
	wp_enqueue_style('swipper', get_template_directory_uri() . '/assets/css/swipper.min.css');
	wp_enqueue_style('material-design-iconic-font-css', get_template_directory_uri() . '/assets/css/material-design-iconic-font.css');
	wp_enqueue_style( 'tigerland-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_style_add_data( 'tigerland-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery ', get_template_directory_uri() . '/assets/js/jquery-2.0.0.js', array(), '20151215', true);
	wp_enqueue_script('owl-locomotive', get_template_directory_uri() . '/assets/js/locomotive.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('uikit', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('swipperjs', get_template_directory_uri() . '/assets/js/swipper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('owl-uikit-icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('owl-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tigerland_scripts' );

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
/**
 * Class init includes
 */
require get_template_directory() . '/inc/classes/class-init.php';
/**
 * Acf option pages includes
 */
require get_template_directory() . '/inc/acf-option.php';

/**
 * Register Bootstrap Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/*
 * The walker also adds a data attribute for dropdown toggles
*/
add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}