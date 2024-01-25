<<?php

// old version
$cap = array('baseball', 'adiLite', 'climacool');

// new version, js like
$Caps = ['baseball', 'adiCap', 'climacool'];

print_r($caps)

echo "$cap[1]";


if (isset($cap[4])){
  echo $cap[4];
}else {
  eccho 'guitar does not exist'
}
// assoicative array
// key and value
$cap2 = [
  'adidas' => 'baseball',
    'adidas' => 'climacool',
      'adidas' => 'adilite',
      'Adidas'=>'pinkcap'
];

echo $cap2['adidas'];

if (isset($cap2['adidas'])){
  echo $cap[4];
}else {
  echo 'guitar does not exist';
}

//
// $baseCaps = 'baseball';
// $adiCap = 'adi-lite'
// $
