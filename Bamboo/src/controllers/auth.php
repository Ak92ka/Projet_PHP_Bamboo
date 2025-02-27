<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function login() {
    require('views/auth/login.php');
}

function register() {
    require('views/auth/register.php');
}

function handleLogin() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once('src/model.php');

        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $user = getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            session_regenerate_id(true); // Regenerate session ID after login for security

            header("Location: index.php"); // Redirect to homepage or desired page
            exit();
        } else {
            header("Location: index.php?action=login&error=invalid");
            exit();
        }
    }
}



function handleRegister() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once('src/model.php');

        $email = trim($_POST['email']);
        $password = $_POST['password'];

        if (createUser($email, $password)) {
            header("Location: index.php?action=login");
            exit();
        } else {
            $error = "Registration failed. Please try again.";
            require('views/auth/register.php');
        }
    }
}

function logout() {
    session_destroy();
    header("Location: index.php");
    exit();
}

?>
