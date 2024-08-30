<style>
    /* Custom styles for cards */
    .card {
        margin-right: 10px;
        margin-top: 20px;
        margin-bottom: 20px; 
        width: calc(100% / 3 - 10px); 
        float: left; 
    }

    @media (max-width: 992px) {
        .card {
            width: calc(100% / 2 - 10px); 
        }
    }

    @media (max-width: 768px) {
        .card {
            width: 100%;
        }
    }
</style>

<?php
include_once('../config.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
        // Check if image path is available
        $imageSrc = isset($row['image_path']) ? 'Listing/' . $row['image_path'] : 'placeholder.jpg';

        // Check if duration is greater than 0
        if ($row['duration'] > 0) {
            echo "<div class='card'>";
            echo "<img src='" . $imageSrc . "' class='card-img-top' alt='Product Image' ' style='width: 300px; height: 250px; object-fit: fill; padding: 5px;  object-fit: fill;'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row['product_name'] . "</h5>";
            echo "<p class='card-text'>" . $row['description'] . "</p>";
            echo "<p class='card-text'>Price: Rs." . $row['price'] . "</p>";
            echo "<p class='card-text'>Duration: " . $row['duration'] . " days</p>";
            echo "<a href='tel:" . $row['contact_number'] . "' class='btn btn-primary'>Call to Buy</a>";
            echo "</div>";
            echo "</div>";
        }
    }
    echo "</div>"; // Close the row
    echo "<div class='alert alert-warning' role='alert'>No products available</div>";
} else {
    echo "<div class='alert alert-warning' role='alert'>No products available</div>";
}

$conn->close();
?>
