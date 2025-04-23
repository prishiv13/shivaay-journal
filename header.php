<?php
/**
 * The template header
 * 
 * This is the template that displays all of the <head> section and everything up until <main id="main" class="entry-site-main">
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Shivaay Journal
 * 
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header id="masthead" class="site-header">

      <?php if ( !function_exists( 'the_custom_logo' ) || !has_custom_logo() ) : ?>
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>
      <?php endif; ?><!-- .site-title -->

      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <div class="site-branding">
          <?php the_custom_logo(); ?>
        </div>
      <?php endif; ?><!-- .site-branding -->

      <?php if ( has_nav_menu( 'shivaay-journal-primary-menu' ) ) : ?>
        <nav id="site-navigation" class="main-navigation">
          <?php
            wp_nav_menu([
              'theme_location'  => 'shivaay-journal-primary-menu', 
              'container'       => '',
              'menu_class'      => 'shivaay-first-menu'
            ]);
          ?>
          <a href="#" class="close-nav-mobile">
            &times; <?php esc_html_e( 'Close Menu', 'shivaay-journal' ); ?>
          </a><!-- .close-nav-mobile -->
        </nav>
      <?php endif; ?><!-- #site-navigation -->

      <a href="#site-navigation" class="open-nav-mobile">
        <?php esc_html_e( 'Open Menu', 'shivaay-journal' ); ?>
      </a><!-- .open-nav-mobile -->
   <form class="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'shivaay-journal' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'shivaay-journal' ) ?>" />
  <button type="submit" role="button" class="btn btn-default right"/><span class="glyphicon glyphicon-search white">GO</span></button>
</form>
    </header><!-- #masthead -->

    <div id="primary" class="content-area">
      <main id="main" class="entry-site-main">
    