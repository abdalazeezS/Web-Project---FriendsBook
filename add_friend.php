<?php
require "dbconnect.php";
$friend_id = $_GET['friend_id'];
$user_id = $_GET['user_id'];

/**
 * tow queries first one is to add row into friendship table such that user A is Friend of user B
 * the second query is the same, but to indicate that user B is a Friend of User A
 *  */
$add_friend_query = "INSERT INTO friendship (user_id, friend_id) VALUES ($user_id, $friend_id);";
$add_friend_query2 = "INSERT INTO friendship (user_id, friend_id) VALUES ($friend_id, $user_id);";

$add_friend_query2_result = mysqli_query($conn, $add_friend_query2);
$add_friend_query_result = mysqli_query($conn, $add_friend_query);

if (!mysqli_error($conn)) {
    header("location: index.php");
} else {
    echo mysqli_error($conn);
}
