<?php
    session_start();
    require_once('connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $stmt);
        
        if (mysqli_num_rows($result) > 0) {
            $account = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $account['id'];
            $_SESSION['firstname'] = $account['firstname'];
            $_SESSION['email'] = $account['email'];

            header("Location: ../home.php");
            exit();

        }else{
            header("Location: ../login.php");
        }
    
    
    }
?>