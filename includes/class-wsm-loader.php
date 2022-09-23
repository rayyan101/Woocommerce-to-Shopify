<?php
	/**
	 * This class is Loader Class we are using for Enqueue Scrips Style and including other Classes and Files
	 *
	 * @package Woocommerce-shopify-migration
	 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'WSM_Loader' ) ) {

	/**
	 * Class WSM_Loader. ()
	 */
	class WSM_Loader {

		/**
		 * Constructor.
		 */
		public function __construct() {
			$this->includes();
			add_action( 'admin_enqueue_scripts', array( $this, 'WSM_enqueue_scripts' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'WSM_enqueue_scripts' ) );

			

		}

		/**
		 * Function for Enqueue Scripts and Style.
		 */
		public function WSM_enqueue_scripts() {
			wp_enqueue_script( 'wsm_script_js', plugin_dir_url( __DIR__ ) . '/assets/js/script.js', array( 'jquery' ), wp_rand() );
			wp_localize_script( 'wsm_script_js', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
			wp_enqueue_style( 'wsm_plugin_style', plugin_dir_url( __DIR__ ) . '/assets/css/style.css', array(), '1.0' );
		}


		/**
		 * Function for Including Files and Classes
		 */
		public function includes() {
			include_once 'class-wsm-migration-button.php';
			include_once 'class-wsm-sync-to-shopify';
			
		}
	}
}
new WSM_Loader();

