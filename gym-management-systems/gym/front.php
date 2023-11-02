
<?php
// Replace these values with your actual database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'gym_db';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database operations here

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        /* CSS for the topbar */
        .topbar {
            background-color: #333;
            overflow: hidden;
        }

        .topbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* CSS for the background image */
        body {
            background-image: url('your-background-image.jpg'); /* Replace 'your-background-image.jpg' with your actual image URL */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
        }

        /* CSS for the content */
        .content {
            padding: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <div class="topbar">
        <a href="login.php">Login</a>
        <a href="#">Contact Us</a>
        <a href="#">About</a>
        <video autoplay muted loop poster="placeholder-image.jpg">
        <source src="videos/gym.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="content">
        <h1>Welcome to My Website</h1>
        <p>This is the homepage of our website. Feel free to explore!</p>
    </div>
</body>
</html>
