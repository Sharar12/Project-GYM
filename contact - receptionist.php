

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                  
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.html">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
          <a href="./signin.php"><i class="  fa fa-user"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About Us</a></li>
                              
                            <li><a href="./services.html">Services</a></li>
                            <li><a href="./joinourteam.html">Join Our Team</a></li>
                            <li class="active"><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                          <a href="./signin.php"><i class="  fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/personaltrainer.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                      <h2>SIGN UP</h2>
                        <h2><br>
                          as Receptionist</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 offset-xl-3">
                <div class="leave-comment">
                    <form  method="post"  action="contact - p_receptionist_php.php">
                        <input type="text" name="Name" placeholder="Name" required>
                        <input type="email" name="Email" placeholder="Email (must be @gmail.com)" required>
                        <input type="password" name="Password" placeholder="Password (min 8 characters)" required>
                        <input type="text" name="Address" placeholder="Address" required>
                            <div class="col-sm-6">
                                        <input type="text" name="Phone" placeholder="Phone" required>
                            </div>
                        <div class="section-title chart-calculate-title">
                            <h2>YOUR BODY INFORMATION</h2>
                        </div>
                        <div class="chart-calculate-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="Experience" placeholder="Experience" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="Age" placeholder="Age" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="Schedule" style="font-size: 16px; font-weight: bold;">Schedule:</label>
                                    <select id="Schedule" name="Schedule" required 
                                        style="background-color: #333; color: white; border: none; padding: 10px; 
                                            border-radius: 15px; width: 100%; font-size: 14px; cursor: pointer;">
                                        <option value="" disabled selected>Select Schedule</option>
                                        <option value="9am-12pm">9:00 AM - 12:00 PM</option>
                                        <option value="12pm-3pm">12:00 PM - 3:00 PM</option>
                                        <option value="3pm-6pm">3:00 PM - 6:00 PM</option>
                                    </select>
                                </div>

                                <div class="col-sm-6" style="background-color: #333; padding: 10px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        <label for="Gender" style="display: block; font-weight: bold; color: white; margin-bottom: 8px;">Gender:</label>
                                        <div style="display: flex; gap: 10px; align-items: center;">
                                            <label style="color: white; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                                                <input type="radio" id="male" name="Gender" value="male" required style="width: 14px; height: 14px; margin: 0;"> Male
                                            </label>
                                            <label style="color: white; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                                                <input type="radio" id="female" name="Gender" value="female" required style="width: 14px; height: 14px; margin: 0;"> Female
                                            </label>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-lg-12" style="margin-top: 20px; display: flex; justify-content: center;">
                                    <button type="submit" name="submit" 
                                        style="background-color: #FFD700; color: white; border: none; padding: 10px 20px; 
                                            border-radius: 15px; font-size: 16px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        Submit
                                    </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

    <!-- Get In Touch Section Begin -->
    
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                          <a href="./signin.php"><i class="  fa fa-user"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Classes</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>



