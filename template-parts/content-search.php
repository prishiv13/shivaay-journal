<?php
/**
 * Template part for displaying search content in search.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shivaay Journal
 * @subpackage template-parts
 */

?>

<?php echo '<p>' . esc_html__( 'No results were found, try searching for another word.', 'shivaay-journal' ) . '</p>'; ?>

<?php 
  get_search_form(); 
  the_widget( 'WP_Widget_Recent_Posts', [
    'title'   => esc_html__( 'Latest Posts', 'shivaay-journal' ), 
    'number'  => 10
  ]); 
?>
  