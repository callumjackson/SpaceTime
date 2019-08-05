<?php

session_start();
if (isset($_SESSION['u_id'])) {
  header("Location: ../teacher-re.php");
} else {
echo ' ';
}
$error = $_GET['login'];


include_once 'header.php'

 ?>

<body>
  <div class="row">

     <div class="offset-s2 col s8 offset-s2">
       <div class="login">
         <div class="container">
         <form action="includes/login.inc.php" method="POST">
           <input type="text" name="Uname" placeholder="Username">
           <input type="password" name="Pword" placeholder="Password">
           <button type="submit" name="submit">Login</button>
           </form>
             <a href="signup.php" type="button"><button>signup</button></a>
             <br>
           <?php if ($error === 'error1') {
             echo 'error - invalid username or password';
           } elseif ($error === 'error2') {
             echo 'error - invalid username or password';
           } elseif ($error === 'error3') {
             echo 'error - please log in first';
           } ?>

     </div>

     </div>
   </div>


</div>


</body>
</html>
