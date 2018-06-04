<?php
  // Pour prototyper mes acces à la base de donnée
  class Model {

    private $user = "root";
    private $password = "root";
    private $dbname = "todolist";
    private $host = "localhost";
    private $port = 3306;

    public function connect () {
      try {
        // ("mysql:host=localhost;dbname=todolist", "root", "root")
        $db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
        echo "connection";
        return $db;
      }
      catch (PDOException $e) {
        echo "erreur";
      }
      echo "Je me connect à ma base de donnée";
    }
  }
?>