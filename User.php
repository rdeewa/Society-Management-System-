<?php
// Start the session
session_start();

// Check if the user is not logged in (session variables are not set)
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    // Redirect the user to the login page
    header('Location: login.php');
    exit(); // Stop script execution
}

if ($_SESSION['role'] !== 'user') {
  // Redirect the user to a page indicating they don't have access
  header('Location: login.php');
  exit(); // Stop script execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/boot.css"> 
    <link rel="stylesheet" href="icon/icons.css">   
    <link rel="shortcut icon" href="img/society-logo.png" type="image/x-icon">

</head>
<body style="height:100vh">
  <!-- nav bar -->
<nav class="navbar bg-body-tertiary flex-nowrap">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/head-logo.png" alt="Logo" width="13%" class="d-inline-block ms-5 h align-text-top">
    </a>
    <a class="navbar-brand" href="#">
      <h1 class="fs-3"><?php echo $_SESSION['username']; ?></h1>
    </a>
    
  </div>
</nav>

<?php
include_once('asst/sidebar.php');
?>


</body>
<script src="javascript/boot.js"></script>
</html>