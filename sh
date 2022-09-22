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
