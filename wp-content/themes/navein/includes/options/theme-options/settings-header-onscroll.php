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
		'title'      => esc_html__( 'Header: On Scroll', 'navein' ),
		'id'         => 'navein_header_onscroll_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'navein_onscroll_header_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Enable Header On Scroll', 'navein' ),
                'subtitle' => esc_html__( 'Except for top fixed header variaion', 'navein' ),
				'default'  => true,
			),
            array(
				'id'       => 'navein_onscroll_header_background_color',
				'type'     => 'background',
				'output'   => array(
					'background-color' => '#dtr-header-global.header-fixed',
				),
				'title'    => esc_html__( 'Background', 'navein' ),
			),
            // spacings
			array(
				'id'            => 'navein_onscroll_header_padding',
				'type'          => 'spacing',
				'output'        => array( '#dtr-header-global.header-fixed' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
				'display_units' => true,
                'right'         => false,
                'left'          => false,
				'title'         => esc_html__( 'Padding - Top & Bottom', 'navein' ),
				'default'       => array(
					'units'          => 'px',
				),
			),
        ),
	)
);