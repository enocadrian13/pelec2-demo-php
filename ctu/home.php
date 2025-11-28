<?php 
    session_start(); 
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
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
    <h1>Hi <?php echo htmlspecialchars($_SESSION['firstname']);?></h1>
    <h2>Your Email is: <?php echo htmlspecialchars($_SESSION['email']);?></h2>

    <a href="./php/logout.php">logout</a>
    
</body>
</html>