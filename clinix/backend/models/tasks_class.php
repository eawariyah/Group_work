<?php
//connect to database class
require dirname (__FILE__)."/db_class.php";

class task_class extends db_connection
{
	//--INSERT--//
	function getFreeNurses($date, $start_time, $end_time){
		$sql =  "SELECT emplyee_id, FirstName, LastName FROM employee, nurses_tasks WHERE emp_role ='n' AND nurses_id NOT IN (
			SELECT nurses_id FROM nurses_tasks WHERE task_date='$date'
			AND start_time='$start_time'
			AND end_time='$end_time')";
        return $this->run_query($sql);
    }

	function assignTask($assignee_id, $nurses_id, $task_date, $start_time, $end_time, $task_description, $task_status){
		$sql =  "INSERT INTO nurses_tasks(assignee_id, nurses_id, task_date , start_time, end_time, description, task_status)
		VALUES ('$assignee_id', '$nurses_id', '$task_date', '$start_time', '$end_time', '$task_description', '$task_status')";
        return $this->run_query($sql);
	}

	function viewDailyTasks($nurse_ID, $date){
		$sql = "SELECT * FROM nurses_tasks
		WHERE nurses_id = '$nurse_ID' 
		AND task_date = '$date'
		AND task_status ='N' 
		ORDER BY start_time ASC";
		return $this->run_query($sql);
	}

	function markTaskAsDone($nurse_ID, $start_time, $end_time){
		$sql = "UPDATE nurses_tasks 
		SET task_status = 'done' 
		WHERE nurseID = $nurse_ID 
		AND start_time = $start_time 
		AND end_time = $end_time";
	}
}	

?>