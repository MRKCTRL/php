<?php
  $title = 'POST input';
  session_start();

  require_once ('./../inc/config.php');

  require_once('./functions.php');

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $EMAIL = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $PASSWORD = $_POST['PASSWORD'] //// TODO: validate this 1!

    //compare with data store
    if(auth_user($email, $password)) {
      $_SESSION['email'] = $email;
      redirect('admin.php')
      die();
    }else {
      $status = 'provided credentials did not match';
    }


    if ($email == false) {
      $status = 'please enter valid email';
    }
  }


  include('./../inc/header.php');
?>

    <div class="container">
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
