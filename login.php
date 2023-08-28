<?php

include 'connection.php';

session_start();

if(isset($_POST['login']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = " SELECT * FROM `admin` WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['usertype'] == 'Admin'){

            $_SESSION['admin_id'] = $row['id'];

            header('location:adm.php');
        }
    }
    else{

        echo "<script>alert('Incorrect Email or Password');</script>";
    }


};


if(isset($_POST['login']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = " SELECT * FROM `student` WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

            $_SESSION['student_id'] = $row['id'];

            header('location:std.php');
        }
    else{

        echo "<script>alert('Incorrect Email or Password');</script>";
    }


};

if(isset($_POST['login']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = " SELECT * FROM `faculty` WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

            $_SESSION['faculty_id'] = $row['id'];

            header('location:fact.php');
        }
    else{

        echo "<script>alert('Incorrect Email or Password');</script>";
    }


};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Raleway:ital,wght@0,500;1,400&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body class="login_body">

    <div class="login-container">
        <h1>Login</h1>
        <form action="#" method="post">
            
            <input type="text" name="email" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter password" required>
            
            <div class="right-login">
                <a href="forgot.html">forgot password ?</a>
            </div>

            <div class="login-btn">
                <button name="login">Login</button>
            </div>

            <!--<div class="bottom-login">
                <label for="not">Not a member ?</label>
                <a href="register.php">create account</a>
            </div>-->

        </form>
    </div>

</body>
</html>