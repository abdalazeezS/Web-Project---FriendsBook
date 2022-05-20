<?php
require "dbconnect.php";

session_start();
if (isset($_POST['userName']) && isset($_POST['password'])) {
    $username = $_POST['userName'];
    $user_password = $_POST['password'];

    // check if the uesr is exist (correct)
    $check_user_query = "SELECT * FROM user WHERE username='$username' AND password='$user_password'";

    $result = mysqli_query($conn, $check_user_query);

    // if the login credentials are wrong, redirect to login page with error indication=1
    if (mysqli_num_rows($result) == 0) {
        header("location: pages/login.php?error=1");
    } else {
        $get_user_query = "SELECT * FROM user WHERE username='$username' AND password='$user_password'";
        $user_result = mysqli_query($conn, $get_user_query);
        $user = mysqli_fetch_assoc($user_result);

        $id = $user['user_id'];

        $_SESSION['user_id'] = $id;
        header("location: pages/index.php");
    }
}