<?php


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



function sum($a, $b)
{
  // only useable if we explicitly say global
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
function auth_user($email, $password)
{
  return $email == USERNAME && $password == PASSWORD;

}
function redirect($url) {
    header("Location: $url");
}
function isUserAuth(){
  return isset($_SESSION['email']);
}
function ensureUserIsAuth(){
  if(!isUserAuth()) {
    redirect('login.php');
    die()
  }
}


 ?>
