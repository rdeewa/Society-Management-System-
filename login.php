<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custome CSS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="CSS/login.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="logo"><img src="img/society-logo.png" alt=""></div>
    <div class="login-box">
        <form action="login-config.php" method="post">
            <h2>Login</h2>
            
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="text" name="username"  required>
                <label>Username</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password"required>
                <label>Password</label>
                <div class="input-line"></div>
            </div>
            <div class="remember-forgot">
                 <a href="#">Forgot Password?</a>
            </div>
            <button type="submit"><a href="home.html"></a>Login</button>
        </form>
    </div>
</body>
</html>
    


