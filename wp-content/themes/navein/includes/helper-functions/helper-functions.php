<?php
/**
 * Theme helper functions
 *
 * @package NaveinTheme
 * @version 1.0.0
 */

/**
 * Flush rewrite rules for custom post types on theme activation
 */
add_action( 'after_switch_theme', 'navein_rewrite_rules_flush' );
if ( ! function_exists( 'navein_rewrite_rules_flush' ) ) {
    function navein_rewrite_rules_flush() {
         flush_rewrite_rules();
    }
}

/**
 * Modify category widget
 */
if ( ! function_exists( 'navein_categories_postcount_filter' ) ) {
	function navein_categories_postcount_filter ( $in ) {
	  $out = preg_replace( '/<\/a> \(([0-9]+)\)/', ' <span class="dtr-post-count">(\\1)</span></a>', $in );
	  return $out;
	}
	add_filter('wp_list_categories','navein_categories_postcount_filter');
}

/**
 * Modify archive widget
 */
if ( ! function_exists( 'navein_archives_postcount_filter' ) ) {
	function navein_archives_postcount_filter( $in ) {
		if ( false !== strpos( $in, '<li>' ) ) {
			$out = preg_replace( '/<\/a>&nbsp;\(([0-9]+)\)/', ' <span class="dtr-post-count">(\\1)</span></a>', $in );
			return $out;
		}
		return $in;
	}
	add_filter( 'get_archives_link', 'navein_archives_postcount_filter' );
}


/**
 * Wrap current page in span for wp_link_pages
 */
if ( ! function_exists( 'navein_wp_link_pages_wrap' ) ) {
	function navein_wp_link_pages_wrap( $link ) {
		if ( ctype_digit( $link ) ) {
			return '<span class="page-link-current">' . $link . '</span>';
		}
		return $link;
	}
	add_filter( 'wp_link_pages_link', 'navein_wp_link_pages_wrap' );
}

/**
 * Sanitize checkbox
 */
if ( ! function_exists( 'navein_sanitize_checkbox' ) ) {
	function navein_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}
} // navein_sanitize_checkbox

/**
 * Sanitize select
 */
