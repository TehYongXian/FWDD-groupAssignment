<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="icon" href="../media/happyDog.png">
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `staffusers` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='staffLogin.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="container">
    <form class="form" id="createAccount" method="post">
            <h1 class="form__title">Staff Registration</h1>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" name="username" autofocus placeholder="Username">
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input"  name="password" autofocus placeholder="Password">
            </div>
            <input class="form__button" type="submit" name="submit" value="Register" >

            <p class="form__text">
                <a class="form__link" href="../php/adminHome.php" id="linkLogin">Back to Home Page</a>
            </p>
        </form>
        </div>
        
<?php
    }
?>
</body>
</html>