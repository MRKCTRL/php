<?php

  function redirect($url) {
    header("Location: $url");
    die();
  }

  function view($name, $model = '', /*$ssh= true*/) {
    global $viewBag;
    require(APPPATH . "views/layout.view.php");

    // if($ssh){
    //   require(APPPATH . "views/layout.view.php");
    // }
  }
  
  
  function isGet() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
  }
  function isPost() { 
    return $_SERVER['REQUEST_METHOD'] === 'POST';
  }

  function sanitize($value) {
    $temp = filter_var(TRIM($value), FILTER_SANITIZE_STRING);

    if($temp == false){
      return '';
    }
    return $temp;
  }

  function authUser($email, $password)
  {
    $user = CONFIG['users'];

    if (!isset($user[$email])){
      return false;
    }
    $userPassword = $user[$email];

    return $password == $userPassword;

  }
  function isUserAuth(){
    return isset($_SESSION['email']);
  }
  function ensureUserIsAuth(){
    if(!isUserAuth()) {
      redirect('../login.php');
      die();
    }
  }


 ?>
