<?php
/**
 * Plugin Name:       Woocommerce to Shopify Migration
 * Plugin URI:        https://codup.co
 * Description:       Sending Woocommerce product to shopify store
 * Version:           1.1.1.0
 * Author:            Codup
 * Author URI:        https://codup.co
 * License:           GPL v2 or later

 * @package           Woocommerce-shopify-migration
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'WSM_PLUGIN_DIR' ) ) {
	define( 'WSM_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'WSM_PLUGIN_DIR_URL' ) ) {
	define( 'WSM_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WSM_ABSPATH' ) ) {
	define( 'WSM_ABSPATH', dirname( __FILE__ ) );
}

	require_once WSM_ABSPATH . '/includes/class-wsm-loader.php';

