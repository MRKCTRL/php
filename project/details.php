<?php
 require('app/app.php');
 if(!isset($_GET['term'])) {
   redirect('index.php');
 }

 // $data = getTerm($_GET['term']); // TODO: validate input
 $data = Data::getTerm($_GET['term']); // TODO: validate input

 if ($data == false) {
   // TODO: 404
   view('not-found');
   die();
 }
 // $term = $data->term;
  $viewBag = [
    'title' => 'detail  for' . $data->term
  ];
  view('detail', $data);

 ?>
