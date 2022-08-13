<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="icon" href="../media/happyDog.png">
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user main page
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="container">
        <form class="form" id="login" action="login.php" method="post">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group"> 
                <!-- required -->
                <input type="text" class="form__input" name="username" id="username" autofocus placeholder="Username or email" >
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <!-- required -->
                <input type="password" class="form__input" name="password" id="password" autofocus placeholder="Password"  >
                <div class="form__input-error-message"></div>
            </div>

            <input type="submit" value="Login" name="submit" class="form__button"/>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="../php/registration.php" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
    </div>
<?php
    }
?>
</body>
</html>