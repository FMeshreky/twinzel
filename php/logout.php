<?php

include_once('pdo.php');
include_once('loginClass.php');

// function logout() {
//
// DB::query('DELETE FROM login_tokens WHERE token=:token', array('token'=>sha1($_COOKIE['TID'])));
//
// setcookie('TID', '1', time() - 3600);
// setcookie('_TID', '1', time() - 3600);
//
// header("Location: ../index.php?index=loggedout");
// exit();

// if (!Check::isLoggedIn()) {
//   die();
//   heaser("Location: ../index.php?index=notLoggedIn");
//
// } else {

// if (isset($_POST['confirm'])) {
//
//   if (isset($_COOKIE['TID'])) {
//
//     DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['TID'])));
//
//   }

  DB::query('DELETE FROM login_tokens WHERE user_id=:user_id', array(':user_id'=>Check::isLoggedIn()));


  setcookie('TID', '', time() - 3600);
  setcookie('_TID', '', time() - 3600);

  header("Location: ../index.php?index=loggedout");
  exit();

  // }
  // session_start();
  // session_destroy();
  // header('Location: index.php');
  // exit;

?>
