<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="../img/icon.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="../css/reg.css">
    <title>Register</title>
</head>

<body>
<div class="container">
    <form class="row g-3" action="../reg_user.php" method="post" id="f" enctype="multipart/form-data">

        <div style="text-align: center">
            <img style="text-align: center" src="img/logo-blue.png" alt=""/>
        </div>

        <div class="col-md-6">
            <label for="inputname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="inputname" name="firstName"/>
        </div>

        <div class="col-md-6">
            <label for="inputname2" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="inputname2" name="lastName"/>
        </div>

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input required type="text" class="form-control" placeholder="Username" aria-label="Username"
                   aria-describedby="addon-wrapping" name="userName"/>
        </div>

        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input required type="email" class="form-control" id="inputEmail4" name="email"/>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input required type="password" class="form-control" id="inputPassword4" name="password"/>
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input required type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                   name="address"/>
        </div>

        <div class="col-md-6">
            <label for="inputtelephone" class="form-label">Telephone Number</label>
            <input required type="telephone" class="form-control" id="inputtelephone" name="telephone"/>
        </div>

        <div class="col-md-6">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" class="form-select" name="gender">
                <option value="0">Male</option>
                <option value="1">Female</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" style="width:100%">Sign in</button>
        </div>
        <hr>
        <h6 style="text-align: center;" class="already-have-account">Already have an account? <a href="../pages/login.php"><span>Login</span></a>
        </h6>

    </form>
</div>
</body>

</html>