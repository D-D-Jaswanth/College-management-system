<?php
include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

if(isset($_POST['add_event'])){

    $event_name = $_POST['event_name'];
    $category = $_POST['category'];
    $event_description = $_POST['event_description'];
    $event_start = $_POST['event_start'];
    $event_end = $_POST['event_end'];
    $event_address = $_POST['event_address'];
    
    $insert = " INSERT INTO `events` (`event_name`, `category`, `description`, `start_date`, `end_date`, `venue`)
    VALUES ('$event_name','$category', '$event_description', '$event_start', '$event_end', '$event_address')";
    
    $sql = mysqli_query($conn, $insert);

    if($sql){
        echo "<script>alert('Event added Successfully');</script>";
    }

}



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
    <section class="item_add_events">

        <span class="title">Add Events</span>

        <div class="add_event_content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="event_details">
                    <span class="event-name">Event Name</span>
                    <input type="text" name="event_name" placeholder="Enter event name">
                </div>
                <div class="event_details">
                    <span class="event-name">Category</span>
                    <?php

                        $query = " SELECT * FROM `events_list` ";
                        $result = mysqli_query($conn, $query);
                    
                    ?>
                    <select name="category" id="">
                    <?php
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <option><?php echo $row['ename']; ?></option>
                        
                        <?php
                    }
                    ?>
                        <!-- <option value="Internship">Internship</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Placement Drive">Placement Drive</option>
                        <option value="Coding">Coding</option>
                        <option value="Quiz">Quiz</option>
                        <option value="Fest">Fest</option>
                        <option value="Freshers">Freshers</option>
                        <option value="Farewell">Farewell</option>
                        <option value="Sports">Sports</option> -->
                    </select>
                </div>
                <div class="event_details">
                    <span class="event-name">Description</span>
                    <input type="text" name="event_description" placeholder="Enter description">
                </div>
                <div class="event_details">
                    <span class="event-name">Start Date</span>
                    <input type="date" name="event_start">
                </div>
                <div class="event_details">
                    <span class="event-name">End Date</span>
                    <input type="date" name="event_end">
                </div>
                <div class="event_details">
                    <span class="event-name">Venue (Event Address)</span>
                    <input type="text" name="event_address" placeholder="Enter address">
                </div>
                <button name="add_event" class="btn-event">Submit</button>
            </form>
        </div>

    </section>
</body>
</html>