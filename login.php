<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the login form
$email = $_POST['Email'];
$password = $_POST['Password'];

// Check in members table
$sql = "SELECT * FROM members WHERE Email = '$email' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Member found, login successful
    session_start();
    $row = $result->fetch_assoc();
    $_SESSION['role'] = "Member";
    $_SESSION['name'] = $row['Name'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['height'] = $row['Height'];
    $_SESSION['weight'] = $row['Weight'];
    $_SESSION['age'] = $row['Age'];
    $_SESSION['gender'] = $row['Gender'];
    $_SESSION['membership'] = $row['Membership'];
    $_SESSION['facilities'] = $row['Facilities'];
    $_SESSION['expirationDate'] = $row['ExpirationDate'];
    $_SESSION['phone'] = $row['Phone'];
    $_SESSION['address'] = $row['Address'];
    header("Location: ./account.php");
    exit();
} else {
    // If not found in members, check employees table
    $sql = "SELECT * FROM employees WHERE Email = '$email' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Employee found, login successful
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['role'] = "Employee";
        $_SESSION['name'] = $row['Name'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['profession'] = $row['Profession'];
        $_SESSION['age'] = $row['Age'];
        $_SESSION['gender'] = $row['Gender'];
        $_SESSION['schedule'] = $row['Schedule'];
        $_SESSION['experience'] = $row['Experience'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['address'] = $row['Address'];

        header("Location: ./employee_dashboard.php");
        exit();
    } else {
        // Neither member nor employee found
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
