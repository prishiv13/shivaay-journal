<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shivaay Journal
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'shivaay-journal' ), esc_html( get_the_title() ) );
			} else {
				printf(
					esc_html(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'shivaay-journal'
						)
					),
					esc_html( number_format_i18n( $comments_number ) ),
					esc_html( get_the_title() )
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 32,
						'max_depth'   => 6,
					)
				);
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
	  if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
	  <p class="no-comments">
      <?php esc_html_e( 'Comments are closed.', 'shivaay-journal' ); ?>
    </p>
	<?php endif; ?>

	<?php
		comment_form(
			array(
				'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
				'title_reply_after'  => '</h3>',
			)
		);
  ?>

</div><!-- .comments-area -->
