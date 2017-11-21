<?php

// include_once 'config.php';
include_once('pdo.php');
// include_once('loginClass.php');

if (isset($_POST['register'])) {

// Date to age function
$dob = new DateTime($_POST['datetimepicker']);
$now = new DateTime();
$age = $dob->diff($now);
$agv = $age->format('%Y');

// $first = mysqli_real_escape_string($conn, $_POST['first']);
// $last = mysqli_real_escape_string($conn, $_POST['last']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
// $age = mysqli_real_escape_string($conn, $agv);
// $gen = mysqli_real_escape_string($conn, $_POST['gen']);

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$age = $agv;
$gen = $_POST['gen'];

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
      // Check if email is exist
      // $sql = "SELECT * FROM users WHERE user_email='$email'";
      // $result = mysqli_query($conn, $sql);
      // $resultCheck = mysqli_num_rows($result);
      //
      // if ($resultCheck > 0) {

        if (DB::query('SELECT user_email FROM users WHERE :email=user_email', array(':email'=>$email))) {

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
                // $sql = "INSERT INTO users (user_first, user_last, user_email, user_pwd, user_age, user_gen) VALUES ('$first', '$last', '$email', '$hashedPwd', '$age', '$gen');";
                // mysqli_query($conn, $sql);
                DB::query('INSERT INTO users VALUES (\'\', :first, :last, :email, :pwd, :age, :gen, :title)', array(':first'=>$first, ':last'=>$last, ':email'=>$email, ':pwd'=>password_hash($pwd, PASSWORD_BCRYPT), ':age'=>$age, ':gen'=>$gen, ':title'=>"New Twinzeler"));
                // DB::query('INSERT INTO title VALUES (\'\', :title, :user_id)', array(':title'=>"New Twinzeler", ':user_id'=>Check::isLoggedIn()));

                $cstrong = True;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                $user_id = DB::query('SELECT user_id FROM users WHERE :email=user_email', array(':email'=>$email))[0]['user_id'];
                DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));

                setcookie("TID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                setcookie("_TID", "1", time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                header("Location: ../stories.php");
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
