<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmation</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Order Confirmation</h1>
  
  <?php
  include'db_connect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cart = $_POST["cart"];
    $cartItems = json_decode($cart, true);

    // Process the cart items and save the order details to the database
if (!empty($cartItems)) {
  // Insert the order details into the 'orders' table
  $totalAmount = 0;
  $orderDate = date('Y-m-d H:i:s');
  $stmt = $db->prepare("INSERT INTO orders (user_id, total_amount, order_date) VALUES (?, ?, ?)");
  $stmt->execute([$user_id, $totalAmount, $orderDate]);
  $order_id = $db->lastInsertId(); // Get the ID of the inserted order

  // Insert each item in the cart to the 'order_items' table
  $stmt = $db->prepare("INSERT INTO order_detail (order_id, product_id, quantity) VALUES (?, ?, ?)");
  foreach ($cartItems as $item) {
      $product_id = $item['product_id'];
      $quantity = $item['quantity'];
      $stmt->execute([$order_id, $product_id, $quantity]);
  }

  echo "<p>Thank you! Your order has been placed.</p>";
} else {
  echo "<p>Your cart is empty.</p>";
}
  }

   
  ?>

</body>
</html>
