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

    <form action="./php/login.php" method="POST">
        <label for="username">Username</label><br> 
        <input type="text" name="username" id="username" placeholder="Enter your Username" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
        <button type="submit">Login</button>

    </form>
    
    <p>Dont have an Account? <a href="./register.php">Click here to register</a></p>

</body>
</html>