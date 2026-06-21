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
		'title'      => esc_html__( 'Plugin Misc Settings', 'navein' ),
		'id'         => 'navein_plugin_misc_settings',
        'icon'       => 'dashicons dashicons-admin-plugins',
		'subsection' => false,
		'fields'     => array(
            array(
				'id'    => 'navein_info_elementor_override',
				'type'  => 'info',
                'style'  => 'success',
                'title' => esc_html__( 'Below settings do not need to any alteration...except in very rare cases. Keep as it is :)', 'navein' ),
			),
            array(
				'id'    => 'navein_info_elementor_default_settings',
				'type'  => 'info',
                'title' => esc_html__( 'Elementor Settings', 'navein' ),
			),
            array(
				'id'       => 'navein_set_elementor_settings',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Auto Set Elementor Default Settings', 'navein' ),
                'subtitle' => esc_html__( '(ON by default) We need to enable elementor manually for post types and disable it for default font and colors. These settings are set by default.', 'navein' ),
                'default'  => true,
		    ),
            array(
				'id'    => 'navein_info_elementor_default_settings',
				'type'  => 'info',
                'style'  => 'success',
                'title' => esc_html__( 'Theme is built with Elementor Free Version, Paid version is not required to edit any theme element', 'navein' ),
			),
            array(
				'id'       => 'navein_elementor_pro_mod',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Pro Version Elements in Locked state and Pro Advertise Banners - For Free Version', 'navein' ),
                'subtitle' => esc_html__( '(OFF by default) Locked elements cannot be used with free version. So by default this is kept off.', 'navein' ),
                'desc'     => esc_html__( 'If Elementor Pro is active then Pro elements will show up irrespective of this setting.', 'navein' ),
				'default'  => false,
			),
        ),
	)
);