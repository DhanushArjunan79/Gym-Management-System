<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .action-buttons button {
            padding: 5px 10px;
            margin-right: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .action-buttons button.print {
            background-color: #28a745;
        }

        .action-buttons button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $userId = isset($_POST["User_id"]) ? $_POST["User_id"] : null;
    $attendanceDate = isset($_POST["attendance_date"]) ? $_POST["attendance_date"] : null;

    // Perform any necessary validation here

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

    if ($userId !== null && $attendanceDate !== null) {
        // Check if a record with the same user_id and attendance_date already exists
        $checkSql = "SELECT id FROM attendance WHERE user_id = ? AND attendance_date = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("is", $userId, $attendanceDate);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            // A record already exists, so you might want to update it or handle this case accordingly.
            echo "Record already exists for this user on this date.";
        } else {
            // No record exists, so you can proceed to insert the new record.
            $sql = "INSERT INTO attendance (user_id, attendance_date) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("Error: " . $conn->error);
            }

            // Bind parameters and execute the statement
            $stmt->bind_param("is", $userId, $attendanceDate);
            if ($stmt->execute()) {
                echo "Attendance recorded successfully.";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        }
    }

    // Retrieve and display attendance data in a table
    $selectSql = "SELECT user_id, attendance_date FROM attendance";
    $result = $conn->query($selectSql);

    if ($result->num_rows > 0) {
        echo "<h2>Attendance Records:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>User ID</th><th>Attendance Date</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["attendance_date"] . "</td>";
            echo "<td class='action-buttons'>
                <button onclick='deleteRecord(" . $row["user_id"] . ", this)'>Delete</button>
            </td></tr>";
        }
        echo "</table>";
    } else {
        echo "No attendance records found.";
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted, redirect to the form page or display an error message.
    echo "Form not submitted.";
}
?>

<!-- Add a new button for downloading records -->
<div>
    <button onclick="downloadAttendance()">Download Attendance</button>
</div>

<script>
function deleteRecord(userId, buttonElement) {
    if (confirm("Are you sure you want to delete this record?")) {
        // Disable the button to prevent multiple clicks
        buttonElement.disabled = true;

        // Send an AJAX request to delete the record
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Remove the deleted row from the table
                buttonElement.closest('tr').remove();
            }
        };
        xhr.open("POST", "delete_record.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("user_id=" + userId);
    }
}

function downloadAttendance() {
    // Retrieve and format the data for download
    var table = document.querySelector('table');
    var rows = table.querySelectorAll('tr');
    var csvData = [];
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll('td, th');
        for (var j = 0; j < cols.length; j++) {
            row.push(cols[j].innerText);
        }
        csvData.push(row.join(','));
    }

    // Create a blob with the CSV data
    var csvBlob = new Blob([csvData.join('\n')], { type: 'text/csv' });

    // Create a link element to trigger the download
    var link = document.createElement('a');
    link.href = URL.createObjectURL(csvBlob);
    link.download = 'attendance.csv';
    link.style.display = 'none';

    // Trigger the download
    document.body.appendChild(link);
    link.click();

    // Clean up
    document.body.removeChild(link);
    URL.revokeObjectURL(link.href);
}
</script>
</body>
</html>
