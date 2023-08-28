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

    <section class="item_events">

        <span class="title">Events</span>

        <div class="event-content">

            <div class="btn-events">
                <a href="addevent.php">
                    <span class="material-symbols-outlined">add</span>
                    <span class="course-btn-label">Add Event</span>
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Event Name</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Venue</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $query = " SELECT * FROM `events`";
                    $run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($run))
                        {

                        ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['event_name'] ?></td>
                        <td><?php echo $row['category'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['start_date'] ?></td>
                        <td><?php echo $row['end_date'] ?></td>
                        <td><?php echo $row['venue'] ?></td>
                        <td class="btns">
                            <!-- <a href="admeditevent.php?id=<?php echo $row['id']?>">Edit</a> -->
                            <a href="">Delete</a>
                        </td>
                    </tr>

                    <?php
                        }
                    }
                ?> 
                    <tr>
                    </tr>
                </tbody>
            </table>

        </div>

</section>
    
</body>
</html>