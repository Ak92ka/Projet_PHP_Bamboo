<?php 

$photos = [
    '1' => 'https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/Banner_1_50.webp',
    '2' => 'https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/Banner_2_50.webp',
    '3' => 'https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/Banner_3_50.webp',        
];

function getPhotoById($photoId) {
    global $photos;
    return isset($photos[$photoId]) ? $photos[$photoId] : 'images/default.jpg';
}

function getAllPhotos() {
    global $photos;
    return $photos;
}
