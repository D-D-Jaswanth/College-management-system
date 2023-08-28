<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

if(isset($_POST['course_btn'])){
    $course = $_POST['course'];

    $insert = " INSERT INTO `courses` (`course`) VALUES ('$course')";
    $query = mysqli_query($conn, $insert);

    if($query){
        echo "<script>location.replace('admcourse.php');</script>";
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
    <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>-->

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <section class="item_course" id="course">

        <span class="title">Add Course</span>

        <div class="course_content">
            <form action="#" method="post">
                
                <div class="course-details">
                    <label for="course">Name</label>
                    <input type="text" placeholder="Enter course" name="course" required>
                </div>
                <button name="course_btn">Add Course</button>

            </form>
        </div>

    </section>
    
</body>
</html>