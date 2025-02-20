<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

include 'GYM-DBMS.php';

// Check if Id is set via URL
if (isset($_GET['Id'])) {
    $admin_id = intval($_GET['Id']);

    // Fetch the current admin details
    $stmt = $conn->prepare("SELECT * FROM admins WHERE Id = ?");
    $stmt->bind_param("i", $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();
    } else {
        echo "Admin not found!";
        exit();
    }
} else {
    echo "Admin Id not specified!";
    exit();
}

// Process form submission to update admin
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, "Username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Update admin details in the database
    $updateQuery = "UPDATE admins SET Username = ?, Password = ? WHERE Id = ?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ssi", $username, $password, $admin_id);

    if ($stmt->execute()) {
        // Update session if the username has changed
        if ($_SESSION['Username'] !== $username) {
            $_SESSION['Username'] = $username;
        }
        // Redirect to the dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "<p class='error'>Error updating admin: " . $conn->error . "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h2 {
            color: #4CAF50;
            margin-bottom: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 0.5rem;
            color: #333;
        }
        input {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 1rem;
            width: 100%;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #45a049;
        }
        .success {
            color: #28a745;
            margin-bottom: 1rem;
        }
        .error {
            color: #dc3545;
            margin-bottom: 1rem;
        }
        .back-link {
            display: block;
            margin-top: 1rem;
            text-align: center;
            color: #4CAF50;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Admin Details</h2>

        <form method="POST">
    <label for="Username">Username:</label>
    <input type="text" name="Username" value="<?php echo htmlspecialchars($admin['Username']); ?>" required>

    <label for="Password">Password:</label>
    <input type="text" name="Password" value="<?php echo htmlspecialchars($admin['Password']); ?>" required>

    <button type="submit">Update</button>
</form>

       

        <a href="admin_dashboard.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>
