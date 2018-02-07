<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also includes autoloader, registers the
 * activation and deactivation functions, and defines a function that starts the
 * plugin.
 *
 * @since 1.0.0
 * @package __package/namespace__
 *
 * @wordpress-plugin
 * Plugin Name: __plugin-name__
 * Plugin URI: TODO
 * Description: TODO
 * Version: 0.1.0
 * Author:
 * Author URI: TODO
 * License: GPL v3
 * Text Domain: __td__
 * Domain Path: /languages/
 */

// If this file is called directly, abort.
if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}