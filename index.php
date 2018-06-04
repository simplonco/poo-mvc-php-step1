<?php

  // Une classe peut avoir des variables et des functions/methods.
  // Ces variables et functions peuvent être :
  // public (accessible à tout autres class)
  // private (accessible à elle même)
  // protected (accessible à elle même et ses enfants)
  echo "<h1>LOGS</h1>";

  class Vehicule {
    public $marque = "";

    public function rouler () {
      echo "Je roule...<br />";
    }
  }

  // On peut aussi du coup permettre à une autre class qu'on déclare, d'hériter des méthodes et variables de sa class parent
  // Grace au mot clé "extends"
  class Auto extends Vehicule {

    public function nombreDeRoue () {
      echo "J'ai 4 roues<br />";
    }
  }

  class Moto extends Vehicule {
    public function nombreDeRoue () {
      echo "J'ai 2 roues<br />";
    }
  }

  // On va pouvoir instancier notre classe avec le mot "new" et en l'attribuant à une variable.
  $vehiculeOrdinaire = new Vehicule();
  $auto = new Auto();
  $moto = new Moto();


  // Les instances ont acces au methodes de notre class
  $vehiculeOrdinaire->rouler();
  $auto->rouler();
  $auto->nombreDeRoue();
  $moto->nombreDeRoue();

  require_once "server.php"
?>