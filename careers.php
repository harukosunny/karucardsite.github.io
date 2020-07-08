<?php
error_reporting(0);
session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <title>karu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/careers.js"></script>
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-lg-5">
                        <nav class="site-navigation text-right ml-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li class="nav-link">
                                    <div class="dropdown">
                                        <button class="nav-link text-light btn btn-transparent dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <a class="nav-link">Account</a>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a><?php
                                                if (isset($_SESSION["email"])) {
                                                    echo $_SESSION["email"];
                                                } else {
                                                    echo '<a class="dropdown-item" href="http://localhost/project/login.php"> Log in </a>';
                                                } ?>
                                            </a>
                                            <a class="dropdown-item" href="signout.php">Log out</a>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-link"><a href="http://localhost/project/index.php">Home</a></li>

                                <li><a href="http://localhost/project/careers.php" class="active">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="site-logo">
                            <a href="http://localhost/project/index.php">karu</a>
                        </div>


                        <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="site-navigation text-left mr-auto " role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                <li class="nav-link"><a href="http://localhost/project/about.php" class="nav-link">About</a></li>
                                <li class="nav-link"><a href="http://localhost/project/blog.php" class="nav-link">Blog</a></li>
                                <li><a href="http://localhost/project/contact.php" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Careers</h1>
                            <p>Join our team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="careers-1">
                            <span class="roles">Software Engineering</span>
                            <h3><a href="vacancies.php">Senior Backend Software Engineer</a></h3>
                        </div>

                        <div class="careers-1">
                            <span class="roles">Big Data Analyse</span>
                            <h3><a href="vacancies.php">Data Developer</a></h3>
                        </div>


                        <div class="careers-1">
                            <span class="roles">Media Technologies</span>
                            <h3><a href="vacancies.php">Junior Media Analyst</a></h3>
                        </div>

                        <div class="careers-1">
                            <span class="roles">IT Management</span>
                            <h3><a href="vacancies.php">Service Management Specialist</a></h3>
                        </div>
                        <div id="careers">
                            <?php

                            $db = mysqli_connect("localhost", "postges", "b1c3x39cur4z2", "postgres");
                            $sql = "SELECT * FROM careers LIMIT 2";
                            $result = mysqli_query($db, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='careers-1'>";
                                    echo "<span class='roles'>" . $row['block'] . "</span>";
                                    echo "<h3><a href='vacancies.php'>" . $row['job'] . "</a></h3>";
                                    echo "</div>";
                                }
                            } else {
                                echo "There no more vacancies";
                            }

                            ?>
                        </div>
                        <button class="btn btn-primary text-white">Show more vacancies</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container site-section">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-6">
                    <span class="text-primary">Be part of talented people</span>
                    <h2 class="mb-4">What Are The Benifits For Joining Us</h2>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 mr-auto pr-lg-5">
                            <div class="feature-3">
                                <h3>Competitive Compensation</h3>
                                <p>There will be a lot of competition in our company, with sufficient effort we will pay you more and raise you and ensure stable career growth</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto pl-lg-5">
                            <div class="feature-3">
                                <h3>Generous insurance coverage</h3>
                                <p>Since the work of an engineer can be dangerous, we provide our employees with insurance</p>
                            </div>
                        </div>


                        <div class="col-lg-6 mr-auto pr-lg-5">
                            <div class="feature-3">
                                <h3>Commuter Benefits</h3>
                                <p>In our company you will travel a lot and meet with different people, and we pay for your every trip ourselves</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto pl-lg-5">
                            <div class="feature-3">
                                <h3>Gift for every project</h3>
                                <p>For each completed and productive project, bonuses and gifts await you</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Everything is virtual. No real. Everything is the future.</p>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h2 class="footer-heading mb-4">Features</h2>
                                <ul class="list-unstyled">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <?php
                                    $conn =  mysqli_connect("localhost", "postges", "b1c3x39cur4z2", "postgres");
                                    $query = mysqli_query($conn, "select * from users where email='" . $_SESSION['email'] . "'");
                                    $email = $_SESSION["email"];
                                    if ($email == 'admin@domain.com') {


                                        if (!isset($_POST['upload'])) {

                                            echo "<li><a href='employees.php'>Employee Data</a></li>";
                                        }
                                    }

                                    ?>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">

                        <div class="mb-5">
                            <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                            <form action="#" method="post" class="footer-suscribe-form">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                                    </div>
                                </div>
                        </div>


                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </form>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> karu bank technologies with <i class="icon-heart text-danger" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




    <script src="js/main.js"></script>


</body>

</html>