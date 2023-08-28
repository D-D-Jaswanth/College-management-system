<?php

include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
}


if(isset($_POST['add_fact'])){
    
    $fact_fname = $_POST['fact_fname'];
    $fact_lname = $_POST['fact_lname'];
    $fact_hname = $_POST['fact_hname'];
    $fact_dob = $_POST['fact_dob'];
    $mstatus = $_POST['mstatus'];
    $gender = $_POST['gender'];
    $fact_mob = $_POST['fact_mob'];
    $fact_email = $_POST['fact_email'];
    $fact_add1 = $_POST['fact_add1'];
    $fact_add2 = $_POST['fact_add2'];
    $fact_add3 = $_POST['fact_add3'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $dist = $_POST['dist'];
    $pincode = $_POST['pincode'];
    $fact_category = $_POST['fact_category'];
    $department = $_POST['department'];
    $post = $_POST['post'];
    $field = $_POST['field'];
    $edu_category1 = $_POST['edu_category1'];
    $degree = $_POST['degree'];
    $school = $_POST['school'];
    $board = $_POST['board'];
    $marks = $_POST['marks'];
    $edu_category2 = $_POST['edu_category2'];
    $degree1 = $_POST['degree1'];
    $school1 = $_POST['school1'];
    $board1 = $_POST['board1'];
    $marks1 = $_POST['marks1'];
    $fact_dateadm = $_POST['fact_dateadm'];
    $year = $_POST['year'];

    
    $fact_image = $_FILES['fact_image']['name'];
    $fact_image_size = $_FILES['fact_image']['size'];
    $fact_image_tmp_name = $_FILES['fact_image']['tmp_name'];
    $fact_image_folder = 'upload/faculty/'.$fact_image;

    $fact_update = " UPDATE `faculty` SET `fact_image` = '$fact_image' , `fname` = '$fact_fname', 
    `lname` = '$fact_lname' ,`hname` = '$fact_hname' , `dob` = '$fact_dob' , `mstatus` = '$mstatus' ,
    `gender` = '$gender', `mobilenumber` = '$fact_mob' , `email` = '$fact_email' , `add1` = '$fact_add1',
    `add2` = '$fact_add2' , `add3` = '$fact_add3', `state` = '$state', `city` = '$city', `dist` = '$dist', 
    `pincode` = '$pincode', `fact_category` = '$fact_category' , `department` = '$department', `post` = '$post' ,
    `field` = '$field' , `edu_category1` = '$edu_category1', `degree` = '$degree' , `school` = '$school' , `board` = '$board' ,
    `marks` = '$marks' , `edu_category2` = '$edu_category2', `degree1` = '$degree1' , `school1` = '$school1' , `board1` = '$board1' ,
    `marks1` = '$marks1' , `fact_dateadm` = '$fact_dateadm', `year` = '$year' WHERE id = '$id' ";

    $query = mysqli_query($conn, $fact_update);

    if($query){

        echo "<script>alert('Data updated successfully');</script>";

    }

    if(!empty($fact_image)){

        if($fact_image_size > 200000){
            echo "<script>alert('Image size is too large !');</script>";
        }
        else
        {
            $image_update = " UPDATE `faculty` SET `fact_image` = '$fact_image' WHERE id = '$id' ";
            $result = mysqli_query($conn, $image_update);

            if($image_update)
            {
                move_uploaded_file($fact_image_tmp_name, $fact_image_folder);
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
    <section class="update-fact">

        <span class="title">Update Faculty</span>

        <div class="update-fact-content">

            <form action="" method="post" enctype="multipart/form-data" class="update-form-std">

                <div class="update-fact-container">

                <?php

                $select = " SELECT * FROM `faculty` WHERE id = '$id'";
    
                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0){
                    $fetch = mysqli_fetch_assoc($result);
                }
                
                ?>
                    <div class="update-fact-img">
                        <?php
                        
                        if($fetch['fact_image'] == ''){
                            echo '<img src="images/default.jpg">';
                        }
                        else{
                            echo '<img src="upload/faculty/'.$fetch['fact_image'].'">';
                        }

                        ?>

                        <div class="update-img-details">
                            <input class="file" name="fact_image" type="file" placeholder="Enter First name">
                        </div>
                        
                    </div>

                    
                    <div class="update--fact--content--names">

                        <div class="update-details">
                            <span class="update-names">First Name</span>
                            <input type="text" name="fact_fname" value="<?php echo $fetch['fname']; ?>" placeholder="Enter First name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Last Name</span>
                            <input type="text" name="fact_lname" value="<?php echo $fetch['lname']; ?>" placeholder="Enter Last name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Father's / Husband's Name</span>
                            <input type="text" name="fact_hname" value="<?php echo $fetch['hname']; ?>" placeholder="Enter name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Date of Birth</span>
                            <input type="date" name="fact_dob" value="<?php echo $fetch['dob']; ?>" placeholder="Enter Last name">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Marital Status</span>
                            <select name="mstatus" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Marital Status</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Single">Single</option>
                            </select>
                        </div>

                        <div class="update-details">
                            <span class="update-names">Gender</span>
                            <select name="gender" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Prefer not to say</option>
                            </select>
                        </div>
                        
                    </div>

                    <span class="title">Address For Communication</span>

                    <div class="update-fact-address">

                        <div class="update-details">
                            <span class="update-names">Door no</span>
                            <input type="text" name="fact_add1" value="<?php echo $fetch['add1']; ?>" placeholder="Enter Door no.">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Address 2</span>
                            <input type="text" name="fact_add2" value="<?php echo $fetch['add2']; ?>" placeholder="Enter address 2">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Address 3</span>
                            <input type="text" name="fact_add3" value="<?php echo $fetch['add3']; ?>" placeholder="Enter address 3">
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

                    <div class="update-fact-edu">

                        <div class="update-details">
                            <span class="update-names">Category Type</span>
                            <select name="fact_category" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Category Type</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="BTECH">BTECH</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                        </div>

                        <div class="update-details">
                            <span class="update-names">Department</span>
                            <input type="text" name="department" value="<?php echo $fetch['department']; ?>" placeholder="Enter branch">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Post applied for</span>
                            <input type="text" name="post" value="<?php echo $fetch['post']; ?>" placeholder="Enter branch">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Field of specialization</span>
                            <input type="text" name="field" value="<?php echo $fetch['field']; ?>" placeholder="Enter branch">
                        </div>

                    </div>

                    <span class="title">Educational Qualifications</span>

                    <div class="update-fact-edu-qua1">

                        <div class="update-details">
                            <span class="update-names">Category Type</span>
                            <select name="edu_category1" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Category Type</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="BTECH">BTECH</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                        </div>
                        
                        <div class="update-details">
                            <span class="update-names">Degree / Examination</span>
                            <input type="text" name="degree" value="<?php echo $fetch['degree']; ?>" placeholder="Enter branch">
                        </div>

                        <div class="update-details">
                            <span class="update-names">School / College / Institute</span>
                            <input type="text" name="school" value="<?php echo $fetch['school']; ?>" placeholder="Enter branch">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Name of the Board / University</span>
                            <input type="text" name="board" value="<?php echo $fetch['board']; ?>" placeholder="Enter branch">
                        </div>

                        <div class="update-details">
                            <span class="update-names">% of Marks</span>
                            <input type="text" name="marks" value="<?php echo $fetch['marks']; ?>" placeholder="Enter branch">
                        </div>
                        
                    </div>

                    <div class="update-fact-edu-qua2">

                        <div class="update-details">
                            <span class="update-names">Category Type</span>
                            <select name="edu_category2" id="" class="update-address-details">
                                <option value="" disabled="" selected="">Category Type</option>
                                <option value="UG">UG</option>
                                <option value="PG">PG</option>
                                <option value="BTECH">BTECH</option>
                                <option value="Diploma">Diploma</option>
                            </select>
                        </div>
    
                        <div class="update-details">
                            <span class="update-names">Degree / Examination</span>
                            <input type="text" name="degree1" value="<?php echo $fetch['degree1']; ?>" placeholder="Enter branch">
                        </div>
    
                        <div class="update-details">
                            <span class="update-names">School / College / Institute</span>
                            <input type="text" name="school1" value="<?php echo $fetch['school1']; ?>" placeholder="Enter branch">
                        </div>
    
                        <div class="update-details">
                            <span class="update-names">Name of the Board / University</span>
                            <input type="text" name="board1" value="<?php echo $fetch['board1']; ?>" placeholder="Enter branch">
                        </div>
    
                        <div class="update-details">
                            <span class="update-names">% of Marks</span>
                            <input type="text" name="marks1" value="<?php echo $fetch['marks1']; ?>" placeholder="Enter branch">
                        </div>

                    </div>


                    <span class="title">Contact Information</span>

                    <div class="update-fact-personal">

                        <div class="update-details">
                            <span class="update-names">Mobile number</span>
                            <input type="number" name="fact_mob" value="<?php echo $fetch['mobilenumber']; ?>" placeholder="Enter mobilenumber">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Email</span>
                            <input type="email" name="fact_email" value="<?php echo $fetch['email']; ?>" placeholder="Enter email">
                        </div>

                    </div>

                    <div class="update-fact-agree">

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
                            <input type="date" name="fact_dateadm" value="<?php echo $fetch['fact_dateadm']; ?>">
                        </div>

                        <div class="update-details">
                            <span class="update-names">Year</span>
                            <input type="text" name="year" value="<?php echo $fetch['year']; ?>">
                        </div>

                    </div>

                    <div class="update-fact-button">
                        <button name="add_fact">Submit</button>
                    </div>

                </div>

            </form>

        </div>
    </section>
</body>
</html>