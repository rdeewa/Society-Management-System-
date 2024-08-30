<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if image file is selected
    if (isset($_FILES['image'])) {
        $message = $_POST['message'];
        
        // File details
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];

        // Check if file is uploaded without errors
        if ($fileError === 0) {
            // Store uploaded file to a permanent location
            $fileDestination = 'uploads/' . $fileName;
            move_uploaded_file($fileTmpName, $fileDestination);

            include('../config.php');

            // Prepare SQL statement to insert message and file details
            $sql = "INSERT INTO events (message, image_path) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $message, $fileDestination);
            $stmt->execute();

            // Close connection
            $stmt->close();
            $conn->close();

            echo "Event created successfully";
            header('location:../User-Admin.php');
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "Please select an image file";
    }
} else {
    echo "Access denied";
}
?>
