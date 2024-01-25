<?php
  $title = 'includes'

  include('./../inc/header.php');
  require('./../inc/functions');
  // useful when other file is used
  require_once('./functions.php');



  $cap = [
    ['name' => 'adiLite', 'manufacturer' => 'adidas'],
      ['name' => 'baseball', 'manufacturer' => 'adidas'],
        ['name' => 'climacool', 'manufacturer' => 'adidas'],
          ['name' => 'mesh', 'manufacturer' => 'adidas'],
  ]

  $capName = pluck($caps, 'manufacturer')


?>




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
<?php include('./../inc/footer.php');

?>
