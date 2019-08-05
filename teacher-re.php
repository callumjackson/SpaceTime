<?php
session_start();
include_once 'header.php';
include_once 'includes/name.inc.php';
include_once 'includes/logoutbtn.php';

if (isset($_SESSION['u_id'])) {
  echo ' ';
} else {
header("Location: ../index.php");
}

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
              color: white;

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
            <li>Resources</li>
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
  <div class="row">
       <div class="col s3">

         <!-- section 1 -->

         <div class="container">
           <div class="center">
             <h4>lesson plans</h4>

           <form method="get" action="lessonplans/Lesson-Plan-Spacetime.docx">
             <style type="text/css">
               .btn{
                 background-color: black;
                 cursor: pointer;
               }
             </style>
             <img src="lessonplans/assests/lesson-icon.png">
         <button class="btn">Lesson plan 1</button>
         </form>

           </div>
       </div>
</div>
       <div class="col s3">

         <!-- section 2 -->

         <div class="container">
           <div class=" center">
             <h4>Work Sheets</h4>

           <form method="get" action="lessonplans/worksheet1.jpg">
             <style type="text/css">
               .btn{
                 background-color: black;
                 cursor: pointer;
               }
             </style>
             <img src="lessonplans/assests/worksheet-icon.png">

                <button class="btn ">Worksheet 1</button>

</form>

<br>


        <form method="get" action="lessonplans/worksheet2.jpg">
  <style type="text/css">
    .btn{
      background-color: black;
      cursor: pointer;
    }
  </style>
  <img src="lessonplans/assests/worksheet-icon.png">

     <button class="btn ">Worksheet 2</button>

</form>
</div></div></div>
       <div class="col s3">

              <!-- section 3 -->

              <div class="container">
                <div class="center">
                  <h4>extra resourses</h4>

                <form method="get" action="lessonplans/compare-size/mercury-size.png">
                  <style type="text/css">
                    .btn{
                      background-color: black;
                      cursor: pointer;
                      height: 100%;
                    }
                  </style>
              <button class="btn">mercury size compared to earth</button>
              </form>
              <form method="get" action="lessonplans/compare-size/venus-size.png">
                <style type="text/css">
                  .btn{
                    background-color: black;
                    cursor: pointer;
                      height: 100%;
                  }
                </style>
            <button class="btn">venus size compared to earth</button>
            </form>

            <form method="get" action="lessonplans/compare-size/earth-size.png">
              <style type="text/css">
                .btn{
                  background-color: black;
                  cursor: pointer;
                    height: 100%;
                }
              </style>
            <button class="btn">earth size compared to the moon</button>
            </form>

            <form method="get" action="lessonplans/compare-size/mars-size.png">
              <style type="text/css">
                .btn{
                  background-color: black;
                  cursor: pointer;
                    height: 100%;
                }
              </style>
          <button class="btn">mars size compared to earth</button>
          </form>

          <form method="get" action="lessonplans/compare-size/jupiter-size.png">
            <style type="text/css">
              .btn{
                background-color: black;
                cursor: pointer;
                  height: 100%;
              }
            </style>
        <button class="btn">jupiter size compared to earth</button>
        </form>

        <form method="get" action="lessonplans/compare-size/saturn-size.png">
          <style type="text/css">
            .btn{
              background-color: black;
              cursor: pointer;
              height: 100%;
            }
          </style>
      <button class="btn">saturn size compared to earth</button>
      </form>

      <form method="get" action="lessonplans/compare-size/uranus-size.png">
        <style type="text/css">
          .btn{
            background-color: black;
            cursor: pointer;
              height: 100%;
          }
        </style>
      <button class="btn">uranus size compared to earth</button>
      </form>

      <form method="get" action="lessonplans/compare-size/neptune-size.png">
        <style type="text/css">
          .btn{
            background-color: black;
            cursor: pointer;
              height: 100%;
          }
        </style>
      <button class="btn">neptune size compared to earth</button>
      </form>


</div>
</div>
                </div>

       <div class="col s3">


                  <div class="container">
                    <div class=" center">
                      <h4>Work Sheets</h4>

                    <form method="get" action="lessonplans/worksheet1-comp.jpg">
                      <style type="text/css">
                        .btn{
                          background-color: black;
                          cursor: pointer;
                        }
                      </style>
                      <img src="lessonplans/assests/answers-icon.png">

                         <button class="btn ">Worksheet 1 completed</button>

         </form>

         <br>


                 <form method="get" action="lessonplans/worksheet2-comp.jpg">
           <style type="text/css">
             .btn{
               background-color: black;
               cursor: pointer;
             }
           </style>
           <img src="lessonplans/assests/answers-icon.png">

              <button class="btn ">Worksheet 2 completed</button>

         </form>
         </div></div></div>
              </div>

</div>


</main>
<?php
include_once 'footer.php';
 ?>
</body>
