<?php
include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles\style1.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <section class="middle-content" id="middlecontent">
    
        <div class="tabs">
            
            <div class="tabs-1">
                <div class="details">
                    <span class="material-symbols-outlined tab-icon">person</span>
                    <span>Admin</span>
                </div>
                <div class="count">
                    <?php
                        $count_query = "SELECT * FROM `admin` ORDER BY id";
                        $result = mysqli_query($conn, $count_query);

                        $row = mysqli_num_rows($result);

                        echo '<span class="numbercount"> '.$row.'</span>';
                    ?>
                </div>
            </div>

            <div class="tabs-2">
                <div class="details">
                    <span class="material-symbols-outlined tab-icon">person</span>
                    <span>Students</span>
                </div>
                <div class="count">
                    <?php
                        $count_query = "SELECT * FROM `student` ORDER BY id";
                        $result = mysqli_query($conn, $count_query);

                        $row = mysqli_num_rows($result);

                        echo '<span class="numbercount"> '.$row.'</span>';
                    ?>
                </div>
            </div>

            <div class="tabs-3">
                <div class="details">
                    <span class="material-symbols-outlined tab-icon">person</span>
                    <span>Faculties</span>
                </div>
                <div class="count">
                    <?php
                        $count_query = "SELECT * FROM `faculty` ORDER BY id";
                        $result = mysqli_query($conn, $count_query);

                        $row = mysqli_num_rows($result);

                        echo '<span class="numbercount"> '.$row.'</span>';
                    ?>
                </div>
            </div>

            <div class="tabs-4">
                <div class="details">
                    <span class="material-symbols-outlined tab-icon">person</span>
                    <span>Non-teaching</span>
                </div>
                <div class="count">
                    <span>0</span>
                </div>
            </div>
                
        </div>    
        <div class="rec">
        
            <div class="rec-view">
            <span>Recently viewed</span>
                <div class="rec-details"></div>
            </div>

            <div class="rec-sear">
                <span>Recently searched</span>
                <div class="rec-details"></div>
            </div>

        </div>
    
    </section>
</body>
</html>