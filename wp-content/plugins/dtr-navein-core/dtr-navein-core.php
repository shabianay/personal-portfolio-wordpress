<?php
/**
 * Plugin Name: Navein Core
 * Description: Creates Shortcodes and Custom Post Types
 * Version:     1.0.0
 * Author:      tansh
 * Author URI:  https://wrapbootstrap.com/user/tansh
 * Text Domain: navein
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once( plugin_dir_path( __FILE__ ) . 'class-dtr-navein-core.php' );
dtr_navein_core::get_instance();