<?php
include("connect.php");
$id=$_GET['rn'];
 $query="DELETE FROM employee WHERE E_id='$id'";
 $data=mysqli_query($con,$query);
 if($data)
 {
    header("location:employee.php");
 }
 else{
    echo "failed";
 }
?>