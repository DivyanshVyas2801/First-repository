<?php
session_start();
include("connect.php");
$s=mysqli_query($con,"SELECT * FROM category ");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>menu updated</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    
</head>
<body>
   
<header>
        <h1 class="logo">ZAYKA</h1>
        <nav class="naviagation">
            <a href="#">HOME</a>
            <a href="#">MEMBER</a>
            <a href="#">CATEGORY</a>
            <a href="#">MENU </a>
            <a href="logout.php"><button class="btnLogin-popup" type="submit" value="logout" name="logout">logout</button></a>
            
        </nav>
    </header>
         <div class="wrapper">
            <div class="form-box umenu">
                <h2>UPDATED MENU</h2>
                <form action="menu.php" method="POST">
                    <div class="input-box">
                        <span class="icon"> <ion-icon name="pencil-outline"></ion-icon></span>
                        <input type="text" name="dishname"/>
                        <label>DISH</label>

                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="apps-outline"></ion-icon> </span>
                        <input type="text" name="cat_id"  id="myTextbox"/>
                        <select id="myDropdown" onchange="updateTextbox()">
                        <?php
                        while($r=mysqli_fetch_array($s))
                        {
                            ?>
                            <option value="<?php echo $r['cat_id'] ?>"><?php echo $r['cat_name'];?></option>
                            <?php
                        }
                        ?>
                        </select>
                        <label>CATEGORY</label>
                        <script>
                             function updateTextbox() {
                             // Get the selected option value
                             var dropdown = document.getElementById("myDropdown");
                             var selectedOption = dropdown.options[dropdown.selectedIndex].value;

                             // Update the textbox value
                             var textbox = document.getElementById("myTextbox");
                             textbox.value = selectedOption;
                             }
                         </script>

                    </div>
                    
                    <div class="input-box">
                        <span class="icon"><ion-icon name="card-outline"></ion-icon> </span>
                        <input type="number" name="price" />
                        <label>PRICE </label>

                    </div>
                    <button class="btn" name="add">ADD</button>
                    <button class="btn" name="update">UPDATE</button>
                    <button class="btn" name="delete">DELETE</button>
                    <button class="btn" name="search">SEARCH</button>
                   

                  
      
          </div>
             </div>
                    </form>
                    <div class="table-list">
        <table border="4"  >
            <tr colspan="5">
                <th >DISH</th>
                <th >CAT_ID</th>
                <th >PRICE</th>
            </tr> 
    </div>  
         <?php
         $result=mysqli_query($con,"SELECT * FROM menu");
         while($res=mysqli_fetch_array($result)){
            echo'<tr>';
             echo'<td >'.$res['dish']." ".'</td>';
             echo'<td >'.$res['cat_id']." ".'</td>';
             echo'<td >'.$res['dish_price']." ".'</td>';

            echo'</tr>';
         }
        
         ?>
        </table>
        <?php
        $userprofile=$_SESSION['user_name'];
        if($userprofile==true)
        {
     
        }
        else{
          header("location:login.php");
        }
        ?>
         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>