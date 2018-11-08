<?php
function userIsRegistered($users, $form) {
  foreach ($users as $user) {
    if ($user["name"] === $form["name"] && $user["password"] === $form["password"]) {
      startUserSession($user);
      return true;
    }
  }
}

function startUserSession($user) {
  session_start();
  $_SESSION["user"] = $user;
  $_SESSION['basket']=array();
}
?>
