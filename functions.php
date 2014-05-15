<?php
/**
 * carpigiani-theme functions and definitions
 *
 * @package carpigiani-theme
 */


define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework/inc/options-framework.php';

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */

add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php

}

include ( dirname( __FILE__ ) . "/options.php" );


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'carpigiani_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function carpigiani_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on carpigiani-theme, use a find and replace
	 * to change 'carpigiani-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'carpigiani-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'slider-home', 600, 290, true );
	add_image_size( 'slider-cat-produto', 980, 433, true );
	add_image_size( 'th-cat-post', 140, 245, true );
}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'carpigiani-theme' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'carpigiani_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // carpigiani_theme_setup
add_action( 'after_setup_theme', 'carpigiani_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function carpigiani_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'carpigiani-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'carpigiani_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function carpigiani_theme_scripts() {
	wp_enqueue_script( 'jquery' );

	wp_enqueue_style( 'carpigiani-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'carpigiani-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'carpigiani-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// carouFredSel
	wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/caroufredsel/jquery.carouFredSel-6.2.1.js', array(), '', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js' );
	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js' );
	//wp_enqueue_script( 'intrucao', get_template_directory_uri() . '/js/intrucao.js' );
	
	// Click Search Script - Header Menu
	wp_enqueue_script( 'scripts.search', get_template_directory_uri() . '/js/scripts.search.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'carpigiani_theme_scripts' );

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

/**
 * Load CPT Produtos.
 */
require_once ( get_stylesheet_directory() . '/inc/custom-produtos.php' );

/**
 * ACF
 */
define( 'ACF_LITE' , true );
require get_template_directory() . '/inc/advanced-custom-fields/acf.php';

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_campos-de-produtos',
		'title' => 'Campos de Produtos',
		'fields' => array (
			array (
				'key' => 'field_53639ff5ca3ca',
				'label' => 'Sub Título',
				'name' => 'sub_titulo',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Sub Título',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'produtos',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


/**
* Disable Admin Bar for All Users.
*/
show_admin_bar(false);

/**
* Exibe 5 post da categoria em questão
*/
add_action( 'pre_get_posts', 'show_posts_in_cat', 1 );
function show_posts_in_cat( $query ) {

    if ( is_category() ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 5 );
        return;
    }
}