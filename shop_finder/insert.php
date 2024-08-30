<?php
// Include config file
include_once '../config.php';

// Define variables and initialize with empty values
$name = $shopname = $address = $phone_no = $work = $password = '';
$name_err = $shopname_err = $address_err = $phone_no_err = $work_err = $password_err = '';

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } else {
        $name = $input_name;
    }
    
    // Validate shopname
    $input_shopname = trim($_POST["shopname"]);
    if (empty($input_shopname)) {
        $shopname_err = "Please enter a shop name.";     
    } else {
        $shopname = $input_shopname;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if (empty($input_address)) {
        $address_err = "Please enter an address.";     
    } else {
        $address = $input_address;
    }
    
    // Validate phone number
    $input_phone_no = trim($_POST["phone_no"]);
    if (empty($input_phone_no)) {
        $phone_no_err = "Please enter a phone number.";     
    } else {
        $phone_no = $input_phone_no;
    }
    
    // Validate work
    $input_work = trim($_POST["work"]);
    if (empty($input_work)) {
        $work_err = "Please enter a work.";     
    } else {
        $work = $input_work;
    }
    
    // Validate password
    $input_password = trim($_POST["password"]);
    if (empty($input_password)) {
        $password_err = "Please enter a password.";     
    } else {
        $password = $input_password;
    }
    
    // Check input errors before inserting into database
    if (empty($name_err) && empty($shopname_err) && empty($address_err) && empty($phone_no_err) && empty($work_err) && empty($password_err)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare an insert statement
        $sql = "INSERT INTO shop (name, shopname, address, phone_no, work, password) VALUES (?, ?, ?, ?, ?, ?)";
        
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_shopname, $param_address, $param_phone_no, $param_work, $param_password);
            
            // Set parameters
            $param_name = $name;
            $param_shopname = $shopname;
            $param_address = $address;
            $param_phone_no = $phone_no;
            $param_work = $work;
            $param_password = $hashed_password;
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: ../superadmin.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
