<?php

include_once('pdo.php');
include_once('loginClass.php');

$user_id = Check::isLoggedIn();

if (isset('do_comment68') {
  $cmnt_body = $_POST['post68'];
  $user_id = Check::isLoggedIn();

  if (strlen($status_body) > 0) {

    DB::query('INSERT INTO comments VALUES (\'\', :cmnt_body, NOW(), :user_id, 0, :story_id)', array(':story_body'=>$cmnt_body, ':user_id'=>$user_id, ':story_id'=>$story['story_id']));

 }

}

 ?>

 <!-- <script>
  $(function() {
    $('#do_comment<?php// echo $_GET["post_id"]; ?>').click(function() {
      $('#toggleComment<?php// echo $_GET["post_id"]; ?>').slideDown();
    });
  });
 </script> -->
