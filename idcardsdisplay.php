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

    <section class="item_id_display">

        <span class="title">Id cards Display</span>

        <div class="id_display_content">

            <div class="id-display-container">


                <div class="popup" id="popup">

                    <div class="popup-content">

                        <div class="popup-logo-content">
                            <div class="popup-logo">
                                <img src="college logo.png" alt="">
                            </div>
                            <div class="popup-label">
                                <span>Arizona State University</span>
                            </div>
                        </div>

                        <div class="std-pop-details">
                            <span class="id-title">STUDENT ID CARD</span>

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
                            <span class="std-name"><?php echo $fetch['fname'].' '.$fetch['lname']?></span>
                            <div class="std-popup-course">
                                <span class="c">Course :</span>
                                <span class="std-course"><?php echo $fetch['branch'] ?></span>
                            </div>
                            <div class="std-popup-batch">
                                <span class="b">Batch :</span>
                                <span class="batch"><?php echo $fetch['year'] ?></span>
                            </div>
                            <div class="std-popup-mobile">
                                <span class="m">Mobile:</span>
                                <span class="std-mobile"><?php echo $fetch['mobilenumber'] ?></span>
                            </div>
                            <div class="std-popup-add">
                                <span class="a">Address :</span>
                                <span class="std-address"><?php echo $fetch['add1'].' '.$fetch['add2'].' '.$fetch['add3'] ?></span>
                            </div>
                            <div class="std-popup-sign">
                                <img src="sign.png" alt="">
                                <span class="sign">Signature</span>
                            </div>  
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

</body>
</html>