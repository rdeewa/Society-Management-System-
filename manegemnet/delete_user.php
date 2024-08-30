<?php
// Include config file
include_once('../config.php');

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
    // Sanitize the user ID to prevent SQL injection
    $id = $_GET['id'];

    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind the parameters
        $stmt->bind_param("i", $id);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // User deleted successfully
            header('location:../User-Admin.php');
        } else {
            // Error occurred while deleting the user
            echo "Error deleting user: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error preparing the delete statement
        echo "Error: " . $conn->error;
    }
} else {
    // User ID is not provided in the URL
    echo "Invalid request";
}

// Close the database connection
$conn->close();
?>
