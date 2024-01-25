<?php
  $title = 'functions'

  function sum($a, $b) //parameters list, call them anything
  {
    //local variable to the sum and accessebile inside
    $result = $a + $b;

    return $result;
  }
  // echo ();

//global function
  $result = sum(1,2,3);

  function output($value)
  {
    echo '<pre>';
 print_r($value);
echo '</pre>';

  }

  $caps = [
    'adiCap',
    'adiLite',
    'baseball',
  ]

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1, shrink-to-">

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
   <php
   output($caps)
   // echo '<pre>';
  //   print_r($caps);
    //echo '</pre>';

    // <?= $result;

      ?>
          </table>

      </div>
    </div>
  </body>
</html>
