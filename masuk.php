<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="icon" href="">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body class="li">        
        <div class="login">
        <form action="ceklogin.php" method="post">
            <br>
            <center><img src="images/logo sistem.png" width="280px" height="50px"></center>
            <div class="text">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="username" required placeholder="Username"/>
            </div>
            <div class="text">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" required placeholder="Password"/>
            </div>
            <input class="btn" type="submit" name="login" value="Login">
        </form>
        </div>
    </body>
</html>