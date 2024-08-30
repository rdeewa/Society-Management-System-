<?php
// Retrieve and display chat messages from the database

// Establish database connection (replace with your database credentials)
include_once('../config.php');


$sql = "SELECT * FROM chat_messages ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['sender'] . ":</strong> " . $row['message'] . "</p>";
    }
} else {
    echo "<p>No messages available</p>";
}

$conn->close();
?>
