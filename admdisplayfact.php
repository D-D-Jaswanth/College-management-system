<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
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

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <section class="item_display_fact">

        <span class="title">Display Page</span>

        <div class="display_content">

            <div class="display_container">
                <?php

                $select = " SELECT * FROM `faculty` WHERE id = '$id'";

                $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0)
                {
                    $fetch = mysqli_fetch_assoc($result);
                }
                if($fetch['fact_image'] == ''){
                    echo '<img src="images/default.jpg">';
                }
                else{
                    echo '<img src="upload/faculty/'.$fetch['fact_image'].'">';
                }

                ?>

                <div class="dis_details">
                    <span class="dis">First Name : </span>
                    <span><?php echo $fetch['fname'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Last Name : </span>
                    <span><?php echo $fetch['lname'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Father's / Husband's Name : </span>
                    <span><?php echo $fetch['hname'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Date of Birth : </span>
                    <span><?php echo $fetch['dob'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Marital Status : </span>
                    <span><?php echo $fetch['mstatus'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Mobile Number : </span>
                    <span><?php echo $fetch['mobilenumber'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Email : </span>
                    <span><?php echo $fetch['email'] ?></span>
                </div>

                <div class="dis_details">
                    <span class="dis">Gender : </span>
                    <span><?php echo $fetch['gender'] ?></span>
                </div>

                <hr>
                
                <span class="add_title">Address for Communication</span>

                <div class="add_details">

                    <div class="dis_details">
                        <span class="dis">Door no : </span>
                        <span><?php echo $fetch['add1'] ?></span>
                    </div>
                    
                    <div class="dis_details">
                        <span class="dis">Address 2 : </span>
                        <span><?php echo $fetch['add2'] ?></span>
                    </div>
                    <div class="dis_details">
                        <span class="dis">Address 3 : </span>
                        <span><?php echo $fetch['add3'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">State : </span>
                        <span><?php echo $fetch['state'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">City : </span>
                        <span><?php echo $fetch['city'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">District : </span>
                        <span><?php echo $fetch['dist'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Pincode : </span>
                        <span><?php echo $fetch['pincode'] ?></span>
                    </div>

                </div>

                <hr>

                <span class="add_title">Educational Details</span>

                <div class="edu-details">

                    <div class="dis_details">
                        <span class="dis">Category : </span>
                        <span><?php echo $fetch['fact_category'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Department : </span>
                        <span><?php echo $fetch['department'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Post Applied For : </span>
                        <span><?php echo $fetch['post'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">specialization field : </span>
                        <span><?php echo $fetch['field'] ?></span>
                    </div>

                </div>

                <span class="add_title">Educational Qualifications</span>

                <div class="edu-details">

                    <table>
                        <thead>
                            <tr>
                                <th>Examination / Degree / Diploma</th>
                                <th>School / College / Institute</th>
                                <th>Name of the board / University</th>
                                <th>Marks obtained</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?php echo $fetch['degree'] ?></td>
                                <td><?php echo $fetch['school'] ?></td>
                                <td><?php echo $fetch['board'] ?></td>
                                <td><?php echo $fetch['marks'] ?></td>
                            </tr>

                            <tr>
                                <td><?php echo $fetch['degree1'] ?></td>
                                <td><?php echo $fetch['school1'] ?></td>
                                <td><?php echo $fetch['board1'] ?></td>
                                <td><?php echo $fetch['marks1'] ?></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="dis-btn">
                    <a href="admupdatefact.php?id=<?php echo $fetch['id']?>">Update Details</a>
                </div>

            </div>
        </div>
    </section>

</body>
</html>