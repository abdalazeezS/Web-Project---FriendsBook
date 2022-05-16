<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="icon" href="../img/icon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="../css/login.css" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="../authentication.php" method="post">
            <div class="img-container">
                <img src="../img/logo-blue.png" alt="FriendsBook logo" />
            </div>
            <div class="mb-3">
                <input placeholder="username" type="text" class="form-control" name="userName" />
            </div>
            <div class="mb-3">
                <input placeholder="password" type="password" class="form-control" name="password" />
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%">
                Login
            </button>
            <hr />
            <div style="text-align: center">
                <h6 class="create-account">You don't have an account?</h6>
                <?php

                // in case that the login credintials are wrong, an error message will appear 
                if (isset($_GET['error']))
                    echo '<h6 style="color: red">Invalid username or password</h6>';
                ?>
                <button style="border: none; background-color: #00b501" type="button" class="btn btn-primary" onClick="document.location.href='../pages/reg_form.php'">
                    Create New Account
                </button>

            </div>
        </form>
    </div>
</body>

</html>