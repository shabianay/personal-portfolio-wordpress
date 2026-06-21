<?php
/**
 * Adds classes to the body tag
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
function navein_body_classes( $classes ) {

	// Customizer styling class
	if ( is_customize_preview() ) {
		$classes[] = 'dtr-customizer';
	}

	// header class
	if( 'header-v2' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
		$classes[] = 'dtr-header-v2';
	} elseif( 'header-v3' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
		$classes[] = 'dtr-header-v3';
	} elseif( 'header-v4' == navein_get_theme_option( 'navein_header_layout', 'header-v1' ) ) {
		$classes[] = 'dtr-header-v4';
	} else {
		$classes[] = 'dtr-header-v1';
	}

	// header on scroll
	if( false == navein_get_theme_option( 'navein_onscroll_header_enable', true ) ) {
		$classes[] = 'hide-onscroll';
	} else {
		$classes[] = 'show-onscroll';
	}

	// Return classes
	return $classes;
}
add_filter( 'body_class', 'navein_body_classes' );