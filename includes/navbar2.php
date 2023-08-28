<?php

include 'connection.php';

session_start();

$faculty_id = $_SESSION['faculty_id'];

if(!isset($faculty_id)){

    header('location:log.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style2.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <! =============== Sidebar start================ !>

    <nav>
        <div class="logo">
            <img src="logo2.png" alt="">
            <label for="">C<span class="text">MS</span></label>
        </div>

        <div class="side-bar">                         
            <ul>
                <li class="tablinks">
                    <a href="std.php">
                        <span class="material-symbols-outlined icon">grid_view</span>
                        <span class="nav-items">Dashboard</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="factprofile.php">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="nav-items">Profile</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="factattd.php">
                        <span class="material-symbols-outlined icon">analytics</span>
                        <span class="nav-items">Student Attendance</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="#">
                        <span class="material-symbols-outlined icon">warning</span>
                        <span class="nav-items">Circulars</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="#">
                        <span class="material-symbols-outlined icon">event</span>
                        <span class="nav-items">Events</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="#">
                        <span class="material-symbols-outlined icon">menu_book</span>
                        <span class="nav-items">Assignments</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="#">
                        <span class="material-symbols-outlined icon">quiz</span>
                        <span class="nav-items">Examination</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="logout.php">
                        <span class="material-symbols-outlined icon">logout</span>
                        <span class="nav-items">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <! ====================== Sidebar End ======================= !>

    <script src="script.js"></script>
</body>
</html>