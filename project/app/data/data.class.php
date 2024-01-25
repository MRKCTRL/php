<?php
  require 'dataprovider.class.php';

class Data {
  static private $db;
  static public function initialize(dataProvider $dataProvider) {
    return self::$ds = $dataProvider;
  }
  static public function getTerms(){
    return self::$ds->getTerms();

  }
  static public function getTerm($term){
    return self::$ds->getTerms();

  }
  static public function searchTerm($search){
    return self::$ds->searchTerm($search);

  }
  static public function addTerm($term, $definition){
    return self::$ds->getTerms($term, $definition);

  }
  static public function updateTerm($orgTerm,$newTerm,$definition){
    return self::$ds->updateTerm($orgTerm, $newTerm, $definition);

  }
  static public function delTerm($term){
    return self::$ds->delTerm($term);

  }

}
?>
