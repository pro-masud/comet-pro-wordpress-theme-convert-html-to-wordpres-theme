<?php
/**
 * honeyHome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package honeyHome
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
function honeyhome_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on honeyHome, use a find and replace
		* to change 'honeyhome' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'honeyhome', get_template_directory() . '/languages' );

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
			'honeyhome_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support('post-formats',['audio','video','gallery','qutesion','quote']);

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus([
		'mine-menu'			=> 'Mine Menu',
		'footer-menu'		=> 'Footer Mune'



	]);


	// register post type seleced words now
	register_post_type('our_words',[
		'public'				=> true,
		'labels'				=> [
			'name'				=> 'Our Works',
			'all_items'			=> 'All Worked',
			'add_new'			=> 'Add New Worked',
			'add_new_item'		=> 'Add New Worded'


		],

		'supports'				=> ['title','thumbnail','editor'],


	]);


	//register category for our works section Now

	register_taxonomy('our-work-cat','our_words',[
		'public'			=> true,
		'hierechical'		=> true,
		'labels'			=> [
			'name'			=> 'Our Work category'

		]


	]);
}
add_action( 'after_setup_theme', 'honeyhome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function honeyhome_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'honeyhome_content_width', 640 );
}
add_action( 'after_setup_theme', 'honeyhome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function honeyhome_widgets_init() {
		register_sidebar([
			'name'				=> 'Right Sidebar',
			'description'		=> 'Right sidebar all Wigets',
			'id'				=> 'right_sidebar',
			'before_widget'		=> '<div class="widget">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h6 class="upper">',
			'after_title'		=> '</h6>'

		]);

		register_sidebar([
			'name'				=> 'Footer Sidebar',
			'description'		=> 'Footer Sidebar widgets',
			'id'				=> 'footer_sidebar',
			'before_widget'		=> '',
			'after_widget'		=> '',
			'before_titlet'		=> '',
			'after_title'		=> ''


		]);
}
add_action( 'widgets_init', 'honeyhome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function honeyhome_scripts() {


	    


	wp_enqueue_style( 'bundle', get_template_directory_uri() . '/acess/css/bundle.css');
	wp_enqueue_style( 'cometdiv', get_template_directory_uri() . '/acess/css/style.css');
	wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500');
	wp_enqueue_style( 'Halant', 'https://fonts.googleapis.com/css?family=Halant:300,400');
	wp_enqueue_style( 'mainstyle', get_stylesheet_uri());





	wp_enqueue_script('jquery');
	wp_enqueue_script( 'comet-bundle', get_template_directory_uri() . '/acess/js/bundle.js', array('jquery'), null, true );
	wp_enqueue_script( 'comet-navigation', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array('jquery'), null, true );
	wp_enqueue_script( 'comet-main', get_template_directory_uri() . '/acess/js/main.js', array('jquery'), null, true );
	wp_enqueue_script( 'comet-cometprofont', get_template_directory_uri() . '/acess/js/cometprofont.js', array('jquery'), null, true );
	wp_enqueue_script( 'comet-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'honeyhome_scripts' );

	function admin_enqueue_scripts_cometpro(){

		//wp_enqueue_script( 'honeyhome-navigation', get_template_directory_uri() . '/acess/js/cometcmb.js', array(), _S_VERSION, true );


	}

	add_action('admin_enqueue_scripts','admin_enqueue_scripts_cometpro');

function amader_menu(){



}


// CMB2 Box link hear now
include_once"libs/cmb/init.php";
include_once"libs/cmb/config.php";



//Redux link hear now
include_once"libs/opt/redux-core/framework.php";
include_once"libs/opt/sample/sample-config.php";

//TGM freawork link hear now
include_once"libs/tgm/example.php";


//cometPro widgets link Hear Now 
include_once"libs/widgets/comentpro_blog_serech.php";
include_once"libs/widgets/comentpro_resent_post.php";

//postformats link for admin postformats javascript code hear
include_once"libs/postformat/cometpostformat.php";



// shortcode all links hear Now
include_once"libs/shortcode/comet_pro_title.php";
include_once"libs/shortcode/comet_pro_expertise.php";
include_once"libs/shortcode/comet_pro_our_vision.php";
include_once"libs/shortcode/comet_pro_selected_works.php";
include_once"libs/shortcode/comet_pro_title_section.php";
include_once"libs/shortcode/comet_pro_our_client.php";
include_once"libs/shortcode/comet_pro_resent_post.php";
include_once"libs/shortcode/comet_pro_our_carogal.php";
include_once"libs/shortcode/comet_pro_our_boxed.php";