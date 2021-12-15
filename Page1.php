<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <script src="./JS/Compteurs.js"></script>

</head>

<body onload="init()">
        <?php session_start();
        if(isset($_SESSION['dateDemander'])){
            $date = $_SESSION['dateDemander'];
        }
        
        if (!isset($date)){
            $date = "24 dec 2021";
        }
        echo $date;
        ?>
    <input value="<?php  echo $date ?>" type="text" hidden="hidden" id="InputDate" />
    <div class="countdown">
        <div class="countdown-days">
            <h2 id="days">0</h2>
            <span>Days</span>
        </div>
        <div class="countdown-hours">
            <h2 id="hours">0</h2>
            <span>Hours</span>
        </div>
        <div class="countdown-minutes">
            <h2 id="minutes">0</h2>
            <span>minutes</span>
        </div>
        <div class="countdown-seconds">
            <h2 id="seconds">0</h2>
            <span>seconds</span>
        </div>

    </div>
    
</body>

</html>