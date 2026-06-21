<?php
/**
 * Search Modal
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$navein_search_modal_title = navein_get_theme_option('navein_search_modal_title', esc_html__("What you are looking for?",'navein')); ?>
<div class="dtr-search-modal form-light">
	<div class="dtr-modal-close"></div>
	<div class="dtr-modal-content clearfix">
		<h4 class="dtr-search-modal-title"><?php echo esc_html( $navein_search_modal_title ); ?></h4>
		<?php get_search_form(); ?>
	</div>
</div>