<?php 
SESSION_START();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link href="mynewcart.css" rel="stylesheet" type="text/css">
       <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    </head>
    <body>
       <div class="container">
        <div class="navbar" id="navi">
            <div class="menu" id="nav"> 
                <div class="icon" id="logo">
                    <h2 class="logo"><ion-icon name="restaurant-outline"></ion-icon>ZayKa</h2>
                </div>
            <ul>
                <li><a href="Apnirasoi.html">Home</a></li>
                <li><a href="cuisins.html">Cuisines</a></li>
                <li><a href="examplemenu.php">Menu</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="crlogin.html">Login</a></li>
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
                ?>
             <button class="btn-cart">Cart
                <ion-icon name="cart-outline"></ion-icon>
             </button >
             <div class="cart-count"><?php echo $count; ?></div>
            </ul>
            <div class="search" id="btn1">
                <input class="srch" type="search" name="" placeholder="Enter dish name">
                <a href="#"><button class="btn">Search</button></a>
            </div>
            </div>
        </div>
        <div class="heading" id="heading">
            <h1>&mdash; My Cart &mdash;</h1>
        </div>
     
    
       
        <table class="table">     
  <thead>
                          <tr>
                            <th scope="col">serial no.</th>
                            <th scope="col">item name</th>
                            <th scope="col">item price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col"></th>
                          </tr>
  </thead>
  <tbody>
  <?php
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key =>$value)
    {
        $sr=$key+1;
                            echo"
                            <tr>
                              <td>$sr</td>
                              <td>$value[Item_name]</td>
                              <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                              <td>
                               <form action='managecart.php' method='POST'>
                                <input class='text-center iquantity' name='mod_quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'</td>
                                <input type='hidden' name='Item_name' value='$value[Item_name]'>
                               </form>
                               <td class='itotal'></td>
                              <td>
                              <form action='managecart.php' method='POST'>
                               <button name='remove_item' class='btn btn-outline-danger btn-sm'>remove</button></td>
                               <input type='hidden' name='Item_name' value='$value[Item_name]'>
                               </form>
                               </tr>
                              ";
    }
}
?>  
  </tbody>
</table>


    <div class="total" id="total">
        <h4>Total        : </h4>
        <h5 id="gtotal"></h5>
        <?php
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        {
        ?>
        <form action="purchase.php" method="post">
         <div class="form-group">
          <label >full name</label>
          <input type="text" name="full_name" class="form-control" required>
         </div>
         <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" placeholder="Enter mobile no." pattern="[0-9]{10}" class="form-control" title="number must be 10 characters long" required>
         </div>
         <div class="form-group">
          <label >address</label>
          <input type="text" name="address" class="form-control" required>
         </div>
         <div class="form-group">
          <label >date</label>
          <input type="date" name="date" class="form-control" required>
         </div>
         <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_mode" value="cod" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
               cash on delivery
              </label>
         </div>
         <br>
          <button class="btn btn-primary btn-block" name="purchase"> make purchase</button>

        </form>
        <?php 
        }
        ?>
        
    </div>

<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }    
    subTotal();
    </script>
</body>
</html>
