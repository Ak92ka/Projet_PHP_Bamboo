<?php

require_once('src/model.php');

function productPage() {
    $productDetails = null;
    $productId = isset($_GET['productId']) ? $_GET['productId'] : null;

    if (!$productId) {
        echo 'No product ID provided in the URL.'; 
        return; 
    }

    $productDetails = getProductById($productId);

    require('views/product.php'); 

}

?>
