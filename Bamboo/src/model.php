<?php

function getProduct() {
    $database = dbConnect();
}


function dbConnect() {
    $database = new PDO('mysql:host=localhost;dbanme=bamboo;charset=utf8', 'root', '');

    return $database;
}
?>