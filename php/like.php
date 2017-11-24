<?php

include_once('pdo.php');
include_once('loginClass.php');

// class FindIDFor {
//
// public static function like() {
//
//
//   // $post_id = DB::query('SELECT post_id FROM stories WHERE story_body=:story_body', array(':story_body'=>$post_story));
//
//   }

// if (isset($_POST['do_like'])) {

$user_id = Check::isLoggedIn();

if (isset($_GET['post_id'])) {

if (!DB::query('SELECT user_id FROM likes WHERE story_id=:story_id AND user_id=:user_id', array('story_id'=>$_GET['post_id'], 'user_id'=>$user_id))) {

  DB::query('UPDATE stories SET story_likes=story_likes+1 WHERE story_id=:story_id', array(':story_id'=>$_GET['post_id']));
  DB::query('INSERT INTO likes VALUES (\'\', :story_id, :user_id)', array(':story_id'=>$_GET['post_id'], ':user_id'=>$user_id));

  header('Location: ../stories.php');
  exit();

} else {

  DB::query('UPDATE stories SET story_likes=story_likes-1 WHERE story_id=:story_id', array(':story_id'=>$_GET['post_id']));
  DB::query('DELETE FROM likes WHERE story_id=:story_id AND user_id=:user_id', array(':story_id'=>$_GET['post_id'], ':user_id'=>$user_id));

  header('Location: ../stories.php');
  exit();

}

}

// $story_id = $story['story_id'];
// $post_likes = $story['story_likes'];
// DB::query('UPDATE stories SET story_likes=:post_likes+1 WHERE story_id=:story_id', array(':post_likes'=>$post_likes, ':story_id'=>$story_id));
// // $post_likes = DB::query('SELECT story_likes FROM stories WHERE story_id=:story_id', array(':story_id'=>$story_id));
// //
// // // $user_id = Check::isLoggedIn();
// //
// //   DB::query('UPDATE stories SET story_likes=:story_likes+1 WHERE status_body=:story_body', array(':story_likes'=>$post_likes, ':story_id'=>$status_body));
// header("Location: ../stories.php?index=liked");
// exit();

 ?>
