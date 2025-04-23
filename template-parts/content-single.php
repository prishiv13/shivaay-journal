<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shivaay Journal
 * @subpackage template-parts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?><!-- .entry-title -->
    <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?>
    <span>
      <?php esc_html_e( 'Author: ', 'shivaay-journal' ); ?> <?php the_author_posts_link(); ?>
    </span>
  </header><!-- .entry-header -->

  <div class="entry-body">

    <?php if ( has_post_thumbnail() ): ?>
      <div class="entry-media" aria-hidden="true" tabindex="-1">
        <?php the_post_thumbnail( 'full', [ 'class' => 'shivaay-single-thumb' ] ); ?>
      </div>
    <?php endif; ?><!-- .entry-media -->

    <div class="entry-content">
      <?php
        the_content();

        wp_link_pages([
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shivaay-journal' ),
          'after'  => '</div>',
        ]);
      ?>
    </div><!-- .entry-content -->

    <div class="entry-meta">

      <div class="entry-category-content">
        <span><?php esc_html_e( 'Categories:', 'shivaay-journal' ); ?></span>
        <?php the_category( ', ' ); ?>
      </div><!-- .category-title -->
      
      <?php if( has_tag() ): ?>
        <div class="entry-tags-content">
          <?php the_tags( 'Tags: ', ', ' ); ?>
        </div>
      <?php endif; ?><!-- .tags-title -->

    </div><!-- .entry-meta -->

  </div><!-- .entry-body -->
  
</article><!-- #post-<?php the_ID(); ?> -->  
