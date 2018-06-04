<?php
  $app = __DIR__;

  echo $app."<br/>";

  // Nous permettre de récupérer notre class Route
  require_once "routes.php";

  $route = new Route();
  $route->getController();
?>