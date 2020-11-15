<?php
include "_dbconnect.php";
$updateSuccess = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id =  $_GET['id'];
    $payment = $_POST["payment"];

    $Sql = "UPDATE `users` SET `payment` = '$payment' WHERE `user_id` = '$id'";
    $result = mysqli_query($conn,$Sql);
    if(!$result){
        echo '<script>
        alert("Record not updated....");
        window.location.href="_showMembers.php";
        </script>';
    }
    else{
        echo '<script>
        alert("Updated Successfully....");
        window.location.href="_showMembers.php";
        </script>';
    }
}
?>