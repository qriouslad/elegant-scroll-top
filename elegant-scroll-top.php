<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bowo.io
 * @since             1.0.0
 * @package           Elegant_Scroll_Top
 *
 * @wordpress-plugin
 * Plugin Name:       Elegant Scroll Top
 * Plugin URI:        https://github.com/qriouslad/elegant-scroll-top
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bowo
 * Author URI:        https://bowo.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       elegant-scroll-top
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ELEGANT_SCROLL_TOP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-elegant-scroll-top-activator.php
 */
function activate_elegant_scroll_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elegant-scroll-top-activator.php';
	Elegant_Scroll_Top_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-elegant-scroll-top-deactivator.php
 */
function deactivate_elegant_scroll_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-elegant-scroll-top-deactivator.php';
	Elegant_Scroll_Top_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_elegant_scroll_top' );
register_deactivation_hook( __FILE__, 'deactivate_elegant_scroll_top' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-elegant-scroll-top.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_elegant_scroll_top() {

	$plugin = new Elegant_Scroll_Top();
	$plugin->run();

}
run_elegant_scroll_top();
