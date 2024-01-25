<?php

  // $result = 1 < 3;
  // echo $result == true;
  // the important thing is to be consistent
  // in laravel/symphony the convention is use camel casing
  // use the style dramework it uses
  // look at the style guideline and follow them
  $firstName = 'Jabu';
  $lastName = 'mcJagger'

  if($firstName == 'Jabu'){
    echo 'the condition is true';
  }

  if($firstName == 'jabu'){
    echo 'the condition is true';
  }else {
    echo 'the conditon is false'
  }

// this is the and
// both have to be true
  if($firstName == 'jabu' && $lastName == 'Mbundu'){
    echo 'the condition is true';
  }else {
    echo 'the conditon is false'
  }
// this is the or
// if one is true, the whole condtion is true
  if($firstName == 'jabu' || $lastName == 'Mbundu'){
    echo 'the condition is true';
  }else {
    echo 'the conditon is false'
  }

  if($firstName == 'jabu' || $lastName == 'Mbundu'){
    echo 'the first condition is true';
  }else if ($firstName == 'Jay' && $lastName == 'mcJagger') {
    echo 'the second conditon is true'
  }else {
    // code...
    echo "the conditon is false";
    
  }




// if we have html, we should close it and if not we can leave the closeing tag
