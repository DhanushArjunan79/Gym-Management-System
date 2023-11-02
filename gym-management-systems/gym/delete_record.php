<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user ID to be deleted
    $userIdToDelete = $_POST["user_id"];

    // Create a connection to your database (modify with your database credentials)
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

    // Prepare an SQL statement to delete the attendance record for the specified user
    $deleteSql = "DELETE FROM attendance WHERE user_id = ?";
    $stmt = $conn->prepare($deleteSql);

    if ($stmt === false) {
        die("Error: " . $conn->error);
    }

    // Bind the user ID parameter and execute the statement
    $stmt->bind_param("s", $userIdToDelete);
    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
