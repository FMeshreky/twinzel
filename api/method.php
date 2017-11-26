<?php

require_once('php/pdo.php');

$db = new DB("127.0.0.1", "Twinzel", "root", "L0c@lAdmin");
// print_r($_GET);
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if ($_GET['url'] == "auth") {

  } else if ($_GET['url'] == "users") {

  }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_GET['url'] == "auth") {
    $postBody = file_get_contents("php://input");
    $postBody = json_decode($postBody);

    $email = $postBody->user_email;
    $pwd = $postBody->user_pwd;

    if ($db->query('SELECT user_email FROM users WHERE user_email=:email', array(':email'=>$email))) {

      if (password_verify($pwd, $db->query('SELECT user_pwd FROM users WHERE user_email=:email', array(':email'=>$email))[0]['user_pwd'])) {

        $cstrong = True;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
        $user_id = $db->query('SELECT user_id FROM users WHERE user_email=:email', array(':email'=>$email))[0]['user_id'];
        $db->query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));

        echo '{ "Token": "'.$token.'"}';

      } else {
        http_response_code(401);
      }

    } else {
      http_response_code(407);
    }

  }

} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    if ($_GET['url'] == "auth") {
      if (isset($_GET['token'])) {
        if ($db->query('SELECT token FROM login_tokens WHERE user_id=:user_id', array(':user_id'=>sha1($_GET['token'])))) {
          $db->query('DELETE FROM login_tokens WHERE user_id=:user_id', array(':user_id'=>sha1($_GET['token'])));
          echo '{ "Status": "Success" }';
          http_response_code(200);
        } else {
          echo '{ "Error": "Invalid token" }';
          http_response_code(400);
        }
      } else {
        echo '{ "Error": "Malformed request" }';
        http_response_code(400);
      }
    }
} else {
  http_response_code(405);
}

 ?>
