<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ctu_db";


    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection to the database has failed");
    }

?>