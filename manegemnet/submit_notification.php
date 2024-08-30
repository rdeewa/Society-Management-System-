<?php
// Connect to the database (replace these values with your database credentials)
include_once('../config.php');


// Insert notification into the database
$message = $_POST['message'];
$sql = "INSERT INTO notifications (message) VALUES ('$message')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Notification submitted successfully")</script>'; 
    header('location: ../User-Admin.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
