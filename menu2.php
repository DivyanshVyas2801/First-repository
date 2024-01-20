<?php
 require_once "connect.php";

 if(isset($_POST['add']))
 {
  $dishname=$_POST["dishname"];
  $catid=$_POST["cat_id"];
  $price=$_POST["price"];


  $squery="INSERT INTO menu(dish,cat_id,dish_price) VALUES('$dishname','$catid',' $price')";

  $data=mysqli_query($con,$squery);
  if($data)
    {
     ?>
     <script>
        alert("succesfull");

     </script>
     <?php   
    }
  else
    {
        ?>
        <script>
           alert("failed");
   
        </script>
        <?php  
    }
 }
 elseif(isset($_POST['delete']))
 {
  $dishname=$_POST["dishname"];
  $catid=$_POST["cat_id"];
  $price=$_POST["price"];


  $squery="DELETE FROM menu WHERE dish='$dishname'";

  $data=mysqli_query($con,$squery);
  if($data)
    {
     ?>
     <script>
        alert("succesfull");

     </script>
     <?php   
    }
  else
    {
        ?>
        <script>
           alert("failed");
   
        </script>
        <?php  
    }
 }
 elseif(isset($_POST['update']))
 {
  $dishname=$_POST["dishname"];
  $catid=$_POST["cat_id"];
  $price=$_POST["price"];


  $squery="UPDATE menu SET cat_id='$catid' ,dish_price='$price' WHERE dish='$dishname'";

  $data=mysqli_query($con,$squery);
  if($data)
    {
     ?>
     <script>
        alert("succesfull");

     </script>
     <?php   
    }
  else
    {
        ?>
        <script>
           alert("failed");
   
        </script>
        <?php  
    }
 }
 
 
?>