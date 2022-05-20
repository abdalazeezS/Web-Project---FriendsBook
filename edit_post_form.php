<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">

</head>
<?php
session_start();
$post_id = $_GET['post_id'];
$_SESSION['post_id'] = $post_id;

?>

<body>
    <div class="container">
        <form action="edit_post.php" method="POST">
            <label for="exampleFormControlTextarea1" class="form-label">Enter Text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="text"></textarea>
            <button type="submit" class="post-btn btn btn-primary btn-sm">edit</button>


        </form>
    </div>
    <?php
    ?>
</body>

</html>