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
		'title'      => esc_html__( 'Paginations', 'navein' ),
		'id'         => 'navein_paginations_settings',
        'icon'       => 'dashicons dashicons-ellipsis',
		'subsection' => false,
		'fields'     => array(

            array(
				'id'       => 'navein_blog_archive_pagination_style',
				'type'     => 'select',
				'title'    => esc_html__( 'Archive Pages Pagination Style', 'navein' ),
				'options'  => array(
					'numbered' 	=> esc_html__('Default - Numbered', 'navein'),
		            'nextprev'	=> esc_html__('Prev / Next', 'navein'),
				),
				'default'  => 'numbered',
			),

            array(
				'id'   => 'navein_info_numbered_pager',
				'type' => 'info',
                'title'    => esc_html__( 'Archive - Number / Arrow Pager', 'navein' ),
			),
            array(
				'id'          => 'navein_archive_pager_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-number-nav__item a, .page-numbers.current, .dtr-arrow-nav__item a, .post-page-numbers',
				),
			),
            array(
				'id'          => 'navein_archive_pager_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Text Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-number-nav__item a, .page-numbers.current, .dtr-arrow-nav__item a, .post-page-numbers',
				),
			),
            array(
				'id'          => 'navein_archive_pager_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Hover / Active: Background Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-number-nav .page-numbers.current, .dtr-number-nav__item a:hover,
.dtr-arrow-nav__item a:hover, .post-page-numbers:hover, .post-page-numbers.current',
				),
			),
            array(
				'id'          => 'navein_archive_pager_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Hover / Active: Text Color', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-number-nav .page-numbers.current, .dtr-number-nav__item a:hover,
.dtr-arrow-nav__item a:hover, .post-page-numbers:hover, .post-page-numbers.current',
				),
			),
            array(
				'id'   => 'navein_info_pager_single_post',
				'type' => 'info',
                'title'    => esc_html__( 'Single Post Pagination', 'navein' ),
			),
			array(
				'id'       => 'navein_prev_nav_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Previous Nav Text', 'navein' ),
				'default'  => esc_html__( 'Previous', 'navein' ),
			),
            array(
				'id'       => 'navein_next_nav_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Next Nav Text', 'navein' ),
				'default'  => esc_html__( 'Next', 'navein' ),
			),
			array(
				'id'                => 'navein_single_post_pager_typo',
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
                'color'             => false,
				'output'            => array( '.dtr-single-post-nav a' ),
			),         
            array(
				'id'       => 'navein_single_post_pager_color',
				'type'     => 'link_color',
                'title'    => esc_html__( 'Color', 'navein' ),
                'active'   => false,
				'output'   => array( '.dtr-single-post-nav a' ),
			),
            array(
				'id'                => 'navein_single_post_pager_title_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Post Title in Pager', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
				'letter-spacing'    => true,
                'font-size'         => true,
                'line-height'       => true,
                'units'             => 'px',
                'color'             => false,
				'output'            => array( '.dtr-single-nav__post-title' ),
			),
            array(
				'id'       => 'navein_single_post_pager_title_color',
				'type'     => 'link_color',
                'title'    => esc_html__( 'Post Title in Pager - Color', 'navein' ),
                'active'   => false,
				'output'   => array( '.dtr-single-nav__post-title' ),
			),
			array(
				'id'          => 'navein_single_post_pager_icon_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Icon Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-single-nav__icon',
				),
			),
			array(
				'id'          => 'navein_single_post_pager_icon_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Icon Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-single-nav__icon',
				),
			),
		),
	)
);