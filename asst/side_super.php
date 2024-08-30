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
                            <a href="#" class="nav-link link-dark" id="Vadmin">
                                View Admin
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark" id="Vshop">
                                View Shop
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark" id="Ashop">
                                ADD Shop
                            </a>
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
            </div>

            <?php include_once('asst/script_super.php'); ?>

                       




