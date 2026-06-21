<?php
/**
 * Blog functions
 *
 * @package NaveinTheme
 * @version 1.0.0
 */

/**
 * Modify tag cloud widget
 */
if ( ! function_exists( 'navein_tag_cloud_widget' ) ) :
add_filter('wp_generate_tag_cloud', 'navein_tag_cloud_widget',10,1);
function navein_tag_cloud_widget($input){
  return preg_replace('/ style=("|\')(.*?)("|\')/','',$input);
}
endif;

/**
 * Blog classes
 */
if ( ! function_exists( 'navein_blog_classes' ) ) :
	function navein_blog_classes( $classes = NULL ) {
		if ( 'dtr-blog-grid-masonry' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
			$classes = 'dtr-blog-grid dtr-blog-grid-masonry';
		} elseif ( 'dtr-blog-grid-masonry-3col' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
			$classes = 'dtr-blog-grid dtr-blog-grid-3col dtr-blog-grid-masonry';
		} elseif ( 'dtr-blog-grid-fitrows-3col' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
			$classes = 'dtr-blog-grid dtr-blog-grid-3col dtr-blog-grid-fitrows';
		} elseif ( 'dtr-blog-grid-fitrows' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
			$classes = 'dtr-blog-grid dtr-blog-grid-fitrows';
		} elseif ( 'dtr-blog-left-thumb' == navein_get_theme_option( 'navein_blog_entry_style', 'dtr-blog-default' ) ) {
			$classes = 'dtr-blog-left-thumb';
		} else {
			$classes = 'dtr-blog-default';
		}
		return $classes;
	}
endif;