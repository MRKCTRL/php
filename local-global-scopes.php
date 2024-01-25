<?php
  $title = 'scope'

  $greeting = 'Hello Jay' //global

  $cap = [
    ['name' => 'adiLite', 'manufacturer' => 'adidas'],
      ['name' => 'baseball', 'manufacturer' => 'adidas'],
        ['name' => 'climacool', 'manufacturer' => 'adidas'],
          ['name' => 'mesh', 'manufacturer' => 'adidas'],
  ]

  //$capName = array_column($cap, 'name');

  function pluck($arr, $key)
  {
    $result = array_map(/*"returnName",*/ function($item) use($key){
      // global $key;
      return $item[$key];
    }, $arr);

    
    return $result;
  }
  //
  // function returnName($item) {
  //   return $item['name'];
  // }

  $capName = pluck($caps, 'manufacturer')

  function sum($a, $b)
  {
    // only useable if we explicitly say global
    global $greeting;
    echo $greeting;
    $result = $a + $b;

    return $result;
  }

  $result = sum(1,2,3);

  function output($value /*= ''*/)
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
   output($capName)

      ?>
          </table>

      </div>
    </div>
  </body>
</html>
