<?php
  session_start();
  require_once ('./../inc/config.php');

  require_once('./functions.php');
  echo $_SESSION['email'];

  ensureUserIsAuth();

 ?>
