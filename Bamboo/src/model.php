<?php

function getProductPhoto() {
    $database = dbConnect();
    $statement = $database->query(
        "SELECT product_id AS id, product_photo AS photo FROM products"
    );
    $photos = [];
    while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $photos[] = [
        'id' => $row['id'],
        'photo' => $row['photo']
        ];
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

function getProductById($productId) {
    $database = dbConnect();
    $statement = $database->prepare("SELECT * FROM products WHERE product_id = :productId");
    $statement->bindParam(':productId', $productId, PDO::PARAM_INT);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result;
}



function dbConnect() {
    try {
        $database = new PDO('mysql:host=localhost;dbname=bamboo;charset=utf8', 'root', '');
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions for errors
        return $database;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
}

?>