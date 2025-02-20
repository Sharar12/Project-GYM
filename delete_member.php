<?php
// Start the session
session_start();

// Check if user is logged in
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

// Include the database connection
include 'GYM-DBMS.php';

// Check if the member_id is passed in the URL
if (isset($_GET['member_id'])) {
    $member_id = $_GET['member_id'];

    // Prepare the delete query
    $sql = "DELETE FROM members WHERE member_id = ?";

    // Prepare the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind the member_id to the query
        $stmt->bind_param('i', $member_id);

        // Execute the query
        if ($stmt->execute()) {
            // Success: Redirect to the admin dashboard or members list
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Query execution failed
            echo "Error deleting member: " . $conn->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        // Query preparation failed
        echo "Query preparation failed: " . $conn->error;
    }
} else {
    // member_id not provided
    echo "Member ID is missing!";
}

// Close the connection
$conn->close();
?>
