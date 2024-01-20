<?php
session_start();
  include("connect.php");
  $result=mysqli_query($con,"SELECT * FROM employee");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>EMPLOYEE_DEATAILS</title>
    <link rel="stylesheet" type="text/css" href="css/employee.css" /> 
   
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
    <div class="form-box register">
        <form action="admin_register.php" method="POST">
        <h2>REGISTRATION</h2>
             <div class="input-box">
                <span class="icon"> <ion-icon name="person"></ion-icon></span>
                <input type="number" name="username" />
                <label>ID</label>

            </div>
            <div class="input-box">
                <span class="icon"> <ion-icon name="mail"></ion-icon></span>
                <input type="text" name="email" required/>
                <label>name</label>

            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon> </span>
                <input type="text" name="password" required/>
                <label>position</label>

            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon> </span>
                <input type="number" name="salary" required/>
                <label>SALARY</label>

            </div>
            <button  class="btn" name="register">REGISTER</button>
    </div>
    </div>
</form>
    <div class="table-list">
        <table border="4"  >
            <tr colspan="5">
                <th >ID</th>
                <th >NAME</th>
                <th >POSITION</th>
                <th >SALARY</th>
                <th>DELETE</th>
            </tr> 
    </div>  
         <?php
         while($res=mysqli_fetch_array($result)){
            echo'<tr>';
             echo'<td >'.$res['E_id']." ".'</td>';
             echo'<td >'.$res['E_name']." ".'</td>';
             echo'<td >'.$res['position']." ".'</td>';
             echo'<td >'.$res['salary']."  ".'</td>';
             echo"<td><a href=\"delete.php?rn=$res[E_id]\" onclick=\"return confirm('are you sure')\"><input type='submit' value='delete'></a></td>";

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
