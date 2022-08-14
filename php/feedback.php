<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="icon" href="../media/happyDog.png">
    <title>Feedback</title>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['studentname'])) {
        // removes backslashes
        $studentname = stripslashes($_REQUEST['studentname']);
        //escapes special characters in a string
        $studentname = mysqli_real_escape_string($con, $studentname);
        $TP    = stripslashes($_REQUEST['TP']);
        $TP    = mysqli_real_escape_string($con, $TP);
        $comments = stripslashes($_REQUEST['comments']);
        $comments = mysqli_real_escape_string($con, $comments);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `feedback` (studentname, TP, comments, create_datetime)
                     VALUES ('$studentname', ' $comments ' , '$TP', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are feedback is successfully.</h3><br/>
                  <p class='link'>Click here to <a href='home.php'>Back to Home</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='feedback.php'>Give feedback</a> again.</p>
                  </div>";
        }
    } else {
?>
    <!-- Student interface -->
    <div class="Container">
        <h1>Feedback Page</h1>
        <div class="userInfo">
        <p><a href="logout.php">Logout</a></p>
            
        </div>
        <br>
        <div class="navigation">
            <button class="backHome" onclick="window.location.href='../php/home.php'">Home</button>
        </div>
    </div>
	<br>
	<div class="Container">
        <form class="form" method="post">
            <label for="name" >Name:</label><br>
            <input type="text" id="studentname" name="studentname" required><br>
            <label for="ID">TP number: </label><br>
            <input type="text" id="TP" name="TP" placeholder="TPxxxxxx" pattern=".{8}"required><br><br>
            <textarea name="comments" id="comments" style="width:100%;height:90px;padding:1%;font-family:sans-serif;font-size:0.2;" Required>
            </textarea>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form> 
    </div>
  
<?php
    }
?>
</body>
</html>