<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jollibee_db";
// Source - https://stackoverflow.com/a
// Posted by karim79
// Retrieved 2025-11-26, License - CC BY-SA 2.5

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>