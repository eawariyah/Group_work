<?php
//API
//list to the request and collect your data
if (isset($_GET['uid'])) 
{
		$getuser_id = $_GET['uid'];
		

		//database connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "clinic_db";

		//check if connection work
		/// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) 
		{
		  die("Connection failed: " . $conn->connect_error);
		}

		//write the query
		$sql = "SELECT * FROM patients WHERE Patient_Id=$getuser_id";

		//execute the query (SELECT)
		$result = $conn->query($sql);


		//verify if query worked
		if ($result) 
		{  while($row = $result->fetch_assoc()){?>
		
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Patient Details</title>
  <link href="patient.css" rel="stylesheet" type="text/css" />
  
  
</head>
	<body>	
		
  		<main>
  			<div class='navBar'>
      
      <b id="emailVal">Fname.lname@abc.com</b>
         <a class='button' id = "doctorsHomepg" href='doctorsHome.php'>Home</a>
         <a class='button' id="calendarpg" href='calendar.php'>Calendar</a>
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='createTask.php'>Create Task</a>
         
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
      </div>
  		    
		      <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
      <a href='doctorsHome.php'>Home</a>
      <a href='calendar.php'>Calendar</a>
      <a href='patientsList.php'>Patients</a>
      <a href='nursesList.php'>Nurses</a>
      <a href='createTask.php'>Create Task</a>
      
      </div>
    </div>

		    <div class='patientData'>
		    	<div class='bioData'>
			        <div class='imageContainer'><img src='assets/patientImage.jpg'></div>
			        <h2 class='name' id='name' name='name'> <?php echo $row['Firstname']," ", $row['Lastname']; ?></h2>
			        <p class='DOB' id='DOB' name='DOB'>Date of Birth: <?php echo $row['DOB']; ?></p>
			        <p class='sex' id='sex' name='sex'>Gender: <?php echo $row['Gender']; ?></p>
			        <p class='Height' id='height' name='height'>Height: <?php echo $row['Height']; ?></p>
			        <p class='weight' id='weight' name='weight'>Weight: <?php echo $row['Patient_weight']; ?></p>
			        <p class='Ethnicity' id='ethnicity' name='ethnicity'>Ethnicity: <?php echo $row['Ethnicity']; ?></p>
			        <p class='Blood Group' id='Blood Group' name='bloodGroup'>Blood Group: <?php echo $row['BloodGroup']; ?></p>
			        <p class='email' id='email' name='email'>Email : <?php echo $row['Email']; ?></p>
			        <p class='Phone_numb' id='number' name='phone_number'>Phone Number : <?php echo $row['PhoneNumber']; ?></p>
			        

			    </div>
			    <div class='medicalHistory'>
		        	<ul class='diseases'><b>Medical History</b></br></br>
			          <li><?php echo $row['MedicalHistory'];?></li>
			          <li>Malaria</li> 
			        </ul>
		      	</div>
		    	
			</div>
		</main>
	</body>
</html>
<?php        
        }
    }
    else
    {
        echo 'Delete failed';
    }
}
else
{
    echo '<h1>You got here the wrong way</h1>';
}
?> 