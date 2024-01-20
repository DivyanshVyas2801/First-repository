<?php
SESSION_START();
$server="localhost";
$username="root";
$password=" ";
$database="customer_login";
$con=mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_error())
{
    echo"<script>
    alert ('cannot connect to database');
    window.location.href='mynewcart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
       $query1="INSERT INTO `order_manager`(`Full_name`, `phone_number`, `address`, `Date`, `pay_mode`) VALUES ('$_POST[full_name]','$_POST[phone]','$_POST[address]','$_POST[date]','$_POST[pay_mode]')";
       if(mysqli_query($con,$query1))
       {
        $order_id=mysqli_insert_id($con);
        $query2="INSERT INTO `user_orders`(`order_id`, `item_name`, `price`, `quantity`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con,$query2);
        if($stmt)
        {
           mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$price,$quantity);
           foreach($_SESSION['cart'] as $key => $values)
           {
            $item_name=$values['item_name'];
            $price=$values['price'];
            $quantity=$values['quantity'];
            mysqli_stmt_execute($stmt);
           }
           unset($_SESSION['cart']);
           echo"<script>
           alert ('order placed');
           window.location.href='examplemenu.php';
           </script>";
        }
        else{
            echo"<script>
             alert ('sql query prepare error');
               window.location.href='mynewcart.php';
              </script>";

        }
    }
       else{
        echo"<script>
        alert ('cannot connect to database');
        window.location.href='mynewcart.php';
        </script>";

       }

    }
}

?>