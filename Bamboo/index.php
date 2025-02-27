<?php
session_start(); // session starts at the very beginning

// Include necessary files for controllers
require_once('src/controllers/homepage.php');
require_once('src/controllers/product.php');
require_once('src/controllers/auth.php');

// session regeneration after login
if (isset($_SESSION['user_id'])) {
    session_regenerate_id(true); // Regenerate session ID for security purposes
}

$page = isset($_GET['action']) ? $_GET['action'] : '';

switch ($page) {
    case 'login':
        login();
        break;
    case 'register':
        register();
        break;
    case 'handleLogin':
        handleLogin();
        break;
    case 'handleRegister':
        handleRegister();
        break;
    case 'logout':
        logout();
        break;
    default:
        if (isset($_GET['productId'])) {
            productPage();
        } else {
            homepage();
        }
}
?>
