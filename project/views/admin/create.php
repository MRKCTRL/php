<?php
  session_start();
 require('../app/app.php');

 ensureUserIsAuth();

 // if ($_SERVER['REQUEST_METHOD'] === 'POST')
 if(isPost())  {
   $term = sanitize($_POST['term']);
   $definition = sanitize($_POST['definition']);

   if(empty($term) || empty($definition)) {
     // TODO: display message
   }else{
     // addTerm($term, $definition);
     Data::addTerm($term, $definition);
     redirect('index.php');

   }
 }

 view('admin/create',);
