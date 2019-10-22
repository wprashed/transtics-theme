<?php
/*
Plugin Name: Transtics Elementor Extention
Plugin URI:
Description: Boilerplate for creating Elementor Extensions
Version: 1.0
Author: AndIT Themes
Author URI: http://anditthemes.com
License: GPLv2 or later
Text Domain: transticsee
*/

final class Transtics_Elementor_Extension {

	// Widget Version

	const VERSION = '1.0.0';

	// Minimum Elementor Version

	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	// Minimum PHP Version

	const MINIMUM_PHP_VERSION = '7.0';

	private static $_instance = null;

	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	public function __construct() {

		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );

	}

	public function i18n() {

		load_plugin_textdomain( 'transticsee' );

	}

	public function init() {

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

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		add_action( 'elementor/elements/categories_registered', [ $this, 'register_new_category'] );
	}

	public function register_new_category($manager){
		$manager->add_category('transticscategory', [
			'title'=>__('Transtics', 'transticsee'),
			'icon'=>'fa fa-image'
		]);
	}

	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
		/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'transticsee' ),
			'<strong>' . esc_html__( 'Transtics Elementor Extension', 'transticsee' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'transticsee' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
		/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'transticsee' ),
			'<strong>' . esc_html__( 'Transtics Elementor Extension', 'transticsee' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'transticsee' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
		/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'transticsee' ),
			'<strong>' . esc_html__( 'Transtics Elementor Extension', 'transticsee' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'transticsee' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	public function init_widgets() {

		// Include Widget files
		require_once( __DIR__ . '/widgets/slider.php' );
		require_once( __DIR__ . '/widgets/team-slider.php' );
		require_once( __DIR__ . '/widgets/team-grid.php' );
		require_once( __DIR__ . '/widgets/client.php' );
		require_once( __DIR__ . '/widgets/service-grid.php' );
		require_once( __DIR__ . '/widgets/testimonial.php' );
		require_once( __DIR__ . '/widgets/intro.php' );
		require_once( __DIR__ . '/widgets/advantages.php' );
		require_once( __DIR__ . '/widgets/contact.php' );
		require_once( __DIR__ . '/widgets/gallery.php' );
		require_once( __DIR__ . '/widgets/subscribe.php' );

		// Register widget
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Slider_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_TeamSlider_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_TeamGrid_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Client_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_ServiceGrid_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Testimonial_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Intro_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Advantages_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Contact_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Gallery_widget() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Transtics_Subscribe_widget() );

	}

}

Transtics_Elementor_Extension::instance();