    <div class="container" style="margin: 0%; padding: 0%; height: 90vh;">
        <div class="row h-100">
            <div class="col-3 h-100">
                <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 200px;height: 100%;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link link-dark active " onclick="location.reload()">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link link-dark" id="update" >
                                Update Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="login-config.php" class="nav-link link-dark  " >
                                Log-Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-9" id="contentArea">
                <div class="row">
                    <div class="col-6">
                        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
                        <p>Your role: <?php echo $_SESSION['role']; ?></p>
                        <p>This is the protected page content.</p>
                    </div>
                    <div class="col-6">
                        <?php





                        include_once('config.php');

                        // Retrieve the username from the session
                        $username = $_SESSION['username'];

                        // Prepare a SELECT statement to fetch user information
                        $sql = "SELECT * FROM users WHERE username = ?";
                        if ($stmt = $conn->prepare($sql)) {
                            // Bind the parameters
                            $stmt->bind_param("s", $username);

                            // Execute the prepared statement
                            $stmt->execute();

                            // Get the result
                            $result = $stmt->get_result();

                            // Check if the user exists
                            if ($result->num_rows > 0) {
                                // Fetch the user's information
                                $user = $result->fetch_assoc();

                        ?>
                                <!-- Display user information in HTML section -->
                                <div class="container mt-5">
                                    <h2>User Profile</h2>
                                    <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
                                    <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
                                    <p><strong>Role:</strong> <?php echo $user['role']; ?></p>
                                    <p><strong>Phone No:</strong> <?php echo $user['phone_no']; ?></p>
                                </div>
                        <?php
                            } else {
                                // User not found
                                echo "User not found";
                            }

                            // Close the statement
                            $stmt->close();
                        } else {
                            // Error preparing the statement
                            echo "Error: " . $conn->error;
                        }

                        // Close the database connection
                        $conn->close();
                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('asst/script_shop.php'); ?>

