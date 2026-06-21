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
		'id'         => 'navein_general_settings',
        'icon'       => 'el el-cogs',
		'subsection' => false,
		'fields'     => array(           
			// body bg
			array(
				'id'          => 'navein_body_background_color',
				'type'        => 'color_rgba',
				'title'       => esc_html__( 'Body Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
                'options'       => array(
                    'show_buttons' => false,
                ),
				'output'      => array(
					'background-color' => 'body',
				),
			),
			// info
			array(
				'id'   => 'navein_info_custom_cursor',
				'type' => 'info',
                'title'    => esc_html__( 'Custom Styled Cursor', 'navein' ),
			),
            array(
				'id'       => 'navein_enable_custom_cursor',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Custom Styled Cursor', 'navein' ),
				'default'  => true,
			),
			array(
				'id'          => 'navein_custom_cursor_color',
				'type'        => 'color_rgba',
				'title'       => esc_html__( 'Cursor Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
                'options'       => array(
                    'show_buttons' => false,
                ),
				'output'      => array(
					'background-color' => '.dtr-cursor',
				),
			),
			// info
            array(
				'id'   => 'navein_info_page_padding',
				'type' => 'info',
                'title'    => '',
				'desc' => wp_kses( __('<strong>Keep these blank</strong> unless required to change theme defaults.', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
			),
            // padding to pages
			array(
				'id'            => 'navein_padding_pages',
				'type'          => 'spacing',
				'output'        => array( '#dtr-main-wrapper' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'title'         => esc_html__( 'Padding to Non Elementor Pages', 'navein' ),
				'desc'          => esc_html__( 'This will work only for Non Eementor pages', 'navein' ),
				'default'       => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				),
			),
            // padding to single posts
			array(
				'id'            => 'navein_padding_posts',
				'type'          => 'spacing',
				'output'        => array( '.single.single-post #dtr-main-wrapper' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'title'         => esc_html__( 'Padding to Single Posts', 'navein' ),
				'desc'          => esc_html__( 'This will work for single posts', 'navein' ),
				'default'       => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				),
			),
            // padding to elementor posts
            array(
				'id'            => 'navein_padding_elementor_posts',
				'type'          => 'spacing',
				'output'        => array( '.elementor-default.elementor-page.single-post #dtr-main-wrapper' ),
				'mode'          => 'padding',
				'all'           => false,
				'units'         => array('px','em'),
                'units_extended' => false,
                'right'         => false,
                'left'          => false,
				'display_units' => true,
				'title'         => esc_html__( 'Padding to Elementor Single Posts', 'navein' ),
				'desc'          => esc_html__( 'This will work for single posts edited with elementor', 'navein' ),
				'default'       => array(
					'padding-top'    => '',
					'padding-bottom' => '',
					'units'          => 'px',
				),
			),
            // info
            array(
				'id'   => 'navein_info_page_layout',
				'type' => 'info',
                'title'    => esc_html__( 'Global - Default Page Layout', 'navein' ),
				'desc' => wp_kses( __('<strong>It is advisable to keep it default i.e. Full Width.</strong> Change only if some other layout is required all over the site.', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
			),
            // page layout
            array(
                'id'       => 'navein_page_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Change - Default Page Layout', 'navein' ),
                'subtitle' => wp_kses( __('If need different layout just for any specific page(s), can be done in the settings of respective page.', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),

                'options'  => array(
                    'dtr-fullwidth'  => array(
                        'alt' => esc_html__( 'Full Width', 'navein' ),
                        'img' => get_template_directory_uri() . '/assets/images/full-width.png',
                    ),
                    'dtr-right-sidebar'  => array(
                        'alt' => esc_html__( 'Right Sidebar', 'navein' ),
                        'img' => get_template_directory_uri() . '/assets/images/right-sidebar.png',
                    ),
                    'dtr-left-sidebar'  => array(
                        'alt' => esc_html__( 'Left Sidebar', 'navein' ),
                        'img' => get_template_directory_uri() . '/assets/images/left-sidebar.png',
                    ),

                ),
                'default' => 'dtr-fullwidth',
            ),
			// info
			array(
				'id'   => 'navein_info_xl_container_width',
				'type' => 'info',
				'title'    => esc_html__( 'Container Width For Large Screens', 'navein' ),
			),
			array(
				'id'       => 'navein_xl_container_width',
				'type'     => 'text',
				'title'    => esc_html__( 'Width', 'navein' ),
				'subtitle' => esc_html__( 'Make sure to give unit like px. Provide only if necessary. Leave blank otherise.', 'navein' ),
				'desc'     => esc_html__( 'Default: 1340px', 'navein' ),
				'default'  => '',
			),
            // info
            array(
				'id'   => 'navein_info_page_misc',
				'type' => 'info',
                'title'    => esc_html__( 'Others', 'navein' ),
			),
            // comments on pages
            array(
				'id'       => 'navein_enable_page_comments',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Comments on pages', 'navein' ),
				'default'  => true,
			),
		),
	)
);