<?php
require "dbconnect.php";

$post_id = $row['post_id'];
$user_id = $row['user_id'];
$fetch_comments_posts_query = "SELECT * FROM post JOIN comment ON post.post_id=comment.post_id JOIN user ON comment.user_id=user.user_id where post.post_id=$post_id; ";
$fetch_comments_posts_query_result = mysqli_query($conn, $fetch_comments_posts_query);
while ($row = mysqli_fetch_assoc($fetch_comments_posts_query_result)) {
    $comment_date = $row['comment_date_posted'];
    $comment_date_formated = strtotime($comment_date);
    echo '
                <div class="conatiner right-side mt-2">
                    <div class="row ">
                        <div class="col-1 ">
                        </div>

                    <img class="profile-img" src="../img/user.png" alt="profile image" height="40">

                    <div class="post-author-date">
                    <p style="margin: 0; font-size: small;font-weight: 600">' . $row['first_name'] . " " . $row['last_name'] . '</p>
                    <span style="font-size: xx-small;color: #5a6268">' . date('d M', $comment_date_formated) . '</span>

                    </div>
                    <div class="col">
                        <p>' . $row['text'] . '</p>
                    </div>
                </div>

               
            </div>';
}
