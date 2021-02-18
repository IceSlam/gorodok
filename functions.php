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
                'headerDesktop' => esc_html__( 'Шапка Десктоп', 'gorodok' ),
                'headerMobile' => esc_html__( 'Шапка Мобильные' , 'gorodok' ),
                'footerLeft' => esc_html__('Подвал Левое', 'gorodok'),
                'footerRight' => esc_html__('Подвал Правое', 'gorodok')
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
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), 5.0, true );
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

/*
=================================================================================
-------------- Страница пареметров темы -----------------------------------------
=================================================================================
*/

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

/*
=================================================================================
-------------- Bootstrap Навигация ----------------------------------------------
=================================================================================
*/

if ( ! file_exists( get_template_directory() . '/class-bnavwalker.php' ) ) {
// File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-bnavwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-bnavwalker.php';
}


/*
=================================================================================
-------------- Тип поста Новости (News post type) -------------------------------
=================================================================================
*/

function gorodok_post_type_news() {

    $labels = [
        "name" => __( "Новости", "gorodok" ),
        "singular_name" => __( "Новость", "gorodok" ),
        "menu_name" => __( "Новости", "gorodok" ),
        "all_items" => __( "Все новости", "gorodok" ),
        "add_new" => __( "Добавить новость", "gorodok" ),
        "add_new_item" => __( "Добавить новость", "gorodok" ),
        "edit_item" => __( "Редактировать новость", "gorodok" ),
        "new_item" => __( "Новая новость", "gorodok" ),
        "view_item" => __( "Просмотреть новость", "gorodok" ),
        "view_items" => __( "Просмотреть новости", "gorodok" ),
        "search_items" => __( "Поиск новостей", "gorodok" ),
        "not_found" => __( "Новостей не найдено", "gorodok" ),
        "not_found_in_trash" => __( "В корзине не найдено новостей", "gorodok" ),
        "parent" => __( "Родительские новости:", "gorodok" ),
        "featured_image" => __( "Изображение новости", "gorodok" ),
        "set_featured_image" => __( "Установить изображение новости", "gorodok" ),
        "remove_featured_image" => __( "Удалоить изображение новости", "gorodok" ),
        "use_featured_image" => __( "Использовать изображение по умолчанию", "gorodok" ),
        "archives" => __( "Новости", "gorodok" ),
        "insert_into_item" => __( "Вставить в новость", "gorodok" ),
        "uploaded_to_this_item" => __( "Загружено в новость", "gorodok" ),
        "filter_items_list" => __( "Фильтр по новостям", "gorodok" ),
        "items_list_navigation" => __( "Навигация по списку новостей", "gorodok" ),
        "items_list" => __( "Список новостей", "gorodok" ),
        "attributes" => __( "Атрибуты новостей", "gorodok" ),
        "name_admin_bar" => __( "Новость", "gorodok" ),
        "item_published" => __( "Новость опубликована", "gorodok" ),
        "item_published_privately" => __( "Новость опубликована приватно", "gorodok" ),
        "item_reverted_to_draft" => __( "Новость в черновике", "gorodok" ),
        "item_scheduled" => __( "Новость по расписанию", "gorodok" ),
        "item_updated" => __( "Новость обновлена", "gorodok" ),
        "parent_item_colon" => __( "Родительские новости:", "gorodok" ),
    ];

    $args = [
        "label" => __( "Новости", "gorodok" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "news",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "page",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => [ "slug" => "news", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        "taxonomies" => [ "news" ],
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-align-left'
    ];

    register_post_type( "news", $args );
}

add_action( 'init', 'gorodok_post_type_news' );

/*
=================================================================================
----------------- Тип поста и категории для раздела Портфолио -------------------
---------------------- Post type & Taxonomy for Portfolio -----------------------
=================================================================================
*/

function gorodok_post_type_portfolio() {

    $labels = [
        "name" => __( "Портфолио", "gorodok" ),
        "singular_name" => __( "Работа", "gorodok" ),
        "menu_name" => __( "Портфолио", "gorodok" ),
        "all_items" => __( "Все работы", "gorodok" ),
        "add_new" => __( "Добавить работу", "gorodok" ),
        "add_new_item" => __( "Добавить работу", "gorodok" ),
        "edit_item" => __( "Редактировать работу", "gorodok" ),
        "new_item" => __( "Новая работа", "gorodok" ),
        "view_item" => __( "Просмотреть работу", "gorodok" ),
        "view_items" => __( "Просмотреть работы", "gorodok" ),
        "search_items" => __( "Поиск работ", "gorodok" ),
        "not_found" => __( "Работ не найдено", "gorodok" ),
        "not_found_in_trash" => __( "В корзине не найдено работ", "gorodok" ),
        "parent" => __( "Родительские работы:", "gorodok" ),
        "featured_image" => __( "Изображение работы", "gorodok" ),
        "set_featured_image" => __( "Установить изображение работы", "gorodok" ),
        "remove_featured_image" => __( "Удалоить изображение работы", "gorodok" ),
        "use_featured_image" => __( "Использовать изображение по умолчанию", "gorodok" ),
        "archives" => __( "Портфолио", "gorodok" ),
        "insert_into_item" => __( "Вставить в работу", "gorodok" ),
        "uploaded_to_this_item" => __( "Загружено в работу", "gorodok" ),
        "filter_items_list" => __( "Фильтр по портфолио", "gorodok" ),
        "items_list_navigation" => __( "Навигация по списку работ", "gorodok" ),
        "items_list" => __( "Список работ", "gorodok" ),
        "attributes" => __( "Атрибуты работ", "gorodok" ),
        "name_admin_bar" => __( "Работа", "gorodok" ),
        "item_published" => __( "Работа опубликована", "gorodok" ),
        "item_published_privately" => __( "Работа опубликована приватно", "gorodok" ),
        "item_reverted_to_draft" => __( "Работа в черновике", "gorodok" ),
        "item_scheduled" => __( "Работа по расписанию", "gorodok" ),
        "item_updated" => __( "Работа обновлена", "gorodok" ),
        "parent_item_colon" => __( "Родительские работы:", "gorodok" ),
    ];

    $args = [
        "label" => __( "Работы", "gorodok" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "portfolio",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "rewrite" => [ "slug" => "portfolio", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-layout'
    ];

    register_post_type( "portfolio", $args );
}

add_action( 'init', 'gorodok_post_type_portfolio' );

function gorodok_tax_portfolio() {

    $labels = [
        "name" => __( "Категории работ", "gorodok" ),
        "singular_name" => __( "Категория работ", "gorodok" ),
        "menu_name" => __( "Категории работ", "gorodok" ),
        "all_items" => __( "Все категории", "gorodok" ),
        "edit_item" => __( "Редактировать категорию", "gorodok" ),
        "view_item" => __( "Просмотреть категорию", "gorodok" ),
        "update_item" => __( "Обновить название категории", "gorodok" ),
        "add_new_item" => __( "Добавить новую категорию", "gorodok" ),
        "new_item_name" => __( "Новое название категории", "gorodok" ),
        "parent_item" => __( "Родительская категория", "gorodok" ),
        "parent_item_colon" => __( "Родительская категория:", "gorodok" ),
        "search_items" => __( "Поиск по категориям", "gorodok" ),
        "popular_items" => __( "Популярные категории", "gorodok" ),
        "separate_items_with_commas" => __( "Разделить категории запятыми", "gorodok" ),
        "add_or_remove_items" => __( "Добавить или удалить категорию", "gorodok" ),
        "choose_from_most_used" => __( "Выбрать из часто используемых категорий", "gorodok" ),
        "not_found" => __( "Категорий не найдено", "gorodok" ),
        "no_terms" => __( "Нет категорий", "gorodok" ),
        "items_list_navigation" => __( "Навигация по категориям", "gorodok" ),
        "items_list" => __( "Список категорий", "gorodok" ),
        "back_to_items" => __( "Вернуться к категориям", "gorodok" ),
    ];

    $args = [
        "label" => __( "Категории работ", "gorodok" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'portfolio_tax', 'with_front' => true,  'hierarchical' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "portfolio-tax",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
    ];
    register_taxonomy( "portfolio_tax", [ "portfolio" ], $args );
}
add_action( 'init', 'gorodok_tax_portfolio' );

/*
=================================================================================
------------------- Тип поста и категории для раздела Услуги --------------------
---------------------- Post type & Taxonomy for Services -----------------------
=================================================================================
*/

function gorodok_post_type_catalog() {

    $labels = [
        "name" => __( "Каталог услуг", "gorodok" ),
        "singular_name" => __( "Услуга", "gorodok" ),
        "menu_name" => __( "Услуги", "gorodok" ),
        "all_items" => __( "Все услуги", "gorodok" ),
        "add_new" => __( "Добавить услугу", "gorodok" ),
        "add_new_item" => __( "Добавить услугу", "gorodok" ),
        "edit_item" => __( "Редактировать услугу", "gorodok" ),
        "new_item" => __( "Новая услуга", "gorodok" ),
        "view_item" => __( "Просмотреть услугу", "gorodok" ),
        "view_items" => __( "Просмотреть услуги", "gorodok" ),
        "search_items" => __( "Поиск услуг", "gorodok" ),
        "not_found" => __( "Услуг не найдено", "gorodok" ),
        "not_found_in_trash" => __( "В корзине не найдено услуг", "gorodok" ),
        "parent" => __( "Родительские услуги:", "gorodok" ),
        "featured_image" => __( "Изображение услуги", "gorodok" ),
        "set_featured_image" => __( "Установить изображение услуги", "gorodok" ),
        "remove_featured_image" => __( "Удалоить изображение услуги", "gorodok" ),
        "use_featured_image" => __( "Использовать изображение по умолчанию", "gorodok" ),
        "archives" => __( "Каталог услуг", "gorodok" ),
        "insert_into_item" => __( "Вставить в услугу", "gorodok" ),
        "uploaded_to_this_item" => __( "Загружено в услугу", "gorodok" ),
        "filter_items_list" => __( "Фильтр по услугам", "gorodok" ),
        "items_list_navigation" => __( "Навигация по списку услуг", "gorodok" ),
        "items_list" => __( "Список услуг", "gorodok" ),
        "attributes" => __( "Атрибуты услуг", "gorodok" ),
        "name_admin_bar" => __( "Услуга", "gorodok" ),
        "item_published" => __( "Услуга опубликована", "gorodok" ),
        "item_published_privately" => __( "Услуга опубликована приватно", "gorodok" ),
        "item_reverted_to_draft" => __( "Услуга в черновике", "gorodok" ),
        "item_scheduled" => __( "Услуга по расписанию", "gorodok" ),
        "item_updated" => __( "Услуга обновлена", "gorodok" ),
        "parent_item_colon" => __( "Родительские услуги:", "gorodok" ),
    ];

    $args = [
        "label" => __( "Услуги", "gorodok" ),
        "labels" => $labels,
        "description" => "Список услуг компании Город'ОК",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "catalog",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "catalog", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-media-document'
    ];

    register_post_type( "catalog", $args );
}

add_action( 'init', 'gorodok_post_type_catalog' );

function gorodok_tax_services() {

    $labels = [
        "name" => __( "Категории услуг", "gorodok" ),
        "singular_name" => __( "Категория услуг", "gorodok" ),
        "menu_name" => __( "Категории услуг", "gorodok" ),
        "all_items" => __( "Все категории", "gorodok" ),
        "edit_item" => __( "Редактировать категорию", "gorodok" ),
        "view_item" => __( "Просмотреть категорию", "gorodok" ),
        "update_item" => __( "Обновить название категории", "gorodok" ),
        "add_new_item" => __( "Добавить новую категорию", "gorodok" ),
        "new_item_name" => __( "Новое название категории", "gorodok" ),
        "parent_item" => __( "Родительская категория", "gorodok" ),
        "parent_item_colon" => __( "Родительская категория:", "gorodok" ),
        "search_items" => __( "Поиск по категориям", "gorodok" ),
        "popular_items" => __( "Популярные категории", "gorodok" ),
        "separate_items_with_commas" => __( "Разделить категории запятыми", "gorodok" ),
        "add_or_remove_items" => __( "Добавить или удалить категорию", "gorodok" ),
        "choose_from_most_used" => __( "Выбрать из часто используемых категорий", "gorodok" ),
        "not_found" => __( "Категорий не найдено", "gorodok" ),
        "no_terms" => __( "Нет категорий", "gorodok" ),
        "items_list_navigation" => __( "Навигация по категориям", "gorodok" ),
        "items_list" => __( "Список категорий", "gorodok" ),
        "back_to_items" => __( "Вернуться к категориям", "gorodok" ),
    ];

    $args = [
        "label" => __( "Категории услуг", "gorodok" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'services', 'with_front' => true,  'hierarchical' => true, ],
        "show_admin_column" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "rest_base" => "services",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => true,
    ];
    register_taxonomy( "services", [ "catalog" ], $args );
}
add_action( 'init', 'gorodok_tax_services' );

add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu() {
    remove_menu_page('edit.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('themes.php');
    remove_menu_page('plugins.php');
    remove_menu_page('users.php');
    remove_menu_page( 'options-general.php');
    remove_menu_page( 'duplicator' );
    remove_menu_page( 'edit.php?post_type=acf-field-group' );
}