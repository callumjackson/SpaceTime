<?php

session_start();

if (isset($_POST['submit'])) {
  include 'dbh.inc.php';

  $Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
  $Pword = mysqli_real_escape_string($conn, $_POST['Pword']);

// ERROR HANDLERS

// CHECK IF INPUTS ARE EMPTY

if (empty($Uname) || empty($Pword)) {

  header("Location: ../teachers-page.php?login=empty");
  exit();


} else {

    $sql = "SELECT * FROM userprofile WHERE Uname='$Uname'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {

      header("Location: ../teachers-page.php?login=error1");
      exit();

    } else {
      if ($row = mysqli_fetch_assoc($result)) {
         //dehashing the PASSWORD
         $hashedPwordcheck = password_verify($Pword, $row['Pword']);
         if ($hashedPwordcheck == false) {

           header("Location: ../teachers-page.php?login=error2");
           exit();

         } elseif ($hashedPwordcheck == true) {
           // login the user here
           $_SESSION['u_id'] = $row['id'];
           $_SESSION['u_first'] = $row['Fname'];
           $_SESSION['u_last'] = $row['Lname'];
           $_SESSION['u_Pword'] = $row['Pword'];
           $_SESSION['u_Uname'] = $row['Uname'];

              header("Location: ../teacher-re.php");
              exit();
         }
      }
    }
}

} else {
        header("Location: ../teacher-page.php?login=error3");
        exit();

}
