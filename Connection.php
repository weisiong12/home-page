<?php

$conn=mysqli_connect("localhost" ,"root", "", "cloth website");

if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";
}

?>