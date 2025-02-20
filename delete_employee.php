<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

include 'GYM-DBMS.php';

// Check if the employee ID is passed in the URL
if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    // Query to delete the employee by ID
    $sql = "DELETE FROM employees WHERE ID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('i', $employee_id);

        // Execute the query and check for success
        if ($stmt->execute()) {
            // Redirect to the admin dashboard after successful deletion
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error deleting employee!";
        }
    } else {
        echo "Query preparation failed!";
    }
} else {
    echo "No employee ID provided!";
    exit();
}
?>
