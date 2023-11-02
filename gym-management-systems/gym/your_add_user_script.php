<?php
// Include your database connection file here.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym_db";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['type'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $type = $_POST['type'];

    // Insert the new user into the 'users' table using prepared statements.
    $insert_user_query = "INSERT INTO users (name, username, type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insert_user_query);

    if ($stmt) {
        $stmt->bind_param("sss", $name, $username, $type);
        if ($stmt->execute()) {
            echo json_encode(array('status' => 'success', 'message' => 'User added successfully'));
            exit();
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error adding user: ' . $stmt->error));
            exit();
        }
        $stmt->close();
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Error preparing statement: ' . $conn->error));
        exit();
    }
}
?>
