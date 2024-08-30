<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $contact_number = $_POST['contact_number'];
    $image_path = ''; 
    $username = $_SESSION['username']; 
    $duration = $_POST['duration'];

    // File upload handling
    if ($_FILES['image']['error'] === 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $image_path = $target_file;

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check !== false) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        } else {
            echo "File is not an image.";
            exit();
        }
    }

    // Perform database insertion
    include_once('../config.php');

    $sql = "INSERT INTO products (product_name, description, price, contact_number, image_path,duration, seller_username) VALUES ('$product_name', '$description', '$price', '$contact_number', '$image_path','$duration', '$username')";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Product added successfully")</script>'; 
        header('location: ../User-Admin.php');

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
