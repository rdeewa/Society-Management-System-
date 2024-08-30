<?php
// process_add_user.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include_once '../config.php';

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $name = $_POST['name'];
    $room_no = $_POST['room_no'];
    $wing = $_POST['wing'];
    $phone_no = $_POST['phone_no'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (username, password, role, name, room_no, wing, phone_no) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("sssssss", $username, $hashed_password, $role, $name, $room_no, $wing, $phone_no);
    if ($stmt->execute()) {
        // User added successfully
        header("Location: ../User-Admin.php");
        exit();
    } else {
        // Error occurred
        echo "Error: " . $conn->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect back to the add user page if the form is not submitted
    // header("Location: add_user.php");
    exit();
}
?>
