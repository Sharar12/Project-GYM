<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

include 'GYM-DBMS.php';

// Get the employee ID from the URL
if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    // Query to fetch employee data by ID
    $sql = "SELECT * FROM employees WHERE ID = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('i', $employee_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $employee = $result->fetch_assoc();
        } else {
            echo "Employee not found!";
            exit();
        }
    } else {
        echo "Query preparation failed!";
        exit();
    }
} else {
    echo "No employee ID provided!";
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
    $age = filter_input(INPUT_POST, 'Age', FILTER_SANITIZE_NUMBER_INT);
    $experience = filter_input(INPUT_POST, 'Experience', FILTER_SANITIZE_SPECIAL_CHARS);
    $schedule = filter_input(INPUT_POST, 'Schedule', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, 'Address', FILTER_SANITIZE_SPECIAL_CHARS);

    // Update query
    $update_sql = "UPDATE employees SET Name = ?, Email = ?, Age = ?, Experience = ?, Schedule = ?, Gender = ?, Password = ?, Phone = ?, Address = ? WHERE ID = ?";
    if ($stmt = $conn->prepare($update_sql)) {
        $stmt->bind_param('ssissssisi', $name, $email, $age, $experience, $schedule, $gender, $password, $phone, $address, $employee_id);

        if ($stmt->execute()) {
            // Redirect to the admin dashboard after successful update
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error updating employee details!";
        }
    } else {
        echo "Query preparation failed!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            color: #4CAF50;
            text-align: center;
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
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="submit"] {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 1rem;
            width: 100%;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-link {
            text-align: center;
            display: block;
            margin-top: 1rem;
            text-decoration: none;
            color: #4CAF50;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Employee Details</h1>

        <!-- Employee Update Form -->
        <form method="POST">
    <label for="Name">Name:</label>
    <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($employee['Name']); ?>" required>

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" value="<?php echo htmlspecialchars($employee['Email']); ?>" required>

    <label for="Age">Age:</label>
    <input type="text" id="Age" name="Age" value="<?php echo htmlspecialchars($employee['Age']); ?>" required>

    <label for="Experience">Experience:</label>
    <input type="text" id="Experience" name="Experience" value="<?php echo htmlspecialchars($employee['Experience']); ?>" required>

    <label for="Schedule">Schedule:</label>
    <input type="text" id="Schedule" name="Schedule" value="<?php echo htmlspecialchars($employee['Schedule']); ?>" required>

    <label for="Gender">Gender:</label>
    <input type="text" id="Gender" name="Gender" value="<?php echo htmlspecialchars($employee['Gender']); ?>" required>

    <label for="Password">Password:</label>
    <input type="text" id="Password" name="Password" value="<?php echo htmlspecialchars($employee['Password']); ?>" required>

    <label for="Phone">Phone:</label>
    <input type="text" id="Phone" name="Phone" value="<?php echo htmlspecialchars($employee['Phone']); ?>" required>

    <label for="Address">Address:</label>
    <input type="text" id="Address" name="Address" value="<?php echo htmlspecialchars($employee['Address']); ?>" required>

    <input type="submit" value="Update Employee">
</form>

        
        <a href="admin_dashboard.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>
