<?php
/**
 * Template for displaying single post content
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
the_content(); ?>
<div class="clearfix">
<?php // page numbers
wp_link_pages( array(
    'before'      => '<span class="clearfix"></span><div class="dtr-page-links">' . esc_html__( 'Pages:', 'navein' ),
    'after'       => '</div>',
    'link_before' => '<span class="dtr-page-number">',
    'link_after'  => '</span>',
) ); ?>
</div>