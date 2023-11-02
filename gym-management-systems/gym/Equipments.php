<!DOCTYPE html>
<html>
<head>
    <title>Equipment's Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 20px 0;
            font-family: 'Algerian', cursive;
        }

        .equipment-container {
            text-align: center;
            margin: 20px;
            display: inline-block;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 200px;
        }

        .equipment-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .equipment-title {
            margin-top: 10px;
            font-weight: bold;
            font-family: 'Algerian', cursive;
        }

        .customButton {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .customButton:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Different Equipment Used in Gym</h1>

    <!-- First equipment -->
    <div class="equipment-container">
        <img src="images/gym1.jpeg" alt="Dumbbells">
        <div class="equipment-title">Dumbbells</div>
        <a href="dumbbell.php" alt="Dumbbells">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>

    <div class="equipment-container">
        <img src="images/gym2.jpeg" alt="Squat Rack">
        <div class="equipment-title">Squat Rack</div>
        <a href="TRYING.php" alt="Squat Rack">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>

    <div class="equipment-container">
        <img src="images/BENCHPRESS.jpeg" alt="Bench Press">
        <div class="equipment-title">Bench Press</div>
        <a href="BENCHPRESS.php" alt="Bench Press">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>

    <div class="equipment-container">
        <img src="images/inclinebenchpress.jpeg" alt="Incline Bench Press">
        <div class="equipment-title">Incline Bench Press</div>
        <a href="inclinebenchpress.php" alt="Incline Bench Press">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>

    <div class="equipment-container">
        <img src="images/hammerstrength.jpeg" alt="Hammer Strength Machine">
        <div class="equipment-title">Hammer Strength Machine</div>
        <a href="hammerstrength.php" alt="Hammer Strength Machine">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>

    <div class="equipment-container">
        <img src="images/cables.jpeg" alt="Cables & Pulleys">
        <div class="equipment-title">Cables and Pulleys</div>
        <a href="cables.php" alt="Cables and Pulleys">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>
    <div class="equipment-container">
        <img src="images/pullup.jpeg" alt="Pull-Up Bar">
        <div class="equipment-title">Pull-Up Bar</div>
        <a href="pullup.php" alt="Pull-Up Bar">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>
    <div class="equipment-container">
        <img src="images/latpullup.jpeg" alt=" Lat PullDown Bar">
        <div class="equipment-title">Lat Pull-Down Bar</div>
        <a href="latpulldown.php" alt="Lat Pull-Down Bar">
            <button type="button" class="customButton">Learn More</button>
        </a>
    </div>
    

    <!-- Add more equipment sections as needed -->
</body>
</html>
