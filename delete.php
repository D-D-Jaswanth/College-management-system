<?php

include 'studenttable.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `studenttable` WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:adm.html');
    }

    else{
        die(mysqli_error($conn));
    }
}

?>