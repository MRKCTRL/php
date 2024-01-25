<!-- eveyrhting after the question mark is a query string -->

<?php

  $title = 'GET input'

  include('./../inc/header.php');
  require_once('./functions.php');

  if(isUserAuth()){
    redirect(admin.php);
    die();
  }

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    // output($_POST);
    //    $_POST['email'];
    $EMAIL = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)

    if ($email == false) {
      $status = 'please enter valid email';
    }
  }

  // if(isset($_POST['LOGIN'])) {
  //   output($_POST);
  // }
  //
  ?>

    <div class="conatiner">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">POST input</h1>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <form class="" action="index.html" method="post">
            <label for="enail">email</label>
            <input class="form-control" type="text" name="email" id="email" value="">
        </div>
        <div class="form-group">
          <form class="" action="index.html" method="post">
            <label for="enail">email</label>
            <input class="form-control" type="text" name="email" id="email" value="">
        </div>
        <div class="form-group">
          <form class="" action="index.html" method="post">
            <label for="password">password</label>
            <input class="form-control" type="text" name="password" id="password" value="">
        </div>
        <div class="form group">
          <input type="submit" name="login" value="login">

        </div>


        </form>

        </form>

        </form>
      </div>
      <div class="row">
        <?php
        if(isset($status)){
          echo $status;
        }
         ?>

      </div>
    </div>

<?php include('./../inc/footer.php'); ?>
