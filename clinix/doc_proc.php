<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['login'])) 
{
	//collection form data
	$user_name =  $_POST['email'];
	$user_pass = $_POST['password'];

	//database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "class_activity";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

	//encrypt password
	//use the php password_hard function
	//$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);

	//write query
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "SELECT * FROM user_table WHERE user_name = '$user_name'";

	// check if query worked
	if ($exeResult = $conn->query($sql)) {

		$finalData = mysqli_fetch_assoc($exeResult);
	  
	  	//var_dump($finalData);
	  	// echo $finalData['user_name'];
	  	// echo '<br>';
	  	// echo $finalData['user_pass'];
	  	// echo '<br>';
	  	// echo $finalData['user_role'];
	  	// echo '<br>';
	  	// echo $finalData['user_status'];
	  	// echo '<br>';

	  	//check for password
	  if(	password_verify($user_pass, $finalData['user_pass'])){
		
		session_start();
		$_SESSION['uid'] = $finalData['user_id'];
		$_SESSION['urole'] = $finalData['user_role'];


        header("Location: doctorsHome.html");}
        else {
            //echo error but continue executing the code to close the session
            header("Location: loginDoctor.html");
        }
    

	} else {
		//echo error but continue executing the code to close the session
        header("Location: loginDoctor.html");
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to login page
	header("Location: loginDoctor.html");
	exit();
}



?>