<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://bowo.io
 * @since      1.0.0
 *
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/public
 * @author     Bowo <hello@bowo.io>
 */
class Elegant_Scroll_Top_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/elegant-scroll-top-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/elegant-scroll-top-public.js', array( 'jquery' ), $this->version, false );
		
		// Load scrollUp script if back to top button is enabled in plugin settings

		$options = get_option('elegant_scroll_top');

		if ( $options['status'] == 'enabled' ) {

			wp_enqueue_script( $this->plugin_name.'-scrollup', plugin_dir_url( __FILE__ ) . 'js/jquery.scrollUp.min.js', array( 'jquery' ), $this->version, false );

		}
		
	}

	/**
	 * Initialize the back to top button
	 */
	
	public function elegant_scroll_top_init() {

		$options = get_option('elegant_scroll_top');

		if ( $options['status'] == 'enabled' ) {

			echo '
				<script>
					jQuery(function() {
						jQuery.scrollUp({
								scrollDistance: 300, 	// Distance from top/bottom before showing element
								scrollFrom: "top",		// top or bottom
								scrollSpeed: 500,		// Speed of back to top/bottom (ms)
								scrollTarget: "body",	// element, ID or class name
								animation: "fade",		// fade, slide or none
								scrollText: "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-up\"><polyline points=\"18 15 12 9 6 15\"></polyline></svg>"

							});
						});
				</script>
			';

		}		

	}

}
