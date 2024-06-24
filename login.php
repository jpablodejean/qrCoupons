<?php
$servername = "your mySql server";
$username = "your username";
$password = "your password";
$dbname = "bdbqrgenerator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
