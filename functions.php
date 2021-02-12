<?php
/**
 * ГородОк functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ГородОк
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gorodok_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gorodok_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ГородОк, use a find and replace
		 * to change 'gorodok' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gorodok', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'gorodok' ),
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
				'gorodok_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'gorodok_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gorodok_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gorodok_content_width', 640 );
}
add_action( 'after_setup_theme', 'gorodok_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gorodok_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gorodok' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gorodok' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gorodok_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gorodok_scripts() {
    wp_enqueue_style( 'gorodok-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'Roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', array(), _S_VERSION );
    wp_enqueue_style( 'FontAwesome-icons', get_template_directory_uri() . '/assets/css/all.min.css', array(), 5.15 );
    wp_enqueue_style( 'Bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 5.0 );
    wp_enqueue_style( 'MDBootstrap-css', get_template_directory_uri() . '/assets/css/mdb.min.css', array(), 5.0 );
    wp_enqueue_style( 'UIKit-css', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), 3.16 );
    wp_enqueue_style( 'FancyBox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), 3.5 );
    wp_enqueue_style( 'Main-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'Media-css', get_template_directory_uri() . '/assets/css/media.min.css', array(), _S_VERSION );
    wp_style_add_data( 'remember-style', 'rtl', 'replace' );

    wp_enqueue_script( 'gorodok-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'JQuery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 3.5, true );
    wp_enqueue_script( 'FancyBox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), 3.5, true );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 5.0, true );
    wp_enqueue_script( 'MDBootstrap', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), 5.0, true );
    wp_enqueue_script( 'UIKit', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), 3.16, true );
    wp_enqueue_script( 'UIKit-icons', get_template_directory_uri() . '/assets/js/juikit-icons.min.js', array(), 3.16, true );
    wp_enqueue_script( 'GorodOK-app', get_template_directory_uri() . '/assets/js/app.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'GorodOK-navScroll', get_template_directory_uri() . '/assets/js/navscroll.js', array(), 3.5, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gorodok_scripts' );

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

/* Custom logo in adminbar */

function gorodok_custom_logo() {
    echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	display:inline-block;
	background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/logo.png) !important;
	background-position: 0 0;
	width:20px !important;
	height: 20px !important;
	color:rgba(0, 0, 0, 0);
	-webkit-background-size: cover;
	background-size: cover;
	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: center;
	}
	</style>
';
}
add_action('wp_before_admin_bar_render', 'gorodok_custom_logo');

/* Custom theme author in admin panel footer */

function remove_footer_admin () {
    echo '<p>Тема ';
    echo wp_get_theme();
    echo ' разработана <a href="https://iceslam.ru" target="_blank">IceSlam</a> в компании <a href="https://alianscompany.ru" target="_blank">Альянс+</a>. Работает на WordPress</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

/* ACF Custom Theme settings page */

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Настройки темы ГородОК',
        'menu_title'	=> 'Настройки темы',
        'menu_slug' 	=> 'theme-custom-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');