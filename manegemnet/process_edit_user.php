<?php
// Include the database connection file
include_once '../config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $userId = $_POST['user_id'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    // Prepare and execute the update query
    $sql = "UPDATE users SET username=?, role=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $role, $userId);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        header("Location: ../User-Admin.php");
    } else {
        echo "Error updating user.";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
