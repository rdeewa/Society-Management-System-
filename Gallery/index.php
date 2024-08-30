<div class="container ">
    <h1 class="mt-5">Gallery</h1>
    <div class="row">
        <?php
        session_start();
        // Fetch and display gallery images from the database
        include_once("../config.php");

        $sql = "SELECT * FROM gallery_images order by id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4'>";
                echo "<div class='card mt-3'>";
                // Fixed dimensions for the image
                echo "<img class='card-img-top' src='manegemnet/" . $row['image_path'] . "' alt='" . $row['image_name'] . "' style='width: 300px; height: 200px; object-fit: fill;'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>" . $row['image_name'] . "</p>";
                
                // Check if user is admin and display delete button
                if ($_SESSION['role'] === 'admin') {
                    echo "<form action='manegemnet/delete.php' method='post'>";
                    echo "<input type='hidden' name='image_id' value='" . $row['id'] . "'>";
                    echo "<button type='submit' class='btn btn-danger'>Delete</button>";
                    echo "</form>";
                }
                
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No images found.</p>";
        }

        $conn->close();
        ?>
    </div>
</div>
