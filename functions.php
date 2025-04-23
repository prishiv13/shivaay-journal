<?php
/**
 * The template functions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Shivaay Journal
 * 
 */

/**
 * Enqueue file for the Admin Bar
 */
require_once get_template_directory() . '/inc/admin-bar.php';

/**
 * Admin bar styling
**/
function shivaay_simple_override_admin_bar_css() {
  // Styles "Shivaay Journal Theme" option (admin bar)
  if ( is_admin_bar_showing() ) {
    printf( 
      '<style>
        #wpadminbar ul#wp-admin-bar-root-default > #wp-admin-bar-shivaay-journal-admin-bar,
        #wpadminbar ul#wp-admin-bar-root-default > #wp-admin-bar-shivaay-journal-admin-bar a:hover,
        #wpadminbar ul#wp-admin-bar-root-default > #wp-admin-bar-shivaay-journal-admin-bar a[aria-haspopup="true"] { 
          background-color: #696969;
          color: #fff;
        }
      </style>' 
    );
  }
}

add_action( 'admin_print_styles', 'shivaay_simple_override_admin_bar_css' );
add_action( 'admin_head', 'shivaay_simple_override_admin_bar_css' );
add_action( 'wp_head', 'shivaay_simple_override_admin_bar_css' );

/**
 * Execution of the Admin Bar
**/
function shivaay_simple_admin() {
	$shivaay_simple_admin_bar = new ReallySimpleAdminBars();  
} add_action( 'init', 'shivaay_simple_admin' );

/**
 * Execution of Skip link
**/
function shivaay_simple_skip_link() {

  // Skip link
  echo '<a class="screen-reader-text skip-link" href="#main">' . esc_html__( 'Skip to content', 'shivaay-journal' ) . '</a>';
} add_action( 'wp_body_open', 'shivaay_simple_skip_link', 5 );

/**
 * Register the initial theme setup
**/
function shivaay_simple_support() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on Shivaay Journal, use a find and replace
   * to change 'shivaay-journal' to the name of your theme in all the template files.
   */
  load_theme_textdomain( 'shivaay-journal', get_template_directory() . '/languages' );
  
  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'shivaay-journal-thumb', 370, 247, [ 'center', 'top' ] );
  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 
    'html5', [
    'comment-list', 
    'comment-form', 
    'search-form', 
    'gallery', 
    'caption', 
    'style', 
    'script'
  ]);

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support( 
    'custom-logo', [
    'width'       => 180,
    'height'      => 50,
    'flex-width'  => true,
    'flex-height' => true,
  ]);

} add_action( 'after_setup_theme', 'shivaay_simple_support' );

/**
 * Register the navigation menus
**/
function shivaay_simple_nav_menus() {
  
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus([
    'shivaay-journal-primary-menu' => esc_html__( 'Primary Menu', 'shivaay-journal' ),
  ]);
} add_action( 'init', 'shivaay_simple_nav_menus' );

/**
 * Register the theme assets
**/
wp_enqueue_style( 'Lato', '//fonts.googleapis.com/css?family=Lato:300,400,700,900', array() );
function shivaay_simple_style() {

  // Theme's main stylesheet
  wp_enqueue_style( 'shivaay-journal-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), false );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
    wp_enqueue_script( 'comment-reply' ); 
  }
} add_action( 'wp_enqueue_scripts', 'shivaay_simple_style' );

/**
 * Register the theme sidebars
**/
function shivaay_simple_sidebar() {
  register_sidebar([
    'name'          => esc_html__( 'Sidebar', 'shivaay-journal' ),
    'id'            => 'shivaay-journal-sidebar-1',
    'description'   => esc_html__( 'Add widgets to the posts sidebar.', 'shivaay-journal' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ]);
} add_action( 'widgets_init', 'shivaay_simple_sidebar' );

/**
 * Filter archive title
**/
function shivaay_simple_category_title( $title ) {

  // Returns only the category name on the category page
  if( is_category() ) { 
    $title = single_cat_title( '', false ); 
  } return $title;
} add_filter( 'get_the_archive_title', 'shivaay_simple_category_title' );

/**
 * Filter excerpt length
**/
function shivaay_simple_excerpt_length( $length ) {

  // Return up to 25 words for any abstract
  return 25;
} add_filter( 'excerpt_length', 'shivaay_simple_excerpt_length' );

/**
 * Filter excerpt more
**/
function shivaay_simple_excerpt_more( $more ) {
  
  // Any abstract will have a sequence ...
  return '...';
} add_filter( 'excerpt_more', 'shivaay_simple_excerpt_more' );
