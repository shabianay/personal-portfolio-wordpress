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
		'title'      => esc_html__( 'Footer Styles', 'navein' ),
		'id'         => 'navein_footer_style_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'    => 'navein_info_styles_footer',
				'type'  => 'info',
                'title' => esc_html__( 'Complete Footer Section', 'navein' ),
		    ),
            array(
				'id'       => 'navein_footer_background',
				'type'     => 'background',
				'output'   => array(
					'background-color' => '.dtr-footer-section-wrap',
				),
				'title'    => esc_html__( 'Background', 'navein' ),
			),
            array(
				'id'       => 'navein_footer_border_top',
				'type'     => 'border',
				'title'    => esc_html__( 'Border Top', 'navein' ),
				'output'   => array( '#dtr-footer-section' ),
                'all'      => false,
                'left'     => false,
                'top'      => true,
                'right'    => false,
                'bottom'   => false,
			),
			array(
                'id'                => 'navein_footer_styling_borders',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Footer Left / Right Cross Lines', 'navein' ),
                'options'       => array(
                    'show_buttons' => false,
                ),
                'validate'          => 'color',
                'transparent'       => true,
				'output'      => array(
					'background-color' => '.dtr-footer-section-wrap::before, .dtr-footer-section-wrap::after',
				),
            ),
            array(
				'id'    => 'navein_info_styles_copyright',
				'type'  => 'info',
                'title' => esc_html__( 'Copyright', 'navein' ),
		    ),
            array(
				'id'       => 'navein_copyright_border_top',
				'type'     => 'border',
				'title'    => esc_html__( 'Border Top', 'navein' ),
				'output'   => array( '.dtr-copyright' ),
                'all'      => false,
                'left'     => false,
                'top'      => true,
                'right'    => false,
                'bottom'   => false,
			),
			array(
				'id'    => 'navein_info_footer_btn',
				'type'  => 'info',
                'title' => esc_html__( 'Button In Main Footer Columns', 'navein' ),
		    ),
			array(
				'id'          => 'navein_footer_button_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-footer-row .wp-block-button__link',
				),
			),
            array(
				'id'          => 'navein_footer_button_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Hover: Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-footer-row .wp-block-button__link:hover',
				),
			),
            array(
				'id'       => 'navein_footer_button_color',
				'type'     => 'link_color',
                'title'    => esc_html__( 'Font Color', 'navein' ),
                'active'   => false,
				'output'   => array( '.dtr-footer-row .wp-block-button__link' ),
			),
        ),
	)
);