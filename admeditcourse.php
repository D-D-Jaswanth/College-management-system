<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(isset($_POST['update_course_btn'])){
    $update_course = $_POST['update_course'];

    $update = " UPDATE `courses` SET `course` = '$update_course' WHERE id = '$id'";
    $update_query = mysqli_query($conn, $update);

    if($update_query){
        echo "<script>location.replace('itemcourse.php');</script>";
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

        <span class="title">Edit Course</span>

        <div class="course_content">
            <form action="#" method="post">
            <?php

                $select = " SELECT * FROM `courses` WHERE id = '$id'";

                $result = mysqli_query($conn, $select);
                
                if(mysqli_num_rows($result) > 0)
                {
                    $fetch = mysqli_fetch_assoc($result);
                }

                ?>
                <div class="course-details">
                    <label for="course">Name</label>
                    <input type="text" placeholder="Enter course" value="<?php echo $fetch['course']; ?>" name="update_course" required>
                </div>
                <button name="update_course_btn">Update Course</button>

            </form>
        </div>

    </section>
    
</body>
</html>