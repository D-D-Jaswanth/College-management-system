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

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <section class="item_id">

        <span class="title">Id cards</span>

        <div class="id_content">

            <div class="id-container">

                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile mumber</th>
                            <th>Email</th>
                            <th>Category</th>
                            <th>Branch</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php

                        $query = "SELECT * FROM `student`";
                        $r = mysqli_query($conn,$query);

                            while($row = mysqli_fetch_assoc($r)){

                            ?>

                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['fname'] ?></td>
                                <td><?php echo $row['lname'] ?></td>
                                <td><?php echo $row['mobilenumber'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['branch'] ?></td>
                                <td>
                                    <div class="action-btns">
                                        <a href="idcardsdisplay.php?id=<?php echo $row['id'] ?>" class="id-display-btn" id="display">Display</a>
                                    </div>
                                </td>
                            </tr>

                            <?php
                            }
                        ?>

                    </tbody>

                    
                </table>
                
            </div>
            
        </div>

        

    </section>

    <!--<script>
        document.getElementById("display").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "block";
        })

        document.querySelector(".icon-close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        })
    </script>-->

</body>
</html>