<?php
  session_start();
 if(isset ($_SESSION["user_id"]) ){
    $user_id = $_SESSION["user_id"];
    $user_id  = "167";
 }
  

  echo "Votre user id est devenu ". $user_id;
  session_destroy();
?>