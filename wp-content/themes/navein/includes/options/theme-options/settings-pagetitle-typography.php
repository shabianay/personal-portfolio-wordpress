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
		'title'      => esc_html__( 'Typography', 'navein' ),
		'id'         => 'navein_pagetitle_typography_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'                => 'navein_page_title_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Page Title / Archives Page Title', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
				'letter-spacing'    => true,
                'font-size'         => false,
                'line-height'       => false,
                'units'             => 'px',
				'output'            => array( '.dtr-page-title' ),
			),
            array(
				'id'       => 'navein_page_title_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Font Size', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 16px', 'navein' ),
				'default'  => '',
			),
            array(
				'id'       => 'navein_page_title_line_height',
				'type'     => 'text',
				'title'    => esc_html__( 'Line Height', 'navein' ),
				'default'  => '',
			),
            // info
            array(
				'id'    => 'navein_info_sm_page_title',
				'type'  => 'info',
                'title' => esc_html__( 'Page Title / Archives Page Title - Sizes For Small Screens', 'navein' ),
				'desc'  =>  wp_kses( __('Set only if required', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
			),
            array(
				'id'       => 'navein_sm_page_title_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Font Size', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 16px', 'navein' ),
				'default'  => '',
			),
            array(
				'id'       => 'navein_sm_page_title_lh',
				'type'     => 'text',
				'title'    => esc_html__( 'Line Height', 'navein' ),
				'default'  => '',
			),
            // info
            array(
				'id'    => 'navein_info_breadcrumb_typo',
				'type'  => 'info',
                'title' => esc_html__( 'Breadcrumb - Typography', 'navein' ),
			),
            array(
				'id'                => 'navein_breadcrumb_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Font', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
				'letter-spacing'    => true,
                'font-size'         => true,
                'line-height'       => true,
                'units'             => 'px',
				'output'            => array( '.dtr-breadcrumb-wrapper, .dtr-breadcrumb-wrapper a' ),
			),
            array(
				'id'       => 'navein_breadcrumb_link_color',
				'type'     => 'link_color',
				'title'    => '',
                'active'   => false,
				'output'   => array( '.dtr-breadcrumb-wrapper a' ),
			),

		),
	)
);