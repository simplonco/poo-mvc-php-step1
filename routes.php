<?php

  // $route = new Route();
  // $route->method();
  class Route {
    private function formatUrl () {
      // /tasks/filter/
      if ( isset($_SERVER["PATH_INFO"])) {
        $url = $_SERVER["PATH_INFO"];
      }
      else {
        $url = "/";
      }
      // tasks/filter
      $urlTrim = trim($url, "/");
      // ["tasks", "filter"]
      // On trim pour ne pas avoir : ["", "tasks", "filter", ""]
      $urlTab = explode("/", $url);
      // echo $urlTab[1];
      return $urlTab;
    }

    public function getController () {
      echo "method getController de route a bien été appelé<br/>";

      // $this représente l'instance
      // Par exemple $route
      // Je peux donc appeler $route->formatUrl()
      // Grace à $this->formatUrl()
      // $this->formatUrl() prend la valeur de ce que me renvoie la function. Donc elle prend la valeur de $urlTab;
      // Comme pour afficher tasks, je dois afficher $urlTab[1];
      // Pour afficher tasks je dois afficher $this->formatUrl()[1];
      $controller = $this->formatUrl()[1];
      echo "<br/>mon controller : ".$controller;

      // Comme $controller est égal à "tasks"
      // Ce chemin va etre egal à controllers/tasks.php

      // controllers/tasks".php"
      require_once "controllers/".$controller.".php";
    }
  }
?>