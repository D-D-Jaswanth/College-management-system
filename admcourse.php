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

        <span class="title">Courses</span>

        <div class="course_content">

            <div class="btn-course">
                <a href="addcourse.php">
                    <span class="material-symbols-outlined">add</span>
                    <span class="course-btn-label">Add Course</span>
                </a>
            </div>

            <table>

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                        $query = " SELECT * FROM `courses`";
                        $run = mysqli_query($conn, $query);
                        if(mysqli_num_rows($run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($run))
                            {

                            ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['course'] ?></td>
                        <td>
                            <a href="admeditcourse.php?id=<?php echo $row['id']?>">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>

                    <?php
                            }
                        }
                    ?>        
                </tbody>

            </table>

        </div>

    </section>
    
</body>
</html>