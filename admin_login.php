<?php
 session_start();
  require_once "connect.php";
 if(isset($_POST['LOGIN']))
 {
   $email=$_POST['email'];
   $password=$_POST['password'];


   $sql="SELECT * FROM admin_register WHERE email='$email' && pass='$password'";
   $data=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($data,MYSQLI_ASSOC);
   $count=mysqli_num_rows($data);
   if($count==1)
    {
      $_SESSION['user_name']=$email;
      header('location:admin.php');
    }
   else
    {
        ?>
        <script>
           window.location.href="login.php";
           alert("plz right username:failed");
   
        </script>
        <?php  
    }
 }
?>