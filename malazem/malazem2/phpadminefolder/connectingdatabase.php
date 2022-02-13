<?php
$HOST="localhost";
$USERNAME="root";
$PASSWARD="";

//$conn = mysqli_connect($HOST , $USERNAME , $PASSWARD) or die(mysqli_error());
//$db_select = DATABASE_SELECT($conn , 'malazem') or die(mysqli_error());
//or 
// $conn = mysqli_connect($HOST , $USERNAME , $PASSWARD , 'malazem') or die(mysqli_error());
//     if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }
//     echo "Connected successfully with data base <br>";
$dbLink = new mysqli($HOST , $USERNAME , $PASSWARD , 'malazem');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }