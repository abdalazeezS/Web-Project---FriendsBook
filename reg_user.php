<?php
require 'dbconnect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['telephone'];
$gender = $_POST['gender'];

$query = "INSERT INTO user (first_name,last_name,username,email,password,tele_no,address,gender)
VALUES ('$firstName','$lastName','$userName','$email','$password','$phone','$address','$gender')";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: login.php");
} else {
    echo "something went wrong";
    echo mysqli_error($conn);
}
