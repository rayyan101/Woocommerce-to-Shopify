<?php
	/**
	 * This class is Checking user's Credential on the time of Entry
	 *
	 * @package Woocommerce-shopify-migration
	 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'WSM_Credential_Validation' ) ) {

	/**
	 * Class WSM_Credential_Validation. ()
	 */
	class WSM_Credential_Validation {

		/**
		 * Constructor.
		 */
		public function __construct() {
			
		}
        /**
		 * API Errores Checking.
		 */
        public function wsm_api_error_checking(){	
			$shopify_store_name = get_option('shopify_store_name'); 
			$shopify_store_key = get_option('shopify_store_key');
            $url = 'https://'.$shopify_store_name.'/admin/api/2022-07/products.json';
			$header = array(
				'X-Shopify-Access-Token' => $shopify_store_key,
				'Content-Type' => 'application/json'
				);
			$args = array(
				'headers' =>  $header
				);
			
				
			$response = wp_remote_get($url,$args);
			$apiBody  = json_decode( wp_remote_retrieve_body( $response ) ); 
			if ( ( is_wp_error($response)) ) {
				WC_Admin_Settings::add_error( esc_html__( "API Request Error", 'Woocommerce-shopify-migration' ) );
				return;
			}
			if(isset($apiBody->errors)){
					
				WC_Admin_Settings::add_error( esc_html__( "Invalid API Key", 'Woocommerce-shopify-migration' ) );
			}
			else {
					
				WC_Admin_Settings::add_error( esc_html__( 'Succussfully Submited Your API and Credential', 'Woocommerce-shopify-migration' ) );
			}	
		} 

	}
}
new WSM_Credential_Validation();

