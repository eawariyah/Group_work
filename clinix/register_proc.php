<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['register'])) 
{

	//collection form data
	$firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $employee_email = $_POST['employeeEmail'];
    $employee_pass = $_POST['defaultPassword'];
    $employee_number = $_POST['employeeNumber'];
    $gender = $_POST['genderSelect'];
  
	//database connection parameters
	$servername = "localhost";
    $username = "ClinicXcare";
    $password = "clinix@16";
    $dbname = "clinic_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

	//encrypt password
	//use the php password_hard function
	$encrypted_pass = password_hash($employee_pass, PASSWORD_DEFAULT);

	//write query
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "INSERT INTO employee(FirstName, LastName,Email, emp_pass,PhoneNumber,Gender,emp_role,Specialization)
	 VALUES ('$firstname', '$lastname', '$employee_email', '$encrypted_pass','$employee_number','$gender','a','none')"; 

	// check if query worked
	if ($conn->query($sql) === TRUE) {

		//begin session
		// session_start();
	  
		//redirect to homepage
		header("Location: login_page.php");
		
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	//header("Location: register.php");
	echo "register";
	exit();
}



?>