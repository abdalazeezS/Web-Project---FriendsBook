<?php
require "dbconnect.php";
$user_id = $_POST['id'];
$post_text = $_POST['text'];

$add_post_query = "INSERT INTO post (user_id, text) VALUES ($user_id,' $post_text')";

$add_post_query_result = mysqli_query($conn, $add_post_query);

if (mysqli_error($conn)) {
    echo "Error occurred";
} else {
    header("location: index.php");
}
