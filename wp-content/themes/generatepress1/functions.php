<?php
/**
 * GeneratePress.
 *
 * Please do not make any edits to this file. All edits should be done in a child theme.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set our theme version.
define( 'GENERATE_VERSION', '2.1.3' );

if ( ! function_exists( 'generate_setup' ) ) {
	add_action( 'after_setup_theme', 'generate_setup' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 0.1
	 */
	function generate_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'generatepress' );

		// Add theme support for various features.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status' ) );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height' => 70,
			'width' => 350,
			'flex-height' => true,
			'flex-width' => true,
		) );

		// Register primary menu.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'generatepress' ),
		) );

		/**
		 * Set the content width to something large
		 * We set a more accurate width in generate_smart_content_width()
		 */
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1200; /* pixels */
		}

		// This theme styles the visual editor to resemble the theme style.
		add_editor_style( 'css/admin/editor-style.css' );
	}
}



add_action( 'wp_enqueue_scripts', 'dales_register_scripts' );

function dales_register_scripts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/custom-style.css' );
	wp_enqueue_style( 'jquery-formstyler', get_template_directory_uri() . '/css/jquery.formstyler.css');
	wp_enqueue_style( 'jquery-themeformstyler', get_template_directory_uri() . '/css/jquery.formstyler.theme.css');
	wp_enqueue_style( 'datepicker-style', get_template_directory_uri() . '/css/datepicker.min.css');
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom_dales.js' );
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js' , array('jquery') );
	wp_enqueue_script( 'jquery-formstyler', get_template_directory_uri() . '/js/jquery.formstyler.min.js' , array('jquery') );
	wp_enqueue_script( 'datepicker-script', get_template_directory_uri() . '/js/datepicker.js' );
	wp_enqueue_script( 'datepicker-script-eng', get_template_directory_uri() . '/js/datepicker.en.js' );

}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'dales_active ';
    }
    return $classes;
}

/**
 * Get all necessary theme files
 */
require get_template_directory() . '/inc/theme-functions.php';
require get_template_directory() . '/inc/defaults.php';
require get_template_directory() . '/inc/class-css.php';
require get_template_directory() . '/inc/css-output.php';
require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/markup.php';
require get_template_directory() . '/inc/element-classes.php';
require get_template_directory() . '/inc/typography.php';
require get_template_directory() . '/inc/plugin-compat.php';
require get_template_directory() . '/inc/migrate.php';
require get_template_directory() . '/inc/deprecated.php';

if ( is_admin() ) {
	require get_template_directory() . '/inc/meta-box.php';
	require get_template_directory() . '/inc/dashboard.php';
}

/**
 * Load our theme structure
 */
require get_template_directory() . '/inc/structure/archives.php';
require get_template_directory() . '/inc/structure/comments.php';
require get_template_directory() . '/inc/structure/featured-images.php';
require get_template_directory() . '/inc/structure/footer.php';
require get_template_directory() . '/inc/structure/header.php';
require get_template_directory() . '/inc/structure/navigation.php';
require get_template_directory() . '/inc/structure/post-meta.php';
require get_template_directory() . '/inc/structure/sidebars.php';


function find_product_from_coockie ($prod_id) {
	if (isset($_COOKIE['form_data']) && !empty($_COOKIE['form_data'])) {
		parse_str(stripslashes($_COOKIE['form_data']), $form_prod_data);
		if (!isset($form_prod_data['product']) || empty($form_prod_data['product'])) {
			return;
		}
		$form_prod_data = $form_prod_data['product'];
		foreach ($form_prod_data  as $prod_row => $prod_data) {
			if ($prod_data['id'] == $prod_id) {
				return $form_prod_data[$prod_row];
			}
		}
	}
	return false;
}

function debug ($data) {
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
