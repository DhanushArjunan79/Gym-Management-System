<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Styling the body */
        body {
            margin: 0;
            padding: 0;
        }
        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 100vh;
         background-image: url('images/bg.jpeg');
            background-size: cover;
        }
        /* Styling the left floating section */
        section .leftBox {
            width: 50%;
            height: 100%;
            float: left;
            padding: 50px;
            background-image: url('images\price.jpeg');
            box-sizing: border-box;

        }
        /* Styling the background of
            left floating section */
        section .leftBox .content {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            transition: .5s;
        }
        /* Styling the hover effect 
            of left floating section */
        section .leftBox .content:hover {
            background: #e91e63;
        }
        /* Styling the header of left
            floating section */
        section .leftBox .content h1 {
            margin: 0;
            padding: 0;
            font-size: 50px;
            text-transform: uppercase;
        }
        /* Styling the paragraph of
            left floating section */
        section .leftBox .content p {
            margin: 10px 0 0;
            padding: 0;
        }
        /* Styling the three events section */
        section .events {
            position: relative;
            width: 50%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            float: right;
            box-sizing: border-box;
        }
        /* Styling the links of
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 0;
            padding: 40px;
            box-sizing: border-box;
        }
        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: #fff;
            box-sizing: border-box;
            height: 200px;
            margin: 15px 0;
        }
        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: #262626;
            box-sizing: border-box;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
             background-size:cover;
            background-image: url('images/price.jpeg');

        
        }
        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: red;
           
           
        }
        /* Styling the header of time
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 60px;
            line-height: 30px;
            
        }
        /* Styling the texts of time
        class of events section */
        section .events ul li .time h2 span {
            font-size: 30px;
        }
 
        /* Styling the details
        class of events section */
        section .events ul li .details {
            padding: 20px;
            background: #fff;
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
        }
        /* Styling the header of the
        details class of events section */
        .section .events ul li .details h3 {
    position: relative;
    margin: 0;
    padding: 0;
    font-size: 22px;
    background-size: cover;
   
    
}

        }
        /* Styling the lists of details
        class of events section */
        section .events ul li .details p {
            position: relative;
            margin: 10px 0 0;
            padding: 0;
            font-size: 16px;
        }
        /* Styling the links of details
        class of events section */
        section .events ul li .details a {
            display: inline-block;
            text-decoration: none;
            padding: 10px 15px;
            border: 1.5px solid #262626;
            margin-top: 8px;
            font-size: 18px;
            transition: .5s;
        }
        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: #e91e63;
            color: #fff;
            border-color: #e91e63;
           
        }
    </style>
</head>
<body>
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>
                    SQUAT TRACK
                </h1>
                <p>
                    Description: Where serious squatting takes place. In fitness and strength training, the squat exercise trains your full body. All serious strength training regiments should incorporate the squat station gym equipment
                </p>
            </div>
        </div>
        <div class="events">
            <ul>
                <li>
                <div class="time">
    </div>
                    
                    <div class="details">
                        
                        <h3>
                           PRO TIP
                        </h3>
                        <p>
                            Be sure to squat down until your thighs are pretty much parallel with the floor. Going this low is essential in doing squats the right way and obtaining a strong core, legs, and back eventually.</p>

                        </p>
    
                        
                    </div>
                    <div style="clear: both;"></div>
                </li>
                <li>
                    <div class="time">
                    
                    </div>
                    <div class="details">
                        <h3>
                            Muscles Used:
                        </h3>
                        <p>
                            Squatting focuses primarily on thighs, hips, and butt, quads, hamstrings; all while strengthening your bones and ligaments
                        
                       
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="time">
                    
                    </div>
                    <div class="details">
                        <h3>
                            AVERAGE PRICE
                        </h3>
                        <p>
                            An affordable, stripped-down one with just the rack is around $150. The average price for a full squat rack which should include a safety net and a pullup bar is in the $500-$1,500 range
                        </p>
                        
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>