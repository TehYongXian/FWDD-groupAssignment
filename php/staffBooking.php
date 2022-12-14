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
    <title>Booking</title>
</head>
<body>
    
    <div class="bookingContainer">
        <h1>Staff Booking Page</h1>
        <button class="backHome"onclick="window.location.href='../php/adminHome.php'">Home</button>
        <div class="time">
            <div class="bookingTime">
                <p class="bookingTime">10am</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">11am</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">12am</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">1pm</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">2pm</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">3pm</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        <div class="time">
            <div>
                <p class="bookingTime">4pm</p>
            </div>
            <div class="room">
                <ul class="roomList">
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom1Booking.html'"><li>Classroom 1</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom2Booking.html'"><li>Classroom 2</li></button>
                    <button class="classRoomBtn" onclick="window.location.href='../html/classRoom3Booking.html'"><li>Classroom 3</li></button>
                </ul>
            </div>
        </div>
        
        
    </div>
</body>
</html>