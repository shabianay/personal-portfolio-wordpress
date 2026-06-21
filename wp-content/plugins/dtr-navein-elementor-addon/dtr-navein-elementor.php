<?php
/**
 * Plugin Name: Navein Elementor Addons
 * Description: Adds custom elements for Navein Theme via Elementor plugin.
 * Author:      tansh
 * Version:     1.0.0
 * Author URI:  https://wrapbootstrap.com/user/tansh
 * License:     GPL-2.0+
 * Text Domain: navein
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
define('NAVEIN_ELEMENTOR_ADDONS_URL', plugin_dir_url(__FILE__));
define( 'NAVEIN_ELEMENTOR_ADDONS_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Load the plugin after Elementor loaded.
 * @since 1.0.0
 */
function navein_elementor_addons_load() {
	require( __DIR__ . '/class-dtr-navein-elementor.php' );
}
add_action( 'plugins_loaded', 'navein_elementor_addons_load' );

/**
 * Load the plugin text domain for translations.
 * @since 1.0.0
 */
function navein_load_textdomain() {
    load_plugin_textdomain( 'navein' );
}
add_action( 'init', 'navein_load_textdomain' );