
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
    <link rel="stylesheet" href="header2.css">
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
                    <a href="home2.php">
                        <li>Home</li>
                    </a>
                    
                    <a href="jobvacancies.php">
                        <li>Vacancies</li>
                    </a>
                    <a href="searchjob.php">
                        <li>Search Job</li>
                    </a>
                    <a href="employer.php">
                        <li>Employers</li>
                    </a>
                    <a href="feedback.php">
                        <li>Feedback</li>
                    </a>
                </ul>
            </div>
            <div class="user"></div>
            </div>
            <div class="sign-btn-container">
                <div class="profiler"> </i></div>
                <a href="" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Logout<?php } ?></div>
                </a>
               
            </div>
        </div>
    </header>
</body>

</html>