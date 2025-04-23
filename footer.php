<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shivaay Journal
 */

?>

  <footer class="footer">
    <div class="container">
      <small class="footer__copy">
        &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
      </small>

      <section class="footer__info">
        &nbsp;<span>/</span>

        <span class="footer__info-text">
          <?php esc_html_e( 'Theme:', 'shivaay-journal' ); ?>
        </span>
        
        <a class="footer__info-link" href="<?php echo esc_url( 'https://wordpress.org/themes/shivaay-journal/', 'shivaay-journal' ); ?>" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Shivaay Journal', 'shivaay-journal' ); ?></a>&nbsp;<span>/</span>

        <span class="footer__info-text">
          <?php esc_html_e( 'License:', 'shivaay-journal' ); ?>
        </span>

        <a class="footer__info-link" href="<?php echo esc_url( 'https://www.gnu.org/licenses/gpl-3.0.html', 'shivaay-journal' ); ?>" target="_blank" rel="noreferrer noopener">
          <?php esc_html_e( 'GPLv3', 'shivaay-journal' ); ?>
        </a>
      </section>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>