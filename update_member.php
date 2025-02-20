<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

// Include database connection
include 'GYM-DBMS.php';

// Check if member_id is set in the URL
if (!isset($_GET['member_id'])) {
    echo "Member ID is missing!";
    exit();
}

// Get the member ID from the URL
$member_id = $_GET['member_id'];

// Fetch the member data from the database
$sql = "SELECT * FROM members WHERE member_id = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param('i', $member_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Member not found.";
        exit();
    }
} else {
    echo "Error: " . $conn->error;
    exit();
}

// Update the member details if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "Phone", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
    $height = filter_input(INPUT_POST, "Height", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $weight = filter_input(INPUT_POST, "Weight", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $age = filter_input(INPUT_POST, "Age", FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_input(INPUT_POST, "Gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $membership = filter_input(INPUT_POST, "Membership", FILTER_SANITIZE_SPECIAL_CHARS);
    $facilities = filter_input(INPUT_POST, "Facilities", FILTER_SANITIZE_SPECIAL_CHARS);

    // Update the member data in the database
    $update_sql = "UPDATE members SET Name = ?, Email = ?, Phone = ?, Address = ?, Password = ?, Height = ?, Weight = ?, Age = ?, Gender = ?, Membership = ?, Facilities = ? WHERE member_id = ?";
    if ($stmt = $conn->prepare($update_sql)) {
        $stmt->bind_param('ssissiiisssi', $name, $email, $phone, $address, $password, $height, $weight, $age, $gender, $membership, $facilities, $member_id);
        if ($stmt->execute()) {
            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Error updating member: " . $stmt->error;
            exit();
        }
    } else {
        echo "Error preparing update statement: " . $conn->error;
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update Member</title>
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
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update Member</h1>
        <form method="POST">
    <label for="Name">Name:</label>
    <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($row['Name']); ?>" required>

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" value="<?php echo htmlspecialchars($row['Email']); ?>" required>

    <label for="Phone">Phone:</label>
    <input type="text" id="Phone" name="Phone" value="<?php echo htmlspecialchars($row['Phone']); ?>" required>

    <label for="Address">Address:</label>
    <input type="text" id="Address" name="Address" value="<?php echo htmlspecialchars($row['Address']); ?>" required>

    <label for="Password">Password:</label>
    <input type="text" id="Password" name="Password" value="<?php echo htmlspecialchars($row['Password']); ?>" required>

    <label for="Height">Height:</label>
    <input type="text" id="Height" name="Height" value="<?php echo htmlspecialchars($row['Height']); ?>" required>

    <label for="Weight">Weight:</label>
    <input type="text" id="Weight" name="Weight" value="<?php echo htmlspecialchars($row['Weight']); ?>" required>

    <label for="Age">Age:</label>
    <input type="text" id="Age" name="Age" value="<?php echo htmlspecialchars($row['Age']); ?>" required>

    <label for="Gender">Gender:</label>
    <input type="text" id="Gender" name="Gender" value="<?php echo htmlspecialchars($row['Gender']); ?>" required>

    <label for="Membership">Membership:</label>
    <input type="text" id="Membership" name="Membership" value="<?php echo htmlspecialchars($row['Membership']); ?>" required>

    <label for="Facilities">Facilities:</label>
    <input type="text" id="Facilities" name="Facilities" value="<?php echo htmlspecialchars($row['Facilities']); ?>" required>

    <input type="submit" value="Update Member">
</form>

    </div>
</body>
</html>
