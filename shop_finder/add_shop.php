<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Shop Onwer</h2>
        <form action="shop_finder/insert.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="shopname">Shop Name:</label>
                <input type="text" class="form-control" id="shopname" name="shopname" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone_no">Phone Number:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" required>
            </div>
            <div class="form-group">
                <label for="work">Work:</label>
                <input type="text" class="form-control" id="work" name="work" required>
            </div>
            <div class="form-group">
                <label for="work">password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
