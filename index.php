<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts from google -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!-- Custome CSS -->
    <link rel="stylesheet" href="CSS/index.css?v=<?php echo time(); ?>">
    <!-- boxicons css -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
</head>
<body>


<header class="sticky">
    <div class="logo">
        <a href="#">
            <img src="img/head-logo.png" alt="logo1">
        </a>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#About-us">About US</a></li>
            
        </ul>

        <a href="login.php">
            <button class="btn-signin">sign-in</button>
        </a>

    </nav>
</header>

<div class="titles" id="home">
    <div class="data">
        <!-- <h1>HAPPY COMMUNITY LIVING!</h1> -->
        <h1>Find your next<br>perfect solution to <span>live</span></h1>
        <p>Our mission is to engage in issues that are of <br>concern to individuals</p>
        <a href="contect.php"><button>Schedule Free Demo</button></a>
    </div>
    <div class="wel-img">
        <img src="img/welcome.png" alt="wel-img">
    </div>
</div>



<section id="Services">
<div class="container">
    <div class="data">
        <h2>We Simplify the complex!</h2>
        <p>For every problems we have created a digital solutions. </p>
    </div>

    <div class="container-card">
        <div class="card-box">
            <img src="img/society-m.png" alt="">
            <div class="card-layer">
                <h4>Society Member </h4>
                <h4>Management</h4>
                <p>Easily manage your society members with our intuitive member management system.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="card-box">
            <img src="img/store.png" alt="">
            <div class="card-layer">
                <h4>Outer Shop Member </h4>
                <h4>Management</h4>
                <p>Shop owners can manage their shop information, engage with society members, receive inquiries.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="card-box">
            <img src="img/live-chat1.png" alt="">
            <div class="card-layer">
                <h4>Realtime-live</h4>
                <h4>chatting system</h4>
                <p>Connect with society members and outer shops in real-time with our built-in chat system.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="card-box">
            <img src="img/event.jpg" alt="">
            <div class="card-layer">
                <h4>Event </h4>
                <h4>Management</h4>
                <p>Updating, Organize and manage society events with our reliable system</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </div>
</div>
</section>



<!-- Video of My_Society -->
<section class="infovideo" id="About-us">
    <div class="slider-wrapper">
        <!-- Add your video slides here -->
        <div class="slide">
            <video autoplay muted loop>
                <source src="img/intro-1.mp4" type="video/mp4">
            </video>
        </div>
        <div class="slide">
            <video autoplay muted loop>
                <source src="img/intro-2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="slide">
            <video autoplay muted loop>
                <source src="img/intro-3.mp4" type="video/mp4">
            </video>
        </div>
        <div class="slide">
            <video autoplay muted loop>
                <source src="img/intro-4.mp4" type="video/mp4">
            </video>
        </div>
        <div class="slide">
            <video autoplay muted loop>
                <source src="img/intro-5.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>


<!-- start details here -->

<section class="detail">
    <div class="cont-detail">
        <h1>My Society</h1>
        <p>What makes the best society management platform</p>
    </div>

<!-- My_Society details section -->
<div class="all-data">
    <div class="soc-detail">
        <h2>Society Members</h2>
        <p>Society members can leverage the integrated chat system, report maintenance issues, participate in community discussions, and access essential society announcements.</p>
        <ul>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Integrated chat system</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Report maintenance issues</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Participate in community discussions</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Access essential society announcements</li>
        </ul>
    </div>

    <div class="shop-detail">
        <h2 class="title">Shop Owners</h2>
        <p>Shop owners can manage their shop information, engage with society members, receive inquiries, and list products for sale within the community.</p>
        <ul>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Manage shop information</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Engage with society members</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Receive inquiries</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> List products for sale</li>
        </ul>
    </div>
</div>
<div class="all-data1">
    <div class="chat">
        <h2>Real-time Chat</h2>
        <p>The integrated chat system allows society members to communicate with each other in real-time, making it easy to stay connected and informed.</p>
        <ul>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Integrated chat system</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Report maintenance issues</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Participate in community discussions</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Access essential society announcements</li>
        </ul>
    </div>


    <div class="e-m">
        <h2 class="title">Event Management</h2>
        <p>Society members can view a gallery directly through the website, making it easy to track a event update.</p>
        <ul>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Manage shop information</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Engage with society members</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> Receive inquiries</li>
            <li><i class='bx bxs-checkbox-checked' style='color:#00ff37' ></i> List products for sale</li>
        </ul>
    </div>
</div>
</section>

<!-- Footer section  -->
<footer>
    <div class="footer-inner">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec arcu nec tellus ornare volutpat.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>123 Main Street<br>City, State 12345<br>Email: info@example.com<br>Phone: 123-456-7890</p>
            <div class="footer-social">
                <a href="#" target="_blank">Facebook</a>
                <a href="#" target="_blank">Twitter</a>
                <a href="#" target="_blank">Instagram</a>
            </div>
        </div>
    </div>
    <p class="copyright">&copy; 2024 My Society. All rights reserved.</p> 
</footer>   

<script type="text/javascript" src="javascript/index.js"></script>  
</body>
</html>