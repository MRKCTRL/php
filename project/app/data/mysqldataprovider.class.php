<?php

// require 'glossaryTerm.class.php';

class mySqlDataProvider extends dataProvider {
  public function getTerm() {
    return $this->query('SELECT * from terms');
  
  
  
  
  
  
  }
  // public function getTerm($term)
  // $db = $this->connect();

  //     if($db === null){
  //       return [];
  //     }

  //     $query = $db->query();

  //     $data = $query->fetchAll(PDO::FETCH_CLASS, 'glossaryTerm');

      


  //     if (empty($data)) {
  //       return;
  //     }


  //     $query = null;
  //     $db = null;

  //     return $data[0];
  // }
  // function __construct($source){
  //   $this->source = $source;
  // }


  public  function getTerms($term){
    $db = $this->connect();

    if($db === null){
      return;
    }

    $sql = 'SELECT * FROM terms WHERE id = :id';
    $smt = $db->prepare($sql);

    $smt->execute([
      ':id' => $term,
    ]);

    $data = $query->fetchAll(PDO::FETCH_CLASS, 'glossaryTerm');



    if(empty($data)){
      return;
    }

    $query = null;
    $db = null;

    return $data;
  }

    // public function getTerm($term){

  // }

    public function searchTerm($search) {

      return $this->query(
          'SELECT * FROM terms WHERE term LIKE :search OR definition LIKE :search',
          [':search' => '%'.$search.'%',]
      );
      // $db = $this->connect();

      // if($db === null) {
      //   return [];
      // }

      // $sql = 
      // $smt = $db->prepare($sql);

      // $smt->execute([
        
      // ]);

      // $data = $smt->fetchAll(PDO::FETCH_CLASS, 'glossaryTerm');
 
      // // if(empty($data)){
      // //   return [];

      //   $smt = null;
      // $db = null;

      // return $data;
  }

    public function addTerm($term, $definition){
      $this->execute(
        'INSERT INTO terms ( term, definition)  VALUES ( :term, :definition )',
        [
            ':term' => $term,
            ':definition' => $definition
          ]
      );
       
      // $db = $this->connect();

      // if($db === null){
      //   return;
      // }
      // $sql = 'INSERT INTO terms ( term, definition)  VALUES ( :term, :definition )';
      // $smt = $db->prepare($sql);

      // $smt->execute([
      //   ':term' => $term,
      //   ':definition' => $definition
      // ]);
      // $smt = null;
      // $db = null;
  }


    public function updateTerm($orgTerm, $newTerm, $definition) {
      $this->execute(
        'UPDATE terms SET term = :term, defintion = :defintion WHERE id = :id',
        [
            ':term' => $newTerm,
            ':definition' => $definition,
            ':id' => $orgTerm
          ]
      );

      // $db = $this->connect();

      // if($db === null){
      //   return;
      // }

      // $sql = 'UPDATE terms SET term = :term, defintion = :defintion WHERE id = :id';
      // $smt = $db->prepare($sql);


      // $smt->execute([
      //   ':term' => $newTerm,
      //   ':definition' => $definition,
      //   ':id' => $orgTerm
      // ]);
      // $smt = null;
      // $db = null;
  }



      public function delTerm($term) {
        $this->execute(
          'DELETE FROM terms WHERE id = :id',
          [':id' => $term]
        );
      //   $db = $this->connect();

      // if($db === null){
      //   return;
      // }

      // $sql = 'DELETE FROM terms WHERE id = :id';
      // $smt = $db->prepare($sql);


      // $smt->execute([
      //   ':id' => $term
      // ]);

      // $smt = null;
      // $db = null;
    }

    private function execute($sql, $sqlParam){
      $db = $this->connect();

      if($db === null){
        return;
      }

      // $sql = 'DELETE FROM terms WHERE id = :id';
      $smt = $db->prepare($sql);


      $smt->execute($sqlParam);

      // $smt = null;
      // $db = null;
    }
    private function  query($sql, $sqlParam = []) {
      $db = $this->connect();

      if($db === null){
        return [];
      }

      $query = $db->query($sql);

      $query = null;


      IF(EMPTY($sqlParam)){
        $query=$db->query($sql);
      }else{
        $query=$db->query($sql);
        $query->execute($sqlParam);
      }

      $data = $query->fetchAll(PDO::FETCH_CLASS, 'glossaryTerm');

      


      if (empty($data)) {
        return;
      }


      $query = null;
      $db = null;

      return $data[0];
    }

    private function connect() {
      try{
        return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);

      }catch(PDOException $e) {
        return null;
      }
    }


}

 ?>


6:42:25