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
		'title'      => esc_html__( 'Button In Header', 'navein' ),
		'id'         => 'navein_header_button_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'navein_header_btn_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Button Text', 'navein' ),
				'default'  => esc_html__( 'Get In Touch', 'navein' ),
			),
			array(
				'id'       => 'navein_header_btn_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Link', 'navein' ),
				'subtitle' => esc_html__( 'This must be a URL.', 'navein' ),
				'default'  => '#',
			 ),
            array(
				'id'       => 'navein_header_button_target',
				'type'     => 'select',
				'title'    => esc_html__( 'Open link in', 'navein' ),
				'options'  => array(
                'self'    => esc_html__( 'Same Window', 'navein' ),
		        'blank'   => esc_html__( 'New Window', 'navein' ),
				),
				'default'  => 'self',
			),
			array(
				'id'       => 'navein_header_btn_select_icon_type',
				'type'     => 'select',
				'title'    => esc_html__( 'Select Icon', 'navein' ),
				'options'  => array(
                    'header_btn_predef_icon'	=> esc_html__( 'Default Pre-defined Icon', 'navein' ),
					'header_btn_custom_icon'	=> esc_html__( 'Custom Icon / Image Code', 'navein' ),
				),
				'default'  => 'header_btn_predef_icon',
			),
			array(
				'id'       => 'navein_header_btn_icon_name',
				'type'     => 'select',
				'title'    => esc_html__( 'Select Icon Type', 'navein' ),
				'options'  => array(
					'icon-login-circle-fill'	=> esc_html__( 'Arrow', 'navein' ),
                    'icon-mail-fill'	=> esc_html__( 'Mail', 'navein' ),
					'icon-map-pin-2-line'	=> esc_html__( 'Map Pin', 'navein' ),
					'icon-telephone-fill'	=> esc_html__( 'Call', 'navein' ),
					'icon-send-plane-fill'	=> esc_html__( 'Plane', 'navein' ),
					'icon-whatsapp-fill'	=> esc_html__( 'WhatsApp', 'navein' ),
				),
				'required' => array( 'navein_header_btn_select_icon_type', '=', 'header_btn_predef_icon' ),
				'default'  => 'icon-login-circle-fill',
			),
			array(
				'id'       => 'navein_header_btn_icon_code',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Icon image / svg code', 'navein' ),
				'required' => array( 'navein_header_btn_select_icon_type', '=', 'header_btn_custom_icon' ),
				'default'  => esc_html__( 'I', 'navein' ),
			),           
             array(
				'id'    => 'navein_info_headerbtn_style',
				'type'  => 'info',
                'title' => esc_html__( 'Button Style', 'navein' ),
			),
            array(
				'id'                => 'navein_headerbtn_maintext_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Main Text - Font Settings', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
                'color'             => false,
				'letter-spacing'    => true,
                'units'             => 'px',
				'output'            => array( '.dtr-header-btn' ),
			),
            array(
				'id'       => 'navein_headerbtn_color',
				'type'     => 'link_color',
                'title'    => esc_html__( 'Font Color', 'navein' ),
                'active'   => false,
				'output'   => array( '.dtr-header-btn' ),
			),
            array(
				'id'          => 'navein_headerbtn_bg',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-header-btn',
				),
			),
            array(
				'id'          => 'navein_headerbtn_hover_bg',
				'type'        => 'color',
				'title'       => esc_html__( 'Hover: Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-header-btn:hover',
				),
			),          
			array(
				'id'          => 'navein_headerbtn_icon_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Icon Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-header-btn .dtr-btn__icon',
				),
			),
			array(
				'id'          => 'navein_headerbtn_hover_icon_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Icon Color On Button Hover', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-header-btn:hover .dtr-btn__icon',
				),
			),
        ),
	)
);