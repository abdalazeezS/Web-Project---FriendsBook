<?php
$servername = "localhost";
$username = "abd";
$password = "123";
$database = "friendsbook";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
