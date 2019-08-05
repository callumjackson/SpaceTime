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
            <li>Venus</li>
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
        <div class="collapsible-body"><span style="color:#fff";><h5>Venus rotates in the opposite direction to most other planets.
This means that Venus is rotating in the opposite direction to the Sun, this is also know as a retrograde rotation.</h5></span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 2</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Venus is the second brightest object in the night sky.
Only the Moon is brighter.</h5></span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 3</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Venus has a very weak magnetic field. This surprised scientists,
           who expected Venus to have a magnetic field similar in strength to Earth’s. One possible reason for this is that Venus has no solid inner core, or that its core is not cooling.</h5></span></div>
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
        <img class="activator" src="/assests/img-questions/venus/card-1.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How much hot is it there?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Venus is the hottest planet in our solar system.
The average surface temperature is 462 °C,</p>
        <img src="assests/img-questions/venus/card-1-hot.jpg"  height="180px" width="250px">
      </div>
    </div>
      </div>



  <!-- card 2 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/assests/img-questions/venus/card-2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How long is a day?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>A day on Venus lasts longer than a year.
It takes 243 Earth days to rotate once on its axis. The planet’s orbit around the Sun takes 225 Earth days, pretty cool right.</p>
        <img src="assests/img-questions/venus/card-2-sky.jpeg"  height="180px" width="250px">
      </div>
    </div>
      </div>

  <!-- card 3 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="/assests/img-questions/venus/card-3.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">A bit about Venus<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Venus is named after the Roman goddess of love and beauty. This may be, in part, due the brightness of the planet and may date back
          to the Babylonians in 1581 who referred to Venus as “bright queen of the sky”.</p>
        <img src="assests/img-questions/venus/card-3-god.jpeg"  height="180px" width="250px">
      </div>
    </div>
      </div>
  <!-- card 4 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/venus/card-4.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How old is venus<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>The estimated age of the Venusian surface is around 300-400 million years old. By comparison, the surface of the Earth is about 100 million years old.</p>
        <img src="assests/img-questions/venus/card-4-surface.jpeg"  height="180px" width="250px">
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
