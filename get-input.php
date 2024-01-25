<!-- eveyrhting after the question mark is a query string -->

<?php

  $title = 'GET input'

  include('./../inc/header.php');
  require_once('./functions.php');

  // $productId = $_GET['productid'];
  // $category = $_GET['category'];
  // $limit = $_GET['limit'];

  // $category = '';
  // $limit = '';
  //
  // function setValues() {
  //   global $category, $limit;

    $category = filer_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
    $limit = filer_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
  // }
  //
  // setValues();
  // if($category == false || $limit == false){
  //   die();
  // }
  if($category == false ){
    $category = 1;

  }
  if ($limit == false){
    $limit = 10;
  }
  ?>

    <div class="conatiner">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Get-input</h1>

        </div>

      </div>
      <div class="row">
        Showing category <?= $category; ?> . Limit: <?=$limit;  ?>
      </div>
    </div>

<?php include('./../inc/footer.php'); ?>
