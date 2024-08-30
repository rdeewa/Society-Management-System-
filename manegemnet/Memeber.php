<div class="container mt-5">
    <h2>User Management</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Room No</th>
                <th>Wing</th>
                <th>Phone No</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include config file
            include_once('../config.php');

            // Fetch users from database
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['room_no'] . "</td>";
                    echo "<td>" . $row['wing'] . "</td>";
                    echo "<td>" . $row['phone_no'] . "</td>";
                    echo "<td>" . $row['role'] . "</td>";
                    echo "<td>";
                    echo "<a href='manegemnet/delete_user.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm ml-1' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No users found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>
