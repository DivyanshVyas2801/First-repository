<?php
include'connection.php';

if(isset($_POST['order'])) 
{
$title = $_POST['food_title'];
$price = $_POST['food_price'];
$total_price=$_POST['total_price'];


$sql = "INSERT INTO order_d(total_price)VALUES('$total_price')";
$data=mysqli_query($con,$sql);

if($data){
    echo"inserted";
   }
   else{
    echo "failed";
   }
  }
?>
