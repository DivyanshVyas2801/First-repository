<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link href="examplemenu.css" rel="stylesheet" type="text/css">
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
                <li><a href="#">Menu</a>
                <ul>
                    <li><a href="#south">South India</a></li>
                    <li><a href="#punjabi">Punjabi</a></li>
                    <li><a href="#gujrati">Gujrati</a></li>
                    <li><a href="#rj">Rajasthani</a></li>
                    <li><a href="#italian">Italian</a></li>
                    <li><a href="#chinese">Chinese</a></li>
                    <li><a href="#conti">Continental</a></li>
                    <li><a href="#bengali">Bengali</a></li>
                </ul></li>
                <li><a href="#">About Us</a></li>
                <li><a href="crlogin.html">Login</a></li>
                <?php
                $count=0;
                if(isset($_SESSION['cart']))
                {
                    $count=count($_SESSION['cart']);
                }
                ?>
             <button class="btn-cart"><a href="mynewcart.php">Cart
                <ion-icon name="cart-outline"></ion-icon></a>
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
            <h1>&mdash; Our Menu &mdash;</h1>
        </div>

    
        <div class="heading1" id="heading1">
            <a href="#"><h1>&mdash; South Indian &mdash;</h1></a>
        </div>

      
        <div class="south" id="south">
            <section1>
                <form action="managecart.php" method="POST">
                <img src="dosasouth.jpeg" height="350" width="350px" class="cart_img">
                <h2 class="food-title">&mdash; Masala Dosa &mdash;</h2>
                    <h3 class="food-price">Rs.150</h3>
                <p>Best masala stuffed dosa with cheese and paneer.Wide range of masala dosas</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Masala_dosa">
                <input type="hidden" name="Price" value="150">
                <input type="hidden" name="cart_img" value="dosasouth.jpeg">

</form>
</section1>

<section2>
                <form action="managecart.php" method="POST">
                <img src="idli.jpeg" height="350" width="350px" class="cart-img">
                <h2 class="food-title">&mdash; Idli &mdash;</h2>
                    <h3 class="food-price">Rs.50</h3>
                <p>Best masala stuffed dosa with cheese and paneer.Wide range of masala dosas</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Idli">
                <input type="hidden" name="Price" value="50">
</form>
</section2>


