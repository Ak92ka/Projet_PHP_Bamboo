<?php
require_once('src/controllers/homepage.php');
require_once('src/controllers/product.php');

if (isset($_GET['productId'])) {
    productPage();
} else {
    homepage();
}
?>
