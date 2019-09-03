<?php
/**
 * The main file of the <##= pkg.title ##> plugin
 *
 * @package _lhpbp
 * @version <##= pkg.version ##>
 *
 * Plugin Name: <##= pkg.title ##>
 * Plugin URI: <##= pkg.pluginUrl ##>
 * Description: <##= pkg.description ##>
 * Author: <##= pkg.author ##>
 * Author URI: <##= pkg.authorUrl ##>
 * Version: <##= pkg.version ##>
 * Text Domain: _lhpbp
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! defined( '_LHPBP_PLUGIN_SLUG' ) ) {
	define( '_LHPBP_PLUGIN_SLUG', '<%= pkg.slug %>' );
}

if ( ! defined( '_LHPBP_PLUGIN_VERSION' ) ) {
	define( '_LHPBP_PLUGIN_VERSION', '<%= pkg.version %>' );
}

if ( ! defined( '_LHPBP_PLUGIN_URL' ) ) {
	define( '_LHPBP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( '_LHPBP_PLUGIN_PATH' ) ) {
	define( '_LHPBP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Custom autoloader function for plugin classes.
 * Autoloader and architecture below heavily inspired by WP Rig.
 * Thank you guys for your awesome work!
 *
 * Changes were made to fit the boilerplates needs (e.g. change namespaces and function names).
 *
 * @access private
 * @see https://github.com/wprig/wprig
 * @param string $class_name Class name to load.
 * @return bool True if the class was loaded, false otherwise.
 */
function _lhpbp_autoload( $class_name ) {
	$namespace = '_lhpbp';

	if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
		return false;
	}

	$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );
	$path  = _LHPBP_PLUGIN_PATH . 'inc';

	foreach ( $parts as $part ) {
		$path .= '/' . $part;
	}

	$path .= '.php';

	if ( ! file_exists( $path ) ) {
		return false;

	}

	require_once $path;

	return true;
}
spl_autoload_register( '_lhpbp_autoload' );

// Load the `wp__lhpbp()` entry point function.
require _LHPBP_PLUGIN_PATH . 'inc/functions.php';

// Initialize the plugin.
call_user_func( '_lhpbp\wp__lhpbp' );
