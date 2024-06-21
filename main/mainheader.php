
<!-- <?php
        session_start();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mainHeader</title>
    <link rel="stylesheet" href="mainheader.css">
    <script src="home.js"></script>
</head>

<body>
    <section>
        <div class="log-main">
    </section>
    <header>
        <div class="head-container">
            <div class="head-sector">
                <div class="logo">
                    <img src="../images/infojobslogo.png" alt="">
                </div>
                
            <div class="nav-btns">
                <ul>
                    <a href="home.php">
                        <li>Home</li>
                    </a>
                    
                    <a href="employermain.php">
                        <li>Employer</li>
                    </a>
                    <a href="jobseeker.php">
                        <li>Job Seeker</li>
                    </a>
                    <a href="contactus.php">
                        <li>Contact Us</li>
                    </a>
                    <a href="aboutus.php">
                        <li>About Us</li>
                    </a>
                </ul>
            </div>
            <div class="user"></div>
            </div>
            <div class="sign-btn-container">
                <div class="profiler"> </i></div>
                <a href="login.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Login<?php } ?></div>
                </a>
                <a href="signup.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Sign up<?php } ?></div>
                </a>
                <a href="./user.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Profile<?php } ?></div>
                </a>
                <a href="./logout.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Log out<?php } ?></div>
                </a>
            </div>
        </div>
    </header>
</body>

</html>