


<?php



if (isset($_POST['Submit'])) 
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 
    //Get the user_ID and password from the form 
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $patient_gender = $_POST['gender'];
    $patient_DOB = $_POST['DOB'];
    $patient_height = $_POST['height'];
    $patient_weight = $_POST['weight'];
    $patient_ethnicity = $_POST['ethnicity'];
    $patient_bloodgroup = $_POST['bloodgroup'];
    $patient_history = $_POST['history'];
    $patient_email = $_POST['patientEmail'];
    $patient_number = $_POST['patientNumber'];


    
   //insert the data into the doctor table

   $sql = "INSERT INTO patients(Firstname, Lastname, Gender, DOB, Height, Patient_weight, Ethnicity, BloodGroup, MedicalHistory, Email, PhoneNumber) 
   VALUES ( '$firstname', '$lastname', '$patient_gender', '.$patient_DOB.', '$patient_height', '$patient_weight', '$patient_ethnicity', '$patient_bloodgroup', '$patient_history', '$patient_email', '$patient_number')"; 
   
    
    if($conn->query($sql)===True ){
        header("Location: nursesHome.php");
        exit();
    }
    else {echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

$conn->close();
?>