<section3>
    <form action="managecart.php" method="POST">
                <img src="vada.webp" height="350" width="350px" class="cart-img">
                <h2 class="food-title">&mdash; Vada &mdash;</h2>
                <h3 class="food-price">Rs.150</h3>
                <p>Enjoy the best taste of crispy vada and coconut chutney</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Vada">
                <input type="hidden" name="Price" value="150">
                </form>
                </section3>
            </div>

            <div class="heading2" id="heading2">
               <a href="#"><h1>&mdash; Punjabi &mdash;</h1></a>
              </div>
              <div class="punjabi" id="punjabi">
                <section1>
                <form action="managecart.php" method="POST">
                    <img src="chole kulche.jpeg" height="350" width="350px" class="cart-img">
                  <h2 class="food-title">&mdash; Chole-Kulche &mdash;</h2>
                  <h3 class="food-price">Rs.150</h3>
                    <p>A delicious bread tossed in butter along with tangy and spicy chole.</p>
                    <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Chole-Kulche">
                <input type="hidden" name="Price" value="150">
                    </form>
                    </section1>
                    
                    <section2>
                    <form action="managecart.php" method="POST">
                    <img src="tikka.jpeg" height="350" width="357px" class="cart-img">
                    <h2 class="food-title">&mdash; Paneer-Tikka &mdash;</h2>
                    <h3 class="food-price">Rs.150</h3>
                    <p>Punjabi appetizer made with cubes of paneer & veggies marinated with yogurt and spices.</p>
                    <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Paneer-tikka">
                <input type="hidden" name="Price" value="150">
                    </form>
                    </section2>
                    
                    <section3>
                    <form action="managecart.php" method="POST">
                    <img src="chaap.jpeg" height="350" width="350px" class="cart-img">
                    <h2 class="food-title">&mdash; Soya-Chaap &mdash;</h2>
                    <h3 class="food-price">Rs.150</h3>
                    <p> Marinate and Fry Soya with spicy masala and malai flavour</p>
                    <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Chaap">
                <input type="hidden" name="Price" value="150">
                    </form>
                    </section3>
                   
                    <section4>
                    <form action="managecart.php" method="POST">
                        <img src="makkasarso.webp" height="350" width="350px" class="cart-img">
                        <h2 class="food-title">&mdash;Makke-roti-Sarso-Saag&mdash;</h2>
                        <h3 class="food-price">Rs.150</h3>
                        <p>Leaves cooked in butter with spices such as garlic, ginger and chilli.</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Makke-di-roti-sarso-saag">
                <input type="hidden" name="Price" value="150">
                        </form>
                    </section4>
                        
                    <section5>
                    <form action="managecart.php" method="POST">
                        <img src="dalmakni.jpeg" height="350" width="357px" class="cart-img">
                        <h2 class="food-title">&mdash; Dal-Makhni &mdash;</h2>
                        <h3 class="food-price">Rs.150</h3>
                        <p>Fragrant and aromatic whole spices make this Dal Makhani more flavorful.</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Dal-Makhni">
                <input type="hidden" name="Price" value="150">
                        </form>
                        </section5>
                        
                        <section6>
                        <form action="managecart.php" method="POST">
                        <img src="rajma.jpeg" height="350" width="350px" class="cart-img">
                        <h2 class="food-title">&mdash; Rajma-Chawal &mdash;</h2>
                        <h3 class="food-price">Rs.150</h3>
                        <p>Mix the combo in your plate and bite your fingers along.</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Rajma-Chawal">
                <input type="hidden" name="Price" value="150">
                        </form>
                        </section6>
                </div>

                <div class="heading3" id="heading3">
                    <a href="#"><h1>&mdash; Gujrati &mdash;</h1></a>
                   </div>
                 
                   <div class="gujrati" id="gujrati">
                    <section1>
                    <form action="managecart.php" method="POST">
                        <img src="khandvi.jpeg" height="350" width="350px" class="cart-img">
                      <h2 class="food-title">&mdash; Khandvi &mdash;</h2>
                      <h3 class="food-price">Rs.150</h3>
                        <p>Soft, mushy, light and delightful.</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Khandvi">
                <input type="hidden" name="Price" value="150">
                        </form>
                        </section1>
                       
                        <section2>
                        <form action="managecart.php" method="POST">
                        <img src="undhiyu.jpeg" height="350" width="357px" class="cart-img">
                        <h2 class="food-title">&mdash; Undhiyu &mdash;</h2>
                        <h3 class="food-price">Rs.150</h3>
                        <p>Perfection with buttermilk, coconut and spices.</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Undhiyu">
                <input type="hidden" name="Price" value="150">
                        </form>
                        </section2>
                        
                        <section3>
                        <form action="managecart.php" method="POST">
                        <img src="locho.jpeg" height="350" width="350px" class="cart-img">
                        <h2 class="food-title">&mdash; Locho &mdash;</h2>
                        <h3 class="food-price">Rs.150</h3>
                        <p>Topped with butter, Sev, locho masala, cilantro, onion</p>
                        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Locho">
                <input type="hidden" name="Price" value="150">
                        </form>
                        </section3>
    </div>

    <div class="heading4" id="heading4">
        <a href="#"><h1>&mdash; Rajasthani &mdash;</h1></a>
       </div>
     
       <div class="rajesthani" id="rj">
        <section1>
        <form action="managecart.php" method="POST">
            <img src="rjbati.jpeg" height="350" width="350px" class="cart-img">
          <h2 class="food-title">&mdash; Dal-Bati &mdash;</h2>
          <h3 class="food-price">Rs.150</h3>
            <p>Served with a red chilli on top of it, and spicy garlic chutney with dry fruits like cashew.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Dal-Bati">
                <input type="hidden" name="Price" value="150">
            </form>
            </section1>
           
            <section2>
            <form action="managecart.php" method="POST">
            <img src="gatte.webp" height="350" width="357px" class="cart-img">
            <h2 class="food-title">&mdash; Shahi-Gatte &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>Roundels which are added to a curd based spicy gravy.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Shahi-Gatte">
                <input type="hidden" name="Price" value="150">
            </form>
            </section2>
            
            <section3>
            <form action="managecart.php" method="POST">
            <img src="kadhi.jpeg" height="350" width="350px" class="cart-img">
            <h2 class="food-title" name="dish_name">&mdash; Kadhi-Rice &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>Rajasthani kadhi is way spicier and mouth-watering</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Kadhi">
                <input type="hidden" name="Price" value="150">
            </form>
            </section3>
    </div>

    <div class="heading5" id="heading5">
        <a href="#"><h1>&mdash; Italian &mdash;</h1></a>
       </div>

       <div class="italian" id="italian">
        <section1>
        <form action="managecart.php" method="POST">
            <img src="pasta.jpeg" height="350" width="350px" class="cart-img">
          <h2 class="food-title">&mdash; Pasta &mdash;</h2>
          <h3 class="food-price">Rs.150</h3>
            <p>Tastiest pasty with tomato gralic hot pury.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Pasta">
                <input type="hidden" name="Price" value="150">
            </form>
            </section1>
           
            <section2>
            <form action="managecart.php" method="POST">
            <img src="itapizza.webp" height="350" width="357px" class="cart-img">
            <h2 class="food-title">&mdash; Pizza &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>Fresh pizza with thin crust and loaded veg cheese.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Pizza">
                <input type="hidden" name="Price" value="150">
            </form>
            </section2>
            
            <section3>
            <form action="managecart.php" method="POST">
            <img src="lasagna.jpeg" height="350" width="350px" class="cart-img">
            <h2 class="food-title">&mdash; Lasagna &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>Enjoy the cheese burst lasagna.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Lasagna">
                <input type="hidden" name="Price" value="150">
            </form>
            </section3>
            
            <section4>
            <form action="managecart.php" method="POST">
                <img src="itaburger.jpeg" height="350" width="350px" class="cart-img">
              <h2 class="food-title">&mdash; Burger &mdash;</h2>
              <h3 class="food-price">Rs.150</h3>
                <p>Cheese burger with potato tikki.</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Burger">
                <input type="hidden" name="Price" value="150">
                </form>
                </section4>
                
                <section5>
                <form action="managecart.php" method="POST">
                <img src="French_Fries.jpeg" height="350" width="357px" class="cart-img">
                <h2 class="food-title">&mdash; Potato-Fries &mdash;</h2>
                <h3 class="food-price">Rs.150</h3>
                <p>Crispy potato fries with flavoured chutney.</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Potato-Fries">
                <input type="hidden" name="Price" value="150">
                </form>
                </section5>
                
                <section6>
                <form action="managecart.php" method="POST">
                <img src="brusheta.jpeg" height="350" width="350px" class="cart-img">
                <h2 class="food-title">&mdash;  Bruschetta &mdash;</h2>
                <h3 class="food-price">Rs.150</h3>
                <p>Grilled bread topped with veggies, rubbed garlic and tomato mix.</p>
                <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Bruschetta">
                <input type="hidden" name="Price" value="150">
                </form>
                </section6>
    </div>

    <div class="heading6" id="heading6">
        <a href="#"><h1>&mdash; Chinese &mdash;</h1></a>
       </div>

       <div class="chinese" id="chinese">
        <section1>
        <form action="managecart.php" method="POST">
            <img src="chinoodle.webp" height="350" width="350px" class="cart-img">
          <h2 class="food-title">&mdash; Haka-Noodle &mdash;</h2>
          <h3 class="food-price">Rs.150</h3>
            <p>Haka noodles cooked with fresh veggis and sauces.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Haka-Noodle">
                <input type="hidden" name="Price" value="150">
            </form>
            </section1>
           
            <section2>
            <form action="managecart.php" method="POST">
            <img src="manchu.jpeg" height="350" width="357px" class="cart-img">
            <h2 class="food-title">&mdash; Manchurian &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>Great manchurian balls served with chinese purry.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Manchurian">
                <input type="hidden" name="Price" value="150">
            </form>
            </section2>
            
            <section3>
            <form action="managecart.php" method="POST">
            <img src="roll.jpeg" height="350" width="350px" class="cart-img">
            <h2 class="food-title">&mdash; Spring Roll &mdash;</h2>
            <h3 class="food-price">Rs.150</h3>
            <p>A crisp appetizer where shredded veggies are encased in thin sheets.</p>
            <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Spring-Roll">
                <input type="hidden" name="Price" value="150">
            </form>
            </section3>
