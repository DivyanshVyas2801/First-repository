<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>welcme to admin</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
    <h1 class="logo"><ion-icon name="restaurant"></ion-icon> ZAYKA</h1>
    <nav class="naviagation clearfix">
        <a href="#">HOME</a>
        <a href="#">MEMBER</a>
        <a href="#">CATEGORY</a>
        <a href="#">MENU </a>
        <a href="logout.php"><button class="btnLogin-popup" type="submit" value="logout" name="logout">logout</button></a>


    </nav>
    <a href="#" class="icon" onclick="slideshow()"><i class="fa fa-bars"></i></a>
   
    <section class="team">
        <div class="container">
            <h2> ADMIN OPERATION </h2>

        </div>
        <div class="team-content">
            <div class="box">
                <img src="images/employee.png" />
                <a href="employee.php">EMPLOYEE</a>

            </div>
            <div class="box">
                <img src="images/category.png" />
                <a href="updatemain.php">CATEGORY</a>

            </div>
            <div class="box">
                <img src="images/menu.png" />
                <a href="menumain.php">MENU</a>

            </div>
            <div class="box">
                <img src="images/order.png" />
                <a href="ordermain.php">ORDER</a>

            </div>

        </div>

    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="text/javascript">
        function slideshow() {
            var x = document.getElementById('check-class');
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

        }


    </script>
    <?php
    $userprofile=$_SESSION['user_name'];
    if($userprofile==true)
    {
 
    }
    else{
      header("location:login.php");
    }
    ?>

</body>
</html>