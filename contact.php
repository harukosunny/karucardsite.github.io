<?php
error_reporting(0);
session_start();
if (isset($_POST["submit"])) {
    $connection = new mysqli("localhost", "postges", "b1c3x39cur4z2", "postgres");

    $firstName = $connection->real_escape_string($_POST["firstName"]);
    $lastName = $connection->real_escape_string($_POST["lastName"]);
    $email = $connection->real_escape_string($_POST["email"]);
    $message = $connection->real_escape_string($_POST["messages"]);

    $data = $connection->query("INSERT INTO messages (firstName, lastName, email, messages) VALUES ('$firstName', '$lastName', '$email', '$message')");
    if ($data === false) {
        echo "Connection error!";
    } else {
        $message = '<div class="alert alert-danger">Check your inputs</div>';
    }
}
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
                                <li class="nav-link"><a href="http://localhost/project/index.php" class="nav-link">Home</a></li>
                                <li><a href="http://localhost/project/careers.php" class="nav-link">Careers</a></li>
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
                                <li><a href="http://localhost/project/contact.php" class="active">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Contact Us</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mb-5">
                        <span><?php echo $message; ?></span>
                        <form action="contact.php" name="contact" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" name="firstName" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lastName" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" name="email" class="form-control" placeholder="Email address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="messages" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" name="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">

                                </div>

                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Contact Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Address:</span>
                                    <span>34 Turkestan, Nur-Sultan, Kazakhstan</span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+7 777 777 74 85</span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                            </ul>
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
                                <p>Everything is virtual. No real. Everything is the future. </p>
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
    <script src="js/main.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>




    <script src="js/main.js"></script>
</body>

</html>