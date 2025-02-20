



<?php
include("GYM-DBMS.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "Password", FILTER_SANITIZE_SPECIAL_CHARS);
    $experience = filter_input(INPUT_POST, "Experience", FILTER_SANITIZE_SPECIAL_CHARS);
    $schedule = filter_input(INPUT_POST, "Schedule", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "Age", FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_input(INPUT_POST, "Gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, "Phone", FILTER_SANITIZE_NUMBER_INT);
    $address = filter_input(INPUT_POST, "Address", FILTER_SANITIZE_SPECIAL_CHARS);
    // Define the Profession
    $profession = "Personal Trainer";

    $errors = [];

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($password) || empty($experience) || empty($schedule) || empty($age) || empty($gender) || empty($phone)  || empty($address)) {
        $errors[] = "Please fill in all required fields.";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !str_ends_with($email, "@gmail.com")) {
        $errors[] = "Email must be a valid Gmail address.";
    }

    // Validate password
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    // If no errors, insert data
    if (empty($errors)) {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO employees (Name, Email, Password, Experience, Schedule, Age, Gender, Profession, Phone, Address) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssissis", $name, $email, $password, $experience, $schedule, $age, $gender, $profession, $phone, $address);
        if ($stmt->execute()) {
            echo "You are registered successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        // Display error messages
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

