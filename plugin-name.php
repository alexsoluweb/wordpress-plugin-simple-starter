<?php
/**
 * Plugin Name: Plugin Name
 * Description: Your description
 * Version: 1.1.0
 * Author: Your name
 * Author URI: https://xxxxxx.com
 * Text Domain: plugin_name
 * Domain Path: /languages/
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

// Defines
define( 'XXX_VERSION', '1.1.0' );
define( 'XXX_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'XXX_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );


// Helper: Get plugin file path
function xxx_get_file_path( $path, $file ) {
	return $path . '/' . ltrim( $file, '/' );
}

// Helper: Get plugin file URI
function xxx_get_file_uri( $path, $file ) {
	return $path . '/' . ltrim( $file, '/' );
}

// Plugin activation
register_activation_hook( __FILE__, 'activate_plugin_name' );
function activate_plugin_name() {

}

// Plugin deactivation
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
function deactivate_plugin_name() {

}

// Register textdomain
add_action( 'plugins_loaded', 'plugin_name_load_textdomain' );
function plugin_name_load_textdomain() {
	load_plugin_textdomain( 'plugin_name', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

