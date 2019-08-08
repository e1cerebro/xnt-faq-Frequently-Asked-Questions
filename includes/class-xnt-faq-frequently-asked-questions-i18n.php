<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Xnt_Faq_Frequently_Asked_Questions
 * @subpackage Xnt_Faq_Frequently_Asked_Questions/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Xnt_Faq_Frequently_Asked_Questions
 * @subpackage Xnt_Faq_Frequently_Asked_Questions/includes
 * @author     Chris Uche <nwachukwu16@gmail.com>
 */
class Xnt_Faq_Frequently_Asked_Questions_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'xnt-faq-frequently-asked-questions',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
