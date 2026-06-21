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
		'title'      => esc_html__( 'Topbar', 'navein' ),
		'id'         => 'navein_topbar_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'navein_topbar_background',
				'type'     => 'background',
				'output'   => array(
					'background-color' => '#dtr-topbar',
				),
				'title'    => esc_html__( 'Background', 'navein' ),
			),
            // spacings
			array(
				'id'            => 'navein_topbar_padding',
				'type'          => 'spacing',
				'output'        => array( '#dtr-topbar' ),
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
				'id'       => 'navein_topbar_border_bottom',
				'type'     => 'border',
				'title'    => esc_html__( 'Border Bottom', 'navein' ),
				'output'   => array( '#dtr-topbar' ),
                'all'      => false,
                'left'     => false,
                'top'      => false,
                'right'    => false,
                'bottom'   => true,
			),
            array(
				'id'    => 'navein_info_topbar_typo',
				'type'  => 'info',
                'title' => esc_html__( 'Typography', 'navein' ),
			),
            array(
				'id'                => 'navein_topbar_typo',
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
				'output'            => array( '#dtr-topbar' ),
			),
            array(
				'id'       => 'navein_topbar_link_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Links in Topbar', 'navein' ),
                'active'   => false,
				'output'   => array( '#dtr-topbar a' ),
			),
        ),
	)
);