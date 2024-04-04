<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Changed font style */
            background-color: #6495ED; /* Changed background color to blue */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px; /* Adjusted max-width */
            width: 90%; /* Adjusted width */
        }
        h2 {
            margin-bottom: 20px;
            color: #333; /* Darker text color */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin-bottom: 10px;
            color: #333; /* Darker text color */
        }
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            width: 250px;
        }
        button {
            background-color: #4169E1; /* Changed button color to blue */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1E90FF; /* Changed button hover color to a lighter blue */
        }
        .message {
            margin-top: 20px;
            color: #333; /* Darker text color */
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Dummy username and password for validation
            $valid_username = "user";
            $valid_password = "1234";
            
            // Retrieve username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Validate login
            if ($username === $valid_username && $password === $valid_password) {
                echo "<p class='message success'>Login successful! Welcome, $username!</p>";
            } else {
                echo "<p class='message error'>Login failed. Please check your username and password.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
