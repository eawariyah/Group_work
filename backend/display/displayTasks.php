<?php

require dirname (__FILE__)."/../controllers/tasks_controller.php";

function displayTasks($nursesID, $date){
  $task = viewDailyTasks_cntrl($nursesID, $date);
  foreach ($task as $key => $value) {
    $instruction = $value["assignee_id"]." ". "has a task for you to ".$value["description"];
    $time = $value["start_time"]."-".$value["end_time"]."|||";
  echo '<p style="font-size:20px; height: 88px; padding-bottom: 1em; font-family: Cambria;
  color: #404040;
  background-color: aliceblue;">'.$time." ".$instruction.'</p>';
  }
}


$nursesID = '25';
$date = $_POST['fullDate'];
displayTasks($nursesID, $date);
?>