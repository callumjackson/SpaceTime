<?php
session_start();
include_once 'includes/name.inc.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>SpaceTime</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
   <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">


</head>
<style>
            .button1234 {
                background-color: #3B3A3A; /* Green */
                border: none;
                color: white;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
            </style>
    <style>
        body{
            background-image:url(assests/background-imag.jpg);
            font-family: 'Bangers', cursive;

        }
    </style>
<body>

   <header>

     <a class="btn button1234 " href="teachers-page.php">Teachers Area</a><br>
<?php
echo $showname;
?>


        <div class="container center">
                <a href="index.php" class="brand-logo"> <img src="assests/logo.png"></a>
            <h3 class="indextext">Choose your planet!</h3>
            <!-- this is where the info is for the website -->
                </div>




            </header>

        <main>
    <div class="carousel">
    <a class="carousel-item" href="Sun.php"><img src="assests/planets/sun.png"></a>
    <a class="carousel-item" href="Mercury.php"><img src="assests/planets/murcary.png"></a>
    <a class="carousel-item" href="Venus.php"><img src="assests/planets/venus.png"></a>
    <a class="carousel-item" href="Earth.php"><img src="assests/planets/earth.png"></a>
    <a class="carousel-item" href="Mars.php"><img src="assests/planets/mars.png"></a>
    <a class="carousel-item" href="Jupiter.php"><img src="assests/planets/jupiter.png"></a>
    <a class="carousel-item" href="Saturn.php"><img src="assests/planets/saturn.png"></a>
    <a class="carousel-item" href="Uranus.php"><img src="assests/planets/uranus.png"></a>
    <a class="carousel-item" href="Neptune.php"><img src="assests/planets/neptune.png"></a>
  </div>
        </div>
    <div class="container center">
    <a class="btn button1234" onclick="Materialize.toast('Click and Drag your mouse over the planets to find more!', 8000)">Help Me Im Stuck.</a>
    </div>
            </main>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
