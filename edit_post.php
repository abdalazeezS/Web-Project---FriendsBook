<?php
session_start();
require "dbconnect.php";
$post_id = $_SESSION['post_id'];
$post_text = $_POST['text'];
$update_query = "UPDATE `post` SET text = '$post_text' WHERE post_id = $post_id";
$result = mysqli_query($conn, $update_query);

header("location: pages/profile.php");