</div>

<div class="heading7" id="heading7">
    <a href="#"><h1>&mdash; Continental &mdash;</h1></a>
   </div>

   <div class="conti" id="conti">
    <section1>
    <form action="managecart.php" method="POST">
        <img src="cheesesand.jpeg" height="350" width="350px" class="cart-img">
      <h2 class="food-title">&mdash; Cheese-Sandwich &mdash;</h2>
      <h3 class="food-price">Rs.150</h3>
        <p>Delicious double cheese veggies sandwich.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Cheese-Sandwich">
                <input type="hidden" name="Price" value="150">
        </form>
        </section1>
       
        <section2>
        <form action="managecart.php" method="POST">
        <img src="momo.jpeg" height="350" width="357px" class="cart-img">
        <h2 class="food-title">&mdash; MOMOS &mdash;</h2>
        <h3 class="food-price">Rs.150</h3>
        <p>Momos stuffed with cheese and corn.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Momos">
                <input type="hidden" name="Price" value="150">
        </form>
        </section2>
        
        <section3>
        <form action="managecart.php" method="POST">
        <img src="pancake.jpeg" height="350" width="350px" class="cart-img">
        <h2 class="food-title">&mdash; PanCake &mdash;</h2>
        <h3 class="food-price">Rs.150</h3>
        <p>Sweet pancake with honey and almond flavour.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Pancake">
                <input type="hidden" name="Price" value="150">
        </form>
        </section3>
