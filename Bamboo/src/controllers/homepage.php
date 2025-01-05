<?php 

require_once('src/model.php');
require_once('src/model/Banner.php');


function homepage() {
    $productPhotos = getProductPhoto();

    $productType = isset($_GET['productType']) ? $_GET['productType'] : 'chair';
    $productPhotoByType = getProductPhotobyType($productType);

    $photoId = isset($_GET['photoId']) ? $_GET['photoId'] : 1;
    $bannerPhoto = getPhotoById($photoId);
    $photos = getAllPhotos();
    $nextPhotoId = $photoId + 1 > count($photos) ? 1 : $photoId + 1;
    $prevPhotoId = $photoId - 1 < 1 ? count($photos) : $photoId - 1;

 
    require('views/homepage.php');
}
