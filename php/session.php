<?php

  include_once('pdo.php');

  function isLoggedIn() {

    if(isset($_COOKIE['TID'])) {

      if (DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['TID'])))) {

        $user_id = DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['TID'])))[0]['user_id'];

        return $user_id;

        if (isset($_COOKIE['_TID'])) {

        return true;

        } else {

          $cstrong = True;
          $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
          DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
          DB::query('DELETE FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['TID'])));

          setcookie("TID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
          setcookie("_TID", "1", time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

          return true;

        }

      }

    }

    return false;

  }

  if (!isLoggedIn()) {
    header("Location: ../twinzel/index.php?index=loggedout");
    exit();
  }

 ?>
