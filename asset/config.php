<?php 

$connect = mysqli_connect("localhost", "root", "", "latihan");

if($connect->connect_error){
    die("connection failed: " . $connect->connect_error);
}

?>