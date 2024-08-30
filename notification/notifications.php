<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Notifications and Events</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Notifications</h3>
                <ul class="list-group">
                    <?php
                    // Connect to the database (replace these values with your database credentials)
                    include_once('../config.php');

                    // Retrieve notifications from the database
                    $sql = "SELECT * FROM notifications ORDER BY created_at DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<li class="list-group-item">' . $row["message"] . '</li>';
                        }
                    } else {
                        echo '<li class="list-group-item">No notifications available</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Events</h3>
                <ul class="list-group">
                    <?php
                    // Retrieve events from the database
                    $sql_events = "SELECT * FROM events ORDER BY created_at DESC LIMIT 5"; // Fetch latest 5 events
                    $result_events = $conn->query($sql_events);

                    if ($result_events->num_rows > 0) {
                        while ($row_event = $result_events->fetch_assoc()) {
                            // Display event notification
                            echo '<li class="list-group-item">';
                            echo '<div class="notification">';
                            echo '<h3>' . $row_event['message'] . '</h3>';
                            echo '<img src="EventA/' . $row_event['image_path'] . '" alt="Event Image" style="width: 100%;">';
                            echo '</div>';
                            echo '</li>';
                        }
                    } else {
                        echo '<li class="list-group-item">No events available</li>';
                    }
                    
                    $conn->close();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
