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
                                <li><a href="http://localhost/project/index.php" class="nav-link">Home</a></li>
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
                                <li class="active"><a href="http://localhost/project/about.php" class="nav-link">About</a></li>
                                <li class="nav-link"><a href="http://localhost/project/blog.php" class="nav-link">Blog</a></li>
                                <li><a href="http://localhost/project/contact.php" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('images/fork.jpg')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>About Us</h1>
                            <p>About the activities of our modern company</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <h2>Our History</h2>
                        <p>The company was founded in 2017 with the rapid development of technology in IT, robotics and nanotechnology.</p>
                        <p>Since then, the company began to develop rapidly and collaborate with many companies to develop technologies and start-ups for young scientists, geniuses and engineers.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                        <img src="images/hero_2.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <h2>Competitive Company</h2>
                        <p>The company is engaged in rare activities and is sponsored by the state. Having invested your startups with the help of our professionals, you will quickly raise high results by creating a creative invention that other companies
                            would never succeed.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center text-center mb-5 section-2-title">
                    <div class="col-md-6">
                        <span class="text-primary">Our Team</span>
                        <h2 class="mb-4">Meet Our Team</h2>
                        <p>Our company consists of diverse, amazing and popular scientists who help for the benefit of the development of our civilization and do not want to become famous due to this.</p>
                    </div>
                </div>
                <div class="row align-items-stretch">

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/samurai.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>fsociety</h2>
                                <p>2016 revolution master</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/devil.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>civilup</h2>
                                <p>up your mind</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="#">
                                <img src="images/ninja.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">Founder</span>
                                <h2>nothingmatter</h2>
                                <p>only science can help</p>
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
                            <p>I never thought that Kazakhstan would develop so quickly. It's all with the help of your unique company Karu. When I first heard about this company, I was surprised that no one had thought of doing it the way they were before.</p>
                            <cite><span class="text-black">Mark Zuckerberg</span> &mdash; <span class="text-muted">Media magnate, Internet entrepreneur, Philanthropist and Co-Founder</span></cite>
                        </blockquote>
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
                                    <li><a href="abou.php">About Us</a></li>
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

                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                karu bank technologies with <i class="icon-heart text-danger" aria-hidden="true"></i> </a>

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