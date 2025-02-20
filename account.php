
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    // Redirect user if not logged in
    header("Location: ./signin.php");
    exit();
}

// Fetch session variables
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$height = $_SESSION['height'];  // Assuming height is in cm
$weight = $_SESSION['weight'];  // Assuming weight is in kg
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$membership = $_SESSION['membership'];
$facilities = $_SESSION['facilities'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
$expirationDate = $_SESSION['expirationDate'];


// Calculate BMI
$heightInMeters = $height / 100;  // Convert height to meters
$bmi = $weight / ($heightInMeters * $heightInMeters);  // BMI formula

// Health comment based on BMI value
if ($bmi < 18.5) {
    $healthComment = "You are underweight. It's important to consult with a healthcare provider to ensure you're maintaining a healthy weight.";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $healthComment = "You have a normal weight. Keep up the good work with your healthy lifestyle!";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $healthComment = "You are overweight. Consider consulting with a healthcare provider to discuss a healthy weight loss plan.";
} else {
    $healthComment = "You are obese. It's important to consult with a healthcare provider for advice on weight management and overall health.";
}

// Assuming expirationDate is also stored in session
$expirationDate = isset($_SESSION['expirationDate']) ? $_SESSION['expirationDate'] : 'Not Available'; // Default value if not set

// Estimate Body Fat Percentage (using a simplified formula)
$bodyFatPercentage = (1.20 * $bmi) + (0.23 * $age) - 16.2;

// Calculate Lean Body Mass (LBM)
$leanBodyMass = $weight - ($bodyFatPercentage / 100 * $weight);

// Calculate BMR using Mifflin-St Jeor equation
if ($gender == 'male') {
    $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
} else {
    $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) - 161;
}

// Assume a moderately active activity factor (1.55)
$activityFactor = 1.55;
$caloricNeeds = $bmr * $activityFactor;
?>





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
                
                
                li><a href="./class-details.html">Classes</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                   
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
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                      <h2></h2>
                        <h2><br>
                          DASHBOARD</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad" style="background-color: #000; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6 offset-xl-3">
                <div class="leave-comment" style="background-color: #222; padding: 30px; border-radius: 8px;">
                    <div class="container">
                        <h2 style="color: #fff; font-size: 64px; font-weight: bold; text-align: center;">Welcome, <?php echo $name ?>!</h2>
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="text-align: center; margin-top: 10px; font-size: 24px;"><strong>Email:</strong> <?php echo $email ?></li>
                            <li style="text-align: center; margin-top: 10px; font-size: 24px;"><strong>Phone:</strong> <?php echo $phone; ?></li>
                            <li style="text-align: center; margin-top: 10px; font-size: 24px;"><strong>Address:</strong> <?php echo $address; ?></li>
                            <div class="section-title chart-calculate-title" style="margin-top: 20px;">
                                <span style="border-top: 2px solid #fff; display: block; width: 50px; margin: 0 auto;"></span>
                                <h2 style="color: #fff; text-align: center; font-size: 36px; margin-top: 10px;">YOUR BODY INFORMATION</h2>
                            </div>
                            <li style="font-size: 24px;"><strong>Height:</strong> <?php echo $height ?> cm</li>
                            <li style="font-size: 24px;"><strong>Weight:</strong> <?php echo $weight ?> kg</li>
                            <li style="font-size: 24px;"><strong>Age:</strong> <?php echo $age ?></li>
                            <li style="font-size: 24px;"><strong>Gender:</strong> <?php echo $gender ?></li>
                            <li style="font-size: 24px;"><strong>Membership:</strong> <?php echo $membership ?></li>
                            <li style="font-size: 24px;"><strong>Facilities:</strong> <?php echo $facilities ?></li>
                            <li style="font-size: 24px;"><strong>Expiration Date:</strong> <?php echo $expirationDate ?></li>
                        </ul>

                        <!-- BMI Box -->
                        <div style="background-color: #333; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">Your BMI: <?php echo number_format($bmi, 2) ?></h3>
                        </div>

                        <!-- Body Fat Percentage Box -->
                        <div style="background-color: #333; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">Body Fat Percentage: <?php echo number_format($bodyFatPercentage, 2) ?> %</h3>
                        </div>

                        <!-- Lean Body Mass Box -->
                        <div style="background-color: #333; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">Lean Body Mass: <?php echo number_format($leanBodyMass, 2) ?> kg</h3>
                        </div>

                        <!-- BMR Box -->
                        <div style="background-color: #333; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">BMR: <?php echo number_format($bmr, 2) ?> kcal/day</h3>
                        </div>

                        <!-- Caloric Needs Box -->
                        <div style="background-color: #333; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">Caloric Needs: <?php echo number_format($caloricNeeds, 2) ?> kcal/day</h3>
                        </div>

                        <!-- Health Comment Box -->
                        <div style="background-color: #444; padding: 15px; margin-top: 20px; border-radius: 8px; text-align: center;">
                            <h3 style="color: #fff;">Health Comment:</h3>
                            <p style="color: #ddd;"><?php echo $healthComment ?></p>
                        </div>

                        <a href="signin.php" style="color: #fff; background-color: #333; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 20px; display: inline-block;">Logout</a>
                        <a href="mem_update.php" style="color: #fff; background-color: #333; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top: 20px; display: inline-block;">Update</a>

                    </div>
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

