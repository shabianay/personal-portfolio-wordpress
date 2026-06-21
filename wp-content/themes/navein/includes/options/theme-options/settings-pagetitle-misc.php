<?php
/**
 * Redux Settings
 *
 * @package NaveinTheme
 * @version 1.0.0
 */
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Align / On / Off', 'navein' ),
		'id'         => 'navein_pagetitle_misc_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'    => 'navein_info_pagetitle_align',
				'type'  => 'info',
                'title' => esc_html__( 'Text Align', 'navein' ),
			),
            array(
				'id'       => 'navein_page_title_section_align',
				'type'     => 'select',
				'title'    => esc_html__( 'Text Align', 'navein' ),
				'options'  => array(
					'text-left'   => esc_html__( 'Left', 'navein' ),
					'text-right'  =>  esc_html__( 'Right', 'navein' ),
                    'text-center' => esc_html__( 'Center', 'navein' ),
				),
				'default'  => 'text-center',
			),
            array(
				'id'    => 'navein_info_pagetitle_pages',
				'type'  => 'info',
                'title' => esc_html__( 'For Pages', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_pagetitle_section',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Page Title Section', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_page_title',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Page Title Text', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_page_breadcrumb',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb', 'navein' ),
				'default'  => true,
			),

            array(
				'id'    => 'navein_info_pagetitle_archives',
				'type'  => 'info',
                'title' => esc_html__( 'For Archives Pages', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_archive_pagetitle_section',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Page Title Section', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_archive_page_title',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Page Title Text', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_archive_breadcrumb',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb', 'navein' ),
				'default'  => true,
			),

            array(
				'id'    => 'navein_info_pagetitle_posts',
				'type'  => 'info',
                'title' => esc_html__( 'For Single Posts', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_single_pagetitle_section',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Page Title Section', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_single_page_title',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Page Title Text', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_single_breadcrumb',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb', 'navein' ),
				'default'  => true,
			),   
			array(
				'id'    => 'navein_info_pagetitle_portfolio',
				'type'  => 'info',
                'title' => esc_html__( 'For Portfolio Single Post', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_portfolio_pagetitle_section',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Page Title Section', 'navein' ),
				'default'  => true,
			),            
            array(
				'id'       => 'navein_enable_portfolio_page_title',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Page Title Text', 'navein' ),
				'default'  => true,
			),           
            array(
				'id'       => 'navein_enable_portfolio_breadcrumb',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb', 'navein' ),
				'default'  => true,
			),        
            array(
				'id'    => 'navein_info_pagetitle_testimonial',
				'type'  => 'info',
                'title' => esc_html__( 'For Testimonial Single Post', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_testimonial_pagetitle_section',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Page Title Section', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_testimonial_page_title',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Page Title Text', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_enable_testimonial_breadcrumb',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Breadcrumb', 'navein' ),
				'default'  => true,
			),
        ),
	)
);