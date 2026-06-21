<?php
/**
 * Layouts
 */
// Layout Classes
if ( ! function_exists( 'navein_get_layout_class' ) ) {
	function navein_get_layout_class() {

		// Vars
		$class = 'dtr-fullwidth';

		// Single Post Layout
		if ( is_single() ) {
			$navein_single_post_layout = navein_get_theme_option( 'navein_single_post_layout', 'dtr-right-sidebar' );
			$page_setting = get_post_meta( get_the_ID(), '_navein_page_layout_meta', true );
			if ( $page_setting !== '' ) {
				$class = $page_setting;
			} else {
				$class = $navein_single_post_layout;
			}
		}

		// Blog / Archive Layout
		$navein_blog_layout = navein_get_theme_option( 'navein_blog_layout', 'dtr-right-sidebar' );
		if ( is_archive() || is_author() || is_home() ) {
			$class = $navein_blog_layout;
		}

        // Page Layout
		if ( is_page() ) {
			if ( class_exists( 'Redux_Framework_Plugin' )  ){
				$navein_page_layout = navein_get_theme_option( 'navein_page_layout' );
			} else {
				$navein_page_layout = 'dtr-right-sidebar';
			}
			$page_setting = get_post_meta( get_the_ID(), '_navein_page_layout_meta', true );
			if ( $page_setting !== '' ) {
				$class = $page_setting;
			} else {
				$class = $navein_page_layout;
			}
		}

		return $class;
	}
}