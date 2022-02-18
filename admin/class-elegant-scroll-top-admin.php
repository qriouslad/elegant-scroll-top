<?php

use Jeffreyvr\WPSettings\WPSettings;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://bowo.io
 * @since      1.0.0
 *
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/admin
 * @author     Bowo <hello@bowo.io>
 */
class Elegant_Scroll_Top_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elegant_Scroll_Top_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elegant_Scroll_Top_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/elegant-scroll-top-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elegant_Scroll_Top_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elegant_Scroll_Top_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/elegant-scroll-top-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 *  Create settings page
	 *
	 * @since 1.0.0
	 */
	
	public function add_settings() {

		$settings = new WPSettings(__('Elegant Scroll Top'));

		// Define where and how the settings page should show up

		$settings->set_capability('manage_options');
		$settings->set_menu_position(7);
		$settings->set_menu_parent_slug('options-general.php');

		// Basic tab

		$tab = $settings->add_tab(__('Basic'));

		$section = $tab->add_section(__('Get started'), [
			'description' => __('Pick basic options to get your elegant scroll to top button working immediately'),
		]);

		$section->add_option('select',[
			'name' => 'est_enable',
			'label' => __( 'Enable', '' ),
			'options' => [
				true => 'Yes',
				false => 'No'
			]
		]);

		// Advanced tab

		$tab = $settings->add_tab(__('Advanced'));

		$section = $tab->add_section(__('Customize'), [
			'description' => __('Customize the following options to get the button that is just right for you'),
		]);

		$settings->make();

	}

}
