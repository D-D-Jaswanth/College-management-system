<?php

include 'connection.php';

if(isset($_POST['save']))
{
    $Firstname = $_POST['Firstname'];
    $Lastname = $_POST['Lastname'];
    $Email = $_POST['Email'];   
    $Mobilenumber = $_POST['Mobilenumber'];
    $Fathername = $_POST['Fathername'];

    $sql="INSERT INTO `studenttable` (Firstname, Lastname, Email, Mobilenumber, Fathername) 
    VALUES ('$Firstname','$Lastname','$Email','$Mobilenumber','$Fathername')";

    $result=mysqli_query($conn, $sql);
    if($result)
    {
        // echo "Data inserted successfully";
        header('location:adm.html');
    }
    else
    {
        die(mysqli_error($conn));
    }
}

?>