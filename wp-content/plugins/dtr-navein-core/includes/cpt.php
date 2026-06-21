<?php
// custom post types
/**
 * Registers portfolio post type
 * @since  1.0.0
 */
add_action( 'init', 'navein_register_portfolio_posttype' );
function navein_register_portfolio_posttype() {
	
    global $navein_theme_mod;
	$portfolio_slug = '';
    $portfolio_slug = isset($navein_theme_mod['navein_portfolio_slug_text']) ? $navein_theme_mod['navein_portfolio_slug_text'] : 'portfolio';

	$labels = array(
		'name'               	=> _x( 'Portfolio', 'post type general name', 'navein' ),
		'singular_name'      	=> _x( 'Portfolio Item', 'post type singular name', 'navein' ),
		'all_items'          	=> __( 'Portfolio Items', 'navein' ),
		'add_new'            	=> __( 'Add New', 'navein' ),
		'add_new_item'       	=> __( 'Add New Portfolio Item', 'navein' ),
		'edit_item'          	=> __( 'Edit Portfolio Item', 'navein' ),
		'new_item'           	=> __( 'New Portfolio Item', 'navein' ),
		'view_item'          	=> __( 'View Portfolio Item', 'navein' ),
		'search_items'       	=> __( 'Search Portfolio Items', 'navein' ),
		'not_found'          	=> __( 'No Portfolio Items found', 'navein' ),
		'not_found_in_trash'	=> __( 'No Portfolio Items found in Trash', 'navein' ),
    );
	$args = array(
		'labels'          	=> $labels,
	    'public'          	=> true,  
        'show_ui'         	=> true,  
        'capability_type'	=> 'post',  
        'hierarchical'    	=> false,  
        'can_export'      	=> true,
        'has_archive'     	=> false,
		'menu_icon'       	=> 'dashicons-portfolio',
        'rewrite'         	=> array( 'slug'	=> $portfolio_slug ),
        'supports'        	=> array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);
	register_post_type( 'dtr_portfolio', $args );
}

/**
 * Register custom taxonomy for portfolio items.
 * @since  1.0.0
 */
add_action( 'init', 'navein_register_portfolio_taxonomy' );
function navein_register_portfolio_taxonomy() {
    $labels = array(
        'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'navein' ),
        'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'navein' ),
        'search_items'      => __( 'Search Portfolio Categories', 'navein' ),
        'all_items'         => __( 'All Portfolio Categories', 'navein' ),
		'edit_item'         => __( 'Edit Portfolio Category', 'navein' ),
		'view_item'         => __( 'View Portfolio Category', 'navein' ),
        'parent_item'       => __( 'Parent Portfolio Category', 'navein' ),
        'parent_item_colon'	=> __( 'Parent Portfolio Category:', 'navein' ),
        'update_item'       => __( 'Update Portfolio Category', 'navein' ),
        'add_new_item'      => __( 'Add New Portfolio Category', 'navein' ),
        'new_item_name'     => __( 'New Portfolio Category Name', 'navein' ),
    );
    $args = array(
        'hierarchical'	=> true,
        'labels'       	=> $labels,
        'show_ui'      	=> true,
        'rewrite'      	=> true,
    );
    register_taxonomy( 'dtr_portfoliotags', array( 'dtr_portfolio' ), $args );
}

/**
 * Registers testimonial post type
 * @since  1.0.0
 */
add_action( 'init', 'navein_register_testimonial_posttype' );
function navein_register_testimonial_posttype() {

    global $navein_theme_mod;
	$testimonial_slug = '';
    $testimonial_slug = isset($navein_theme_mod['navein_testimonial_slug_text']) ? $navein_theme_mod['navein_testimonial_slug_text'] : 'testimonial';

	$labels = array(
		'name'               => _x( 'Testimonial', 'post type general name', 'navein' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'navein' ),
		'all_items'          => __( 'Testimonials', 'navein' ),
		'add_new'            => __( 'Add New', 'navein' ),
		'add_new_item'       => __( 'Add New Testimonial', 'navein' ),
		'edit_item'          => __( 'Edit Testimonial', 'navein' ),
		'new_item'           => __( 'New Testimonial', 'navein' ),
		'view_item'          => __( 'View Testimonial', 'navein' ),
		'search_items'       => __( 'Search Testimonials', 'navein' ),
		'not_found'          => __( 'No Testimonials found', 'navein' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash', 'navein' ),
    );
	$args = array(
		'labels'          => $labels,
	    'public'          => true,
        'show_ui'         => true,
        'capability_type' => 'post',
        'hierarchical'    => false,
        'has_archive'     => false,
		'menu_icon'       => 'dashicons-star-filled',
        'rewrite'         => array( 'slug'	=> $testimonial_slug ),
        'supports'        => array( 'title', 'editor', 'thumbnail' ),
	);
	register_post_type( 'dtr_testimonial', $args );
}