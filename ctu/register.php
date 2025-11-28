<?php 
    session_start();
    if (isset($_SESSION['id'])) {
        header('Location: home.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cebu Technological University</title>
</head>
<body>
    <h1>Welcome to Cebu Technological University</h1>
    <h3>Login to CTU Student Portal</h3>

    <form action="./php/register.php" method="POST">
        <label for="firstname">First Name</label><br>
        <input type="text" name="firstname" id="firstname" placeholder="Enter your Firstname" required><br>
        <label for="lastname">Last Name</label><br>
        <input type="text" name="lastname" id="lastname" placeholder="Enter your Lastname" required><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="username">Username</label><br> 
        <input type="text" name="username" id="username" placeholder="Enter your Username" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>


        <button type="submit">Register</button>
    </form>
    
</body>
</html>