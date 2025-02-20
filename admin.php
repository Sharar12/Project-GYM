<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            padding: 20px;
            text-align: center;
        }

        .login-container h1 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 0.9rem;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 5px;
        }

        .login-btn {
            background: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s ease;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="admin_process.php" method="POST">
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" id="Username" name="Username" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" id="Password" name="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <?php
            if (isset($_GET['error']) && $_GET['error'] === 'invalid') {
                echo '<p class="error-message">Invalid username or password</p>';
            }
            ?>
        </form>
        <div style="text-align: center; margin-top: 15px;">
        <a href="index.html" class="back-btn" style="text-decoration: none; color: #fff; background-color: #333; padding: 10px 20px; border-radius: 5px;">Back to Home</a>
    </div>
    </div>
</body>
</html>
