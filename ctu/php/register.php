<?php 
    session_start();
    require_once('connection.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO account (firstname,  lastname, email, username, password) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $firstName, $lastName, $email, $username, $password);

        if($stmt->execute()){
            header('Location: ../login.php');
            exit();
        }else{
            header('Location: ../register.php');
        }
    }

?>