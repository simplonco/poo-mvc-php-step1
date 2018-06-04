<?php
  echo "<br />Tu as bien chargé tasks.php<br/>";

  require_once "models/tasks.php";

  // On va instancier TaskModel
  $tasks = new TaskModel();

  // // [ 'name' => 'acheter tomates', name => 'passer l'aspirateur' ];
  // $taskListView va etre egal au $taskList renvoyé par ma méthode $tasks->getAll();
  $taskListView = $tasks->getAll();

  require_once "views/tasks.php";
?>