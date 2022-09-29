<?php
	/**
	 * Adding Sync Button on Product Page for Product Migration.
	 *
	 * @package Woocommerce-shopify-migration
	 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'WSM_Migration_button' ) ) {

	/**
	 * Class WSM_Migration_button.
	 */
	class WSM_Migration_button {

		/**
		 *  Constructor.
		 */
		public function __construct() {
			global $wpdb;
			$api_request = get_option('api_request');
			if($api_request == "Succussfull"){ 
				add_action("add_meta_boxes", array($this, "WSM_migration_metabox"));
			}	
		}
		
		/**
		 * Adding Metabox in Woocommercce product Page for Product Migration to Shopify Store.
		 * 
		 */
		public function WSM_migration_metabox(){
            add_meta_box( "sync-id", "Sync Product To Shopify", array($this,"wsm_sync_button"),"product","side","high");
        }

		/**
		 * Adding Sync Button to metabox for sync Products.
		 * 
		 */
		public function wsm_sync_button () {
			global $post; 
			?>
			<a class="button button-primary" id="sync_button" name="sync">Sync Product</a>
			<input type="text" class="button button-primary" id="post_id" name="post_id" value="<?php echo $post->ID ?>" style="display: none;" > 
        	<input id="sync_loader" style="display: none;">
			<?php
		}
	}
}
new WSM_Migration_button();
?>
