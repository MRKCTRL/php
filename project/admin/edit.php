<?php
 require('../app/app.php');

 if (isGet()) {
   $key = sanitize($_GET['key']);

      //;

   if(empty($key)) {
  //  || $term === false) {
     view('not-found');
     die();
   }

    // $term = getTerm($key);
      $term = Data::getTerm($key);

   if ($term === false) {
     view('not-found');
     die();
   }
   view('admin/edit', $term);
 }

 // if ($_SERVER['REQUEST_METHOD'] === 'POST')
 if(isPost())  {
   $term = sanitize($_POST['term']);
   $definition = sanitize($_POST['definition']);
   $orgTerm = sanitize($_POST['org-term']);

   if(empty($term) || empty($definition) || empty($orgTerm)) {
     // TODO: display message
   }else{
     // updateTerm($orgTerm, $term, $definition)
     Data::updateTerm($orgTerm, $term, $definition);
     // yodateTerm($term, $definition);
     redirect('index.php');

   }
 }
