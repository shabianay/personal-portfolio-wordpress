<?php
/**
 * The Image for post
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( true == navein_get_theme_option( 'navein_single_image_enable', true ) ) { ?>
	<div class="dtr-single-thumb <?php echo esc_attr( navein_get_theme_option( 'navein_single_image_corner', 'dtr-radius--rounded' ) ) ?>">
		<?php the_post_thumbnail( 'full' ); ?>
	</div>
<?php }