<?php

include_once('pdo.php');
include_once('loginClass.php');

if (isset($_POST['title'])) {

$title = $_POST['customTitle'];
$check = DB::query('SELECT user_id FROM users WHERE user_id=:user_id', array(':user_id'=>Check::isLoggedIn()))[0]['user_id'];

if ($check > 0) {

  DB::query('UPDATE users SET user_title=:user_title WHERE :user_id=user_id', array(':user_title'=>$title, ':user_id'=>Check::isLoggedIn()));
  header("Location: ../stories.php?index=changed");
  exit();

}
// } else {
//
//   DB::query('INSERT INTO users VALUES (\'\', \'\', \'\', \'\', \'\' :user_id)', array(':title'=>$title, ':user_id'=>Check::isLoggedIn()));
//   header("Location: ../stories.php?index=empty");
//   exit();
//
// }


}

 ?>
