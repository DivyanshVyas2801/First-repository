<?php
session_start();
 
 include("connect.php");
 if(isset($_POST['Login']))
 {
   $email=$_POST['email'];
   $password=$_POST['password'];


   $sql="SELECT * FROM Registration WHERE ctr_email='$email' && ctr_pass='$password'";
   $data=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
   $count=mysqli_num_rows($data);
   if($count==1)
    {
      $_SESSION['user_name']=$email;
      header('location:examplemenu.php');
    }
   else
    {
        ?>
        <script>
           window.location.href="Apnirasoi.html";
           alert("plz right username:failed");
   
        </script>
        <?php  
    }
 }
?>