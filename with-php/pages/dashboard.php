<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/jollibeelogo.jpg" type="image/x-icon">
    <title>Dashboard - Jollibee</title>
</head>
<body>
    <div class="paper dashboard-paper">
        <div class="header-container">
            <img src="../src/jollibeelogo.jpg" alt="Jollibee Logo" class="logo">
            <h1 class="text-bold">Welcome to Jollibee Dashboard</h1>
        </div>
        <div class="dashboard-content">
            <h2>Hello, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</h2>
            <p>You are successfully logged in.</p>
            <div class="user-info">
                <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                <p><strong>User ID:</strong> <?php echo htmlspecialchars($_SESSION['user_id']); ?></p>
            </div>
            <a href="../php/logout.php" class="btn-login btn-logout">Logout</a>
        </div>
    </div>
</body>
</html>
