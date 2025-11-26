<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['firstName'])) {
        // Registration form submitted
        require_once 'register.php';
    } elseif (isset($_POST['username']) && isset($_POST['password'])) {
        // Login form submitted
        require_once 'login.php';
    }
    exit();
}

// Handle GET requests
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        header('Location: pages/login.php');
        break;
    
    case '/logout':
        require_once 'logout.php';
        break;

    default:
        http_response_code(404);
        echo "404 - Page Not Found";
        break;
}
?>