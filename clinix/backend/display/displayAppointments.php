<?php

require dirname (__FILE__)."/../controllers/appointments_controller.php";


function displayAppointments($doctorID, $date){
  $task = viewAppointments_cntrl($doctorID, $date);
  foreach ($task as $key => $value) {
    $instruction = $value["assignee_id"]." ". "created an appointment for you with patient"." "
    .$value["patient_id"]." "."to"." ".$value["description"];
    $time = $value["start_time"]."-".$value["end_time"]."|||";
  echo '<p style="font-size:20px; height: 88px; padding-bottom: 1em; font-family: Cambria;
  color: #404040;
  background-color: aliceblue;">'.$time." ".$instruction.'</p>';
  }
}

$doctorID =  '26';
$date = $_POST['fullDate'];
displayAppointments($doctorID, $date);
?>