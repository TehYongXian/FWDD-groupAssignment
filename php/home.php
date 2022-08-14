<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../dist/css/main.css">
    <link rel="icon" href="../media/happyDog.png">
    <title>HomePage</title>
</head>
<body>
    <!-- Student interface -->
    
    <div class="homeContainer">
        <h1>Student Home Page</h1>
        <div class="userInfo">
        <p><a href="logout.php">Logout</a></p>
        </div>
        <div class="navigation">
            <button class="button"onclick="window.location.href='../php/booking.php'">Booking</button>
            <button class="button">Booking History</button>
            <!-- <button class="button">View Classroom</button> -->
            <button class="button" onclick="window.location.href='../php/feedback.php'">Feedback</button>
        </div>
    </div>
</body>
</html>