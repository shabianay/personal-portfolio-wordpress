<?php
/**
 * Registers widget areas.
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
if ( ! function_exists('navein_widgets_init') ) {
	function navein_widgets_init()  {

		// Blog Widgets
		register_sidebar( array(
			'name'          => esc_html__( 'Blog Sidebar', 'navein' ),
			'id'            => 'widgets-blog',
			'description'   => esc_html__( 'This area will be shown as a post sidebar. Widgets will be stacked in this column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Header Widget Area - One

		register_sidebar( array(
			'name'          => esc_html__( 'Header Widget Area-One', 'navein' ),
			'id'            => 'widget-header-one',
			'description'   => esc_html__( 'Widgets in this column will appear for : All Header Variations in Main header row right side.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Header Widget Widget - Two
		register_sidebar( array(
			'name'          => esc_html__( 'Header Widget Area-Two', 'navein' ),
			'id'            => 'widget-header-two',
			'description'   => esc_html__( 'Widgets in this column will appear in : For Header Variations 1 / 2 in Topbar left side, and For Header Variation 4 in main header right side.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Header Widget Widget - Three
		register_sidebar( array(
			'name'          => esc_html__( 'Header Widget Area-Three', 'navein' ),
			'id'            => 'widget-header-three',
			'description'   => esc_html__( 'Widgets in this column will appear in : For Header Variations 1 / 2 in Topbar right side.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Footer column 1
		register_sidebar( array(
			'name'          => esc_html__( 'Footer - Column 1', 'navein' ),
			'id'            => 'footer-column-1',
			'description'   => esc_html__( 'Widgets in this column will appear in first footer column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Footer column 2
		register_sidebar( array(
			'name'          => esc_html__( 'Footer - Column 2', 'navein' ),
			'id'            => 'footer-column-2',
			'description'   => esc_html__( 'Widgets in this column will appear in second footer column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Footer column 3
		register_sidebar( array(
			'name'          => esc_html__( 'Footer - Column 3', 'navein' ),
			'id'            => 'footer-column-3',
			'description'   => esc_html__( 'Widgets in this column will appear in third footer column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Footer column 4
		register_sidebar( array(
			'name'          => esc_html__( 'Footer - Column 4', 'navein' ),
			'id'            => 'footer-column-4',
			'description'   => esc_html__( 'Widgets in this column will appear in fourth footer column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Copyright column 1
		register_sidebar( array(
			'name'          => esc_html__( 'Copyright Column 1', 'navein' ),
			'id'            => 'copyright-column-1',
			'description'   => esc_html__( 'Widgets in this column will appear in copyright section.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Copyright column 2
		register_sidebar( array(
			'name'          => esc_html__( 'Copyright Column 2', 'navein' ),
			'id'            => 'copyright-column-2',
			'description'   => esc_html__( 'Widgets in this column will appear in copyright section.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Copyright column 3
		register_sidebar( array(
			'name'          => esc_html__( 'Copyright Column 3', 'navein' ),
			'id'            => 'copyright-column-3',
			'description'   => esc_html__( 'Widgets in this column will appear in copyright section.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		// Page Widgets
		register_sidebar( array(
			'name'          => esc_html__( 'Page Sidebar', 'navein' ),
			'id'            => 'widgets-page',
			'description'   => esc_html__( 'This area will be shown as a page sidebar. Widgets will be stacked in this column.', 'navein' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'navein_widgets_init' );
}