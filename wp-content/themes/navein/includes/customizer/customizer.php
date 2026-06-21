<?php
/**
 * Navein Customizer
 *
 * @package NaveinTheme
 * @version 1.0.0
 */

/**
 * Customizer Mods
 */
function navein_customizer_register( $wp_customize ) {

	// Remove core sections
	$wp_customize->remove_section( 'themes' );

	// Remove core controls
	$wp_customize->remove_control( 'header_textcolor' );

	// title_tagline section priority
	$wp_customize->add_section( 'title_tagline' , array(
		'title'		=> esc_html__( 'Site Identity', 'navein' ),
		'priority'	=> 1,
	));

	// Logo type select field
	$wp_customize->add_setting( 'navein_logo_type', array(
		'sanitize_callback' => 'navein_sanitize_select',
  		'default' => 'navein_text_logo',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'navein_logo_type', array(
		'type' 		=> 'select',
		'section' 	=> 'title_tagline',
		'label'		=> esc_html__( 'Select Logo Type', 'navein' ),
		'settings'	=> 'navein_logo_type',
		'priority'	=> 1,
		'choices'	=> array(
			'navein_img_logo' => esc_html__( 'Image Logo', 'navein' ),
			'navein_text_logo' => esc_html__( 'Text Logo', 'navein' ),
			'navein_site_title_logo' => esc_html__( 'Site Title', 'navein' ),
		),
	) );

	// Logo Width
	$wp_customize->add_setting( 'navein_logo_width', array(
		'default'      		=> '',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'navein_logo_width_control',
            array(
                'label'      	=> esc_html__( 'Logo Width', 'navein' ),
				'description'	=> esc_html__( 'Logo will resize as per width. Do not add unit.', 'navein' ),
                'section'   	=> 'title_tagline',
                'settings'   	=> 'navein_logo_width',
				'default'      	=> '',
                'priority'   	=> 8
            )
        )
    );

	// Logo Height
	$wp_customize->add_setting( 'navein_logo_height', array(
		'default'      		=> '',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'navein_logo_height_control',
            array(
                'label'      	=> esc_html__( 'Logo Height', 'navein' ),
				'description'	=> esc_html__( 'Logo will resize as per width. Height is just to serve for height attribute criteria. Do not add unit.', 'navein' ),
                'section'   	=> 'title_tagline',
                'settings'   	=> 'navein_logo_height',
				'default'      	=> '',
                'priority'   	=> 8
            )
        )
    );

	// Alt logo
	$wp_customize->add_setting('navein_alt_img_logo', array(
		'default'      		=> '',
		'sanitize_callback'	=> 'navein_sanitize_image',
         'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
		)
	);


	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'navein_alt_img_logo_control',
			array(
        		'label' 		=> esc_html__('Alt Logo', 'navein'),
				'description' 	=> esc_html__('Logo and Alt Logo will work for either for on-load header or on-scroll header as per header variation. Refresh window if not visible on customizer edit screen.', 'navein'),
        		'section' 		=> 'title_tagline',
        		'settings'		=> 'navein_alt_img_logo',
				'default'      	=> '',
				'priority' 	 	=> 8
    		)
		)
	);

	// Alt Logo Width
	$wp_customize->add_setting( 'navein_alt_logo_width', array(
		'default'      		=> '',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'navein_alt_logo_width_control',
            array(
                'label'      	=> esc_html__( 'Alt Logo Width', 'navein' ),
				'description'	=> esc_html__( 'Logo will resize as per width. Do not add unit.', 'navein' ),
                'section'   	=> 'title_tagline',
                'settings'   	=> 'navein_alt_logo_width',
				'default'      	=> '',
                'priority'   	=> 8
            )
        )
    );

	// Alt Logo height
	$wp_customize->add_setting( 'navein_alt_logo_height', array(
		'default'      		=> '',
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'navein_alt_logo_height_control',
            array(
                'label'      	=> esc_html__( 'Alt Logo Height', 'navein' ),
				'description'	=> esc_html__( 'Logo will resize as per width. Height is just to serve for height attribute criteria. Do not add unit.', 'navein' ),
                'section'   	=> 'title_tagline',
                'settings'   	=> 'navein_alt_logo_height',
				'default'      	=> '',
                'priority'   	=> 8
            )
        )
    );

	// Responsive
	$wp_customize->add_setting( 'navein_resp_logo_type', array(
		'sanitize_callback'	=> 'navein_sanitize_select',
  		'default' 			=> 'navein_resp_main_logo',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'navein_resp_logo_type', array(
		'type' 			=> 'select',
		'section' 		=> 'title_tagline',
		'label'			=> esc_html__( 'Logo Image For - Responsive Header', 'navein' ),
		'description'	=> esc_html__( 'You can choose any one of the - Logo & Alt Logo - for small screen headers', 'navein' ),
		'settings'		=> 'navein_resp_logo_type',
		'priority'		=> 8,
		'choices'		=> array(
			'navein_resp_main_logo'	=> esc_html__( 'Logo', 'navein' ),
			'navein_resp_alt_logo' 	=> esc_html__( 'Alt Logo', 'navein' ),
		),
	) );

	// Text Logo
	$wp_customize->add_setting( 'navein_text_logo_text', array(
		'default'      		=> esc_html__( 'Logo', 'navein' ),
		'sanitize_callback'	=> 'wp_filter_nohtml_kses',
        'type' => 'theme_mod', // or 'option'
  'capability' => 'edit_theme_options',
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'navein_text_logo_control',
            array(
                'label'      	=> esc_html__( 'Text for - Only text Logo (Without Image)', 'navein' ),
				'description'	=> esc_html__( 'Use this if need logo text other than Site Title.', 'navein' ),
                'section'   	=> 'title_tagline',
                'settings'   	=> 'navein_text_logo_text',
				'default'      	=> esc_html__( 'Logo', 'navein' ),
                'priority'   	=> 8
            )
        )
    );

	// background_image section
	$wp_customize->add_section( 'background_image' , array(
		'title'		=> esc_html__('Body background Image','navein'),
		'priority'	=> 2,
	));
	// background_color section
	$wp_customize->add_section( 'colors' , array(
		'title'		=> esc_html__('Body background Color','navein'),
		'priority'	=> 3,
	));
}
add_action( 'customize_register', 'navein_customizer_register', 20 );
// customize_register

/**
 * Customizer css
 */
function navein_panels_scripts() {
	wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/includes/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'navein_panels_scripts' );