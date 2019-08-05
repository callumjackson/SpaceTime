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
            <li>Mercury</li>
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
        <div class="collapsible-body"><span style="color:#fff";><h5>Mercury is named for the Roman messenger to the gods.
 The exact date of Mercury’s discovery is unknown as it pre-dates its first historical mention</h5></span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 2</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Mercury is only the second hottest planet.
Despite being further from the Sun, Venus experiences higher temperatures. The surface of Mercury which faces the Sun sees temperatures of up to 427°C</h5></span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 3</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Mercury has a molten core.
In recent years scientists from NASA have come to believe the solid iron core of Mercury could in fact be molten.</h5></span></div>
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
        <img class="activator" src="/assests/img-questions/Mercury/card-1.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How much would you weigh?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Your weight on Mercury would be 38% of your weight on Earth.</p>
        <img src="assests/img-questions/Mercury/card-1-grav.png"  height="180px" width="250px">
      </div>
    </div>
      </div>



  <!-- card 2 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/assests/img-questions/Mercury/card-2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How Big Is Mercury?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Mercury has a diameter of 4,879 km, making it the smallest planet.</p>
        <img src="assests/img-questions/Mercury/card-2-light.png"  height="180px" width="250px">
      </div>
    </div>
      </div>

  <!-- card 3 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="/assests/img-questions/Mercury/card-3.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">How long is a year on Mercury?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>A year on Mercury takes 88 Earth days and A day on the surface of Mercury lasts 176 Earth days.
        pretty cool right.</p>
        <img src="assests/img-questions/Mercury/card-3-day.png"  height="180px" width="250px">
      </div>
    </div>
      </div>
  <!-- card 4 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/Mercury/card-4.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">What type of star is it?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Only two spacecraft have ever visited Mercury.</p>
        <img src="assests/img-questions/Mercury/card-4-ship.png"  height="180px" width="250px">
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
