<?php
 require('app/app.php');


  // $json = get_data();

  // $terms = ;

  // $title = 'hey, Jay';

  $viewBag = [
    'title' => 'Glossary',
    'heading' =>'Glossary'
  ];

  $data = new fileDataProvider(CONFIG['dataFile']);
    // $data2 = new fileDataProvider(CONFIG['dataFile2']);


  if(isset($_GET['search'])) {
    $items = Data::search_term($_GET['search']);
    // data->searchTerms($_GET['search']);

    $viewBag['heading'] = 'search results for' . $_GET['search'];
  }else {
    // $items = $data->getTerms();
    $items = Data::getTerms();

  }

  // $viewBag['title'] = 'this is the title';

  view(
    name:'index', 
    // $ssh:false,
    model:$items
  );


 ?>
