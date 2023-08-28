<?php
include 'connection.php';
include './includes/navbar2.php';
include './includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" context="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles\style2.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <section class="item_std_att" id="student">

        <span class="title">Student Attendance</span>

        <div class="std_att_content">

            <div class="search-box">
                <form action="" method="post">
                    <div class="s_box">
                        <span class="material-symbols-outlined search-icon">search</span>
                        <input name="search" type="search" placeholder="Search" />
                    </div>
                    <div class="search-btn">
                        <button name="search_submit">Search</button>
                    </div>
                </form>

            </div>

            <div class="std-att-container">

                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Mobile mumber</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    
                    <?php

                        if(isset($_POST['search_submit'])){
                            $value_search = $_POST['search'];
                            $query = "SELECT * FROM `student` WHERE CONCAT(`fname`,`mobilenumber`,`category`,`branch`) LIKE '%$value_search%'";
                            $r = mysqli_query($conn,$query);

                            if(mysqli_num_rows($r) > 0)
                            {
                                while($row = mysqli_fetch_assoc($r)){

                                ?>

                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['fname'].' '.$row['lname'] ?></td>
                                    <td><?php echo $row['mobilenumber'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['category'] ?></td>
                                    <td>
                                        <div class="action-btns">
                                            <a class="edit-btn" href="">Present</a>
                                            <a class="delete-btn" href="">Absent</a>
                                        </div>
                                    </td>
                                </tr>

                                <?php

                                }

                            }
                            else
                            {
                                ?>
                                <tr>
                                    <td colspan="9" style="text-align:center; font-weight: 600">No Record Found !</td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                    </tbody>

                </table>
            </div>

        </div>

    </section>

</body>
</html>