<?php
include("connect.php");
$result=mysqli_query($con,"SELECT * FROM category ");
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<title>updated-category</title>
<link rel="stylesheet" type="text/css" href="css/category.css" />


   
</head>
<body>
<header>
        <h1 class="logo">ZAYKA</h1>
        <nav class="naviagation">
        <a href="admin.php">HOME</a>
            <a href="Apnirasoi.html">Main page</a>
            <a href="#">About Us</a>
            <a href="#">MENU </a>
            <a href="logout.php"><button class="btnLogin-popup" type="submit" value="logout" name="logout">logout</button></a>
            
        </nav>
    </header>
        <div class="wrapper">
            <div class="form-box ucategory">
                <h2>UPDATE CATEGORY</h2>
                <form action="update.php" method="POST">
                    <div class="input-box">
                        <span class="icon"> <ion-icon name="pencil-outline"></ion-icon></span>
                        <input type="number" name="cid" />
                        <label>cid</label>

                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="apps-outline"></ion-icon> </span>
                        <input type="text" name="category"/>
                        <label>category </label>

                    </div>
                    <button class="btn" name="add">ADD</button>
                    <button class="btn" name="delete">DELETE</button>
                    <button class="btn" name="search">SEARCH</button>

                    </form>
                        
      
            </div>
        </div>
             <div class="table-list">
                <table border="2">
                    <tr>
                     <th>cid</th>
                     <th>categroy</th>
                    </tr>

            </div>
            <?php
             while ($res=mysqli_fetch_array($result)){
                echo'<tr>';
                echo'<td>'.$res['cat_id'].'</td>';
                echo'<td>'.$res['cat_name'].'</td>';
                echo'</tr>';
             }
             ?>
             </table>

        
         <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
</body>
</html>