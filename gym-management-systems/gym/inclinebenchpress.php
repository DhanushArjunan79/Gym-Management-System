<!DOCTYPE html>
<html>
<head>
    <title>Incline Bench Press</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .equipment-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .equipment-title {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }
        .customButton {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 18px;
        }
        .customButton:hover {
            background-color: #0056b3;
        }
        
        /* Hidden dialog box */
        .dialog-box {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1;
        }
        .dialog-content {
            background-color: #fff;
            max-width: 80%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="equipment-container">
        <img src="images/inclinebenchpress.jpeg" alt="Incline Bench Press">
        <div class="equipment-title">Incline Bench Press</div>
        <button type="button" class="customButton" onclick="openDialog()">Learn More</button>
    </div>

    <!-- Dialog box content -->
    <div class="dialog-box" id="dialog">
        <div class="dialog-content">
            <span class="close-button" onclick="closeDialog()">&#10006;</span>
            <h1>Incline Bench Press</h1>
            <p>The Incline Bench Press is a versatile exercise that targets the upper chest, shoulders, and triceps. It's a popular choice for building upper body strength and muscle.</p>
            <p>Pro Tip: Keep the bench at an incline below 50 degrees to ensure proper form and safety.</p>
            <p>Average Price: Between $200-$1000 depending on the brand and included features.</p>
        </div>
    </div>

    <script>
        function openDialog() {
            document.getElementById("dialog").style.display = "block";
        }

        function closeDialog() {
            document.getElementById("dialog").style.display = "none";
        }
    </script>
</body>
</html>
