<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: admin.php");
    exit();
}

include 'GYM-DBMS.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
            border-radius: 0 0 15px 15px; /* Curved corners for header */
        }
        main {
            padding: 2rem;
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 2rem;
            background-color: white;
            border-radius: 10px; /* Curved corners for tables */
            overflow: hidden; /* Ensures corners work even for table borders */
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 0.8rem;
            text-align: left;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        .actions {
    display: flex;
    gap: 10px; /* Adjust spacing between buttons */
}

.actions a {
    padding: 8px 16px;
    text-decoration: none;
    color: white;
    border-radius: 4px;
    text-align: center;
}

.actions a.update {
    background-color:rgb(41, 107, 250); /* Green for Update */
}

.actions a.delete {
    background-color: #f44336; /* Red for Delete */
}

.actions a:hover {
    opacity: 0.8; /* Slight opacity on hover for effect */
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['Username']); ?></h1>
    </header>
    <main>
        <!-- Admin Update Section -->
        <h2>Update Admin Details</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM admins WHERE Username='{$_SESSION['Username']}'");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Id']}</td>
                        <td>{$row['Username']}</td>
                        <td>{$row['Password']}</td>
                        <td class='actions'>
                            <a class='update' href='update_admin.php?Id={$row['Id']}'>Update</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>

        <!-- Manage Employees Section -->
        <h2>Manage Employees</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Age</th>
        <th>Experience</th>
        <th>Schedule</th>
        <th>Gender</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM employees");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['ID']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['Phone']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Age']}</td>
                <td>{$row['Experience']}</td>
                <td>{$row['Schedule']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['Password']}</td>
                <td class='actions'>
                    <a class='update' href='update_employee.php?id={$row['ID']}'>Update</a>
                    <a class='delete' href='delete_employee.php?id={$row['ID']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>

<!-- Manage Members Section -->
<h2>Manage Members</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Membership</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Password</th>
        <th>Expiration Date</th>
        <th>Payment Method</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM members");
    while ($row = $result->fetch_assoc()) {
        // Get current date and expiration date
        $currentDate = date('Y-m-d');
        $expirationDate = $row['ExpirationDate'];

        // Determine if the membership is expired
        $status = ($currentDate > $expirationDate) ? 'Expired' : 'Active';

        echo "<tr>
                <td>{$row['Member_id']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['Email']}</td>
                <td>{$row['Phone']}</td>
                <td>{$row['Address']}</td>
                <td>{$row['Membership']}</td>
                <td>{$row['Height']}</td>
                <td>{$row['Weight']}</td>
                <td>{$row['Age']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['Password']}</td>
                <td>{$expirationDate}</td>
                <td>{$row['PaymentMethod']}</td>
                <td>{$status}</td>
                <td class='actions'>
                    <a class='update' href='update_member.php?member_id={$row['Member_id']}'>Update</a>
                    <a class='delete' href='delete_member.php?member_id={$row['Member_id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>


<div style="text-align: center; margin-top: 20px;">
    <a href="index.html" class="logout-btn" style="text-decoration: none; color: white; background-color: #ff4d4d; padding: 10px 20px; border-radius: 5px;">Logout</a>
</div>


    </main>
</body>
</html>
