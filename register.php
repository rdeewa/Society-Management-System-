<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/register.css?v=<?php echo time(); ?>">
    
</head>
<body>
<div class="container">
    <form action="regsitration_cofig.php" method="post">
        <h2>Register Here!</h2>
        
        <div class="input-box">
            <input type="text" id="username" name="username" required>
            <label for="userName">Username:</label>
            <div class="input-line"></div>
        </div>


        <div class="input-box">
            <input type="password" id="password" name="password" required>
            <label for="password">Password:</label>
            <div class="input-line"></div>
        </div>
        
        <div class="input-box">
            <input type="text" id="role" name="role" required>
            <label for="role">role:</label>
            <div class="input-line"></div>
        </div>
        
        
        <button type="submit">Register</button>
    </form>
</div>
</body>
</html>
        
        

        
