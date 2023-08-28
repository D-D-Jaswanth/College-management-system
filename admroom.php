<?php
include 'connection.php';
include './includes/navbar.php';
include './includes/header.php';


if(isset($_POST['add_room']))
{
    $block = $_POST['block'];
    $floor = $_POST['floor'];
    $room = $_POST['room'];
    $status = $_POST['status'];

    $insert_room = " INSERT INTO `rooms` (`block`, `floor`,`room`,`status`)
    VALUES ('$block', '$floor','$room','$status')";

    $sql = mysqli_query($conn, $insert_room);

    if($sql)
    {
        echo "<script>alert('Inserted Successfully');</script>";
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

            <!--<form action="" method="post">

                <div class="select">

                    <select name="block" id="">
                        <option value="" disabled="" selected="">Select Blocks</option>
                        <option value="A">A-Block</option>
                        <option value="B">B-Block</option>
                        <option value="C">C-Block</option>
                    </select>
                    
                    <select name="floor" id="">
                        <option value="" disabled="" selected="">Select Floor</option>
                        <option value="1">1st Floor</option>
                        <option value="2">2nd Floor</option>
                        <option value="3">3rd Floor</option>
                    </select>

                    <select name="room" id="">
                        <option value="" disabled="" selected="">Select Room</option>
                        <option value="1">1st Room</option>
                        <option value="2">2nd Room</option>
                        <option value="3">3rd Room</option>
                        <option value="4">4th Room</option>
                        <option value="5">5th Room</option>
                        <option value="6">6th Room</option>
                    </select>

                    <select name="status" id="">
                        <option value="" disabled="" selected="">Select Status</option>
                        <option value="Assigned">Assigned</option>
                        <option value="Not Assigned">Not Assigned</option>
                    </select>

                </div>

                <div class="room-btn">
                    <button name="add_room">Add</button>
                </div>
            </form>-->


            <table class="room-table">

                <form action="">

                </form>

                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Block</th>
                        <th>Floor</th>
                        <th>Room</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $select_room = " SELECT * FROM `rooms`";
                        $result = mysqli_query($conn, $select_room);

                        while($row = mysqli_fetch_assoc($result))
                        {

                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['block'] ?></td>
                        <td><?php echo $row['floor'] ?></td>
                        <td><?php echo $row['room'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a class="edit-room" name="edit_room" href="admeditroom.php?id=<?php echo $row['id']?>">Edit</a>
                            <a class="delete-room" name="delete_room" href="">Delete</a>
                        </td>
                    </tr>

                    <?php

                        }
                    ?>
                </tbody>

            </table>

        </div>

    </section>
</body>
</html>