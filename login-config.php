<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    include_once('config.php');
    
    // Query the database for the user
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // Verify the user's password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role'];

        // Redirect the user based on role
        if ($user['role'] === 'admin') {
            header('Location: User-Admin.php');
        } else if ($user['role'] === 'shop') {
            header('Location: User-shop.php');
        } else if ($user['role'] === 'user') {    
            header('Location: User.php');
        }else if ($user['role'] === 'superadmin') {    
            header('Location: superadmin.php');
        }
        else {
            header('Location: login.php');
        }
    }
    else {
        echo "Invalid username or password";
    }

    mysqli_close($conn);
}
else{
        // Clear all session variables
        session_unset();
    
        // Destroy the session
        session_destroy();
        
        // Redirect to the login page or any other desired page
        header('Location: login.php');
        exit();
}
?>
