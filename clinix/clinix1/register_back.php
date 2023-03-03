<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['register'])) 
{
	//collection form data
	$user_Id = $_POST['txt']; 
	$user_name =  $_POST['uname'];
	$user_pass = $_POST['upass'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "clinic_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 
	$query = "SELECT*FROM all_doctor WHERE Doctor_Id = '$user_Id' OR Firstname = '$user_name'";
	$result = $conn->query($query);
	if($result->num_rows>0){
		echo "This ID or username is already in use. Please choose a different ID or username.";}else{
	$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);

	$sql = "INSERT INTO all_doctor (Doctor_Id, Firstname, Password)
        VALUES ('$user_Id','$user_name', '$encrypted_pass')";
	// check if query worked
	if ($conn->query($sql) === TRUE) { 
		//redirect to homepage
		header("Location: admin_page.php");
		exit();
	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}}
		//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: Register.php");
	exit();
}
?>