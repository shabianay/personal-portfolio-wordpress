<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
get_header();
if( is_active_sidebar('widgets-blog') ) {
	$navein_default_layout_class = navein_get_layout_class();
} else {
 	$navein_default_layout_class = 'dtr-fullwidth';
}
?>
<div id="dtr-main-wrapper" class="container <?php echo esc_attr( navein_blog_classes() ); ?> <?php echo esc_attr( $navein_default_layout_class ) ?>">
    <main id="dtr-primary-section" class="dtr-content-area">
        <?php
	 	if ( have_posts() ) :

	 		// get selected layout
			if ( 'dtr-blog-grid-masonry-3col' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) || 'dtr-blog-grid-masonry' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) || 'dtr-blog-grid-fitrows' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) || 'dtr-blog-grid-fitrows-3col' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
				get_template_part( '/template-parts/post/archive-layout', 'masonry' );
			} elseif ( 'dtr-blog-left-thumb' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
				get_template_part( '/template-parts/post/archive-layout', 'list' );
			} else {
				get_template_part( '/template-parts/post/archive-layout', 'standard' );
			} ?>
            <div class="clearfix"></div>
		 	<?php
			if ( 'nextprev' == navein_get_theme_option( 'navein_blog_archive_pagination_style', 'numbered' ) ) {
				navein_archive_nav();
			} else {
				navein_numbered_pagination();
			}
        else :
			get_template_part( '/template-parts/page/content', 'none' );
		endif;
		?>
    </main>
    <!-- #dtr-primary-section -->
    <?php if( is_active_sidebar('widgets-blog') ) {
	 get_sidebar(); } ?>
    <div class="clearfix"></div>
</div>
<!-- #content-wrapper -->
<?php get_footer();