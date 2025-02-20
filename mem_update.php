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
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];

// Database connection
include 'GYM-DBMS.php';

// Update the member details if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize the inputs
    $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $height = filter_input(INPUT_POST, "Height", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $weight = filter_input(INPUT_POST, "Weight", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $age = filter_input(INPUT_POST, "Age", FILTER_SANITIZE_NUMBER_INT);
    $phone = filter_input(INPUT_POST, "Phone", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);

    // Update query to update the member's information in the database
    $update_sql = "UPDATE members SET Name = ?, Email = ?, Height = ?, Weight = ?, Age = ?, Phone = ?, Address = ? WHERE Email = ?";
    if ($stmt = $conn->prepare($update_sql)) {
        $stmt->bind_param('ssssssss', $name, $email, $height, $weight, $age, $phone, $address, $email);
        
        // Execute the update query
        if ($stmt->execute()) {
            // Update the session variables with the new data
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['height'] = $height;
            $_SESSION['weight'] = $weight;
            $_SESSION['age'] = $age;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;

            // Redirect to the member profile page after the update
            header("Location: account.php");
            exit();
        } else {
            echo "Error updating member details!";
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
    <title>Update Member Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin: 10px 0 5px;
            color: #333;
            font-size: 14px;
        }

        input[type="text"], input[type="email"] {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group input {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Your Information</h2>
        <form method="POST">
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($name); ?>" required>
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>

            <div class="form-group">
                <label for="Height">Height (cm):</label>
                <input type="text" id="Height" name="Height" value="<?php echo htmlspecialchars($height); ?>" required>
            </div>

            <div class="form-group">
                <label for="Weight">Weight (kg):</label>
                <input type="text" id="Weight" name="Weight" value="<?php echo htmlspecialchars($weight); ?>" required>
            </div>

            <div class="form-group">
                <label for="Age">Age:</label>
                <input type="text" id="Age" name="Age" value="<?php echo htmlspecialchars($age); ?>" required>
            </div>

            <div class="form-group">
                <label for="Phone">Phone:</label>
                <input type="text" id="Phone" name="Phone" value="<?php echo htmlspecialchars($phone); ?>" required>
            </div>

            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" id="Address" name="Address" value="<?php echo htmlspecialchars($address); ?>" required>
            </div>

            <input type="submit" value="Update Information">
        </form>
    </div>
</body>
</html>
