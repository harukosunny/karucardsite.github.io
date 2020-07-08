<?php
error_reporting(0);
session_start();

if (isset($_POST["register"])) {
    $connection = new mysqli("localhost", "postges", "b1c3x39cur4z2", "postgres");

    $firstName = $connection->real_escape_string($_POST["firstName"]);
    $lastName = $connection->real_escape_string($_POST["lastName"]);
    $email = $connection->real_escape_string($_POST["email"]);
    $password = sha1($connection->real_escape_string($_POST["password"]));

    $data = $connection->query("INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')");

    if ($data === false) {
        echo "Connection error!";
    } else {
        echo "Your have been signed up - please now Log In";
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
                                                    echo '<a class="dropdown-item nav-link" href="http://localhost/project/login.php"> Log in </a>';
                                                } ?>
                                            </a>
                                            <a class="dropdown-item nav-link" href="signout.php">Log out</a>

                                        </div>
                                    </div>
                                </li>
                                <li class="active"><a href="http://localhost/project/index.php">Home</a></li>
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
                                <li><a href="http://localhost/project/contact.php" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('images/bj.jpg')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container site-section">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-6">
                    <span class="text-primary">What We do</span>
                    <h2 class="mb-4">The technology for the future generation</h2>
                    <p>What are our main activities?</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-1">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-contents">
                            <h2>Ambiance</h2>
                            <p>This atmosphere is like traveling to all countries of the world at one time.</p>
                            <p><a href="#" class="more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-1">
                        <img src="images/ia.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-contents">
                            <h2>Community</h2>
                            <p>Our society will completely change your worldview and you will become more motivated.</p>
                            <p><a href="#" class="more">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-1">
                        <img src="images/ff.jpg" alt="Image" class="img-fluid">
                        <div class="feature-1-contents">
                            <h2>Cyberization</h2>
                            <p>Here cyber processes take place, which makes the world more cyber punk.</p>
                            <p><a href="#" class="more">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section section-2">
            <div class="container">
                <div class="row justify-content-center text-center mb-5 section-2-title">
                    <div class="col-md-6">
                        <span class="text-primary">Our Features</span>
                        <h2 class="mb-4">Science is what really matters</h2>
                        <p>Fact by fact, step by step, result by result.</p>
                    </div>
                </div>
            </div>
            <div class="container site-section">
                <div class="row align-items-stretch feature-2">
                    <div class="col-lg-9 feature-2-img">
                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-3 feature-2-contents pl-lg-5">
                        <div class="fixed-content">
                            <span class="caption">01.</span>
                            <h3 class="mb-5">Look ahead</h3>
                            <p>Look at the world not in pink glasses, but in virtual, nano, sensory glasses or in our modern lenses with which some employees do not even have to use computers in our office.</p>
                            <p>Join us and be 50 steps ahead.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container site-section">
                <div class="row align-items-stretch feature-2">
                    <div class="col-lg-9 feature-2-img order-lg-2">
                        <img src="images/d.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-3 feature-2-contents pr-lg-5">
                        <div class="fixed-content">
                            <span class="caption">02.</span>
                            <h3 class="mb-5">Let go of the standards</h3>
                            <p>In our line, you will change your thinking 360 degrees. Everything will become possible for you.</p>
                            <p>Just investing and collaborating with us, seeing our ways, you won’t believe that it was possible.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container site-section">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-6">
                    <span class="text-primary">Investment in the future</span>
                    <h2 class="mb-4">Our strengths</h2>
                    <p>Officially, we can provide you with our new qualified services.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 mr-auto pr-lg-5">
                            <div class="feature-3">
                                <h3>Dream welcome</h3>
                                <p>With the help of our database, without any clear plans, you can expand your idea and make your dream come true</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto pl-lg-5">
                            <div class="feature-3">
                                <h3>Rare gift</h3>
                                <p>If your project or startup is unique judging by the analysis of professionals, then all our services will be free for you</p>
                            </div>
                        </div>


                        <div class="col-lg-6 mr-auto pr-lg-5">
                            <div class="feature-3">
                                <h3>Resource contribution</h3>
                                <p>By investing only resources, you can, with enough resources, see what can be made of these materials.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto pl-lg-5">
                            <div class="feature-3">
                                <h3>Green project</h3>
                                <p>There are many bonuses for green projects</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section section-4">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-7">
                        <blockquote class="testimonial-1">
                            <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                            <p>This company is a new life and a fresh breath for all people.</p>
                            <cite><span class="text-black">Steven Jobs</span> &mdash; <span class="text-muted">Co-Founder</span></cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/q.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">March 30, 2020</span>
                                <a href="#">
                                    <h2>4 latest technology for future generation</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/post_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">May 17, 2020</span>
                                <a href="#">
                                    <h2>New sensor technology</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/r.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">June 3, 2020</span>
                                <a href="#">
                                    <h2>New company at the EXPO</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/i.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">June 7, 2020</span>
                                <a href="#">
                                    <h2>Smartphones with an unusual design</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mb-5">
                        <form action="index.php" method="post">
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
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" name="register" class="btn btn-block btn-primary text-white py-3 px-5" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <div class="post-entry-1 h-100">
                                <a href="https://www.inform.kz/ru/astana-ekspo-2017-pereimenovana-i-peredana-vo-vladenie-mintorgovli_a3597908#:~:text=%C2%AB%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0%20%D0%AD%D0%9A%D0%A1%D0%9F%D0%9E%2D2017%C2%BB%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B0%20%D0%B8%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D0%BD%D0%B0%20%D0%B2%D0%BE%20%D0%B2%D0%BB%D0%B0%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%9C%D0%B8%D0%BD%D1%82%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%BB%D0%B8,-24%20%D0%94%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8F%202019&text=%D0%9D%D0%A3%D0%A0%2D%D0%A1%D0%A3%D0%9B%D0%A2%D0%90%D0%9D.,%2C%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D0%B5%D1%82%20%D0%9C%D0%98%D0%90%20%C2%AB%D0%9A%D0%B0%D0%B7%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%C2%BB.">
                                    <img src="images/login.png" alt="Image" class="img-fluid">
                                </a>
                                <div class="post-entry-1-contents">
                                    <span class="meta">Already have an account?</span>
                                    <a href="#">
                                        <h2>Click below to log in</h2>
                                    </a>
                                    <a href="http://localhost/project/login.php" class="more">Log in</a>
                                </div>
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
                                </script> karu bank technologies with <i class="icon-heart text-danger" aria-hidden="true"></i></a>
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