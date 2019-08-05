<?php



if (isset($_SESSION['u_id'])) {
  $logoutbtn ='<form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="logout">logout</button>

</form>';
}




 ?>
