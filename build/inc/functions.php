<?php
/**
 * The `wp__lhpbp()` function.
 *
 * @package _lhpbp
 */

namespace _lhpbp;

/**
 * Provides access to all available functions of the plugin.
 *
 * When called for the first time, the function will initialize the plugin.
 *
 * @return Plugin_Functions Plugin functions instance exposing plugin function methods.
 */
function wp__lhpbp() {
	static $plugin = null;

	if ( null === $plugin ) {
		$plugin = new Plugin();
		$plugin->initialize();
	}

	return $plugin->plugin_functions();
}
