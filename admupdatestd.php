<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
}


if(isset($_POST['add_std'])){
    
    $std_fname = $_POST['std_fname'];
    $std_lname = $_POST['std_lname'];
    $std_dob = $_POST['std_dob'];
    $gender = $_POST['gender'];
    $std_add1 = $_POST['std_add1'];
    $std_add2 = $_POST['std_add2'];
    $std_add3 = $_POST['std_add3'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $dist = $_POST['dist'];
    $pincode = $_POST['pincode'];
    $category = $_POST['category'];
    $branch = $_POST['branch'];
    $std_father = $_POST['std_father'];
    $std_fathermobile = $_POST['std_fathermobile'];
    $std_mother = $_POST['std_mother'];
    $std_mothermobile = $_POST['std_mothermobile'];
    $std_cmob = $_POST['std_cmob'];
    $std_cemail = $_POST['std_cemail'];
    $std_dateadm = $_POST['std_dateadm'];
    $year = $_POST['year'];


    $std_update = " UPDATE `student` SET `fname` = '$std_fname', 
    `lname` = '$std_lname' , `mobilenumber` = '$std_cmob' , `email` = '$std_cemail' ,
    `dob` = '$std_dob', `gender` = '$gender', `add1` = '$std_add1', `add2` = '$std_add2', 
    `add3` = '$std_add3', `state` = '$state', `city` = '$city', `dist` = '$dist', 
    `pincode` = '$pincode', `category` = '$category' , `branch` = '$branch',`father` = '$std_father', `fathermobile` = '$std_fathermobile', 
    `mother` = '$std_mother', `mothermobile` = '$std_mothermobile',  `dateadm` = '$std_dateadm', `year` = '$year' WHERE id = '$id' ";

    $query = mysqli_query($conn, $std_update);

    if($query){
        echo "<script>alert('Data updated successfully');</script>";

    }

    $std_image = $_FILES['std_image']['name'];
    $std_image_size = $_FILES['std_image']['size'];
    $std_image_tmp_name = $_FILES['std_image']['tmp_name'];
    $std_image_folder = 'upload/students/'.$std_image;

    if(!empty($std_image)){

        if($std_image_size > 200000){
            echo "<script>alert('Image size is too large !');</script>";
        }
        else
        {
            $image_update = " UPDATE `student` SET `std_image` = '$std_image' WHERE id = '$id' ";
            $result = mysqli_query($conn, $image_update);

            if($image_update)
            {
                move_uploaded_file($std_image_tmp_name, $std_image_folder);
            }
            echo "<script>alert('Image updated successfully');</script>";

        }
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

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <section class="update-std">

        <span class="title">Update Student</span>

        <div class="update-std-content">

            <form action="" method="post" enctype="multipart/form-data" class="update-form-std">

                <div class="update-std-container">

                <?php

                $select = " SELECT * FROM `student` WHERE id = '$id'";
    
                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0){
                    $fetch = mysqli_fetch_assoc($result);
                }
                
                ?>
                    <div class="update-std-img">
                        <?php
                        
                        if($fetch['std_image'] == ''){
                            echo '<img src="images/default.jpg">';
                        }
                        else{
                            echo '<img src="upload/students/'.$fetch['std_image'].'">';
                        }

                        ?>

                        <div class="update-img-details">
                            <input class="file" name="std_image" type="file" placeholder="Enter First name">
                        </div>
                        
                    </div>

                    
                    <div class="update--std--content--names">

                        <div class="update-details">
                            <span class="update-names">First Name</span>
                            <input type="text" name="std_fname" value="<?php echo $fetch['fname']; ?>" placeholder="Enter First name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Last Name</span>
                            <input type="text" name="std_lname" value="<?php echo $fetch['lname']; ?>" placeholder="Enter Last name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Date of Birth</span>
                            <input type="date" name="std_dob" value="<?php echo $fetch['dob']; ?>" placeholder="Enter Last name">
                        </div>

                        <div class="update-details-radio">
                            <span class="update-names">Gender : </span>
                            <input type="radio" class="radio-btn" name="gender" value="Male" checked>Male
                            <input type="radio" class="radio-btn" name="gender" value="Female">Female
                            <input type="radio" class="radio-btn" name="gender" value="Prefer not to say">Prefer not to say
                            <!--<select name="gender" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Prefer not to say</option>
                            </select>-->
                        </div>
                        
                    </div>

                    <span class="title">Address For Communication</span>

                    <div class="update-std-address">

                        <div class="update-details">
                            <span class="update-names">Address 1</span>
                            <input type="text" name="std_add1" value="<?php echo $fetch['add1']; ?>" placeholder="Enter address 1">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Address 2</span>
                            <input type="text" name="std_add2" value="<?php echo $fetch['add2']; ?>" placeholder="Enter address 2">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Address 3</span>
                            <input type="text" name="std_add3" value="<?php echo $fetch['add3']; ?>" placeholder="Enter address 3">
                        </div>
                        
                        <div class="update-details">
                            <span class="update-names">State</span>
                            <input type="text" name="state" value="<?php echo $fetch['state']; ?>" placeholder="Enter state">
                        </div>

                        <div class="update-details">
                            <span class="update-names">City</span>
                            <input type="text" name="city" value="<?php echo $fetch['city']; ?>" placeholder="Enter city">
                        </div>

                        <div class="update-details">
                            <span class="update-names">District</span>
                            <input type="text" name="dist" value="<?php echo $fetch['dist']; ?>" placeholder="Enter district">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Pincode</span>
                            <input type="number" name="pincode" value="<?php echo $fetch['pincode']; ?>" placeholder="Enter pincode">
                        </div>
                    </div>

                    <span class="title">Educational Details</span>

                    <div class="update-std-edu">

                        <div class="update-details">
                            <span class="update-names">Category Type</span>
                            <select name="category" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Category Type</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="BTECH">BTECH</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                        </div>

                        <div class="update-details">
                            <span class="update-names">Branch</span>
                            <input type="text" name="branch" value="<?php echo $fetch['branch']; ?>" placeholder="Enter branch">
                        </div>

                    </div>
                    
                    <span class="title">Family Details</span>

                    <div class="update-std-family">

                        <div class="update-details">
                            <span class="update-names">Father Name</span>
                            <input type="text" name="std_father" value="<?php echo $fetch['father']; ?>"placeholder="Enter father name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Father Mobile number</span>
                            <input type="number" name="std_fathermobile" value="<?php echo $fetch['fathermobile']; ?>" placeholder="Enter mobile number">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Mother Name</span>
                            <input type="text" name="std_mother" value="<?php echo $fetch['mother']; ?>" placeholder="Enter mother name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Mother Mobile Number</span>
                            <input type="number" name="std_mothermobile" value="<?php echo $fetch['mothermobile']; ?>" placeholder="Enter mobile number">
                        </div>

                    </div>

                    <span class="title">Contact Information</span>

                    <div class="update-std-personal">

                        <div class="update-details">
                            <span class="update-names">Mobile number</span>
                            <input type="number" name="std_cmob" value="<?php echo $fetch['mobilenumber']; ?>" placeholder="Enter mobilenumber">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Email</span>
                            <input type="email" name="std_cemail" value="<?php echo $fetch['email']; ?>" placeholder="Enter email">
                        </div>

                    </div>

                    <div class="update-std-agree">

                        <div class="update-agree-details">
                            <input type="checkbox" name="std_check" value="agree" requied>
                            <span class="update-names">I / We certify that the above Information provided by me / us is correct.
                                I Undertake to submit all the documents in original for verification.
                            </span>
                        </div>

                    </div>

                    <div class="update-adm-date">

                        <div class="update-details">
                            <span class="update-names">Date of Admission</span>
                            <input type="date" name="std_dateadm" value="<?php echo $fetch['dateadm']; ?>">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Year</span>
                            <input type="text" name="year" value="<?php echo $fetch['year']; ?>">
                        </div>

                    </div>

                    <div class="update-std-button">
                        <button name="add_std">Submit</button>
                    </div>

                </div>

            </form>

        </div>
    </section>
</body>
</html>