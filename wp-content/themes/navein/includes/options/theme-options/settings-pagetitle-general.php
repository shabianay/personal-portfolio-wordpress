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
		'title'      => esc_html__( 'General Settings', 'navein' ),
		'id'         => 'navein_page_title_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'    => 'navein_info_pagetitle_section_general',
				'type'  => 'info',
                'title' => esc_html__( 'Page Title Section Styles', 'navein' ),
			),
            array(
				'id'       => 'navein_page_title_background',
				'type'     => 'background',
				'output'   => array(
					'background-color' => '.dtr-page-title--section',
				),
				'title'    => esc_html__( 'Background', 'navein' ),
			),
			array(
                'id'                => 'navein_page_title_styling_borders',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Left / Right Cross Lines', 'navein' ),
                'options'       => array(
                    'show_buttons' => false,
                ),
                'validate'          => 'color',
                'transparent'       => true,
				'output'      => array(
					'background-color' => '.dtr-page-title--section::before, .dtr-page-title--section::after',
				),
            ),
            array(
				'id'          => 'navein_page_title_overlay_background',
				'type'        => 'color_rgba',
				'title'       => esc_html__( 'Overlay Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
                'options'       => array(
                    'show_buttons' => false,
                ),
				'output'      => array(
					'background-color' => '.dtr-page-title__overlay',
				),
			),
			array(
                'id'       => 'navein_page_title_corner',
                'type'     => 'select',
                'title'    => esc_html__( 'Corners', 'navein' ),
                'options'  => array(
                    'dtr-radius--rounded'   => esc_html__( 'Rounded Corners', 'navein' ),
                    'dtr-radius--default'	=> esc_html__( 'Default', 'navein' ),
                ),
                'default'  => 'dtr-radius--rounded',
            ),
            // spacings
			array(
				'id'            => 'navein_page_title_padding',
				'type'          => 'spacing',
				'output'        => array( '.dtr-page-title--section' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'title'         => esc_html__( 'Padding - Top & Bottom', 'navein' ),
				'default'       => array(
					'units'          => 'px',
				),
			),
            //border
            array(
				'id'       => 'navein_page_title_border',
				'type'     => 'border',
				'title'    => esc_html__( 'Border', 'navein' ),
				'output'   => array( '.dtr-page-title--section' ),
                'all'      => false,
                'left'     => false,
                'top'      => true,
                'right'    => false,
                'bottom'   => true,
			),
			array(
				'id'       => 'navein_page_title_sm_top_padding',
				'type'     => 'text',
				'title'    => esc_html__( 'Padding - Top - For Small Screens', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 50px', 'navein' ),
				'default'  => '',
			),
			array(
				'id'       => 'navein_page_title_sm_bottom_padding',
				'type'     => 'text',
				'title'    => esc_html__( 'Padding - Bottom - For Small Screens', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 50px', 'navein' ),
				'default'  => '',
			),
            array(
				'id'    => 'navein_info_breadcrumb_general',
				'type'  => 'info',
                'title' => esc_html__( 'Breadcrumb', 'navein' ),
			),
            array(
				'id'       => 'navein_breadcrumb_plugin',
				'type'     => 'select',
				'title'    => esc_html__( 'Select Breadcrumb via which plugin', 'navein' ),
				'options'  => array(
					'yoast-breadcrumb'  => esc_html__( 'Yoast SEO', 'navein' ),
					'navxt-breadcrumb'  => esc_html__( 'Breadcrumb NavXT', 'navein' ),
				),
				'default'  => 'yoast-breadcrumb',
			),
            array(
				'id'            => 'navein_breadcrumb_bottom_margin',
				'type'          => 'spacing',
				'output'        => array( '.dtr-breadcrumb-wrapper' ),
				'mode'          => 'margin',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'top'           => true,
                'right'         => false,
                'bottom'        => false,
                'left'         => false,
				'display_units' => true,
				'title'         => esc_html__( 'Margin Top', 'navein' ),
				'default'       => array(
					'units'          => 'px',
				),
			),

        ),
	)
);