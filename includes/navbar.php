<?php

include 'connection.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){

    header('location:log.php');
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- 
    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
     -->
</head>
<body>

    <! =============== Sidebar start================ !>

    <nav id="navbar">
        <div class="logo">
            <img src="logo2.png" alt="">
            <label for="">C<span class="text">MS</span></label>
        </div>

        <div class="side-bar">                         
            <ul class="nav-links">
                <li class="tablinks">
                    <a href="adm.php">
                        <span class="material-symbols-outlined icon">grid_view</span>
                        <span class="nav-items">Dashboard</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="admprofile.php">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="nav-items">Admin Profile</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="admroom.php">
                        <span class="material-symbols-outlined icon">meeting_room</span>
                        <span class="nav-items">Class Rooms</span>
                    </a>
                </li>

                <li class="">
                    <a href="admstd.php" class="sub-btn">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="nav-items">Student</span>
                        <i class="fa-solid fa-chevron-down arrow"></i>
                    </a>
                    <!-- <ul class="sub-menu">
                        <a href="" class="sidebar-link">Students List</a>
                        <a href="#" class="sidebar-link">Attendance</a>
                    </ul> -->
                </li>



                <li class="">
                    <a href="admfact.php" class="sub-btn">
                        <span class="material-symbols-outlined icon">person</span>
                        <span class="nav-items">Faculty</span>    
                        <i class="fa-solid fa-chevron-down arrow"></i>
                    </a>
                    <!-- <ul class="sub-menu">
                        <a href="" class="sidebar-link">Faculty List</a>
                        <a href="#" class="sidebar-link">Attendance</a>
                    </ul> -->
                </li>

                <li class="tablinks">
                    <a href="admstdatt.php">
                        <span class="material-symbols-outlined icon">analytics</span>
                        <span class="nav-items">Attendance</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="admcourse.php">
                        <span class="material-symbols-outlined icon">school</span>
                        <span class="nav-items">Courses</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="admsub.php">
                        <span class="material-symbols-outlined icon">import_contacts</span>
                        <span class="nav-items">Subjects</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="#">
                        <span class="material-symbols-outlined icon">warning</span>
                        <span class="nav-items">Circulars</span>
                    </a>
                </li>

                <li class="tablinks">
                    <a href="admevents.php">
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
                    <a href="idcards.php">
                        <span class="material-symbols-outlined icon">phone_android</span>
                        <span class="nav-items">Id Cards</span>
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


    <script>

// var subBtn = document.getElementsByClassName(".sub-btn");
// var i;

// for (i = 0; i < subBtn.length; i++) {
//   subBtn[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var subMenu = this.nextElementSibling;
//     if (subMenu.style.display === "block") {
//       subMenu.style.display = "none";
//     } else {
//       subMenu.style.display = "block";
//     }
//   });
// }
  </script>

</body>
</html>