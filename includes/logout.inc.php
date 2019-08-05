<?php
session_start();
 print_r($_POST);

if (isset($_POST['logout'])) {

  session_unset();
  session_destroy();

  header('Location: http://spacetime.gwiddle.co.uk/index.php');
  exit();
}

 ?>
