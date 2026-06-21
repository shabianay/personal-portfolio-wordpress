<?php
/**
 * Template for displaying archive content
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
<?php if ( true == navein_get_theme_option( 'navein_blog_page_excerpt_enable', true ) ) { ?>
<div class="dtr-entry-excerpt clearfix">
    <?php navein_excerpt( array(
		'length' => navein_archive_excerpt_length(),
	) ); ?>
</div>
<?php } ?>
<?php
	// page numbers
	wp_link_pages( array(
		'before'      => '<span class="clearfix"></span><div class="dtr-page-links">' . esc_html__( 'Pages:', 'navein' ),
		'after'       => '</div>',
		'link_before' => '<span class="dtr-page-number">',
		'link_after'  => '</span>',
	) );