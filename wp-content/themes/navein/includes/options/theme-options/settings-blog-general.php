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
		'title'      => esc_html__( 'Main Blog Page / Archives', 'navein' ),
		'id'         => 'navein_blog_general_settings',
        'icon'       => 'dashicons dashicons-arrow-right-alt',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'navein_blog_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Blog Page Title Text', 'navein' ),
				'default'  => esc_html__( 'Blog', 'navein' ),
			),
            // info
            array(
				'id'   => 'navein_info_blog_page_layout',
				'type' => 'info',
                'title'    => esc_html__( 'Blog Main Page and Archives Pages Layout', 'navein' ),
			),
            // page layout
            array(
                'id'       => 'navein_blog_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Change Layout', 'navein' ),
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
				'id'   => 'navein_info_blog_posts_layout',
				'type' => 'info',
                'title'    => esc_html__( 'Posts Layout Style', 'navein' ),
				'desc' => wp_kses( __('Choose how posts are arranged on blog and archives pages', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
			),
             array(
				'id'       => 'navein_blog_entry_style',
				'type'     => 'select',
				'title'    => esc_html__( 'Change - Posts Layout Style', 'navein' ),
				'options'  => array(
					'dtr-blog-default' 				=> esc_html__('Default', 'navein'),
		            'dtr-blog-grid-masonry'			=> esc_html__('Masonry Grid - 2 column', 'navein'),
                    'dtr-blog-grid-fitrows'			=> esc_html__('Grid - 2 column', 'navein'),
                    'dtr-blog-grid-masonry-3col'	=> esc_html__('Masonry Grid - 3 column', 'navein'),
                    'dtr-blog-grid-fitrows-3col'    => esc_html__('Grid - 3 column', 'navein'),
				),
				'default'  => 'dtr-blog-default',
			  ),
			  array(
                'id'       => 'navein_blog_entry_corner',
                'type'     => 'select',
                'title'    => esc_html__( 'Corner Style', 'navein' ),
                'options'  => array(
                    'dtr-radius--rounded'   => esc_html__( 'Rounded Corners', 'navein' ),
                    'dtr-radius--default'	=> esc_html__( 'Default', 'navein' ),
                ),
                'default'  => 'dtr-radius--rounded',
             ),
              array(
				'id'   => 'navein_info_blog_enable_elements',
				'type' => 'info',
                'title'    => esc_html__( 'Enable / Disable Elements', 'navein' ),
                'subtitle' => esc_html__( 'Will work for elements on blog and archive pages. Settings for single posts are separate.', 'navein' ),
			  ),
              array(
				'id'       => 'navein_archive_image_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Featured Image', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_blog_page_date_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Date', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_blog_page_author_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Author', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_blog_page_category_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Category', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_blog_page_excerpt_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Excerpt', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_get_archive_excerpt_length',
				'type'     => 'text',
				'title'    => esc_html__( 'Excerpt Length', 'navein' ),
				'subtitle' => wp_kses( __('If excerpt is provided in excerpt box it will be displayed by default irrespective of excerpt length settings<br><br><strong>40 or any other number&nbsp;&nbsp;</strong> - To show that much words<br><strong>1&nbsp;&nbsp;&nbsp;&nbsp;</strong> - For complete post content<br><strong>999</strong> - For upto more tag - Default', 'navein'), array( 'br' => array(), 'strong' => array(), ) ),
				'validate' => array( 'numeric' ),
				'default'  => '999',
			  ),
              array(
				'id'       => 'navein_read_more_enable',
			    'type'     => 'switch',
				'title'    => esc_html__( 'Read more link', 'navein' ),
				'default'  => true,
			  ),
              array(
				'id'       => 'navein_read_more_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Read more link text', 'navein' ),
				'default'  => esc_html__( 'Continue Reading', 'navein' ),
			  ),

		),
	)
);