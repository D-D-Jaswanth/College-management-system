<?php 

$server_name="localhost";
$username="root";
$password="";
$database_name="college";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn){
    die(mysqli_error($conn));
}

?>