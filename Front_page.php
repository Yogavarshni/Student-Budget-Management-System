<!DOCTYPE html>
<html>
    <head>
        <title> Student Budget Management System </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 </head>
    <body>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include '_nav.php';?>
        <h1 style="text-align: center;"> iSecure</h1>
        <div class="pp1">
            <h1> Always know where your money goes <br><br><br><br><p id="Money"> iSecure makes it easy to take control of your money, optimize spending and grow your savings.</p></h1>
            <img src="Screenshot 2022-11-15 132335.png" width="350px" height="350px">
        </div>

        <div class="pp2">
            <br><br>
            <h1 id="get"> Get a handy quick reference guide to your finance at <br>any time of the day or night </h1>
            <br><br><br>
            <table id="table">
                <tr>
                    <td id="t1">
                        <img src="graduated.png" width="100px" height="100px">
                        <p>#1 budgeting website for college students <br>and overspenders</p>
                    </td>
                    <td id="t2">
                        <img src="money.png" width="100px" height="100px">
                        <p>Best for tracking expenses and growing your savings</p>
                    </td>
                    <td id="t3">
                        <img src="user.png" width="100px" height="100px">
                        <p>User-friendly, loaded with free features</p>
                    </td>
                </tr>
            </table>
            <br>
            <br>
        </div>

        <div class="pp3">
            <img  id="pp3ima" src="https://cdn.dribbble.com/users/1043230/screenshots/6124942/media/1ee6c1759d8d8d28360b9077dcfe924c.png?compress=1&resize=400x300">
            <h1 id="pp3txt"><br><br>Know what's in your pocket<br><br>
                <p>The main idea behind iSecure is to help students spend less than they get. <br><br>That's why we have made the IN MY POCKET feature.<br><br>
                We crunch the numbers to show how much spendable money you have after setting aside enough for bills, goals and necessities.<br><br>
                Organize your bills and other spending into sections.<br><br> Customize your budget the way you want by creating as many sections as you need<br><br>
            </p>
            </h1>
        </div>

        <div id="p4">
            <div class="pp4">
                <h1 id="pp4txt"><br><br> Keep tabs on your spending <br><br>
                <p> See which expenses eat up too much of the pie. <br>Personalize your reports with custom categories and #hashtags.
                    <br><br>
                    Analyze what merchant you spend the most and cut off that expense out of your budget.<br> You can't even imagine how much you spend on morning coffee every day!</p>
                </h1>
                <img id="pp4img" src="https://digitalasset.intuit.com/IMAGE/A2PvzvYLV/Mint.com-ZoneB-X-Small-1-Test.png">
            </div>
        </div>
     
        <div class="pp5">
            <img  id="pp5ima" src="https://cdn.dribbble.com/users/3899798/screenshots/7104049/media/fcd230bbb413e076fae8bbdf46538dae.png?compress=1&resize=400x300&vertical=top" width="500px" height="400px">
            <h1 id="pp5txt"><br><br>Track and lower your bills<br><br>
                <p>Stay on top of your bills and negotiate better rates on your cable, <br>cell phone and other bills. 
                <br><br>PocketGuard smart algorithm analyzes your transactions and identify<br> how much you can save by lowering all your bills. <br><br>Our customers can save thousands of dollars every year.<br><br>
                </p>
            </h1>
        </div>

        <div id="p6">
            <div class="pp6">
                <h1 id="pp6txt"><br><br> Reach your goals with ease<br><br>
                <p> PocketGuard applies a SMART goal strategy. This means you have to make sure your goal is Specific, Measurable, Achievable, Relevant, and Timely.
                    <br><br>
                    Create a realistic budget. How much money are you able to contribute to your goal on a monthly basis? Does this amount fit your budget? Increase or decrease it relying on the numbers you see.
                    <br><br>
                    Monitor your progress. Set milestones to hit. Use the big power of small wins to motivate yourself moving forward.</p>
                </h1>
                <img id="pp6img" src="https://www.shipbob.com/wp-content/uploads/2020/09/iStock-655652514.jpg" width="400px" height="300px">
            </div>
        </div>

        <div class="pp7">
            <img  id="pp7ima" src="Screenshot 2022-11-15 151409.png" width="500px" height="400px">
            <h1 id="pp7txt"><br><br>We are serious about security<br><br>
                <p>Your data is secured with 256-bit SSL encryption. That's the same level of security as major banks. And the PocketGuard app uses PIN code and biometrics, as an additional security layer, in case your phone is ever lost or stolen
                </p>
            </h1>
        </div>
        
        <div class="pp8">
            <div>   
                <br><br><br>
                <h1>iSecure is a well-known personal finance management application.</h1>
                <h2> Get the free budgeting app </h2>
                <h3>Take your money under control</h3>
                <br><br><br>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    <style>
        body
        {
            background-color: lightyellow;
        }
        #p4
        {
            background-color: lightcoral;
        }
        #pp7txt
        {
            margin: 5%;
        }
        #p6
        {
            background-color: lightblue;
        }
        .topnav 
        {
            overflow: hidden;
            background-color: #333;
        }
        .topnav a 
        {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover 
        {
        background-color: #ddd;
        color: black;
        }

        .topnav a.active 
        {
            background-color: #04AA6D;
            color: white;
        }
        .pp8
        {
            text-align: center;
            background-color: lightpink;
        }
        .pp4
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            margin: 8%;
        }
        .pp6
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            margin: 8%;
        }
        .pp5
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            margin: 8%;
        }
        .pp7
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            margin: 8%;
        }
        #pp3ima
        {
            margin: 8%;
        }
        #pp5ima
        {
            margin: 5%;
        }
        #pp6img
        {
            margin: 8%;
        }
        #pp3txt
        {
            float: right;
        }
        
        #table
        {
            text-align: center;
            width: 100%;
        }
        #get
        {
            text-align: center;
        }
        body
        {
            font-family:Calibri;
        }
        #Money
        {
            font-size: smaller;
        }
        p
        {
            font-size: medium;
        }
        .pp1
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            margin: 8%;
        }
        .pp2
        {
            background-color: lightgreen;
        }
        .pp3
        {
            flex-direction: row;
            height: 500px;
            display:flex;
            width: 100%;
        }
    </style>
</html>