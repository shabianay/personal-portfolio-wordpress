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
		'id'         => 'navein_footer_general_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'navein_footer_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Complete Footer Section', 'navein' ),
				'default'  => true,
			),
			array(
                'id'       => 'navein_footer_corner',
                'type'     => 'select',
                'title'    => esc_html__( 'Corners', 'navein' ),
                'options'  => array(
                    'dtr-radius--rounded'   => esc_html__( 'Rounded Corners', 'navein' ),
                    'dtr-radius--default'	=> esc_html__( 'Default', 'navein' ),
                ),
                'default'  => 'dtr-radius--rounded',
            ),
            array(
				'id'   => 'navein_info_main_footer_row',
				'type' => 'info',
                'title'    => esc_html__( 'Main Footer Columns Row', 'navein' ),
			),
            array(
				'id'       => 'navein_footer_columns_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Main Footer Columns Row', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_footer_columns',
				'type'     => 'select',
				'title'    => esc_html__( 'Number of Columns', 'navein' ),
				'options'  => array(
                    '1'	=> esc_html__( 'Single Column', 'navein' ),
		            '2'	=> esc_html__( 'Two Equal Columns', 'navein' ),
		            '3'	=> esc_html__( 'Three Equal Columns', 'navein' ),
                    '4'	=> esc_html__( 'Four Equal Columns', 'navein' ),
                    '5'	=> esc_html__( '6 + 3 + 3', 'navein' ),
                    '6'	=> esc_html__( '3 + 6 + 3', 'navein' ),
                    '7'	=> esc_html__( '4 + 5 + 3', 'navein' ),
                    '8'	=> esc_html__( '4 + 3 + 2 + 3', 'navein' ),
				),
				'default'  => '4',
			),
            array(
				'id'            => 'navein_footer_main_padding',
				'type'          => 'spacing',
                'title'         => esc_html__( 'Padding', 'navein' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'output'        => array( '.dtr-footer-row' ),
				'default'       => array(
					'units'          => 'px',
				),
			),
			array(
				'id'       => 'navein_footer_main_sm_top_padding',
				'type'     => 'text',
				'title'    => esc_html__( 'Padding - Top - For Small Screens', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 50px', 'navein' ),
				'default'  => '',
			),
			array(
				'id'       => 'navein_footer_main_sm_bottom_padding',
				'type'     => 'text',
				'title'    => esc_html__( 'Padding - Bottom - For Small Screens', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px,em,rem', 'navein' ),
				'desc'     => esc_html__( 'Example: 50px', 'navein' ),
				'default'  => '',
			),
            array(
				'id'   => 'navein_info_copyright_row',
				'type' => 'info',
                'title'    => esc_html__( 'Copyright Settings', 'navein' ),
			),
            array(
				'id'       => 'navein_copyright_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Copyright', 'navein' ),
				'default'  => true,
			),
			array(
				'id'       => 'navein_copyright_columns',
				'type'     => 'select',
				'title'    => esc_html__( 'Number of Columns', 'navein' ),
				'options'  => array(
                    '1'	=> esc_html__( 'Single Column', 'navein' ),
		            '2'	=> esc_html__( 'Two Equal Columns', 'navein' ),
		            '3'	=> esc_html__( 'Three Equal Columns', 'navein' ),
				),
				'default'  => '1',
			),
			array(
                'id'       => 'navein_copyright_1_text_align',
                'type'     => 'select',
                'title'    => esc_html__( 'Text Align - First Column', 'navein' ),
                'options'  => array(
                    'text-align-default'   => esc_html__( 'Left', 'navein' ),
                    'text-right'	=> esc_html__( 'Right', 'navein' ),
					'text-center'	=> esc_html__( 'Center', 'navein' ),
                ),
                'default'  => 'text-align-default',
            ),
			array(
                'id'       => 'navein_copyright_2_text_align',
                'type'     => 'select',
                'title'    => esc_html__( 'Text Align - Second Column', 'navein' ),
                'options'  => array(
                    'text-align-default'   => esc_html__( 'Left', 'navein' ),
                    'text-right'	=> esc_html__( 'Right', 'navein' ),
					'text-center'	=> esc_html__( 'Center', 'navein' ),
                ),
                'default'  => 'text-center',
            ),
			array(
                'id'       => 'navein_copyright_3_text_align',
                'type'     => 'select',
                'title'    => esc_html__( 'Text Align - Third Column', 'navein' ),
                'options'  => array(
                    'text-align-default'   => esc_html__( 'Left', 'navein' ),
                    'text-right'	=> esc_html__( 'Right', 'navein' ),
					'text-center'	=> esc_html__( 'Center', 'navein' ),
                ),
                'default'  => 'text-right',
            ),
            array(
				'id'            => 'navein_copyright_padding',
				'type'          => 'spacing',
                'title'         => esc_html__( 'Padding', 'navein' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'output'        => array( '.dtr-copyright' ),
				'default'       => array(
					'units'          => 'px',
				),
			),
		),
	)
);