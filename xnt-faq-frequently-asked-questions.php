<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              #
 * @since             1.0.0
 * @package           Xnt_Faq_Frequently_Asked_Questions
 *
 * @wordpress-plugin
 * Plugin Name:       WP Frequently Asked Questions
 * Plugin URI:        #
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Chris Uche
 * Author URI:        #
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       xnt-faq-frequently-asked-questions
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
define( 'XNT_FAQ_FREQUENTLY_ASKED_QUESTIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-xnt-faq-frequently-asked-questions-activator.php
 */
function activate_xnt_faq_frequently_asked_questions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xnt-faq-frequently-asked-questions-activator.php';
	Xnt_Faq_Frequently_Asked_Questions_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-xnt-faq-frequently-asked-questions-deactivator.php
 */
function deactivate_xnt_faq_frequently_asked_questions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-xnt-faq-frequently-asked-questions-deactivator.php';
	Xnt_Faq_Frequently_Asked_Questions_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_xnt_faq_frequently_asked_questions' );
register_deactivation_hook( __FILE__, 'deactivate_xnt_faq_frequently_asked_questions' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-xnt-faq-frequently-asked-questions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_xnt_faq_frequently_asked_questions() {

	$plugin = new Xnt_Faq_Frequently_Asked_Questions();
	$plugin->run();

}
run_xnt_faq_frequently_asked_questions();
