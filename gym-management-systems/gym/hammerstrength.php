<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Fit Gym</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            background: url('image/gym.jpeg') no-repeat center;
            background-size: cover;
        }

        .container {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            margin: 0 20px;
        }

        .leftBox {
            flex: 1;
            padding: 50px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .leftBox h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .leftBox p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .events {
            flex: 1;
            padding: 50px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .events ul {
            list-style: none;
            padding: 0;
        }

        .events li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .events li:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .time {
            flex: 1;
            text-align: center;
        }

        .time h2 {
            font-size: 2rem;
            color: #fff;
        }

        .time span {
            font-size: 1.5rem;
        }

        .details {
            flex: 2;
            padding-left: 20px;
        }

        .details h3 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .details p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .details a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 15px;
            background: #e91e63;
            color: #fff;
            border-radius: 5px;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .details a:hover {
            background: #c2185b;
        }

        /* Styling for Hammer Strength section */
        .hammerStrength {
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin: 20px;
        }

        .hammerStrength h2 {
            font-size: 2rem;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #e91e63;
        }

        .hammerStrength img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .hammerStrength p {
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="leftBox">
                <h1>Get Fit at Our Gym</h1>
                <p>
                    Welcome to our state-of-the-art gym! Whether you're looking to build muscle, lose weight, or improve your overall fitness, our expert trainers and top-notch equipment are here to help you reach your goals. Join our fitness community and start your fitness journey today.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="events">
                <ul>
                    <li>
                        <div class="details">
                            <h3>Strength Training Workshop</h3>
                            <p>
                                Join our strength training workshop and learn the best techniques for building muscle and increasing your strength. Our experienced trainers will guide you to success.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                    </li>
                    <li>
                        <div class="details">
                            <h3>Yoga and Meditation Session</h3>
                            <p>
                                Relax your mind and body with our yoga and meditation session. Improve flexibility, reduce stress, and find inner peace.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                    </li>
                    <li>
                        <div class="details">
                            <h3>Cardio Blast Challenge</h3>
                            <p>
                                Take on the cardio blast challenge and enhance your cardiovascular fitness. Get ready to sweat and burn calories.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- New container for the provided information with an image -->
        <div class="container">
            <div class="hammerStrength">
                <h2>Hammer Strength Machine</h2>
                <img src="images/hammerstrength.jpeg" alt="Hammer Strength Machine">
                <p>Description: A favorite among athletes, this mechanic focuses on explosiveness.</p>
                <p>Pro Tip: Do not put too much demand on your triceps when exercising with the hammer strength machine. Also avoid locking your elbows at the top of the lift, and try your best to maintain an equal force in both arms as you’re lifting.</p>
                <p>Muscles Used: Different types target different muscle groups. Primarily chest, then shoulders and triceps; to traps, and others.</p>
                <p>Hammer Strength Machine Muscle Groups Worked</p>
                <p>Average Price: Can get pretty expensive with new ones ranging from $1,500 to $5,000. Used ones should be between $300-$1000.</p>
                <p>Where to Buy: Amazon (browse hammer strength machines on Amazon), Fitness Superstore, Craigslist.</p>
            </div>
        </div>
    </section>
</body>
</html>
