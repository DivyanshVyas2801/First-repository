f<?php
session_start();

 include("connect.php");
 if(isset($_POST['register']))
 {
   $username=$_POST['username'];
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $salary=$_POST['salary'];

   $userprofile=$_SESSION['user_name'];
   if($userprofile==true)
   {

   }
   else{
     header("location:login.php");
   }
   $sql="INSERT INTO employee(E_id,E_name,position,salary) VALUES('$username','$email','$pass','$salary')";
   $data=mysqli_query($con,$sql);
   if($data){
    header("location:employee.php");
   }
   else{
    ?>
    <script>
      alert("failed");
    </script>
    <?php

   }
  }
?>