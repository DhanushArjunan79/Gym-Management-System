<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        form {
            margin: 20px 0;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            margin-bottom: 10px;
            padding: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <h1>Mark Attendance</h1>
    <form action="process_attendance.php" method="POST">
        <label for="User_id">USER ID:</label>
        <input type="text" name="User_id" id="User_id" required><br>

        <label for="attendance_date">Date:</label>
        <input type="date" name="attendance_date" id="attendance_date" required><br>
        <input type="submit" value="Mark Attendance">
      
    
        <style>
    body {
        background-image: url('images/attendance.jpeg'); /* Use forward slashes in the path */
        background-size: cover; /* Adjust to your needs */
        /* You can add more background properties here */
    }
</style>

        
    
</style>

    </form>