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
		'title'      => esc_html__( '404 Page', 'navein' ),
		'id'         => 'navein_error_page_settings',
        'icon'       => 'dashicons dashicons-external',
		'subsection' => false,
		'fields'     => array(
            array(
				'id'       => 'navein_404_subtext',
				'type'     => 'text',
				'title'    => esc_html__( '404 Sub Text', 'navein' ),
				'default'  => esc_html__('Oops...', 'navein'),
			),
            array(
				'id'       => 'navein_404_text',
				'type'     => 'text',
				'title'    => esc_html__( '404 Text', 'navein' ),
				'default'  => esc_html__('We are sorry, but something went wrong.', 'navein'),
			),
            array(
				'id'       => 'navein_404_link_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Back to Home Link Text', 'navein' ),
				'default'  => esc_html__('Back To Home', 'navein'),
			),
        ),
	)
);