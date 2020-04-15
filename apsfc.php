<?php

/**
 * Add Polylang support for Customizer
 *
 * @link              https://richardev.com
 * @since             1.0.2
 * @package           Polylang_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Add Polylang support for Customizer
 * Plugin URI:        https://wordpress.org/plugins/add-polylang-support-for-customizer
 * Description:       This plugin adds Polylang support for Customizer.
 * Version:           1.0.2
 * Author:            richardev
 * Author URI:        https://richardev.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       apsfc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.2 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'APSFC_VERSION', '1.0.2' );

require_once plugin_dir_path( __FILE__ ) . '/includes/class-apsfc.php';