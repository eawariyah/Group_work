<?php


if (isset($_POST['showFreeNurses'])) 
{

require dirname (__FILE__)."/../controllers/tasks_controller.php";

function displayFreeNurses($date, $start_time, $end_time){
    $free_doctors = getFreeNurses_cntrl($date, $start_time, $end_time);
    foreach ($free_doctors as $key => $value) {
          echo "<option value=`{$value['emplyee_id']}`>".$value['FirstName'].' '.$value['LastName']."</option>";
        }
}
$date = $_POST['selectDate'];
$start_time = $_POST['selectStartTime'];
$end_time = $_POST['selectEndTime'];
displayFreeNurses($date, $start_time, $end_time);
}
?>