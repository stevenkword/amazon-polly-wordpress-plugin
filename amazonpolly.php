<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              amazon.com
 * @since             1.0.0
 * @package           Amazonpolly
 *
 * @wordpress-plugin
 * Plugin Name:       Amazon Polly
 * Plugin URI:        https://aws.amazon.com/polly/
 * Description:       Amazon Polly is a service that turns text into lifelike speech. With dozens of  voices across a variety of languages, you can select the ideal voice and build engaging speech-enabled applications that work in many different countries. With the Amazon Polly plugin for WordPress, you can generate an audio feed for text-based content and insert it into an embedded player to increase the accessibility of your WordPress site. With this feature, you can also easily publish podcasts directly from your site and make them available for listeners in form of podcasts.
 * Version:           1.0.2
 * Author:            AWS Labs, WP Engine
 * Author URI:        https://aws.amazon.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       amazonpolly
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-amazonpolly-activator.php
 */
function activate_amazonpolly() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-amazonpolly-activator.php';
	Amazonpolly_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-amazonpolly-deactivator.php
 */
function deactivate_amazonpolly() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-amazonpolly-deactivator.php';
	Amazonpolly_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_amazonpolly' );
register_deactivation_hook( __FILE__, 'deactivate_amazonpolly' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-amazonpolly.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_amazonpolly() {

	$plugin = new Amazonpolly();
	$plugin->run();

}
run_amazonpolly();
