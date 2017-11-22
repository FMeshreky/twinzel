<?php

include_once('pdo.php');
include_once('loginClass.php');

if (isset($_POST['status_post'])) {
  $status_body = $_POST['status_body'];
  $user_id = Check::isLoggedIn();

  if (strlen($status_body) > 0) {

    DB::query('INSERT INTO stories VALUES (\'\', :story_body, NOW(), :user_id, 0, 0, 0)', array(':story_body'=>$status_body, ':user_id'=>$user_id));

 }

}

if (isset($_POST['media_post'])) {
  $status_body = $_POST['media_body'];
  $user_id = Check::isLoggedIn();

  if (strlen($status_body) > 0) {

    DB::query('INSERT INTO stories VALUES (\'\', :media_body, NOW(), :user_id, 0, 0, 0)', array(':media_body'=>$status_body, ':user_id'=>$user_id));

  }

}

if (isset($_POST['story_post'])) {
  $status_body = $_POST['story_body'];
  $user_id = Check::isLoggedIn();

  if (strlen($status_body) > 0) {

    DB::query('INSERT INTO stories VALUES (\'\', :story_body, NOW(), :user_id, 0, 0, 0)', array(':story_body'=>$status_body, ':user_id'=>$user_id));

  }

}

?>
