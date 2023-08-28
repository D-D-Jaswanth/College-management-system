<?php
include 'connection.php';
include './includes/navbar1.php';
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

    <section class="std-profile">

        <div class="std-content">

            <div class="top-content">
                <span class="title">MY PROFILE</span>
            </div>

            <div class="middle-content">

                <div class="top-middle">
                    <?php
                        $select = " SELECT * FROM `student` WHERE id = '$student_id' ";

                        $result = mysqli_query($conn, $select);
                        if(mysqli_num_rows($result) > 0){
                            $fetch = mysqli_fetch_assoc($result);
                        }
                        if($fetch['std_image'] == ''){
                            echo '<img src="images/default.jpg">';
                        }
                        else{
                            echo '<img src="upload/students/'.$fetch['std_image'].'">';
                        }
                    ?>
                    <span class="name"><?php echo $fetch['fname'].' '.$fetch['lname']; ?></span>
                </div>

                <div class="middle-middle">

                    <div class="tabs">
                        <button id="btn1" onclick="openPersonal()" class="button">Personal Info</button>
                        <button id="btn2" onclick="openAcademic()" class="button">Academic Info</button>
                        <button id="btn3" onclick="openDocuments()" class="button">Documents</button>
                        <button id="btn4" onclick="openPassword()" class="button">Change Password</button>
                    </div>

                    <div id="tabs-content1" class="tabs-content">

                        <span class="title">General Information</span>

                        <div class="personal-info">

                            <div class="details">
                                <label class="per-det" for="">First Name </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['fname'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Last Name </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['lname'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Father/Husband's Name </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['father'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Mother's Name </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['mother'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Date of Birth </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['dob'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Email-Id</label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['email'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Address</label>
                                <label for="">:</label>
                                <label class="add" for=""><?php echo $fetch['add1'].' '.$fetch['add2'].' '.$fetch['add3'].' '.$fetch['state'].' '.$fetch['city'].' '.$fetch['dist'].' '.$fetch['pincode'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div id="tabs-content2" class="tabs-content">

                        <span class="title">Academic Info</span>

                        <div class="personal-info">

                            <div class="details">
                                <label class="per-det" for="">Roll no. </label>
                                <label for="">:</label>
                                <label for="">1</label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Batch </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['year'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Course </label>
                                <label for="">:</label>
                                <label for=""><?php echo $fetch['branch'] ?></label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Semester </label>
                                <label for="">:</label>
                                <label for="">Semester 1</label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">University </label>
                                <label for="">:</label>
                                <label for="">Acharya Nagarjuna University</label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Address</label>
                                <label for="">:</label>
                                <label for="">Near Tolgate</label>
                            </div>
                            <div class="details">
                                <label class="per-det" for="">contact</label>
                                <label for="">:</label>
                                <label for="">8796387459</label>
                            </div>
                        </div>
                    </div>

                    <div id="tabs-content3" class="tabs-content">

                        <span class="title">Documents</span>

                        <div class="personal-info">

                            <div class="details">
                                <label class="per-det" for="">Photo submitted at time of University admission </label>
                                <input type="file">
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Add College Id Card </label>
                                <input type="file">
                            </div>
                            <div class="details">
                                <label class="per-det" for="">Aadhar Card Copy </label>
                                <input type="file">
                            </div>
                        </div>
                    </div>

                    <div id="tabs-content4" class="tabs-content">

                        <span class="title">Change Password</span>

                        <div class="personal-info">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="details">
                                    <label class="per-det" for="">Current Password</label>
                                    <input name="old_password" type="hidden" value="<?php echo $fetch['password']; ?>" placeholder="Old Password">
                                    <input type="password" name="update_password" placeholder="Current password">
                                </div>
                                <div class="details">
                                    <label class="per-det" for="">New Password</label>
                                    <input name="new_password" type="password" placeholder="New Password">
                                </div>
                                <div class="details">
                                    <label class="per-det" for="">Confirm New Password</label>
                                    <input name="confirm_new_password" type="password" placeholder="Confirm Password">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        
    </section>
    <script>
        var content1 = document.getElementById("tabs-content1");
        var content2 = document.getElementById("tabs-content2");
        var content3 = document.getElementById("tabs-content3");
        var content4 = document.getElementById("tabs-content4");
        var btn1 = document.getElementById("btn1");
        var btn2 = document.getElementById("btn2");
        var btn3 = document.getElementById("btn3");
        var btn4 = document.getElementById("btn4");

        function openPersonal(){
            content1.style.display = "block";
            content2.style.display = "none";
            content3.style.display = "none";
            content4.style.display = "none";
        }
        function openAcademic(){
            content1.style.display = "none";
            content2.style.display = "block";
            content3.style.display = "none";
            content4.style.display = "none";
        }
        function openDocuments(){
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "block";
            content4.style.display = "none";
        }
        function openPassword(){
            content1.style.display = "none";
            content2.style.display = "none";
            content3.style.display = "none";
            content4.style.display = "block";
        }
    </script>
</body>
</html>