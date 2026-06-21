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
		'title'      => esc_html__( 'Theme Base Colors', 'navein' ),
		'id'         => 'navein_themebase_colors',
        'icon'       => 'dashicons dashicons-admin-appearance',
		'desc'       => '',
		'subsection' => false,
		'fields'     => array(
            array(
				'id'    => 'navein_info_main_base_colors',
				'type'  => 'info',
                'title' => esc_html__( 'Main Base Colors', 'navein' ),
                'subtitle' => esc_html__( 'Used for backgrounds', 'navein' ),
			),
            // color one
            array(
                'id'                => 'navein_base_color_primary',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Dark', 'navein' ),
                'options'       => array(
                    'show_buttons' => false,
                ),
                'validate'          => 'color',
                'transparent'       => false,
            ),
            // color two
            array(
                'id'                => 'navein_base_color_secondary',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Light', 'navein' ),
                'options'           => array(
                    'show_buttons'  => false,
                ),
                'validate'          => 'color',
                'transparent'       => false,
            ),
            // color three
            array(
                'id'                => 'navein_base_color_tertiary',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Accent One - Lime', 'navein' ),
                'options'           => array(
                    'show_buttons'  => false,
                ),
                'validate'          => 'color',
                'transparent'       => false,
            ),
            // color four
            array(
                'id'                => 'navein_base_color_quaternary',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Accent Two - Mid Dark', 'navein' ),
                'options'           => array(
                    'show_buttons'  => false,
                ),
                'validate'          => 'color',
                'transparent'       => false,
            ),
            array(
				'id'       => 'navein_info_border_colors',
				'type'     => 'info',
                'title'    => esc_html__( 'Common Border Color', 'navein' ),
			),
            array(
                'id'                => 'navein_borders_color',
                'type'              => 'color_rgba',
                'title'             => esc_html__( 'Main Border Color', 'navein' ),
                'options'       => array(
                    'show_buttons' => false,
                ),
                'validate'          => 'color',
                'transparent'       => false,
            ),
             array(
				'id'       => 'navein_info_common_text_colors',
				'type'     => 'info',
                'title'    => esc_html__( 'Basic Text Colors', 'navein' ),
                'subtitle' => esc_html__( 'If needed, can be overridden individually for body, headings, links etc. in respective section.', 'navein' ),
			),
            array(
				'id'          => 'navein_text_color_one',
				'type'        => 'color',
				'title'       => esc_html__( 'Text Color - Dark', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
			),
            array(
				'id'          => 'navein_text_color_two',
				'type'        => 'color',
				'title'       => esc_html__( 'Text Color - Light', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
			),
            // ends
		),
	)
);