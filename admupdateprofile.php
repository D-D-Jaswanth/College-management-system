<?php
include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$admin_id = $_SESSION['admin_id'];

if(isset($_POST['update_profile'])){

    $update_fname = $_POST['update_fname'];
    $update_lname = $_POST['update_lname'];
    $update_mobilenumber = $_POST['update_mobilenumber'];
    $update_email = $_POST['update_email'];
    

    $update = " UPDATE `admin` SET `fname` = '$update_fname', `lname` = '$update_lname' , `mobilenumber` = '$update_mobilenumber' , `email` = '$update_email' WHERE id = '$admin_id' ";

    $result = mysqli_query($conn, $update);

    $old_password = $_POST['old_password'];
    $update_password = $_POST['update_password'];
    $new_password = $_POST['new_password'];
    $repeat_password = $_POST['repeat_password'];

    if(!empty($update_password) || !empty($new_password) || !empty($repeat_password)){
        if($update_password != $old_password){
            echo "<script>alert('old password not matched !');</script>";
        }elseif($new_password != $repeat_password){
            echo "<script>alert('repeat password not matched !');</script>";
        }else{
            $update = " UPDATE `admin` SET `password` = '$repeat_password' WHERE id = '$admin_id' ";
            $result = mysqli_query($conn, $update);

            echo "<script>alert('password updated successfully');</script>";
        }
    }

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'upload/admin/'.$image;

    if(!empty($image)){

        if($image_size > 200000){
            echo "<script>alert('Image size is too large !');</script>";
        }
        else
        {
            $image_update = " UPDATE `admin` SET `image` = '$image' WHERE id = '$admin_id' ";
            $result = mysqli_query($conn, $image_update);

            if($image_update){
                move_uploaded_file($image_tmp_name, $image_folder);
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

    <link rel="stylesheet" href="styles\style1.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fbc8adb9e2.js" crossorigin="anonymous"></script>
    
</head>
<body>

    <section class="item_update_profile" id="profile">

        <span class="title">Profile</span>

        <form action="" method="post" enctype="multipart/form-data">
                
            <div class="personal_update">

            <?php
                $select = " SELECT * FROM `admin` WHERE id = '$admin_id' ";
    
                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0){
                    $fetch = mysqli_fetch_assoc($result);
                }

            ?>
    
                <div class="details">
                    <label for="">First name</label>
                    <input type="text" name="update_fname" value="<?php echo $fetch['fname']; ?>" placeholder="Enter first name">
                </div>
    
                <div class="details">
                    <label for="" >Second name</label>
                    <input type="text" name="update_lname" value="<?php echo $fetch['lname']; ?>" placeholder="Enter second name">
                </div>
    
                <div class="details">
                    <label for="">Mobile number</label>
                    <input type="number" name="update_mobilenumber" value="<?php echo $fetch['mobilenumber']; ?>" placeholder="Enter second name">
                </div>
    
                <div class="details">
                    <label for="">Email</label>
                    <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" placeholder="Enter email">
                </div>
    
                <div class="details">
                    <label for="">Old password</label>
                    <input type="hidden" name="old_password" value="<?php echo $fetch['password']; ?>" placeholder="Enter old password">
                    <input type="password" name="update_password" placeholder="Enter previous password">
                </div>
    
                <div class="details">
                    <label for="">New password</label>
                    <input type="password" name="new_password" placeholder="Enter new password">
                </div>
    
                <div class="details">
                    <label for="">Repeat new password</label>
                    <input type="password" name="repeat_password" placeholder="Enter new password">
                </div>
    
                <div class="details">
                    <label for="" class="lname">photo</label>
                    <input type="file" name="image" class="image" accept="image/jpg, image/jpeg, image/png">
                </div>
                
            </div>

            <div class="btn">
                <input class="update-profile-btn" type="submit" value="update profile" name="update_profile">
            </div>

        </form>


    </section>

</body>
</html>