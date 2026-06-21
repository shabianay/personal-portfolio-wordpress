<?php
/**
 * Include and setup custom metaboxes and fields.
 */
add_action( 'cmb2_admin_init', 'navein_metaboxes' );
/**
 * Hook in and add a metabox
 */
function navein_metaboxes() {

	// Prefix
	$prefix = '_navein_';

	/**
	 * Testimonial Settings
	 */
	$navein_testimonial_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'testimonial-settings-metabox',
		'title'         => esc_html__( 'Testimonial Settings', 'navein' ),
		'object_types'  => array( 'dtr_testimonial' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
	) );

    $navein_testimonial_metabox->add_field( array(
		'name'	=> esc_html__( 'Client Name', 'navein' ),
		'id'   	=> $prefix . 'testimonial_client_name',
		'type'	=> 'text',
	) );

    $navein_testimonial_metabox->add_field( array(
		'name'	=> esc_html__( 'Client Designation', 'navein' ),
		'id'   	=> $prefix . 'testimonial_client_designation',
		'type'	=> 'text',
	) );

	// Page Layout
	$page_layout = array(
		'' 					=> esc_html__( 'Default', 'navein' ),
		'dtr-fullwidth'		=> esc_html__( 'No Sidebar', 'navein' ),
		'dtr-right-sidebar'	=> esc_html__( 'Right Sidebar', 'navein' ),
		'dtr-left-sidebar' 	=> esc_html__( 'Left Sidebar', 'navein' ),
	);

	// Page Header Background image styles
	$page_header_bg_image_style = array(
		'repeat'	=> esc_html__( 'Repeat', 'navein' ),
		'stretched'	=> esc_html__( 'Stretched', 'navein' ),
		'fixed'		=> esc_html__( 'Fixed', 'navein' ),
	);

	/**
	 * Page Settings
	 */
	$navein_page_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'page-settings-metabox',
		'title'         => esc_html__( 'Page Settings', 'navein' ),
		'object_types'  => array( 'page', 'post' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
	) );

	$navein_page_metabox->add_field( array(
		'id'   		=> $prefix . 'page_layout_meta',
		'name' 		=> esc_html__( 'Sidebar Position', 'navein' ),
		'type' 		=> 'select',
		'options'	=> $page_layout,
	) );

	/**
	 * Page Header
	 */
	$navein_page_header_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'page-header-metabox',
		'title'         => esc_html__( 'Page Title Section Style', 'navein' ),
		'object_types'	=> array( 'page', 'post' ), // Post type
		'context'    	=> 'normal',
		'priority'   	=> 'high',
	) );

	$navein_page_header_metabox->add_field( array(
		'name' => esc_html__( 'Page Title Background Image - Upload or enter URL', 'navein' ),
		'id'   =>  $prefix . 'page_header_bg_image',
		'type' => 'file',
	) );

	$navein_page_header_metabox->add_field( array(
		'id'   		=> $prefix . 'page_header_bg_image_style',
		'name' 		=> esc_html__( 'Page Title Background Style', 'navein' ),
		'type' 		=> 'select',
		'options'	=> $page_header_bg_image_style,
	) );

	/**
	 * Portfolio
	 */
	$navein_portfolio_post_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'portfolio-post-metabox',
		'title'         => esc_html__( 'Portfolio Grid Settings', 'navein' ),
		'object_types'	=> array( 'dtr_portfolio' ), // Post type
		'context'    	=> 'side',
		'priority'   	=> 'high',
	) );

	$navein_portfolio_post_metabox->add_field( array(
		'name'	=> esc_html__( 'If - Link to Heading in Portfolio Element - Needs to be External - Other than its linked single post', 'navein' ),
		'desc'  => __('Give link here', 'navein'),
		'id'   	=> $prefix . 'portfolio_external_link_url',
		'type'	=> 'text',
	) );

} // navein_metaboxes