if ( ! function_exists( 'navein_sanitize_select' ) ) {
	function navein_sanitize_select( $input, $setting ){
		$input = sanitize_key($input);
		$choices = $setting->manager->get_control( $setting->id )->choices;
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}

/**
 * Sanitize image upload
 */
if ( ! function_exists( 'navein_sanitize_image' ) ) {
	function navein_sanitize_image( $file, $setting ) {

		//allowed file types
		$mimes = array(
			'jpg|jpeg|jpe' => 'image/jpeg',
			'gif'          => 'image/gif',
			'png'          => 'image/png'
		);

		//check file type from file name
		$file_ext = wp_check_filetype( $file, $mimes );

		//if file has a valid mime type return it, otherwise return default
		return ( $file_ext['ext'] ? $file : $setting->default );
	}
}

// core plugin update notice
if ( ! function_exists( 'navein_core_update_admin_notice' ) ) {
	function navein_core_update_admin_notice() {
		if ( is_admin() ) {
			if( !function_exists('get_plugin_data') ){
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			if ( !class_exists( 'dtr_navein_core' ) ) return;
			$navein_core_plugin_dir = WP_PLUGIN_DIR . '/dtr-navein-core/dtr-navein-core.php';
			$navein_core_plugin_data = get_plugin_data($navein_core_plugin_dir);
			$navein_core_plugin_version = $navein_core_plugin_data['Version'];
			if ( $navein_core_plugin_version < NAVEIN_CORE_PLUGIN_CURRENT_VERSION ) { ?>
				<div class="notice notice-error"><p><?php _e( '<strong>Important</strong> : Update navein Core Plugin. Go To : Appearance / Install Plugins', 'navein' ); ?></p></div>
			<?php }
		}
	}
}
add_action( 'admin_notices', 'navein_core_update_admin_notice' );

// elementor addon plugin update notice
if ( ! function_exists( 'navein_elementor_addon_update_admin_notice' ) ) {
	function navein_elementor_addon_update_admin_notice() {
		if ( is_admin() ) {
			if( !function_exists('get_plugin_data') ){
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			if ( !class_exists( '\naveinAddons\navein_Elementor_Addons' ) ) return;
			$navein_elementor_addon_plugin_dir = WP_PLUGIN_DIR . '/dtr-navein-elementor-addon/dtr-navein-elementor.php';
			$navein_elementor_addon_plugin_data = get_plugin_data($navein_elementor_addon_plugin_dir);
			$navein_elementor_addon_plugin_version = $navein_elementor_addon_plugin_data['Version'];
			if ( $navein_elementor_addon_plugin_version < NAVEIN_ELEMENTOR_ADDON_PLUGIN_CURRENT_VERSION ) { ?>
            	<div class="notice notice-error"><p><?php _e( '<strong>Important</strong> : Update navein Elementor Addons Plugin Plugin. Go To : Appearance / Install Plugins', 'navein' ); ?></p></div>
			<?php }
		}
	}
}
add_action( 'admin_notices', 'navein_elementor_addon_update_admin_notice' );

// import Notice
if ( ! function_exists( 'navein_demo_import_notice' ) ) {
    function navein_demo_import_notice() {
        if ( true == navein_get_theme_option( 'navein_demo_import_notification_enable', true ) ) {
        ?>
        <div class="notice notice-error is-dismissible dtr-import-notice">
            <h4><?php _e( '** Theme SetUp Guide for New Buyers **', 'navein' ); ?></h4>
            <h5><?php _e( 'Step 1: Install All Required / Recommended Plugins', 'navein' ); ?></h5>
          <p><?php _e( 'There is a link to install plugins in below Notice OR <strong>Visit : Appearance > Install Plugins</strong>', 'navein' ); ?></p>
            <h5><?php _e( 'Step 2: Import Theme Demo Data', 'navein' ); ?></h5>
            <p><?php _e( 'As WordPress Themes do not carry data with them...Import Demo Data to make your link look like Theme Demo.<br> <strong>Visit : Appearance > Import Theme Demo Data</strong><br>You need - One Click Demo Import Plugin - active to see this option. This plugin is already in recommeded list, so will get install along with other plugins (in step 1).', 'navein' ); ?></h5>
            <h5><?php _e( 'Step 3: Online Help Documentation', 'navein' ); ?></h5>
            <p><?php _e( 'Find online help document here : <br><a class="button button-primary" href="https://docs.tanshcreative.com" target="_blank">Online Help Documentation</a>', 'navein' ); ?></p>
            <h5><?php _e( 'Step 4: Disable this Notification', 'navein' ); ?></h5>
            <p><?php _e( 'If you have finished importing demo data...<strong>Permanently Disable</strong> this Demo Import and Import Plugin Install Notice via theme options: <strong>Theme Options > Demo Notification</strong>', 'navein' ); ?></h5><br>
        </div>
        <?php
        }
    }
    add_action( 'admin_notices', 'navein_demo_import_notice' );
}

// admin styles
if ( true == navein_get_theme_option( 'navein_demo_import_notification_enable', true ) ) {
	if ( ! function_exists( 'navein_import_notice_admin_css' ) ) {
		function navein_import_notice_admin_css() {
		  echo '<style>
			.dtr-import-notice { background-color: #f6f7f6; border-color: #f6f7f6; border-left-color: #000; color: #000; }
			.dtr-import-notice h4 { font-size: 1.4em; }
			.dtr-import-notice h5 { font-size: 1.2em; margin-top: 30px; margin-bottom: 10px; }
			.dtr-import-notice p { font-size: 1em; }
			.dtr-import-notice .button { margin-top: 10px; }
            .wp-block-heading, .wp-block-spacer, .wp-block-paragraph { background-color: #ddd; }
		  </style>';
		}
		add_action('admin_head', 'navein_import_notice_admin_css');
	}
}