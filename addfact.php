<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

if(isset($_POST['add_fact'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    $insert = "INSERT INTO `faculty` (`fname`, `lname`, `mobilenumber`, `email`, `password`)
    VALUES ('$fname', '$lname', '$mobilenumber', '$email', '$password')";
        
    $query_insert = mysqli_query($conn, $insert);

    if($query_insert){

        echo "<script>alert('Faculty registration successfully');</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">
    <title>Collegemanagementsystem</title>
    <link rel="stylesheet" href="styles/style1.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <section class="add-fact">

        <span class="title">Add Faculty</span>

        <div class="add-fact-container">

            <form action="" class="fact-form" method="post" enctype="multipart/form-data">
                <div class="input">
                    <span class="std-names">First Name</span>
                    <input type="text" name="fname" placeholder="Enter first name" required>
                </div>
                <div class="input">
                    <span class="std-names">Last Name</span>
                    <input type="text" name="lname" placeholder="Enter last name" required>
                </div>
                <div class="input">
                    <span class="std-names">Mobile Number</span>
                    <input type="number" name="mobilenumber" placeholder="Enter Mobile number" required>
                </div>
                <div class="input">
                    <span class="std-names">Email</span>
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>
                <div class="input">
                    <span class="std-names">Password</span>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="input">
                    <span class="std-names">Confirm Password</span>
                    <input type="password" name="rpassword" placeholder="Confirm password" required>
                </div>

                <div class="add-fact-btn">
                    <button name="add_fact">Add Faculty</button>
                </div>
            </form>
        </div>

    </section>

</body>
</html>