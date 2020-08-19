<?php

/**
 * Add Polylang support for Customizer
 *
 * @link              https://richardev.com
 * @since             1.3.1
 * @package           Polylang_Customizer
 *
 * @wordpress-plugin
 * Plugin Name:       Add Polylang support for Customizer
 * Plugin URI:        https://wordpress.org/plugins/add-polylang-support-for-customizer
 * Description:       This plugin adds Polylang support for Customizer.
 * Version:           1.3.1
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

if( ! defined( 'POLYLANG_VERSION' )){
    function apsfc_error_notice__error() {
        $class = 'notice notice-error';
        $message = __( '<strong>Polylang</strong> plugin must be activated for <strong>Add Polylang support for Customizer</strong> plugin to work. Please <a href="' . admin_url('plugins.php') .'">activate it</a> now!', 'sample-text-domain' );
     
        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), $message ); 
    }
    add_action( 'admin_notices', 'apsfc_error_notice__error' );
}else{
    /**
     * Currently plugin version.
     * Start at version 1.0.2 and use SemVer - https://semver.org
     * Rename this for your plugin and update it as you release new versions.
     */
    define( 'APSFC_VERSION', '1.3.1' );
    define( 'APSFC_BASENAME', plugin_basename(__FILE__));

    require_once plugin_dir_path( __FILE__ ) . '/includes/class-apsfc.php';
}