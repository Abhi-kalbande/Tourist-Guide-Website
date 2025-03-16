<?php
$host = "localhost";  // Change if using a different server
$username = "root";   // Default XAMPP MySQL user
$password = "";       // Default is empty in XAMPP
$database = "projectwebsite";  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
