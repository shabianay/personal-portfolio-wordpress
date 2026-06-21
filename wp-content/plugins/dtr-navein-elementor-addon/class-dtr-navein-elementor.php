<?php
namespace NaveinAddons;

use NaveinAddons\Widgets\Navein_Heading;
use NaveinAddons\Widgets\Navein_Subheading;
use NaveinAddons\Widgets\Navein_Button;
use NaveinAddons\Widgets\Navein_Iconhead;
use NaveinAddons\Widgets\Navein_Icon_List;
use NaveinAddons\Widgets\Navein_Theme_Icon;
use NaveinAddons\Widgets\Navein_Animated_Heading;
use NaveinAddons\Widgets\Navein_Feature;
use NaveinAddons\Widgets\Navein_Feature_Highlight;
use NaveinAddons\Widgets\Navein_Number_Feature;
use NaveinAddons\Widgets\Navein_Process;
use NaveinAddons\Widgets\Navein_Blockquote;
use NaveinAddons\Widgets\Navein_Testimonial_Carousel;
use NaveinAddons\Widgets\Navein_Recentposts_Carousel;
use NaveinAddons\Widgets\Navein_Portfolio;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Main Plugin Class
 * Register new elementor widget.
 * @since 1.0.0
 */
class Navein_Elementor_Addons {

	/**
	 * Minimum Elementor Version
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	/**
	 * Constructor
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {
		$this->add_actions();
		$this->setup_hooks();
		// Image Resizer
	    require_once( NAVEIN_ELEMENTOR_ADDONS_PATH . 'inc/aq_resizer.php' );
	}

	/**
	 * Add Actions
	 * @since 1.0.0
	 * @access private
	 */

	public function add_actions() {
		add_action( 'elementor/widgets/register', [ $this, 'on_widgets_registered' ] );
		add_action( 'elementor/init', array( $this, 'add_elementor_category' ) );

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

	}

	/**
	 * Admin notice
	 * Warning when the site doesn't have Elementor installed or activated.
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );
		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'navein' ),
			'<strong>' . esc_html__( 'Navein Elementor Addons', 'navein' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'navein' ) . '</strong>'
		);
		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Admin notice
	 * Warning when the site doesn't have a minimum required Elementor version.
	 * @access public
	 */
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'navein' ),
			'<strong>' . esc_html__( 'Navein Elementor Addons', 'navein' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'navein' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Add setup_hooks
	 * @since 1.0.0
	 * @access private
	 */
	private function setup_hooks() {
		// Register Widget Styles
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'widget_styles' ] );
		add_action( 'elementor/frontend/after_register_scripts',[ $this, 'register_frontend_scripts' ], 10 );
	}

	/**
	 * On Widgets Registered
	 * @since 1.0.0
	 * @access public
	 */
	public function on_widgets_registered() {
		$this->includes();
		$this->register_widget();
	}

	/**
	 * Add Category
	 * @since 1.0.0
	 * @access public
	 */
	 public function add_elementor_category() {
		\Elementor\Plugin::instance()->elements_manager->add_category(
			'dtr-element',
			array(
				'title' => __('Navein Addons', 'navein'),
				'icon' => 'fa fa-plug',
			),
			1);
      }

	/**
	 * Includes
	 * @since 1.0.0
	 * @access private
	 */
	private function includes() {
        require __DIR__ . '/inc/dtr-icons.php';
        require __DIR__ . '/widgets/dtr-heading.php';
		require __DIR__ . '/widgets/dtr-subheading.php';
        require __DIR__ . '/widgets/dtr-button.php';
		require __DIR__ . '/widgets/dtr-icon-heading.php';
        require __DIR__ . '/widgets/dtr-icon-list.php';
		require __DIR__ . '/widgets/dtr-theme-icon.php';
		require __DIR__ . '/widgets/dtr-animated-heading.php';
		require __DIR__ . '/widgets/dtr-feature.php';
		require __DIR__ . '/widgets/dtr-feature-highlight.php';
        require __DIR__ . '/widgets/dtr-number-feature.php';
		require __DIR__ . '/widgets/dtr-process.php';
		require __DIR__ . '/widgets/dtr-blockquote.php';
		require __DIR__ . '/widgets/dtr-testimonial-carousel.php';
        require __DIR__ . '/widgets/dtr-recentposts-carousel.php';
		require __DIR__ . '/widgets/dtr-portfolio.php';
	}

	/**
	 * Register Widget
	 * @since 1.0.0
	 * @access private
	 */
	private function register_widget() {
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Heading() );
        \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Subheading() );
        \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Button() );
	    \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Iconhead() );
        \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Icon_List() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Theme_Icon() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Animated_Heading() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Feature() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Feature_Highlight() );
        \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Number_Feature() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Process() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Blockquote() );
	 	\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Testimonial_Carousel() );
        \Elementor\Plugin::instance()->widgets_manager->register( new Navein_Recentposts_Carousel() );
		\Elementor\Plugin::instance()->widgets_manager->register( new Navein_Portfolio() );
	}

	/**
	 * enqueue styles
	 * @since 1.0.0
	 * @access public
	 */
	public function widget_styles() {

        wp_enqueue_style( 'dtr-custom-icons', NAVEIN_ELEMENTOR_ADDONS_URL . 'fonts/iconfont.css' );

		// elementor pro css mod
        global $navein_theme_mod;
        $elementor_pro_mod = '';
        $elementor_pro_mod = isset($navein_theme_mod['navein_elementor_pro_mod']) ? $navein_theme_mod['navein_elementor_pro_mod'] : false;
		if ( $elementor_pro_mod == false && ! class_exists( 'ElementorPro\Plugin' ) ) {
			wp_enqueue_style( 'dtr-elementor-pro-mod', NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/css/elementor-pro-mod.css' );
		}
	}

	/**
	 * Load Frontend Scripts
	 *
	 */
	public function register_frontend_scripts() {
		wp_register_script( 'swiper', NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/js/swiper-bundle.min.js', array('jquery'), '5.0.3', true );
		wp_register_script( 'dtr-widgets', NAVEIN_ELEMENTOR_ADDONS_URL . 'assets/js/dtr-widgets.js', array('jquery'), '1.0', true );
		wp_enqueue_style( 'font-awesome-5-all', ELEMENTOR_ASSETS_URL . 'lib/font-awesome/css/all.min.css' );
    }

}
new Navein_Elementor_Addons();