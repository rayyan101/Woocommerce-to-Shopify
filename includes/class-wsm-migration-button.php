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
			
			add_action("add_meta_boxes", array($this, "WSM_migration_metabox"));
		}
		
		/**
		 * Adding Metabox in product Page for Product Migration to Shopify Store.
		 * 
		 */
		public function WSM_migration_metabox(){
            add_meta_box( "sync-id", "Sync Product For Shopify", array($this,"WSM_sync_button"),"product","side","high");
        }

		/**
		 * Adding Sync Button to metabox for sync Products.
		 * 
		 */
		public function WSM_sync_button () {
			global $post;
			?><pre><?php
			print_r($post );
			?></pre><?php
			?>
			<a href="#" class="sync_button" id="sync" name="sync">Sync Product</a>
			<input type="text" id="post_id" name="post_id" value="<?php echo $post->ID ?>" style="display: none;" value="">
			<?php 
		}
	}
}
new WSM_Migration_button();
?>
