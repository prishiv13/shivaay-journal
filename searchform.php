<?php
 /**
 * The template for displaying the search form
 *
 * @package Shivaay Journal
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label>
    <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'shivaay-journal' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for:', 'placeholder', 'shivaay-journal' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	</label>

	<button type="submit" class="search-submit">
    <?php echo esc_html_x( 'Search', 'submit button', 'shivaay-journal' ); ?>
  </button>

</form>