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

    <section class="item_events" id="events">

        <span class="title">Edit Course</span>

        <div class="event-content">
            <form action="#" method="post">
            <?php

                $select = " SELECT * FROM `events` WHERE id = '$id'";

                $result = mysqli_query($conn, $select);
                
                if(mysqli_num_rows($result) > 0)
                {
                    $fetch = mysqli_fetch_assoc($result);
                }

                ?>
                <div class="event_details">
                    <span class="event-name">Event Name</span>
                    <input type="text" placeholder="Enter event" value="<?php echo $fetch['event_name']; ?>" name="update_event" required>
                </div>

                <div class="event_details">
                    <span class="event-name">Category</span>
                    <?php

                        $query = " SELECT * FROM `events` ";
                        $result = mysqli_query($conn, $query);
                    
                    ?>
                    <select name="category" id="">
                    <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <option><?php echo $row['category']; ?></option>
                        
                        <?php
                    }
                    ?>
                    </select>
                </div>

                <div class="event_details">
                    <span class="event-name">Description</span>
                    <input type="text" placeholder="Enter event" value="<?php echo $fetch['description']; ?>" name="update_event" required>
                </div>

                <div class="event_details">
                    <span class="event-name">Start Date</span>
                    <input type="text" placeholder="Enter event" value="<?php echo $fetch['start_date']; ?>" name="update_event" required>
                </div>

                <div class="event_details">
                    <span class="event-name">End Date</span>
                    <input type="text" placeholder="Enter event" value="<?php echo $fetch['end_date']; ?>" name="update_event" required>
                </div>

                <div class="event_details">
                    <span class="event-name">Venue</span>
                    <input type="text" placeholder="Enter event" value="<?php echo $fetch['venue']; ?>" name="update_event" required>
                </div>

                <button class="btn-event" name="update_event_btn">Update Course</button>

            </form>
        </div>

    </section>
    
</body>
</html>