<?php

session_start();
require('../app/app.php');

ensureUserIsAuth();


 if (isGet()) {
   $key = sanitize($_GET['key']);

      //;

   if(empty($key) || $term === false) {
     view('not-found');
     die();
   }

    $term = Data::getTerm($key);

   if ($term === false) {
     view('not-found');
     die();
   }
   view('admin/delete', $term);
 }

 // if ($_SERVER['REQUEST_METHOD'] === 'POST')
 if(isPost())  {
   $term = sanitize($_POST['term']);

   if(empty($term)) {
     // TODO: display message
   }else{
     delTerm( $term);
     Data::delTerm( $term);
     // yodateTerm($term, $definition);
     redirect('index.php');

   }
 }
