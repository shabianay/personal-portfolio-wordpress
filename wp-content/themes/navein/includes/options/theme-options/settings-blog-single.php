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
		'title'      => esc_html__( 'Single Post', 'navein' ),
		'id'         => 'navein_blog_single_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
                'id'   => 'navein_info_single_post_layout',
                'type' => 'info',
                'title'    => esc_html__( 'Single Post Layout', 'navein' ),
                'subtitle' => esc_html__( 'Change only if some other layout is required for all single posts', 'navein' ),
            ),
            // page layout
            array(
                'id'       => 'navein_single_post_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Change Layout', 'navein' ),
                'subtitle' => esc_html__( 'If need different layout just for any specific post(s), can be done in the settings of respective post.', 'navein' ),
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
                'default' => 'dtr-right-sidebar',
            ),
            array(
                'id'   => 'navein_info_single_enable_elements',
                'type' => 'info',
                'title'    => esc_html__( 'Enable / Disable Elements', 'navein' ),
            ),
            array(
                'id'       => 'navein_single_image_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Featured Image', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_single_image_corner',
                'type'     => 'select',
                'title'    => esc_html__( 'Featured Image Corners', 'navein' ),
                'options'  => array(
                    'dtr-radius--rounded'   => esc_html__( 'Rounded Corners', 'navein' ),
                    'dtr-radius--default'	=> esc_html__( 'Default', 'navein' ),
                ),
                'default'  => 'dtr-radius--rounded',
            ),
            array(
                'id'       => 'navein_single_date_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Date', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_single_author_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Author', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_single_category_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Category', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_single_comment_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Comment Number', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_single_tags_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Tags', 'navein' ),
                'default'  => true,
            ),
            array(
				'id'       => 'navein_date_title_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Date Title', 'navein' ),
				'default'  => esc_html__( '', 'navein' ),
			),
            array(
				'id'       => 'navein_tags_title_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Tags Title', 'navein' ),
				'default'  => esc_html__( 'Tags:', 'navein' ),
			),
            array(
				'id'       => 'navein_author_title_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Author Title', 'navein' ),
				'default'  => esc_html__( '', 'navein' ),
			),
            array(
                'id'   => 'navein_info_social_share',
                'type' => 'info',
                'title'    => esc_html__( 'Social Share', 'navein' ),
            ),
            array(
                'id'       => 'navein_social_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Social Share', 'navein' ),
                'default'  => true,
            ),
            array(
				'id'       => 'navein_share_title_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Share Title', 'navein' ),
				'default'  => esc_html__( '', 'navein' ),
			),
            array(
                'id'       => 'navein_twitter_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Twitter in Share', 'navein' ),
                'default'  => true,
            ),
            array(
				'id'       => 'navein_twitter_handle_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Twitter Handle Text', 'navein' ),
				'default'  => '',
			),
            array(
                'id'       => 'navein_facebook_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Facebook in Share', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_pinterest_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Pinterest in Share', 'navein' ),
                'default'  => true,
            ),
            array(
                'id'       => 'navein_googleplus_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Google in Share', 'navein' ),
                'default'  => false,
            ),
            array(
                'id'       => 'navein_linkedin_share_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Linkedin in Share', 'navein' ),
                'default'  => false,
            ),

		),
	)
);