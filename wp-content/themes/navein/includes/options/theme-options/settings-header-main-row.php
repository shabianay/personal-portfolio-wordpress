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
		'title'      => esc_html__( 'Header Main Row', 'navein' ),
		'id'         => 'navein_header_main_row_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
           array(
				'id'          => 'navein_main_header_background_color',
				'type'        => 'color_rgba',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
                'options'       => array(
                    'show_buttons' => false,
                ),
				'output'      => array(
					'background-color' => '#dtr-header-global',
				),
			),
            array(
				'id'       => 'navein_main_header_background',
				'type'     => 'background',
                'background-color' => false,
				'output'   => array(
					'background-color' => '#dtr-header-global',
				),
				'title'    => esc_html__( 'Background', 'navein' ),
			),
            // spacings
			array(
				'id'            => 'navein_main_header_padding',
				'type'          => 'spacing',
				'output'        => array( '#dtr-header-global' ),
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
            //border
            array(
				'id'       => 'navein_main_header_border_bottom',
				'type'     => 'border',
				'title'    => esc_html__( 'Border Bottom', 'navein' ),
				'output'   => array( '#dtr-header-global' ),
                'all'      => false,
                'left'     => false,
                'top'      => false,
                'right'    => false,
                'bottom'   => true,
			),
            array(
				'id'    => 'navein_info_mainheader_widget',
				'type'  => 'info',
                'title' => esc_html__( 'Typography for - Widgets in Main Header Row', 'navein' ),
                'desc'  => wp_kses( __('If any widget added in Main Header Row ( Row With Menubar)<br>Will Work For Widgets other than Custom Social Icon Widget', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
			),
            array(
				'id'                => 'navein_mainheader_widget_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Font', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
				'letter-spacing'    => true,
                'units'             => 'px',
				'output'            => array( '.dtr-header-widget-wrapper' ),
			),
            array(
				'id'       => 'navein_mainheader_widget_link',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Links', 'navein' ),
                'active'   => false,
				'output'   => array( '.dtr-header-widget-wrapper a' ),
			),
        ),
	)
);