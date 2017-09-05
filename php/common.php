<?php
$servername = "localhost";
$username = "root";
$password = "sharma@123";
$dbname = "Movies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>