<?php
require "dbconnect.php";
$post_id = $_GET['post_id'];

$delete_post_query = "DELETE FROM post WHERE post_id=$post_id";
$delete_post_query_result = mysqli_query($conn, $delete_post_query);

if (!mysqli_error($conn)) {
    header("location: pages/profile.php");
} else {
    echo mysqli_error($conn);
}
