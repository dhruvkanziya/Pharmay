<?php
$servername = "localhost";
$username = "root";
$password = ""; // <-- use a string here, not an object
$database = "pharmacy";
$port = 3307;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
