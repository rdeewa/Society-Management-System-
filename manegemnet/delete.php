<?php
session_start();

// Check if user is logged in and has admin role
if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

// Check if image ID is provided
if (!isset($_POST['image_id'])) {
    header('Location: gallery.php'); // Redirect back to gallery page if no image ID is provided
    exit();
}

// Include database connection
include_once("../config.php");

// Sanitize the image ID
$image_id = mysqli_real_escape_string($conn, $_POST['image_id']);

// Retrieve image information from the database
$sql = "SELECT image_path FROM gallery_images WHERE id = '$image_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image_path = $row['image_path'];

    // Delete image file from server
    unlink('../manegemnet/' . $image_path);

    // Delete image record from the database
    $delete_sql = "DELETE FROM gallery_images WHERE id = '$image_id'";
    if ($conn->query($delete_sql) === TRUE) {
        // Image and record deleted successfully
        header('Location: ../User-Admin.php'); // Redirect back to gallery page
        exit();
    } else {
        // Error occurred while deleting image record
        echo "Error: " . $delete_sql . "<br>" . $conn->error;
    }
} else {
    // Image with the provided ID not found in the database
    echo "Image not found.";
}

$conn->close();
?>
