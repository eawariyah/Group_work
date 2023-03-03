<?php

require dirname (__FILE__)."/../controllers/tasks_controller.php";

if (isset($_POST['assignTask'])) {
	echo "Assigning Task!";
	$doctor_ID = $_SESSION['uid'];
	$nurse_ID = $_POST['selectNurse'];
	$task_date = $_POST['selectTaskDate'];
	$start_time = $_POST['selectStartTime'];
	$description = $_POST['taskDescr'];
	
	assignTask_cntrl($doctor_ID, $nurse_ID, $task_date, $start_time, $start_time+1, $description, 'N');
	
	}
	else{
		//
	}
	
?>