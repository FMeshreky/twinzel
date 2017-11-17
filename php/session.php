<?php

  include('pdo.php');

  function isLoggedIn() {

    if(isset($_COOKIE['TID'])) {

      if (DB::query('SELECT user_id FROM login_tokens WHERE token=:token', array(':token'=>sha1($_COOKIE['TID'])))) {

        header("Location: ../home.php?index=loggedin");
        exit();

      }

    }

    header("Location: ../index.php?index=login");
    exit();

  }

 ?>
