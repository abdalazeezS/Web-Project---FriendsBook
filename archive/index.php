<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="css/style.css" type="image/x-icon" />
  <title>FriendsBook</title>
</head>

<body>
  <!--nav bar-->
  <nav>
    <div class="left-nav">
      <img src="img/logo.png" alt="website icon" />
    </div>
    <div class="right-nav">
      <img src="img/notification.png" alt="" />
      <img src="img/chat.png" alt="" />
      <img src="img/profile.jpg" alt="" id="profile-img" />
    </div>
  </nav>

  <!--body-->
  <div class="body-container" style="height: fit-content">
    <!--left side-->
    <div class="left-side">
      <h4 class="left-side-title">Friends Suggestions</h4>
      <div class="friends">
        <div class="friend-card">
          <img class="friend-img" src="img/profile.jpg" alt="profile image" />
          <div class="friend-name-btns">
            <h6>Abdalazeez Shahateet</h6>
            <div class="buttons">
              <button class="btn btn-primary btn-sm">Add Friend</button>
              <button class="btn btn-secondary btn-sm">Remove</button>
            </div>
          </div>
        </div>

        <div class="friend-card" style="display: flex; padding: 5px; margin-top: 20px">
          <img class="friend-img" src="img/khaleel.jpg" alt="profile image" />
          <div class="friend-name-btns">
            <h6>Khaleel Siaj</h6>
            <div class="buttons">
              <button class="btn btn-primary btn-sm">Add Friend</button>
              <button class="btn btn-secondary btn-sm">Remove</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--main content-->
    <div class="main-content">
      <div class="new-post">
        <h4>new post</h4>
        <form action="show.php" method="get">
          <div class="new-post-text-container">
            <img src="img/profile.jpg" alt="profile image" height="40" />
            <textarea class="new-post-text" name="" id="" cols="20" rows="3" placeholder="What's on your mind?" name="content" ;></textarea>
          </div>
          <div class="buttons" style="
              display: flex;
              justify-content: space-between;
              margin-top: 20px;
            ">
            <button style="width: 150px" class="add-img-btn btn btn-success btn-sm">
              <img class="add-img-btn-icon" src="img/add-img-2.png" alt="image icon" />
              Add image
            </button>
            <button type="submit">Post</button>
            <button type="sumbit" class="post-btn btn btn-primary btn-sm">post</button>
          </div>
      </div>
      </form>
      <div class="news-feed">
        <div class="post"></div>
      </div>
    </div>

    <!--right side-->
    <div class="right-side">
      <div class="chats">
        <h4>Chats</h4>
      </div>
    </div>
  </div>
</body>

</html>