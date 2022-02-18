<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://bowo.io
 * @since      1.0.0
 *
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Elegant_Scroll_Top
 * @subpackage Elegant_Scroll_Top/includes
 * @author     Bowo <hello@bowo.io>
 */
class Elegant_Scroll_Top_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'elegant-scroll-top',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
