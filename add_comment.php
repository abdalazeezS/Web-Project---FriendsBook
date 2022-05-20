<?php
require "dbconnect.php";
session_start();
$id = $_SESSION['user_id'];
$post_id = $_GET['post_id'];
$text = $_GET['text'];
$add_comment_query = "INSERT INTO `comment` (user_id,post_id,text) VALUES ('$id','$post_id',' $text')";

$add_post_query_result = mysqli_query($conn, $add_comment_query);

if (mysqli_error($conn)) {
    echo $conn->connect_error;
} else {
    header("location: pages/index.php");
}
