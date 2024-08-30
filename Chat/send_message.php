<?php

include('../config.php');
$message = $_POST['message'];

session_start();
$username = $_SESSION['username'];

$sql = "INSERT INTO chat_messages (sender, message) VALUES ('$username', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
