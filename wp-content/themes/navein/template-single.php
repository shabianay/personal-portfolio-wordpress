<?php
/**
 * The template file for elementor single post
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
$tags_title	= navein_get_theme_option( 'navein_tags_title_text', 'Tags:' );
?>
<div id="dtr-main-wrapper" class="clearfix <?php echo esc_attr( $navein_default_layout_class ) ?>">
    <main id="dtr-primary-section" class="dtr-content-area">
      <?php
		while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
        <?php if ( ! post_password_required() ) :
			if ( has_post_thumbnail() ) {
				get_template_part( '/template-parts/post/media/single-thumb' );
			} 	endif;  ?>
        </div>
        <div class="dtr-single-post--content">
            <?php get_template_part( '/template-parts/post/content/single-content' ); ?>
            <div class="container">
            <?php if ( has_tag() && true == navein_get_theme_option( 'navein_single_tags_enable', true ) ||  class_exists( 'dtr_navein_core' ) && true == navein_get_theme_option( 'navein_social_share_enable', true ) ) { ?>
            <div class="dtr-post-footer-meta">
                <?php if ( has_tag() && true == navein_get_theme_option( 'navein_single_tags_enable', true ) ) { ?>
                <div class="dtr-meta-tags"><?php if ( $tags_title != '' ) { ?><h5 class="dtr-tags-title dtr-meta-title"><?php echo esc_html($tags_title) ?></h5><?php } ?><?php the_tags( '','' ); ?></div>
                <?php } ?>
                 <?php if ( class_exists( 'dtr_navein_core' ) && true == navein_get_theme_option( 'navein_social_share_enable', true ) ) { navein_social_share_hook(); } ?>
            </div>
            <?php } ?>
            <?php
			// author bio
			if ( '' != get_the_author_meta( 'description' ) && is_multi_author() ) {
				get_template_part( '/template-parts/post/author-bio' );
			}
			// post nav
			navein_post_nav();
			// comments
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
            </div>
        </div>
        </article>
        <?php endwhile; ?>
    </main>
    <!-- #dtr-primary-section -->
    <?php if( is_active_sidebar('widgets-blog') ) {
	 get_sidebar(); } ?>
</div>
<!-- #dtr-main-wrapper -->
<?php get_footer();
