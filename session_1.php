<?php
  session_start();
  $_SESSION["user_id"]="123";
  $_SESSION["user_name"]="admin";

  echo "Vous avez cree une session";
?>