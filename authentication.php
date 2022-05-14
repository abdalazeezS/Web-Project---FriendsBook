<?php
require "dbconnect.php";
if (isset($_POST['userName']) && isset($_POST['password'])) {
    $username = $_POST['userName'];
    $user_password = $_POST['password'];

    $check_user_query = "SELECT * FROM user WHERE username='$username' AND password='$user_password'";


    $result = mysqli_query($conn, $check_user_query);

    if (mysqli_num_rows($result) == 0) {
        header("location: login.php?error=1");
    } else {
        $get_user_query = "SELECT * FROM user WHERE username='$username' AND password='$user_password'";
        $user_result = mysqli_query($conn, $get_user_query);
        $user = mysqli_fetch_assoc($user_result);
        $id = $user['user_id'];
        session_start();
        $_SESSION['id'] = $id;
        header("location:index.php?id='$id'");
    }
}