</div>

<div class="heading8" id="heading8">
    <a href="#"><h1>&mdash; Bengali &mdash;</h1></a>
   </div>

   <div class="bengali" id="bengali">
    <section1>
    <form action="managecart.php" method="POST">
        <img src="shukto.webp" height="350" width="350px" class="cart-img">
      <h2 class="food-title">&mdash; Shukto &mdash;</h2>
      <h3 class="food-price">Rs.150</h3>
        <p>Combination of different vegetables like Brinjals, Bitter Gourd, Crunchy Drumsticks.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Shukto">
                <input type="hidden" name="Price" value="150">
        </form>
        </section1>
        
        <section2>
        <form action="managecart.php" method="POST">
        <img src="luchi.jpeg" height="350" width="357px" class="cart-img">
        <h2 class="food-title">&mdash; Luchi &mdash;</h2>
        <h3 class="food-price">Rs.150</h3>
        <p>Smaller sized, fluffy, deep-fried chapattis, with a golden glow.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Luchi">
                <input type="hidden" name="Price" value="150">
        </form>
        </section2>
        
        <section3>
        <form action="managecart.php" method="POST">
        <img src="pati.jpeg" height="350" width="350px" class="cart-img">
        <h2 class="food-title">&mdash; Patishapta &mdash;</h2>
        <h3 class="food-price">Rs.150</h3>
        <p>Batter of powdered rice & rolled with the preparation of coconut bits with sugar & khoya.</p>
        <button type="submit" name="Add_To_Cart">Add To Cart</button>
                <input type="hidden" name="Item_name" value="Patishapta">
                <input type="hidden" name="Price" value="150">
        </form>
        </section3>
</div>
            
</div>
</html>