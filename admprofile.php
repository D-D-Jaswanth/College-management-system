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

    <section class="item_profile" id="profile">

        <span class="title">Profile</span>

        <div class="personal">
            
            <?php
                $select = " SELECT * FROM `admin` WHERE id = '$admin_id' ";

                $result = mysqli_query($conn, $select);
                if(mysqli_num_rows($result) > 0){
                    $fetch = mysqli_fetch_assoc($result);
                }
                if($fetch['image'] == ''){
                    echo '<img src="images/default.jpg">';
                }
                else{
                    echo '<img src="upload/admin/'.$fetch['image'].'">';
                }
            ?>
            
            <div class="details">
                <label for="" class="name">Full Name : </label>
                <label for=""><?php echo $fetch['fname'].' '.$fetch['lname']; ?></label>
            </div>
            <div class="details">
                <label for="" class="name">Mobile number : </label>
                <label for=""><?php echo $fetch['mobilenumber']; ?></label>
            </div>
            <div class="details">
                <label for="" class="name">Email : </label>
                <label for=""><?php echo $fetch['email']; ?></label>
            </div>
            <div class="btn">
                <a href="admupdateprofile.php" onclick="toggle()">Update profile</a>
            </div>

        </div>

    </section>

</body>
</html>