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
              <li>The Dwarfs</li>
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



    <div class="maintext">

        <h2 style="color:#fff";>Dwarf Planet Page</h2>
        </div>





       <div class="row">
            <div class="col s12 m6">

                <a><img src="assests/download.jpg"></a>
                </div>
            </div>
              <div class="col s12 m6">
                  <div class="temppagetext">
              <h2>Planet info goes below</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in leo dolor. Duis nisi nibh, bibendum nec mollis sagittis, fringilla et nibh. Nullam nec tristique dui, ac consequat libero. Praesent mauris turpis, malesuada et sagittis at, tristique in ex. Aliquam at diam ut lectus gravida interdum id vitae dolor. Praesent id neque dui. Nulla vitae ante a ligula ornare maximus nec nec felis. Proin euismod lorem sem, ac sagittis mauris sodales ornare. Sed eleifend dui sed venenatis pulvinar.</p>
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
</html>
