<?php
include_once 'header.php'
 ?>

<body>
<div class="main-wrapper">
  <div class="login">
    <div class="container">
    <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="Fname" placeholder="First Name">
      <input type="text" name="Lname" placeholder="Last Name">
      <input type="text" name="Uname" placeholder="Username">
      <input type="password" name="Pword" placeholder="Password">
      <button type="submit" name="submit">Sign Up</button>
        </form>
</div>
  </div>
</div>

</body>
</html>
