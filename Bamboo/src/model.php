<?php

function getProductPhoto() {
    $database = dbConnect();
    $statement = $database->query(
        "SELECT product_photo FROM products"
    );
    $photos = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $photos[] =  $row['product_photo'];
    }

    return $photos;

}

function getProductPhotobyType($productType) {
    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT product_photo FROM products WHERE product_type= :productType"
    );
    $statement->bindParam(':productType', $productType, PDO::PARAM_STR);
    $statement->execute();

    $photos = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $photos[] =  $row['product_photo'];
    }

    return $photos;

}

function getProductPhotobyTypeCouch() {
    $database = dbConnect();
    $statement = $database->query(
        "SELECT product_photo FROM products WHERE product_type='couch'"
    );
    $photos = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $photos[] =  $row['product_photo'];
    }

    return $photos;

}


function dbConnect() {
    $database = new PDO('mysql:host=localhost;dbname=bamboo;charset=utf8', 'root', '');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions for errors
    return $database;
}
?>