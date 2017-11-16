<?php

session_start();

if (isset($_POST['submit'])) {

  include_once 'config.php';
  // include 'pdo.php';

  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Error handlers
  //Check if inputs are Empty
  if (empty($email) || empty($pwd)) {
    header("Location: ../index.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../index.php?login=error");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        //Dehashing the password
        $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
        if ($hashedPwdCheck == false) {
          header("Location: ../index.php?login=error");
          exit();
        } elseif ($hashedPwdCheck == true) {
          //Log in the user here
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first'] = $row['user_first'];
          $_SESSION['u_last'] = $row['user_last'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_age'] = $row['user_age'];
          $_SESSION['u_gen'] = $row['user_gen'];
          //
          // $cstrong = True;
          // $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
          // $user_id = DB::query('SELECT user_id FROM users WHERE user_email=:user_email', array(':user_email'=>$email))[0]['user_email'];
          // DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
          //
          header("Location: ../home.php");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../index.php?login=error");
  exit();
}

 ?>
