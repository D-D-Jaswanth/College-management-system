<?php
include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';

$id = "";
if(isset($_GET["id"])){
    $id = $_GET["id"];
}

if(isset($_POST['update']))
{
    $update_block = $_POST['update_block'];
    $update_floor = $_POST['update_floor'];
    $update_room = $_POST['update_room'];
    $update_status = $_POST['update_status'];

    $update = " UPDATE `rooms` SET `block` = '$update_block', `floor` = '$update_floor',
    `room` = '$update_room', `status` = '$update_status' WHERE id = '$id' ";

    $sql = mysqli_query($conn, $update);

    if($sql)
    {
        echo "<script>location.replace('admroom.php');</script>";
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

    <section class="item_room" id="room">

        <span class="title">Manage Class Rooms</span>

        <div class="room_content">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="select">

                    <select name="update_block" id="">
                        <option value="" disabled="" selected="">Select Blocks</option>
                        <option value="A">A-Block</option>
                        <option value="B">B-Block</option>
                        <option value="C">C-Block</option>
                    </select>
                    
                    <select name="update_floor" id="">
                        <option value="" disabled="" selected="">Select Floor</option>
                        <option value="1">1st Floor</option>
                        <option value="2">2nd Floor</option>
                        <option value="3">3rd Floor</option>
                    </select>

                    <select name="update_room" id="">
                        <option value="" disabled="" selected="">Select Room</option>
                        <option value="1">1st Room</option>
                        <option value="2">2nd Room</option>
                        <option value="3">3rd Room</option>
                        <option value="4">4th Room</option>
                        <option value="5">5th Room</option>
                        <option value="6">6th Room</option>
                    </select>

                    <select name="update_status" id="">
                        <option value="" disabled="" selected="">Select Status</option>
                        <option value="Assigned">Assigned</option>
                        <option value="Not Assigned">Not Assigned</option>
                    </select>

                </div>

                <div class="room-btn">
                    <button name="update">Update</button>
                </div>
            </form>