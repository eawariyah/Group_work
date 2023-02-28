<?php

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

$id=$_GET['updateid'];

//  echo $id;

$abc="SELECT * from employee where emplyee_id=$id ";
    $result=$conn->query($abc);
    $row=mysqli_fetch_assoc($result);
    $first_name = $row['FirstName'];
    $last_name = $row['LastName'];
    $employeeemail = $row['Email'];
    $employeenumber = $row['PhoneNumber'];
    $Gender = $row['Gender'];
    $employeerole = $row['emp_role'];
    $specialization = $row['Specialization'];


if (isset($_POST['Update'])) 
{
    //Get the user_ID and password from the form 
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $employee_email = $_POST['employeeEmail'];
    $employee_number = $_POST['employeeNumber'];
    $gender = $_POST['genderSelect'];
    $employee_role = $_POST['roleSelect'];
    $speciality = $_POST['Speciality'];

    
   //insert the data into the doctor table

    $sql = "UPDATE employee set emplyee_id='$id',
    FirstName='$firstname', LastName='$lastname', Email='$employee_email', PhoneNumber='$employee_number',Gender='$gender',emp_role='$employee_role', Specialization='$speciality' where emplyee_id='$id'"; 
    
    
    if($conn->query($sql) ){
        header("Location: admin_page.php");
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
    
            <label for="employeeEmail">Email Address</label><br>
            <input type="text" name="employeeEmail" class="employeeEmail" id="employeeEmail"value=<?php echo $employeeemail;?>><br>
    
            <label for="employeeNumber">Phone Number</label><br>
            <input type="tel" name="employeeNumber" class="employeeNumber" id="employeeNumber"value=<?php echo $employeenumber;?>><br>

            <label for="genderSelect">Gender</label><br>
            <select id="genderSelect" class="genderSelect" name="genderSelect"value=<?php echo $Gender;?>><br>
                <option value="male">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
              </select><br>
    
            <label for="roleSelect">Role</label><br>
            <select id="roleSelect" class = "roleSelect" name="roleSelect"value=<?php echo $employeerole;?>>
                <option value="d">Doctor</option>
                <option value="n">Nurse</option>
                
            </select>

            <label for="Speciality">Doctor only</label><br>
            <select id="Speciality" class = "Speciality" name="Speciality" value=<?php echo $specialization;?> required>
                <option value="none">none</option>
                <option value="Immunology">Immunology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Cardiology">Cardiology</option>
            </select>

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