<?php
  echo "<br/>Ma view est bien chargée";

  echo "<h1>VIEW</h1>";


  foreach ($taskListView as $task) {
    echo "<br/>- ".$task["name"];
  }
?>