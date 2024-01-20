
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>login-register</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" /> 
   
</head>

<body>
   
    <header>
        <h1 class="logo">ZAYKA</h1>
        <nav class="naviagation">
            <a href="#">HOME</a>
            <a href="#">MEMBER</a>
            <a href="#">CATEGORY</a>
            <a href="#">MENU </a>
            <button class="btnLogin-popup">logout</button>
            
        </nav>
    </header>
    <div class="wrapper">
    <div class="form-box register">
        <form action="admin_login.php" method="post">
        <h2>LOGIN</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required/>
                <label>email</label>

            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon> </span>
                <input type="password" name="password" required/>
                <label>password</label>

            </div>
            <button  class="btn" name="LOGIN">LOGIN</button>
        </form>
    </div>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>