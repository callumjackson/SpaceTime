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
            <li>Uranus</li>
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
            Uranus turns on its axis once every 17 hours, 14 minutes.
The planet rotates in a retrograde direction, opposite to the way Earth and most other planets turn.
          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 2</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";>
          <h5>Uranus’ moons are named after characters created by William Shakespeare and Alexander Pope.
These include Oberon, Titania and Miranda.  All are frozen worlds with dark surfaces. Some are ice and rock mixtures.
          </h5>
        </span></div>
      </li>
      <li>
         <div class="collapsible-header"><h5>Fun Fact 3</h5><p> - Click Me</p></div>
        <div class="collapsible-body"><span style="color:#fff";><h5>Uranus has two sets of very thin dark coloured rings.
The ring particles are small, ranging from a dust-sized particles to small boulders. There are eleven inner rings and two outer rings.
</h5></span></div>
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
        <img class="activator" src="/assests/img-questions/uranus/card-1.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">what is the planet made of?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Uranus is often referred to as an “ice giant” planet.
Like the other gas giants, it has a hydrogen upper layer, which has helium mixed in. Below that is an icy “mantle, which surrounds a rock and ice core.</p>
        <img src="assests/img-questions/uranus/card-1-ice.jpeg"  height="180px" width="250px">
      </div>
    </div>
      </div>



  <!-- card 2 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/assests/img-questions/uranus/card-2.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">how many times have we been there?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Only one spacecraft has flown by Uranus.
In 1986, the Voyager 2 spacecraft swept past the planet at a distance of 81,500 km. </p>
        <img src="assests/img-questions/saturn/card-2-ship.png"  height="180px" width="250px">
      </div>
    </div>
      </div>

  <!-- card 3 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="/assests/img-questions/uranus/card-3.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">how long is its orbit of the sun?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Uranus makes one trip around the Sun every 84 Earth years.
During some parts of its orbit one or the other of its poles point directly at the Sun and get about 42 years of direct sunlight. The rest of the time they are in darkness.</p>
        <img src="assests/img-questions/sun/card-4.png"  height="180px" width="250px">
      </div>
    </div>
      </div>
  <!-- card 4 -->
  <div class="col s12 m3">
  <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="/assests/img-questions/uranus/card-4.png">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">is it cold there?<i class="material-icons right"></i></span>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Well then...<i class="material-icons right">Close</i></span>
        <p>Uranus hits the coldest temperatures of any planet.
With minimum atmospheric temperature of -224°C Uranus is nearly coldest planet in the solar system. </p>
        <img src="assests/img-questions/uranus/card-4-cold.jpeg"  height="180px" width="250px">
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
