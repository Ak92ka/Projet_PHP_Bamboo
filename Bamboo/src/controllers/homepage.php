<?php 

require_once('src/model.php');


function homepage() {
    $productPhotos = getProductPhoto();
    $productChair = getProductPhotobyType("chair"); 
    $productCouch = getProductPhotobyType("couch"); 

 
    require('views/homepage.php');
}
?>