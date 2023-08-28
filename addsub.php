<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

if(isset($_POST['sub_btn'])){
    $subject = $_POST['subject'];
    $sub_staff = $_POST['sub_staff'];
    $sub_course = $_POST['sub_course'];

    $insert = " INSERT INTO `subjects` (`subject`, `staff`, `course`) VALUES ('$subject', '$sub_staff', '$sub_course')";
    $query = mysqli_query($conn, $insert);

    if($query){
        echo "<script>location.replace('admsub.php');</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">

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

    <section class="item_subject" id="subject">

        <span class="title">Add Subject</span>

        <div class="subject_content">
            <form action="#" method="post">
                
                <div class="subject-details">
                    <label for="">Name</label>
                    <input type="text" placeholder="Enter subject" name="subject" required>
                </div>

                <div class="subject-details">
                    <label for="">Staff</label>
                    <?php

                    $query = " SELECT * FROM `faculty` ";
                    $result = mysqli_query($conn, $query);
                    
                    ?>
                    <select name="sub_staff" id="">
                    <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        
                        <option><?php echo $row['fname'].' '.$row['lname']; ?></option>
                        
                        <?php
                    }
                    ?>
                    </select>
                </div>

                <div class="subject-details">
                    <label for="">Course</label>
                    <?php

                    $query = " SELECT * FROM `courses` ";
                    $result = mysqli_query($conn, $query);
                    
                    ?>
                    <select name="sub_course" id="">
                    <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <option><?php echo $row['course']; ?></option>
                        
                        <?php
                    }
                    ?>
                    </select>
                </div>

                <button name="sub_btn">Add Subject</button>

            </form>
        </div>

    </section>
    
</body>
</html>