<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "admingym";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Error while connecting to database".mysqli_connect_error());
}
?>