<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "acw_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db) or die(mysql_error());

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>