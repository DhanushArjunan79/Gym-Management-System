<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            background: url('image\gy.jpeg');
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

        /* New CSS for the Cable and Pulley Machine section */
        .cablePulley {
            flex: 1;
            padding: 50px;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .cablePulley h2 {
            font-size: 2rem;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .cablePulley p {
            font-size: 1rem;
            line-height: 1.5;
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
                        <div class="time">
                            <h2>15<br><span>March</span></h2>
                        </div>
                        <div class="details">
                            <h3>Strength Training Workshop</h3>
                            <p>
                                Join our strength training workshop and learn the best techniques for building muscle and increasing your strength. Our experienced trainers will guide you to success.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h2>27<br><span>May</span></h2>
                        </div>
                        <div class="details">
                            <h3>Yoga and Meditation Session</h3>
                            <p>
                                Relax your mind and body with our yoga and meditation session. Improve flexibility, reduce stress, and find inner peace.
                            </p>
                            <a href="#">View Details</a>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h2>12<br><span>August</span></h2>
                        </div>
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

        <!-- New container for the Cable and Pulley Machine information -->
        <div class="container">
            <div class="cablePulley">
                <h2>Cable and Pulley Machine</h2>
                <p>Description: Very diverse workout machine in the amount and types of exercises that can be performed by attaching grips to the end of the cables.</p>
                <p>Pro Tip: When doing cable and pulley machine exercises, it is important to use the right amount of weight. Too little weight and you will not be working out effectively, too much and you will put a strain on your muscles, perhaps even lead to injury.</p>
                <p>There are many different types of exercises this machine is capable of providing you with. Such as the press, effecting your pecs, shoulders, and triceps; then there is the one-handed crossover which also effects the pecs and shoulders, but also biceps.</p>
                <p>The different types of exercises you can do with cables make it one of the most powerful gym equipment wherever you go.</p>
                <p>Muscles Used: The inherent design and versatility of this machine allow for it to essentially touch upon every muscle in the body. The example below demonstrates a cable crossover exercise targeting the chest and shoulder areas.</p>
                <p>Average Price: A decent complete set of cables and pulley’s can cost north of $2,000.</p>
                <p>Where to Buy: Amazon. Browse Cables and Pulleys on Amazon.</p>
            </div>
        </div>
    </section>
</body>
</html>
