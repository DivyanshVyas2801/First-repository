<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
    if(isset($_POST['Add_To_Cart']))
    {
      if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) 
      {
        if(isset($_SESSION['cart']))
        {
          $myitems=array_column($_SESSION['cart'],'Item_name');
          if(in_array($_POST['Item_name'],$myitems))
          {
            echo"<script>
            alert(' Item already added');
            window.location.href='examplemenu.php';
            </script>";
          }
          else
          {
          $count=count($_SESSION['cart']);
          $_SESSION['cart'][$count]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'],'Quantity'=>1);
          echo"<script>
            alert(' Item added');
            window.location.href='examplemenu.php';
            </script>";
          }
        }
        else
        {
         $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Price'=>$_POST['Price'], 'Quantity'=>1);
         echo"<script>
            alert(' Item added');
            window.location.href='examplemenu.php';
            </script>";
        }
     }
     else
     {
       echo"<script>
           alert('Please register yourself');
           window.location.href='apnirasoi.html';
           </script>";
     }
   }

    
  
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key=> $value)
        {
            if($value['Item_name']==$_POST['Item_name'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
             alert ('item removed');
             window.location.href='mynewcart.php';
             </script>";
            }
        }
    }
    if(isset($_POST['mod_quantity']))
    {
        foreach($_SESSION['cart'] as $key=> $value)
        {
            if($value['Item_name']==$_POST['Item_name'])
            {
            $_SESSION['cart'][$key]['Quantity']=$_POST['mod_quantity'];
            echo"<script>
             window.location.href='mynewcart.php';
             </script>";
            }
        }
    }
}
?>