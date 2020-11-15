<?php
include '_dbconnect.php';
$id = $_GET['$id'];

$Sql = "DELETE FROM `users` WHERE `user_id` = $id";
$result = mysqli_query($conn,$Sql);

if(!$result){
    die("Cannot Deleted".mysqli_connect_error());
}
else{
    header("location:_showMembers.php");
    exit;
}
?>