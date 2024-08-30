<?php
session_start();

// Check if user is logged in and has admin role
if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

    include_once("../config.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Define folder to upload images
    $uploadDir = 'uploads/';

    // Check if the uploads directory exists, create it if not
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Loop through uploaded files
    $uploadedImages = $_FILES['images'];
    $numFiles = count($uploadedImages['name']);
    $uploadedFileNames = [];

    for ($i = 0; $i < $numFiles; $i++) {
        $fileName = $uploadedImages['name'][$i];
        $tmpFilePath = $uploadedImages['tmp_name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Generate a unique filename to prevent overwriting existing files
        $uniqueFilename = uniqid() . '.' . $fileType;
        $uploadPath = $uploadDir . $uniqueFilename;

        // Check if file is a valid image
        $isValidImage = getimagesize($tmpFilePath) !== false;

        if ($isValidImage) {
            // Move the uploaded file to the uploads directory
            if (move_uploaded_file($tmpFilePath, $uploadPath)) {
                // Store the uploaded file path in an array
                $uploadedFileNames[] = $uploadPath;

                // Insert image details into the database
                $imageDescription = $_POST['image_description']     ; // Assuming image_description is an array
                $uploaderUsername = $_SESSION['username'];

                $query = "INSERT INTO gallery_images (image_name, image_description, uploader_username, image_path) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ssss", $fileName, $imageDescription, $uploaderUsername, $uploadPath);
                $stmt->execute();
            }
        }
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect back to the admin gallery page after upload
    header('Location: ../User-Admin.php');
    exit();
} else {
    // If the form was not submitted via POST method, redirect to homepage or display an error message
    header('Location: index.php');
    exit();
}
?>
