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
		'title'      => esc_html__( 'Search Settings', 'navein' ),
		'id'         => 'navein_search_settings',
        'icon'       => 'dashicons dashicons-search',
		'subsection' => false,
		'fields'     => array(
            array(
				'id'       => 'navein_search_form_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Search Form Field Text', 'navein' ),
				'default'  => esc_html__('Search...', 'navein'),
			),
            array(
				'id'       => 'navein_search_modal_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Modal Search Title', 'navein' ),
				'default'  => esc_html__('What you are looking for?', 'navein'),
			),
        ),
	)
);