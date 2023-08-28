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

    <section class="item_display_std">

        <span class="title">Display Page</span>

        <div class="display_content">

            <div class="display_container">
                <?php

                $select = " SELECT * FROM `student` WHERE id = '$id'";

                $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0)
                {
                    $fetch = mysqli_fetch_assoc($result);
                }
                if($fetch['std_image'] == ''){
                    echo '<img src="images/default.jpg">';
                }
                else{
                    echo '<img src="upload/students/'.$fetch['std_image'].'">';
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
                    <span class="dis">Date of Birth : </span>
                    <span><?php echo $fetch['dob'] ?></span>
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
                        <span class="dis">Address 1 : </span>
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
                        <span><?php echo $fetch['category'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Branch : </span>
                        <span><?php echo $fetch['branch'] ?></span>
                    </div>

                </div>

                <hr>

                <span class="add_title">Family Details</span>

                <div class="fam_details">

                    <div class="dis_details">
                        <span class="dis">Father Name : </span>
                        <span><?php echo $fetch['father'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Mobile Number : </span>
                        <span><?php echo $fetch['fathermobile'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Mother Name : </span>
                        <span><?php echo $fetch['mother'] ?></span>
                    </div>

                    <div class="dis_details">
                        <span class="dis">Mobile Number : </span>
                        <span><?php echo $fetch['mothermobile'] ?></span>
                    </div>

                </div>

                <div class="dis-btn">
                    <a href="admupdatestd.php?id=<?php echo $fetch['id']?>">Update Details</a>
                </div>

            </div>
        </div>
    </section>

</body>
</html>