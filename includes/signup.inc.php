<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
    $Pword = mysqli_real_escape_string($conn, $_POST['Pword']);

    //ERROR HANDLERS
    //Check for empty feilds

    if (empty($Fname) || empty($Lname) || empty($Uname) || empty($Pword)) {

      header("Location: ../signup.php?signup=empty");
      exit();

    } else {

//check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $Fname) || !preg_match("/^[a-zA-Z]*$/", $Lname)) {

          header("Location: ../signup.php?signup=invalid");
          exit();
} else {

        $sql = "SELECT * FROM userprofile WHERE Uname='$Uname'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {

          header("Location: ../signup.php?signup=usertaken");
          exit();

        } else {

// hashing the Passwo

        $hashedPword = password_hash($Pword, PASSWORD_DEFAULT);
        //INSERT THE USER INTO THE DATA BASE
        $sql = "INSERT INTO userprofile (Fname, Lname, Uname, Pword) VALUES ('$Fname', '$Lname', '$Uname', '$hashedPword')";

        mysqli_query($conn, $sql);

        header("Location: ../signup.php?signup=success");
        exit();

        }
}

}
}
     else {
  header("Location: ../signup.php");
  exit();
}
