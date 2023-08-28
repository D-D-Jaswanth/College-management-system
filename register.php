<?php

include 'connection.php';

if(isset($_POST['register'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
    $usertype = $_POST['usertype'];

    if($usertype == 'Admin'){

        $select = " SELECT * FROM `admin` WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){

            echo "<script>alert('Admin already exists');</script>";
        }

        elseif(strlen($password) > 8){

            echo "<script>alert('Password must be atleast 8 characters');</script>";
        }

        else
        {
    
            $insert = "INSERT INTO `admin` (`fname`,`lname`, `mobilenumber`, `email`, `password`, `usertype`)
            VALUES ('$fname','$lname', '$mobilenumber', '$email', '$password', '$usertype')";
        
            $query_insert = mysqli_query($conn, $insert);

            if($query_insert){
                
                echo "<script>alert('Admin registration succesfull');</script>";

                header('location:login.php');
            }

        }
    }

    elseif($usertype == 'Student'){

        $select = " SELECT * FROM `student` WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){

            echo "<script>alert('Student already exists');</script>";
        }

        elseif(strlen($password) > 8){

            echo "<script>alert('Password must be atleast 8 characters');</script>";
        }

        else
        {
    
            $insert = "INSERT INTO `student` (`fname`, `lname`, `mobilenumber`, `email`, `password`, `usertype`)
            VALUES ('$fname', '$lname', '$mobilenumber', '$email', '$password', '$usertype')";
        
            $query_insert = mysqli_query($conn, $insert);

            if($query_insert){

                echo "<script>alert('Student registration succesfull');</script>";

                header('location:login.php');
            }

        }
    }

    elseif($usertype == 'Faculty'){

        $select = " SELECT * FROM `faculty` WHERE email = '$email' && password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            echo "<script>alert('Faculty already exists');</script>";
        }

        elseif(strlen($password) >= 8){
            echo "<script>alert('Password must be atleast 8 characters');</script>";
        }

        else
        {
    
            $insert = "INSERT INTO `faculty` (`fname`, `lname`, `mobilenumber`, `email`, `password`, `usertype`)
            VALUES ('$fname', '$lname', '$mobilenumber', '$email', '$password', '$usertype')";
        
            $query_insert = mysqli_query($conn, $insert);

            if($query_insert){

                echo "<script>alert('Faculty registration succesfull');</script>";

                header('location:login.php');
            }

        }
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
<body class="register_body">
    <div class="register-container">

        <h1>Register</h1>
        <form class="register_form" action="#" method="post" enctype="multipart/form-data">

            <div class="name">
                <input type="text" name="fname" placeholder="Enter First name" required>
                <input type="text" name="lname" placeholder="Enter Last name" required>
            </div>
            <input type="text" name="mobilenumber" placeholder="Enter Mobilenumber" required>
            <input type="text" name="email" placeholder="Enter Email" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="password" name="rpassword" placeholder="Repeat Password" required>

            <select name="usertype" id="usertype" required>
                <option value="" disabled="" selected="">Select Filters</option>
                <option value="Admin">Admin</option>
                <option value="Superadmin">Superadmin</option>
                <option value="Faculty">Faculty</option>
                <option value="Student">Student</option>
            </select>

            <div class="register-btn">
                <button name="register">Register</button>
            </div>

            <div class="bottom-register">
                <label for="not">Have a member ?</label>
                <a href="login.php">Login</a>
            </div>

        </form>

    </div>

</body>
</html>