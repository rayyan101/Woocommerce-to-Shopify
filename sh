codup-1717.myshopify.com




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




create

curl -d '{"product":{"title":"Burton Custom Freestyle 151","body_html":"<strong>Good snowboard!</strong>","vendor":"Burton","product_type":"Snowboard","tags":["Barnes & Noble","Big Air","John's Fav"]}}' \
-X POST "https://codup-1717.myshopify.com/admin/api/2022-07/products.json" \
-H "X-Shopify-Access-Token: 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" \
-H "Content-Type: application/json"

retrive

curl -X GET "https://codup-1717.myshopify.com/admin/api/2022-07/products.json" \
-H "X-Shopify-Access-Token: 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"



// ob_start();
			// $output_string = ob_get_contents();
			// ob_end_clean();
			// wp_die($output_string); 
			// wp_reset_postdata(); 			
		}



        curl -d '{"product":{"title":"Burton Custom Freestyle 151","body_html":"<strong>Good snowboard!</strong>","vendor":"Burton","product_type":"Snowboard","tags":["Barnes & Noble","Big Air","John's Fav"]}}' \
-X POST "https://your-development-store.myshopify.com/admin/api/2021-10/products.json" \
-H "X-Shopify-Access-Token: {access_token}" \
-H "Content-Type: application/json"


{"product":{
    "title":"Burton Custom Freestyle 151",
    "body_html":"<strong>Good snowboard!</strong>",
    "vendor":"Burton",
    "product_type":"Snowboard",
    "tags":["Barnes & Noble","Big Air","John's Fav"]}}




    sku: 
    {"product":{"title":"Rayyan","body_html":"<strong>Good snowboard!</strong>","vendor":"Burton","product_type":"Snowboard",
	"variants": [
      {
        "sku": "qweqweqwqwe" }]

}}