<?php
require "dbconnect.php";
$friend_id = $_GET['friend_id'];
$user_id = $_GET['user_id'];

$add_friend_query = "INSERT INTO friendship (user_id, friend_id) VALUES ($user_id, $friend_id);";
$add_friend_query2 = "INSERT INTO friendship (user_id, friend_id) VALUES ($friend_id, $user_id);";

$add_friend_query2_result = mysqli_query($conn, $add_friend_query2);
$add_friend_query_result = mysqli_query($conn, $add_friend_query);

if (!mysqli_error($conn)) {
    header("location: index.php");
} else {
    echo mysqli_error($conn);
}
