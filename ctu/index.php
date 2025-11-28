<?php

    session_start();
    


    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
        exit();
    }else{
        header('Location: home.php');
        exit();
    }

?>