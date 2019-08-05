<?php
session_start();
include_once 'header.php';
include_once 'includes/name.inc.php';
include_once 'includes/logoutbtn.php';
?>

<body>
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
              .funfactstext {
                text-decoration-color: black;
              }

              </style>
      <style>
          body{
              background-image:url(assests/background-imag.jpg);
              font-family: 'Bangers', cursive;

          }
      </style>
  <style>

  .nametext {
      margin-top: 0px;
      margin-bottom: 0px;
      margin-right: 20px;
  }

  </style>



  <header>

    <nav>
      <div class="nav-wrapper">
<div class="row">


<!-- home -->

    <div class="col s4">
      <div class="col s4">
      </div>
      <div class="col s4">
  <ul id="nav-mobile" class="brand-logo left nav-logout">
    <li><a href="index.php" class="brand-logo">Home</a></li>
      </div>
      <div class="col s4">
      </div>
  </div>
    <!-- title -->
    <div class="col s4">
      <ul id="nav-mobile" class="brand-logo center nav-logout">
            <li>Saturn</li>
        </ul>
    </div>
<!-- name and logout -->
      <div class="col s4">
        <ul id="nav-mobile" class="brand-logo right ">
          <div class="col s8">
            <?php echo $showname; ?>
          </div>
          <div class="col s4">
            <?php echo $logoutbtn; ?>
          </div>
           </ul>
          </div>

      </div>
    </div>
</div>
</div>
  </nav>
  </header>
<main>


              <h2 class="center" style="color:#fff";>Fun Facts</h2>


<!-- this is the area where the fun facts logo is -->
                <div class="row">
                        <div class="col s6 center">
                          <br>
                          <br>
                          <br>
                              <img src="assests/fun-facts.png">
                        </div>

<!-- this is the area where the popout facts are -->
                        <div class="col s6">
              <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><h5>Fun Fact 1</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";>
          <h5>
            Saturn can be seen with the naked eye.
  It is the fifth brightest object in the solar system and is also easily studied through binoculars or a small telescope.
          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 2</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";>
          <h5>Saturn is the flattest planet.
Its polar diameter is 90% of its equatorial diameter, this is due to its low density and fast rotation. Saturn turns on its axis once every 10 hours and 34 minutes giving it the second-shortest day of any of the solar system’s planets.
          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 3</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Saturn is made mostly of hydrogen.
It exists in layers that get denser farther into the planet. Eventually, deep inside, the hydrogen becomes metallic. At the core lies a hot interior.</h5></span></div>
      </li>
    </ul>
                       </div>
          </div>
<br>
<br>

<!-- this is the area with the questions -->

<div class="row">









  <!-- card 1 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/saturn/card-1.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">what are the rings of saturn?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Saturn has the most extensive rings in the solar system.
The Saturnian rings are made mostly of chunks of ice and small amounts of carbonaceous dust.</p>
        <img src="assests/img-questions/saturn/card-1-rings.jpg"  height="180px" width="250px">
      </div>
    </div>
      </div>



  <!-- card 2 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/assests/img-questions/saturn/card-2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">how many times have we been there?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Four spacecraft have visited Saturn.
Pioneer 11, Voyager 1 and 2, and the Cassini-Huygens mission have all studied the planet. </p>
        <img src="assests/img-questions/saturn/card-2-ship.png"  height="180px" width="250px">
      </div>
    </div>
      </div>

  <!-- card 3 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="/assests/img-questions/saturn/card-3.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">can i see saturn?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>you can see Saturn with your own eyes
Saturn appears as one of the 5 planets visible with the unaided eye. If Saturn is in the sky at night, you can head outside and see it.
To see the rings and the ball of the planet itself, you’ll want to peer through a telescope.</p>
        <img src="assests/img-questions/saturn/card-3-sky.jpg"  height="180px" width="250px">
      </div>
    </div>
      </div>
  <!-- card 4 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/saturn/card-4.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">can it sustain life?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>There could be life near Saturn
Not life on Saturn; the planet is way too hostile to support life. But there could be life on one of Saturn’s moons: Enceladus.</p>
        <img src="assests/img-questions/saturn/card-4-alien.png"  height="300px" width="250px">
      </div>
    </div>
      </div>


</main>
<?php
include_once 'footer.php';
 ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
