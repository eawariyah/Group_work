<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="personsList.css" rel="stylesheet" type="text/css" />
  <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class='navBar2'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href='nursesHome.php'>Home</a>
      <a href='patientsList.php'>Patients</a>
      <a href='/backend/frontend/createAppointmentView.php'>Create Appointment</a>
      <a href='createPatient.php'>Create a patient</a>
      <a href='logout.php' id='signOut'>SignOut</a>
      </div>
    </div>
  </div>

  <main>
    <div class='navBar'>
      <div class="image_placeholder">
        <img src="">
      </div>
      <div class="name_placeholder">
        <b id="Fname">Fname lname</b>
      </div>
      <b id="emailVal">Fname.lname@abc.com</b>
         <img>
      <a class='button' id = "doctorsHomepg" href='doctorsHome.php'>Home</a>
         <a class='button' id="calendarpg" href='calendar.php'>Calendar</a>
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='createTask.php'>Create Task</a>
         <a class='button' id="patientpg" href='patient.php'>A patient</a>
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
      </div>

      <div class='patientData'>
      <div class='bioData'>
        <div class='imageContainer'><img src='assets/patientImage.jpg'></div>
        <h3 class='name' id='name' name='name'>Somebodys Son</h3>
        <p class='DOB' id='DOB' name='DOB'>DOB</p>
        <p class='sex' id='sex' name='sex'>Sex</p>
        <p class='Height' id='height' name='height'>Height</p>
        <p class='Ethnicity' id='ethnicity' name='ethnicity'>Ethnicity</p>
        <p class='Blood Group' id='bloodGroup' name='bloodGroup'>Blood Group</p>
      </div>

      <div class='medicalHistory'>
        <ul class='diseases'><b>Medical History</b></br>
          <li>HIV</li>
          <li>Sleeping Disorder</li>
          <li>Malaria</li>
          <li>Sprained Ankle</li>
          <li>COVID</li>
        
        </ul>
      </div>
    </div>

  <script>
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script>

</body>