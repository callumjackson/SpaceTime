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
            <li>Neptune</li>
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
            Neptune is the smallest of the ice giants.
      Despite being smaller than Uranus, Neptune has a greater mass. Below its heavy atmosphere, Uranus is made of layers of hydrogen, helium, and methane gases.
          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 2</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";>
          <h5>Neptune has a very thin collection of rings.
They are likely made up of ice particles mixed with dust grains and possibly coated with a carbon-based substance.

          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 3</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Neptune has 14 moons.
The most interesting moon is Triton, a frozen world that is spewing nitrogen ice and dust particles out from below its surface.</h5></span></div>
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
        <img class="activator" src="/assests/img-questions/neptune/card-1.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">what do we know?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Neptune was not known to the ancients.
It is not visible to the naked eye and was first observed in 1846. Its position was determined using mathematical predictions. It was named after the Roman god of the sea.</p>
        <img src="assests/img-questions/neptune/card-1-sea.jpeg"  height="180px" width="250px">
      </div>
    </div>
      </div>



  <!-- card 2 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/assests/img-questions/neptune/card-2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">facts behind the name<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Neptune has a very active climate.
        Large storms whirl through its upper atmosphere, and high-speed winds track around the planet at up 600 meters per second.</p>
        <img src="assests/img-questions/neptune/card-2-storm.png"  height="180px" width="250px">
      </div>
    </div>
      </div>

  <!-- card 3 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="/assests/img-questions/neptune/card-3.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">whats it made of?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>The atmosphere of Neptune is made of hydrogen and helium, with some methane.
The methane absorbs red light, which makes the planet appear a lovely blue. High, thin clouds drift in the upper atmosphere.</p>
        <img src="assests/img-questions/sun/card-4-science.png"  height="180px" width="250px">
      </div>
    </div>
      </div>
  <!-- card 4 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/neptune/card-4.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">how fast is the rotation?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Neptune spins on its axis very rapidly.
Its equatorial clouds take 18 hours to make one rotation. This is because Neptune is not solid body.</p>
        <img src="assests/img-questions/neptune/card-4-sky.jpeg"  height="180px" width="250px">
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
