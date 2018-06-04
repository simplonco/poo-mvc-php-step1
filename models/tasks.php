<?php 
  
  require_once "./models/model.php";

  class TaskModel extends Model {

    public function getAll () {
      $db = parent::connect(); // return $db
      // $db va nous permettre de faire toutes nos requete sur notre base de données.
      $sql = "select * from tasks";
      $query = $db->prepare($sql);
      $query->execute();
      $taskList = $query->fetchAll();
      // [ 'name' => 'acheter tomates', name => 'passer l'aspirateur' ];
      return $taskList;
    }
  }

?>