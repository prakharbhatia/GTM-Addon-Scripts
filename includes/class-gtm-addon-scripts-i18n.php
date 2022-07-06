<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://nandann.com/
 * @since      1.0.0
 *
 * @package    Gtm_Addon_Scripts
 * @subpackage Gtm_Addon_Scripts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gtm_Addon_Scripts
 * @subpackage Gtm_Addon_Scripts/includes
 * @author     Prakhar Bhatia <prakhar@nandann.com>
 */
class Gtm_Addon_Scripts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gtm-addon-scripts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
