
<?php
 require_once "connect.php";

 if(isset($_POST['add']))
 {
   $cid=$_POST["cid"];
   $name=$_POST["category"];
   $run="SELECT * FROM category where cat_name='$name'";
   $se=mysqli_query($con,$run);
   $count=mysqli_num_rows($se);
    if($count>0){
      ?>
        <script>
           alert("already existed");
   
        </script>
       
        <?php 
         header("location:updatemain.php"); 
    }
    else
    {

     $squery="INSERT INTO category(cat_name) VALUES('$name')";

      $data=mysqli_query($con,$squery);
       if($data)
       {
       header("location:updatemain.php");
     
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
  }
 elseif(isset($_POST['delete']))
 {
    $name=$_POST["category"];
    $cid=$_POST["cid"];


  $squery="DELETE FROM category WHERE cat_id='$cid'";

  $data=mysqli_query($con,$squery);
  if($data)
    {
     ?>
     <script>
        alert("succesfull");

     </script>
     
     <?php 
     header("location:updatemain.php");  
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
