<?php

if (isset($_POST['register'])) {

include_once 'config.php';

$dob = new DateTime($_POST['datetimepicker']);
$now = new DateTime();
$age = $dob->diff($now);
$agv = $age->format('%Y');

/*$dob = $_GET['datetimepicker'];
$dob = explode("/", $dob);
$agv = (date("md", date("U", mktime(0, 0, 0, $dob[0], $dob[1], $dob[2]))) > date("md") ? ((date("Y") - $dob[2]) -1) : (date("Y") - $dob[2]));*/

/*$udb = $_POST['dob'];
$dob = new DateTime($udb);
$now = new DateTime();
$dif = $now->diff($udb);
$agv = $dif->y;*/

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$age = mysqli_real_escape_string($conn, $agv);
$gen = mysqli_real_escape_string($conn, $_POST['gen']);

//Error handlers
//Check for empty fields
if (empty($first) || empty($last) || empty($email) || empty($pwd)) {
  header("Location: ../index.php?index=empty");
  exit();
} else {
  //Check if input char are valid
  if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
    header("Location: ../index.php?index=invalid");
    exit();
  } else {
    //Check if email is invalid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../index.php?index=email");
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE user_email='$email'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        header("Location: ../index.php?index=usertaken");
        exit();
      } else {
        // Check password policy
        $userPwd = $_POST['pwd'];
        //$checkPwd = '~^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9]){8,50}~m';

        //if (!preg_match($checkPwd, $userPwd)) {
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%&]{8,50}$/', $userPwd)) {
          header("Location: ../index.php?index=password");
          exit();
        } else {
          // Check if user is old enough
          if ($agv < 13) {
            header("Location: ../index.php?index=underage");
            exit();
            } else {
              // Check if user accepted ToS
              if (!isset($_POST['optionsCheckboxes'])) {
                header("Location: ../index.php?index=notchecked");
                exit();
              } else {
                //Hashing the Password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //Insert thee user into the database
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd, user_age, user_gen) VALUES ('$first', '$last', '$email', '$hashedPwd', '$age', '$gen');";
                mysqli_query($conn, $sql);
                header("Location: ../index.php?index=success");
                exit();
              }
            }
          }
        }
      }
    }
  }
} else {
  header("Location: ../index.php");
  exit();
}

 ?>
