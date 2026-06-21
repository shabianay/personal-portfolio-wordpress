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
		'title'      => esc_html__( 'Widgets Styles', 'navein' ),
		'id'         => 'navein_widgets_settings',
        'icon'       => 'dashicons dashicons-text',
		'subsection' => false,
		'fields'     => array(
            array(
				'id'          => 'navein_sidebar_widget_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Text Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-widget-area',
				),
			),
            array(
				'id'       => 'navein_sidebar_widget_link',
				'type'     => 'link_color',
				'title'    => '',
                'active'   => false,
				'output'   => array( '.dtr-widget-area a' ),
			),
            array(
				'id'          => 'navein_sidebar_arwidgets_border_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Border Bottom To Archive Widget', 'navein' ),
				'default'     => '',
				'transparent' => true,
				'validate'    => 'color',
				'output'      => array(
					'border-bottom-color' => '.wp-block-archives-list li, .wp-block-latest-comments li',
				),
			),
            array(
				'id'                => 'navein_latest_post_heading_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Latest Post Widget : Post Title', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
                'color'             => true,
				'letter-spacing'    => true,
                'units'             => 'px',
				'output'            => array( '.wp-block-latest-posts li' ),
			),
            array(
				'id'                => 'navein_archive_category_widget_typo',
				'type'              => 'typography',
				'title'             => esc_html__( 'Archive / Category Widget', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
                'color'             => true,
				'letter-spacing'    => true,
                'units'             => 'px',
				'output'            => array( '.wp-block-categories-list a, .wp-block-archives-list a' ),
			),
            array(
				'id'                => 'navein_nav_menu_widget',
				'type'              => 'typography',
				'title'             => esc_html__( 'Navigation Menu Widget in Sidebar', 'navein' ),
				'google'            => true,
                'font-backup'       => true,
                'all-styles'        => true,
				'all-subsets'       => true,
                'text-align'        => false,
                'color'             => false,
				'letter-spacing'    => true,
                'units'             => 'px',
				'output'            => array( '#dtr-secondary-section .widget_nav_menu a, .elementor-widget-wp-widget-nav_menu a' ),
			),
            array(
				'id'    => 'navein_info_sidebar_widgets_styles',
				'type'  => 'info',
                'title' => esc_html__( 'For Widgets in Page / Post Sidebar Only', 'navein' ),
			),
            array(
				'id'          => 'navein_general_sidebar_heading_Color',
				'type'        => 'color',
				'title'       => esc_html__( 'Heading in Sidebar', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-widget-area .wp-block-heading',
				),
			),
            array(
				'id'          => 'navein_latest_post_heading_Color',
				'type'        => 'color',
				'title'       => esc_html__( 'Latest Post Widget : Post Title Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-widget-area .wp-block-latest-posts a',
				),
			),
            array(
				'id'          => 'navein_archive_category_widget_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Archive / Category Widget - Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-widget-area .wp-block-categories-list a, .dtr-widget-area .wp-block-archives-list a',
				),
			),
            array(
				'id'          => 'navein_archive_category_widget_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Archive / Category Widget - Hover Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-widget-area .wp-block-categories-list li:hover a, .dtr-widget-area .wp-block-archives-list li:hover a',
				),
			),
			array(
				'id'    => 'navein_info_social_widgets_styles',
				'type'  => 'info',
                'title' => esc_html__( 'Custom - Social Widget - Circle and Square Style', 'navein' ),
			),
			array(
				'id'          => 'navein_bgstyle_social_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-social-circle a, .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_bgstyle_social_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-social-circle a, .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_bgstyle_social_border_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Border Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'border-color' => '.dtr-social-circle a, .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_bgstyle_social_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-social-circle a:hover, .dtr-social-square a:hover',
				),
			),
			array(
				'id'          => 'navein_bgstyle_social_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-social-circle a:hover, .dtr-social-square a:hover',
				),
			),
			array(
				'id'          => 'navein_bgstyle_social_hover_border_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Border Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'border-color' => '.dtr-social-circle a:hover, .dtr-social-square a:hover',
				),
			),
			// In footer
			array(
				'id'    => 'navein_info_footer_social_widgets_styles',
				'type'  => 'info',
                'title' => esc_html__( 'Custom - Social Widget - Circle and Square Style - In Footer Section', 'navein' ),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-footer-section-wrap .dtr-social-circle a, .dtr-footer-section-wrap .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-footer-section-wrap .dtr-social-circle a, .dtr-footer-section-wrap .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_border_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Border Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'border-color' => '.dtr-footer-section-wrap .dtr-social-circle a, .dtr-footer-section-wrap .dtr-social-square a',
				),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_hover_bg_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Background Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'background-color' => '.dtr-footer-section-wrap .dtr-social-circle a:hover, .dtr-footer-section-wrap .dtr-social-square a:hover',
				),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_hover_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'color' => '.dtr-footer-section-wrap .dtr-social-circle a:hover, .dtr-footer-section-wrap .dtr-social-square a:hover',
				),
			),
			array(
				'id'          => 'navein_footer_bgstyle_social_hover_border_color',
				'type'        => 'color',
				'title'       => esc_html__( 'On Hover: Border Color', 'navein' ),
				'default'     => '',
				'transparent' => false,
				'validate'    => 'color',
				'output'      => array(
					'border-color' => '.dtr-footer-section-wrap .dtr-social-circle a:hover, .dtr-footer-section-wrap .dtr-social-square a:hover',
				),
			),
		),
	)
);