<?php

$servername = "localhost";
    $username = "ClinicXcare";
    $password = "clinix@16";
    $dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

$id=$_GET['updateid'];

//  echo $id;

$abc="SELECT * from patients where Patient_Id=$id ";
    $result=$conn->query($abc);
    $row=mysqli_fetch_assoc($result);

    $first_name = $row['Firstname'];
    $last_name = $row['Lastname'];
    $patientgender = $row['Gender'];
    $patientDOB = $row['DOB'];
    $patientheight = $row['Height'];
    $patientweight = $row['Patient_weight'];
    $patientethnicity = $row['Ethnicity'];
    $patientbloodgroup = $row['BloodGroup'];
    $patienthistory = $row['MedicalHistory'];
    $patientemail = $row['Email'];
    $patientnumber = $row['PhoneNumber'];
    


if (isset($_POST['Update'])) 
{
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

    $sql = "UPDATE patients set Patient_Id='$id',
    Firstname='$firstname', Lastname='$lastname',  Gender='$patient_gender', DOB='$patient_DOB',Height='$patient_height',Patient_weight='$patient_weight', Ethnicity='$patient_ethnicity', BloodGroup='$patient_bloodgroup', MedicalHistory='$patient_history', Email='$patient_email', PhoneNumber='$patient_number' where Patient_Id='$id'"; 
    
    
    if($conn->query($sql) ){
        header("Location:patientsList.php");
        exit();
    }
    else {echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="createEmployee.css">
</head>
<body>

    <h1>Update employee</h1>

    <div id="popupform">
        <form class="container" method="POST" >
            
            <label for="f_name">First Name</label><br>
            <input type="text" name="f_name" class="f_name" id="f_name" value=<?php echo $first_name;?>><br>
    
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" class="l_name" id="l_name"value=<?php echo $last_name;?>><br>

             <label for="genderSelect">Gender</label><br>
            <select id="genderSelect" class="genderSelect" name="gender"><br>
                <option value="male">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
              </select><br>

            <label for="DOB">DOB</label><br>
            <input type="text" name="DOB" class="defaultPassword" id="DOB"value=<?php echo $patientDOB;?>><br>

            <label for="height">Height</label><br>
            <input type="text" name="height" class="defaultPassword" id="height"value=<?php echo $patientheight;?>><br>

            <label for="Weight">Weight</label><br>
            <input type="text" name="weight" class="defaultPassword" id="weight"value=<?php echo $patientweight;?>><br>

            <label for="Ethnicity">Ethnicity</label><br>
            <input type="text" name="ethnicity" class="defaultPassword" id="ethnicity"value=<?php echo $patientethnicity;?>><br>

            <label for="bloodgroup">BloodGroup</label><br>
            <input type="text" name="bloodgroup" class="defaultPassword" id="bloodgroup"value=<?php echo $patientbloodgroup;?>><br>

            <label for="history">Medical History</label><br>
            <input type="text" name="history" class="defaultPassword" id="history"value=<?php echo $patienthistory;?>><br>

            
            <label for="patientEmail">Email Address</label><br>
            <input type="text" name="patientEmail" class="employeeEmail" id="patientEmail"value=<?php echo $patientemail;?>><br>

            <label for="employeeNumber">Phone Number</label><br>
            <input type="tel" name="patientNumber" class="employeeNumber" id="patientNumber"value=<?php echo $patientnumber;?>><br>

            <br><br><input type="Submit" class = "Submit" value="Update" name="Update">
            
    
        </form>

        <button type="button" onclick="document.getElementById('popupform').style.display='none'">Close</button>
    </div>

    <button onclick="showForm()">Show Form</button>

    <script>
        function showForm() {
            document.getElementById("popupform").style.display = "flex";
        }
    </script>
</body>
</html>