<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nandann.com/
 * @since             1.0.0
 * @package           Gtm_Addon_Scripts
 *
 * @wordpress-plugin
 * Plugin Name:       GTM Addon Scripts
 * Plugin URI:        https://nandann.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Prakhar Bhatia
 * Author URI:        https://nandann.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gtm-addon-scripts
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
define( 'GTM_ADDON_SCRIPTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gtm-addon-scripts-activator.php
 */
function activate_gtm_addon_scripts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gtm-addon-scripts-activator.php';
	Gtm_Addon_Scripts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gtm-addon-scripts-deactivator.php
 */
function deactivate_gtm_addon_scripts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gtm-addon-scripts-deactivator.php';
	Gtm_Addon_Scripts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gtm_addon_scripts' );
register_deactivation_hook( __FILE__, 'deactivate_gtm_addon_scripts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gtm-addon-scripts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

require plugin_dir_path( __FILE__ ) . 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/prakharbhatia/GTM-Addon-Scripts/main/plugin-update-checker/examples/plugin.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'gtm-addon-scripts'
);

function run_gtm_addon_scripts() {

	$plugin = new Gtm_Addon_Scripts();
	$plugin->run();

}
run_gtm_addon_scripts();

