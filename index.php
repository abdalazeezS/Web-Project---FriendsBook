<?php
require "dbconnect.php";
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $query = "SELECT * FROM user WHERE user_id=$id";
    $user_info = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($user_info);
} else {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <title>FriendsBook</title>
</head>

<body>

    <!--nav bar-->
    <nav>
        <div class="left-nav">
            <img src="img/logo.png" alt="website icon">
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

            <a href="profile.php"><span id="nav-user-name"><?php echo $user['first_name'] . " " . $user['last_name']; ?><span> <img src="img/user.png" alt="" class="profile-img-nav">
            </a>
            <a href="logout.php">
                <button id="logout" class="btn primary-btn" style="margin-left: 10px;">Logout</button>
            </a>
        </div>
    </nav>


    <!--body-->
    <div class="body-container" style="height: fit-content;">

        <!--left side-->
        <div class="left-side">
            <h4 class="left-side-title">Friends Suggestions</h4>
            <div class="friends">
                <?php
                require "dbconnect.php";

                $all_users_query = "SELECT * FROM user WHERE user_id NOT IN (SELECT friend_id FROM friendship WHERE user_id=$id) AND user_id!=$id";

                $result = mysqli_query($conn, $all_users_query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="friend-card">
                <img class="friend-img" src="img/user.png" alt="profile image">
                <div class="friend-name-btns">
                    <h6>' . $row["first_name"] . " " . $row["last_name"] . '</h6>
                    <div class="buttons">
                        <a href="add_friend.php?friend_id=' . $row['user_id'] . '&user_id=' . $id . '"><button class="btn btn-primary btn-sm">Add Friend</button></a>
                        
                    </div>
                </div>
            </div>';
                }
                ?>

            </div>
        </div>

        <!--main content-->
        <div class="main-content">
            <div class="new-post">
                <form action="add_post.php" method="POST">
                    <input type="text" hidden name="id" value="<?php echo $id; ?>">
                    <h4>new post</h4>
                    <div class="new-post-text-container">
                        <img class="profile-img" src="img/user.png" alt="profile image" height="40">
                        <textarea class="new-post-text" name="text" id="" cols="20" rows="3" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="post-buttons">
                        <button type="button" style="width: 150px" class="add-img-btn btn btn-success btn-sm">
                            <img class="add-img-btn-icon" src="img/add-img-2.png" alt="image icon"> Add image
                        </button>

                        <button type="submit" class="post-btn btn btn-primary btn-sm">post</button>
                </form>
            </div>

        </div>

        <?php
        $fetch_friends_posts_query = "SELECT * FROM friendship JOIN post ON friendship.friend_id=post.user_id JOIN user ON friendship.friend_id=user.user_id WHERE post.user_id!=$id and friendship.user_id=$id ORDER by post.date_posted desc";
        $fetch_friends_posts_query_result = mysqli_query($conn, $fetch_friends_posts_query);

        while ($row = mysqli_fetch_assoc($fetch_friends_posts_query_result)) {
            $input = $row['date_posted'];
            $date = strtotime($input);

            echo '<div class="post-container">

            <div class="post-header">
                <img class="profile-img" src="img/user.png" alt="profile image" height="40">
                <div class="post-author-date">
                    <p style="margin: 0; font-size: small;font-weight: 600">' . $row['first_name'] . " " . $row['last_name'] . '</p>
                    <span style="font-size: xx-small;color: #5a6268">' . date('d M', $date) . '</span>
                </div>

            </div>
            
            <div class="post-content">
                <p>' . $row['text'] . '</p>
            </div>

            
            <div class="post-actions">
                <button class="btn btn-primary">Like</button>
                <span>' . $row['number_of_likes'] . '</span>
            </div>
        </div>';
        }
        ?>

    </div>

    <!--right side-->
    <div class="right-side">
        <div class="chats">
            <h4>Chats</h4>
        </div>
    </div>

</body>

</html>