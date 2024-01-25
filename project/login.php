<?php
  session_start();
 require('app/app.php');


 if(isUserAuth()){
   redirect('admin/');
 }



 if(isPost()) {
   $EMAIL = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   $PASSWORD = sanitize($_POST['PASSWORD']); //// TODO: validate this 1!

   if(authUser($email, $password)) {
     $_SESSION['email'] = $email;
     redirect('admin/')
   }else {
     $viewBag['status'] = 'provided credentials did not match';
   }
   if ($email == false) {
     $viewBag['status'] = 'please enter valid email';
   }
 }

  view('login');
