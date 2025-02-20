

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
            <a href="./signin.php"><i class="fa fa-user"></i></a>
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
                            <a href="./signin.php"><i class="fa fa-user"></i></a>
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
                        <h2>SIGN UP</h2>
                        <h2><br> as PREMIUM membership</h2>
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <input type="text" name="Name" placeholder="Name" required>
                            <input type="email" name="Email" placeholder="Email" required>
                            <input type="password" name="Password" placeholder="Password" required>
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
                                        <input type="text" name="Height" placeholder="Height / cm" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="Weight" placeholder="Weight / kg" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="Age" placeholder="Age" required>
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

                                    

                                    
                                    <div class="col-sm-6" style="background-color: #333; padding: 15px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        <label for="PaymentMethod" style="display: block; font-weight: bold; color: white; margin-bottom: 8px;">Payment Method:</label>
                                        <select id="PaymentMethod" name="PaymentMethod" required style="width: 100%; padding: 10px; background-color: black; color: white; border: none; border-radius: 10px; font-size: 16px; cursor: pointer; appearance: none;">
                                            <option value="" disabled selected style="background-color: black; color: white;">Select Payment Method</option>
                                            <option value="credit_card" style="background-color: black; color: white;">Credit Card</option>
                                            <option value="debit_card" style="background-color: black; color: white;">Debit Card</option>
                                            <option value="paypal" style="background-color: black; color: white;">PayPal</option>
                                            <option value="bank_transfer" style="background-color: black; color: white;">Bank Transfer</option>
                                            <option value="cash" style="background-color: black; color: white;">Cash</option>
                                        </select>
                                    </div>


                                </div>
                                
                                <div class="col-lg-12" style="margin-top: 20px; display: flex; justify-content: center;">
                                    <button type="submit" name="submit" 
                                        style="background-color: #FFD700; color: white; border: none; padding: 10px 20px; 
                                            border-radius: 15px; font-size: 16px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                                        Submit
                                    </button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="./signin.php"><i class="fa fa-user"></i></a>
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
    $height = filter_input(INPUT_POST, "Height", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $weight = filter_input(INPUT_POST, "Weight", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $age = filter_input(INPUT_POST, "Age", FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_input(INPUT_POST, "Gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, "Phone", FILTER_SANITIZE_NUMBER_INT);
    $membership = "PREMIUM";
    $PaymentMethod = filter_input(INPUT_POST, "PaymentMethod", FILTER_SANITIZE_SPECIAL_CHARS);
    $facilities = "Unlimited Equipments
    Personal trainer
    No time restriction
    1 Year Package
    Discount: 44.4%";
    $PaymentAmount = "Tk.20,000";

    // Calculate the expiration date (1 year from the current date)
    $currentDate = new DateTime();
    $expirationDate = $currentDate->add(new DateInterval('P1Y'))->format('Y-m-d'); // Adds 1 year

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($password) || empty($height) || empty($weight) || empty($age) || empty($gender) || empty($PaymentMethod) || empty($phone)  || empty($address)   || empty($PaymentAmount)) {
        echo "Please fill in all required fields.";
    } else {
        // Check if password is at least 8 characters long
        if (strlen($password) < 8) {
            echo "Password must be at least 8 characters long.";
        } else {
            // Prepare and execute the SQL statement using prepared statements to avoid SQL injection
            $stmt = $conn->prepare("INSERT INTO members (Name, Email, Password, Height, Weight, Age, Gender, Membership, Facilities, PaymentMethod, ExpirationDate, Phone, Address, payment_amount) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiiisssssiss", $name, $email, $password, $height, $weight, $age, $gender, $membership, $facilities, $PaymentMethod, $expirationDate, $phone, $address, $PaymentAmount);
            
            // Attempt to execute the SQL statement
            if ($stmt->execute()) {
                echo "You are registered successfully!";
            } else {
                error_log("Error: " . $stmt->error); // Log error for debugging
                echo "There was an error processing your registration. Please try again.";
            }
        }
    }
}
?>


