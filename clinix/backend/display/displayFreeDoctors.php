<?php

if (isset($_POST['showFreeDoctors'])) 
{

require dirname (__FILE__)."/../controllers/appointments_controller.php";

function displayFreeDoctors($date, $start_time, $end_time){
    $free_doctors = getFreeDoctors_cntrl($date, $start_time, $end_time);
    foreach ($free_doctors as $key => $value) {
          echo "<option value=`{$value['emplyee_id']}`>".$value['FirstName'].' '.$value['LastName']."</option>";
        }
}

$date = $_POST['selectDate'];
$start_time = $_POST['selectStartTime'];
$end_time = $_POST['selectEndTime'];
displayFreeDoctors($date, $start_time, $end_time);
}

?>