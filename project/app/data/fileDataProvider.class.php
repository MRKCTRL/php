<?php
require 'glossaryTerm.class.php';

class fileDataProvider extends dataProvider{
  // function __construct($filePath){
  //   $this->filePath = $filePath;
  // }


  public  function getTerms(){
    $json = $this->getData();

    return json_decode($json);
  }

    public function getTerm($term){
    $term = $this->getTerms();

    foreach ($terms as $item) {
      // code...
      if ($item->term == $term) {
        // code...
        return $item;
      }
    }
    return false;
  }

    public function searchTerm($search) {
    $items = $this->getTerms();

    // array_map(fn, arr)
    // array_filter(arr, fn)

    // consistent

    $results = array_filter($items, function($item){

      // str_starts_with($haystack, $needle);
      // str_ends_with($haystack, $needle);

      if(strpos($item->term, $search) !== false ||
        strpos($item->definition, $search) !== false) {
        return $item;
      }

    }/*, $items*/);
    return $results;
  }

    public function addTerm($term, $definition){
    $items = $this->getTerms();

    $items[] = new glossaryTerm($term, $definition);

    // $arr = ;
    // $obj = (object) [
    //   'term' => $term,
    //   'definition' => $definition,
    // ];
    //
    // $items[] = $obj;

    $this->setData($items);
  }


    public function updateTerm($orgTerm, $newTerm, $definition) {
    $terms = $this->getTerms();
    foreach ($terms as $item) {
      // code...
      if ($item->term == $orgTerm) {
        // code...
       $item->term = $newTerm;
       $item->definition = $definition;
       break;
      }
    }
    setData($terms);
  }



      public function delTerm($term) {
      $terms = $this->getTerms();

      for ($i=0; $i < count($term); $i++) {
        // code...
        if($term[$i]->term === $term) {
          unset($terms[$i]);
          break;
        }
      }
      // TODO: rebuild array
      $newTerms = array_value($terms);

      $this->etData($newTerms);
    }



    private function  getData() {
      // $fname = $this->filePath;
      // $fname = CONFIG['dataFile'];

      $json = '';

      if (!fileExists($this->source)){
        file_put_contents($this->source, '');
        // $handle = fopen($fname, 'w+');
        // fclose($handle);
      }else {
        // code...
        $json = file_get_contents($this->source);
        // $json = file_get_contents($fname);
        // $handle = fopen($fname, 'r');
        // $json = fread($handle, filesize($fname));
        // fclose($handle);
      }
      return $json;
    }

    private function setData($arr) {
      // $fname = $this->filePath;
      // $fname = CONFIG['dataFile'];

      $json = json_encode($arr);
      file_put_contents($this-source, $json);
      // file_put_contents($fname, $json);
    }
}
