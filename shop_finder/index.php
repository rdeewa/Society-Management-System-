<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>User Data</h2>
        <form method="GET" action="">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search by name" name="search">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div class="row mt-3">
            <?php
            // Include config file
            include_once '../config.php';

            // Fetch data from the database based on search input
            $search = $_GET['search'] ?? '';
            $sql = "SELECT * FROM shop WHERE name LIKE '%$search%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text"><strong>Shop Name:</strong> <?php echo $row['shopname']; ?></p>
                        <p class="card-text"><strong>Address:</strong> <?php echo $row['address']; ?></p>
                        <p class="card-text"><strong>Phone No:</strong> <?php echo $row['phone_no']; ?></p>
                        <p class="card-text"><strong>Work:</strong> <?php echo $row['work']; ?></p>
                        <p class="card-text"><strong><a href="complain.php">Message</a></strong>  </p>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<p>No data found</p>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
