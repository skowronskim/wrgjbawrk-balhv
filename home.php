<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="styles(home.php).css">
</head>
<body>
    <h2 class="title">Website Will Be Launched In</h2>
    <div id="time">
        <div class="circle" style="--clr:#1eb9ff;">
            <svg>
                <circle cx="70" cy="70" r="70" id="dd"></circle>
            </svg>
            <div id="days">00<br><span>Days</span></div>
        </div>
        <div class="circle" style="--clr:#ff2972;">
            <svg>
                <circle cx="70" cy="70" r="70" id="hh"></circle>
            </svg>
            <div id="hours">00<br><span>Hours</span></div>
        </div>
        <div class="circle" style="--clr:#fee800;">
            <svg>
                <circle cx="70" cy="70" r="70" id="mm"></circle>
            </svg>
            <div id="minutes">00<br><span>Minutes</span></div>
        </div>
        <div class="circle" style="--clr:#04fc43;">
            <svg>
                <circle cx="70" cy="70" r="70" id="ss"></circle>
            </svg>
            <div id="seconds">00<br><span>Seconds</span></div>
        </div>
    </div>

    <h2 class="webDone"><span>The Website will shortly be</span><br>Updated</span></h2>


    <script>
        let days = document.getElementById('days');
        let hours = document.getElementById('hours');
        let minutes = document.getElementById('minutes');
        let seconds = document.getElementById('seconds');
    
        let dd = document.getElementById('dd');
        let hh = document.getElementById('hh');
        let mm = document.getElementById('mm');
        let ss = document.getElementById('ss');
    
        let endDate = '01/20/2024 17:00:00';
    
        function updateCountdown() {
            let now = new Date().getTime();
            let countDown = new Date(endDate).getTime();
            let distance = countDown - now;
    
            let d = Math.floor(distance / (1000 * 60 * 60 * 24));
            let h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let s = Math.floor((distance % (1000 * 60)) / 1000);
    
            days.innerHTML = d + "<br><span>Days</span>";
            hours.innerHTML = h + "<br><span>Hours</span>";
            minutes.innerHTML = m + "<br><span>Minutes</span>";
            seconds.innerHTML = s + "<br><span>Seconds</span>";
        }
    
        // Call the function immediately to update the countdown
        updateCountdown();
    
        // Set up an interval to update the countdown every second
        let x = setInterval(updateCountdown, 1000);
    </script>
    
</body>
</html>