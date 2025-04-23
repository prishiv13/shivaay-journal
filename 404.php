<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shivaay Journal
 */

get_header(); ?>

      <header class="page-header">
        <h1><?php esc_html_e( 'Page not found.', 'shivaay-journal' ); ?></h1>
      </header><!-- .page-header -->

      <div class="page-content">
        <p><?php esc_html_e( 'The page you tried to access does not exist.', 'shivaay-journal' ); ?></p>
        <?php 
          get_search_form();
          the_widget( 'WP_Widget_Recent_Posts', [
            'title'   => esc_html__( 'Latest Posts', 'shivaay-journal' ), 
            'number'  => 10
          ]);
        ?>
        <a class="error-home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          &larr; <?php esc_html_e( 'Back to home', 'shivaay-journal' ); ?>
        </a>
      </div><!-- .page-content -->

    </main><!-- #main -->

  </div><!-- #primary -->

<?php 
get_footer(); 
