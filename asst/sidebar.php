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
                        <li>
                            <a href="#" class="nav-link link-dark" id="Gallery">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="Chat/index.php" class="nav-link link-dark">
                                Chat
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark" id="shop_finder">
                                Store
                            </a>
                        </li>
                        <li class="mb-1">

                            <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collape" aria-expanded="false">
                                Buy/Sell
                            </button>
                            <div class="collapse" id="dashboard-collape" style="margin-left: 30px;">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark nav-link" id="buy-pro">Add Product</a></li>
                                    <li><a href="#" class="link-dark nav-link" id="add-pro">Buy Product</a></li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark" id="Notification">
                                Notification
                            </a>
                        </li>
                        <li class="mb-1">
                            <?php if ($_SESSION['role'] === 'admin') : ?>
                                <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#updata-user" aria-expanded="false">
                                    Management
                                </button>
                                <div class="collapse" id="updata-user" style="margin-left: 30px;">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark nav-link" id="VMember">View Member</a></li>
                                        <li><a href="#" class="link-dark nav-link" id="EMember">Add Member</a></li>
                                        <li><a href="#" class="link-dark nav-link" id="AMember">Edit Member</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-toggle align-items-center  collapsed" data-bs-toggle="collapse" data-bs-target="#Mangement-user" aria-expanded="false">
                                    Update
                                </button>
                                <div class="collapse" id="Mangement-user" style="margin-left: 30px;">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="link-dark nav-link" id="Gallery-admin">Gallery</a></li>
                                        <li><a href="#" class="link-dark nav-link" id="Notification-admin">Notification</a></li>
                                        <li><a href="#" class="link-dark nav-link" id="EventA">Event</a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </li>
                        <li>
                            <a href="login-config.php" class="nav-link link-dark">
                                logout
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
                                    <?php if ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'user') : ?>
                                        <p><strong>Room No:</strong> <?php echo $user['room_no']; ?></p>
                                        <p><strong>Wing:</strong> <?php echo $user['wing']; ?></p>
                                    <?php endif; ?>
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

    <?php include_once('asst/script.php'); ?>