<?php
// Start the session
session_start();

// Include database connection
include('GYM-DBMS.php');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password from POST data
    $username = trim($_POST['Username']);
    $password = trim($_POST['Password']);

    // Query to check if the admin exists in the database
    $sql = "SELECT * FROM admins WHERE Username = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Fetch the admin data
            $row = $result->fetch_assoc();

            // Directly compare the password
            if ($password === $row['Password']) {
                // Set session variables
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Username'] = $row['Username']; // Match case with DB

                // Redirect to the admin dashboard
                header("Location: admin_dashboard.php");
                exit();
            } else {
                // Incorrect password
                header("Location: admin.php?error=invalid");
                exit();
            }
        } else {
            // Admin not found
            header("Location: admin.php?error=invalid");
            exit();
        }

        $stmt->close();
    } else {
        // Query preparation error
        echo "Query Error: " . $conn->error;
        exit();
    }
} else {
    // Invalid request method
    header("Location: admin.php");
    exit();
}
?>
