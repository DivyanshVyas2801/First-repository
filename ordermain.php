<?php
session_start();
include("connect.php");

$query = "SELECT * FROM `order_manager`";
$user_result = mysqli_query($con, $query);

if (isset($_POST['search'])) {
    $searchOrderID = $_POST['searchOrderID'];
    $date = $_POST['date'];

    $query = "SELECT * FROM `order_manager` WHERE 1";
    if (!empty($searchOrderID)) {
        $query .= " AND `order_id` = '$searchOrderID'";
    } elseif (!empty($date)) {
        $query .= " AND `Date` = '$date'";
    }

    $searchResult = mysqli_query($con, $query);
    if ($searchResult) {
        $se = mysqli_num_rows($searchResult);
    } else {
        echo "Query Error: " . mysqli_error($con);
        exit;
    }
} else {
    $se = mysqli_num_rows($user_result); // Set the number of orders to total orders initially
    $searchResult = $user_result; // Set search result to all orders initially
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>ORDER DETAILS</title>
    <link rel="stylesheet" type="text/css" href="css/order.css"/>
    
</head>
<body>
   
<header>
    <h1 class="logo">ZAYKA</h1>
    <nav class="naviagation">
        <a href="">HOME</a>
        <a href="#">MEMBER</a>
        <a href="#">CATEGORY</a>
        <a href="#">MENU </a>
        <a href="logout.php"><button class="btnLogin-popup" type="submit" value="logout" name="logout">logout</button></a>
    </nav>
</header>
   
<div class="main">
    <form method="post" action="">
        <label for="searchOrderID">Search by Order ID:</label>
        <input type="text" id="searchOrderID" name="searchOrderID">
        <label for="searchOrderID"> OR Search by DATE:</label>
        <input type="date" id="date" name="date">
        <input type="submit" name="search" value="Search">
    </form>
    <br>
</div>

<?php
if ($se > 0) {
    ?>
    <div class="table-list " class="col-lg-12">
        <table border="2">
            <tr>
                <th>order id</th>
                <th>customer name</th>
                <th>phone no</th>
                <th>address</th>
                <th>date</th>
                <th>pay mode</th>
                <th>orders</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($searchResult)) {
                echo "
                <tr>
                    <td>$row[order_id]</td>
                    <td>$row[Full_name]</td>
                    <td>$row[phone_number]</td>
                    <td>$row[address]</td>
                    <td>$row[Date]</td>
                    <td>$row[pay_mode]</td>
                    <td>
                        <table class='table text-center table-dark'>
                            <thead>
                                <tr>
                                    <th scope='col'>item_name</th>
                                    <th scope='col'>price</th>
                                    <th scope='col'>quantity</th>
                                </tr>
                            </thead>
                            <tbody>";
                            $order_query = "SELECT * FROM `user_orders` WHERE `order_id`='$row[order_id]'";
                            $order_result = mysqli_query($con, $order_query);
                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                echo "
                                <tr>
                                    <td>$order_fetch[item_name]</td>
                                    <td>$order_fetch[price]</td>
                                    <td>$order_fetch[quantity]</td>
                                </tr>";
                            }
                            echo "
                            </tbody>
                        </table>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
    <?php
} else {
    echo "No orders found.";
}

$userprofile = $_SESSION['user_name'];
if (!$userprofile) {
    header("location:login.php");
}
?>
    
</body>
</html>
