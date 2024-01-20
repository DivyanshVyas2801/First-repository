<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])) 
{
    $name = $_POST['ctr_name'];
    $address = $_POST['ctr_add'];
    $mobile = $_POST['ctr_mob'];
    $city = $_POST['ctr_city'];
    $email = $_POST['ctr_email'];
    $password = $_POST['ctr_pass'];
    $insertquery = "INSERT INTO Registration(ctr_name, ctr_add, ctr_mob, ctr_city, ctr_email, ctr_pass)VALUES('$name', '$address', '$mobile', '$city', '$email', '$password')";
    $res = mysqli_query($con,$insertquery);

    if($res){
        header("location:Apnirasoi.html");
       }
       
      }
    ?>