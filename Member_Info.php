<?php include 'GYM-DBMS.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #000; /* Black background */
            color: #fff; /* White text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-top: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #111; /* Dark gray background for table */
            color: #fff; /* White text for table */
        }

        table th, table td {
            border: 1px solid #444; /* Lighter gray for borders */
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #222; /* Slightly lighter gray for headers */
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #333; /* Alternate row background */
        }

        table tr:hover {
            background-color: #444; /* Highlight row on hover */
        }

        .logout-btn {
            text-decoration: none;
            color: #000;
            background-color: #fff; /* White button with black text */
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .logout-btn:hover {
            background-color: #ddd; /* Slightly lighter hover effect */
            color: #000;
        }
    </style>
</head>
<body>
    <header>
        <!-- Manage Members Section -->
        <h2>Manage Members</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Membership</th>
                <th>Height (cm)</th>
                <th>Weight (kg)</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Status</th>
                <th>BMI</th>
                <th>Body Fat (%)</th>
                <th>Lean Body Mass (kg)</th>
                <th>BMR (kcal/day)</th>
                <th>Caloric Needs (kcal/day)</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM members");
            while ($row = $result->fetch_assoc()) {
                // Member data
                $weight = $row['Weight'];
                $height = $row['Height'] / 100; // Convert cm to meters
                $age = $row['Age'];
                $gender = strtolower($row['Gender']);
                
                // Calculate BMI
                $bmi = $weight / ($height * $height);

                // Calculate Body Fat Percentage (simple estimation formula)
                if ($gender === 'male') {
                    $bodyFatPercentage = (1.20 * $bmi) + (0.23 * $age) - 16.2;
                } else {
                    $bodyFatPercentage = (1.20 * $bmi) + (0.23 * $age) - 5.4;
                }

                // Calculate Lean Body Mass
                $leanBodyMass = $weight * (1 - ($bodyFatPercentage / 100));

                // Calculate BMR (Harris-Benedict Equation)
                if ($gender === 'male') {
                    $bmr = 88.362 + (13.397 * $weight) + (4.799 * $row['Height']) - (5.677 * $age);
                } else {
                    $bmr = 447.593 + (9.247 * $weight) + (3.098 * $row['Height']) - (4.330 * $age);
                }

                // Estimate Caloric Needs (assuming light activity level, multiplier ~1.375)
                $caloricNeeds = $bmr * 1.375;

                // Membership status
                $currentDate = date('Y-m-d');
                $expirationDate = $row['ExpirationDate'];
                $status = ($currentDate > $expirationDate) ? 'Expired' : 'Active';

                echo "<tr>
                        <td>{$row['Member_id']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Membership']}</td>
                        <td>{$row['Height']}</td>
                        <td>{$row['Weight']}</td>
                        <td>{$row['Age']}</td>
                        <td>{$row['Gender']}</td>
                        <td>{$status}</td>
                        <td>" . number_format($bmi, 2) . "</td>
                        <td>" . number_format($bodyFatPercentage, 2) . " %</td>
                        <td>" . number_format($leanBodyMass, 2) . " kg</td>
                        <td>" . number_format($bmr, 2) . " kcal/day</td>
                        <td>" . number_format($caloricNeeds, 2) . " kcal/day</td>
                    </tr>";
            }
            ?>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="employee_dashboard.php" class="logout-btn">Back</a>
        </div>
    </header>
</body>
</html>
