<?php

require "../dbconnect.php";
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
} else {
    header("location: ../pages/login.php");
}

$user_info_query = "SELECT * FROM user WHERE user_id=$id";
$user_info_query_result = mysqli_query($conn, $user_info_query);
$user = mysqli_fetch_assoc($user_info_query_result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="icon" href="../img/icon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/profile.css" />
</head>
<style>
    nav {
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #0d6efd;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .right-nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 10%;
    }

    nav img {
        width: 200px;
    }

    .right-nav .notification,
    .chat {
        width: 20px;
        height: 20px;
    }

    .profile-img-nav {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
    }
</style>

<body>
    <nav>
        <div class="left-nav">
            <a href="../pages/index.php"><img src="../img/logo.png" alt="website icon"></a>
        </div>
        <style>
            .right-nav {
                display: flex;
                justify-content: space-around;
                align-items: center;
                width: 20%;
            }

            #nav-user-name {
                text-decoration: none;
                color: black;
            }

            a:hover {
                text-decoration: none;
            }

            #logout:hover {
                color: black;
                background-color: tomato;
            }
        </style>
        <div class="right-nav">

            <a href="../pages/profile.php"><span id="nav-user-name"><?php echo $user['first_name'] . " " . $user['last_name']; ?><span> <img src="../img/user.png" alt="" class="profile-img-nav">
            </a>
            <a href="../logout.php">
                <button id="logout" class="btn primary-btn" style="margin-left: 10px;">Logout</button>
            </a>
        </div>
    </nav>

    <div class="nav container-fluid justify-content-center align-items-center">
        <img class="profile-img" src="../img/user.png" alt="profile photo" />
        <h2><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="left-side">
                    <h4 class="left-side-title">Friends</h4>
                    <div class="friends">
                        <?php
                        $friends_id_query = "SELECT friend_id FROM friendship WHERE user_id=$id";
                        $result = mysqli_query($conn, $friends_id_query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $friend_id = $row['friend_id'];
                            $friend_info_query = "SELECT * FROM user WHERE user_id=$friend_id";
                            $friend_result = mysqli_query($conn, $friend_info_query);

                            while ($friend_row = mysqli_fetch_assoc($friend_result)) {
                                echo '<div class="friend-card">
                                <img class="friend-img" src="../img/user.png" alt="profile image" />
                                <h6>' . $friend_row["first_name"] . " " . $friend_row["last_name"] . '</h6>
                            </div>';
                            }
                        }

                        ?>

                    </div>
                </div>
            </div>


            <div class="col">
                <div class="main-content">
                    <div class="new-post">
                        <h4>Recent Posts</h4>
                        <?php
                        $query = "SELECT * FROM post WHERE user_id=$id";
                        $user_post_query_result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($user_post_query_result)) {

                            $input = $row['date_posted'];
                            $date = strtotime($input);

                            echo '<div class="container right-side">
                                <p>' . $row['text'] . '</p>
                                <p>' . date('d M', $date) . '</p>
                                <button class="btn btn-primary btn-sm">Edit post</button>
                                <a href="../delete_post.php?post_id=' . $row['post_id'] . '"><button class="btn btn-secondary btn-sm">Remove</button></a>
                            </div>
                            <br />';
                        }
                        ?>
                        <br />
                    </div>
                </div>
            </div>
        </div>
</body>

</html>