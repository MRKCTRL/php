<?php
  $title = 'while loop'

  $favouriteCaps = [
    'adilite',
    'baseball',
    'climacool'
  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Funda: <?= $title; ?></title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>

    <nav class="navbar navbar-expend-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="nav-brand" href="#">PHp Funda: <?= $title; ?></a>
      </div>
    </nav>


    <div class="conatiner">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My favourit caps</h1>

        </div>

      </div>
      <div class="row">
        <table class="table table-striped">
<?php

$a = 0

while ($a < count($favouriteCaps)) {
  // code...
  $caps = $favouriteCaps[$a];
    echo "<td><td>$cap</td></td>";
    // have an end point
    $a++;
}

 ?>
          </table>

      </div>
    </div>
  </body>
</html>
