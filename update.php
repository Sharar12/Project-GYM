<?php
session_start();
if (!isset($_SESSION['Member_id'])) {
    // Redirect user if not logged in
    header("Location: ./account.php");
    exit();
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$id = $_SESSION['Member_id'];
$height = $_SESSION['height'];
$weight = $_SESSION['weight'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];
$membership = $_SESSION['membership'];
$facilities = $_SESSION['facilities'];
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
                  
                <li><a href="./services.html">Services</a></li>
                <li><a href="./joinourteam.html">Join Our Team</a></li>
                
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
                      <h2>UPDATE YOUR INFORMATION</h2>
                        
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
                        <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method = "post">
                            <input type="text" name="Name" placeholder="Name">
                            <input type="text" name="Email" placeholder="Email">
                            <input type="password" name="Password" placeholder="Password">
                            
							<div class="section-title chart-calculate-title">
                        <span></span>
                        <h2>YOUR BODY INFORMATION</h2>
                    </div>
                    <div class="chart-calculate-form">
                        
                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="Height" placeholder="Height / cm">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="Weight" placeholder="Weight / kg">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="Age" placeholder="Age">
                                </div>
                                
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit">Update</button>
                                </div>
                            </div>
							
                        </form>
                    </div>
					
					
                    
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

<?php
include("GYM-DBMS.php");

session_start();
if (!isset($_SESSION['id'])) {
    // Redirect user if not logged in
    header("Location: ./account.php");
    exit();
}

// Get user information from session
$id = $_SESSION['id'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
    $height = filter_input(INPUT_POST, "Height", FILTER_SANITIZE_SPECIAL_CHARS);
    $weight = filter_input(INPUT_POST, "Weight", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "Age", FILTER_SANITIZE_SPECIAL_CHARS);

    $membership = "Premium";
    $facilities = "Unlimited equipments
    Personal trainer
    Weight losing classes
    Month to mouth
    No time restriction";

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($password) || empty($height) || empty($weight) || empty($age)) {
        echo "Please fill in all required fields.";
    } else {
        // Prepare and execute the SQL statement to update user information
        $sql = "UPDATE members 
                SET Name='$name', Email='$email', Password='$password', Height='$height', Weight='$weight', Age='$age', Membership='$membership', Facilities='$facilities' 
                WHERE id='$id'";

        // Attempt to execute the SQL statement
        if (mysqli_query($conn, $sql)) {
            echo "Your information has been updated successfully!";
            // Redirect to signin.php
            header("Location: ./signin.php");
            exit(); // Ensure script execution stops after redirection
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }
}
?>
