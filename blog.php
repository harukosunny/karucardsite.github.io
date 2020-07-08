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
                                <li class="active"><a href="http://localhost/project/blog.php" class="nav-link">Blog</a></li>
                                <li><a href="http://localhost/project/contact.php" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('images/cc.png')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h1>Our Blog</h1>
                            <p>Stay tuned.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://edgy.app/weirdest-smartphones-designs-2019">
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
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://www.inform.kz/ru/astana-ekspo-2017-pereimenovana-i-peredana-vo-vladenie-mintorgovli_a3597908#:~:text=%C2%AB%D0%90%D1%81%D1%82%D0%B0%D0%BD%D0%B0%20%D0%AD%D0%9A%D0%A1%D0%9F%D0%9E%2D2017%C2%BB%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B8%D0%BC%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0%D0%BD%D0%B0%20%D0%B8%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D0%BD%D0%B0%20%D0%B2%D0%BE%20%D0%B2%D0%BB%D0%B0%D0%B4%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%9C%D0%B8%D0%BD%D1%82%D0%BE%D1%80%D0%B3%D0%BE%D0%B2%D0%BB%D0%B8,-24%20%D0%94%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8F%202019&text=%D0%9D%D0%A3%D0%A0%2D%D0%A1%D0%A3%D0%9B%D0%A2%D0%90%D0%9D.,%2C%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D0%B5%D1%82%20%D0%9C%D0%98%D0%90%20%C2%AB%D0%9A%D0%B0%D0%B7%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%C2%BB.">
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
                            <a href="https://iotbusinessnews.com/2019/04/09/10441-how-new-sensor-technology-opens-up-for-smarter-presence-detection/#:~:text=New%20sensor%20technology%20can%20bring,construction%20and%20real%20estate%20sector.&text=The%20connection%20is%20made%20with,via%2C%20for%20example%2C%205G.">
                                <img src="images/post_2.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">May 17, 2020</span>
                                <a href="https://iotbusinessnews.com/2019/04/09/10441-how-new-sensor-technology-opens-up-for-smarter-presence-detection/#:~:text=New%20sensor%20technology%20can%20bring,construction%20and%20real%20estate%20sector.&text=The%20connection%20is%20made%20with,via%2C%20for%20example%2C%205G.">
                                    <h2>New sensor technology</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://www.financialexpress.com/industry/technology/over-the-next-10-years-these-technologies-will-change-your-life-here-is-the-list/1417843/">
                                <img src="images/post_4.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">March 30, 2020</span>
                                <a href="https://www.financialexpress.com/industry/technology/over-the-next-10-years-these-technologies-will-change-your-life-here-is-the-list/1417843/">
                                    <h2>4 latest technology for future generation</h2>
                                </a>
                                <a href="single.html" class="more">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://tengrinews.kz/money/1100-tselevyih-grantov-vyideleno-abiturientam-astana-it-404662/">
                                <img src="images/a.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">June 8, 2020</span>
                                <a href="https://tengrinews.kz/money/1100-tselevyih-grantov-vyideleno-abiturientam-astana-it-404662/">
                                    <h2>1,100 targeted grants</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://www.nytimes.com/article/iphone-costs.html">
                                <img src="images/b.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">May 7, 2020</span>
                                <a href="https://www.nytimes.com/article/iphone-costs.html">
                                    <h2>Your iPhone Costs Too Much</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://www.nytimes.com/2020/02/17/smarter-living/wirecutter/5-small-smart-devices-that-can-prevent-major-home-damage.html">
                                <img src="images/g.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">Feb 17, 2020</span>
                                <a href="https://www.nytimes.com/2020/02/17/smarter-living/wirecutter/5-small-smart-devices-that-can-prevent-major-home-damage.html">
                                    <h2>These Devices Can Prevent Major Home Damage and Save You Money</h2>
                                </a>
                                <a href="#" class="more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="post-entry-1 h-100">
                            <a href="https://tengrinews.kz/kazakhstan_news/13-milliardov-tenge-investitsiy-privlekli-startapyi-astana-381569/">
                                <img src="images/mu.jpeg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-entry-1-contents">
                                <span class="meta">October 14, 2019</span>
                                <a href="https://tengrinews.kz/kazakhstan_news/13-milliardov-tenge-investitsiy-privlekli-startapyi-astana-381569/">
                                    <h2>Astana Hub startups attracted more than 13 billion tenge of investments</h2>
                                </a>
                                <a href="single.html" class="more">Read More</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <span class="p-3">1</span>
                        <a href="blog2.php" class="p-3">2</a>

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