<?php
require "dbconnect.php";
$post_id = $_GET['post_id'];
$user_id = $_GET['user_id'];

$query = "SELECT * FROM likes WHERE user_id=$user_id AND post_id=$post_id AND liked=1";

$add_like_query = "INSERT INTO likes (user_id,post_id,liked) VALUES ($user_id,' $post_id',1)";
$add_like_query_result = mysqli_query($conn, $add_like_query);
$update_query = "UPDATE `post` SET likes = likes+1 WHERE post_id = $post_id";
$result = mysqli_query($conn, $update_query);

header("location: pages/index.php");
