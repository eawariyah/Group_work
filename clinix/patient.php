<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="patient.css" rel="stylesheet" type="text/css" />
</head>


<body>
  <div class='navBar2'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="createAppointment.php">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>

  <main>
    <div class='navBar'>
      <a class='navButton'>Home</a>
      <a class='navButton' href='calendar.php'>Calendar</a>
      <a class='navButton' href='patientsList.php'>Patients</a>
      <a class=' navButton' href='personsList.php'>Nurses</a>
      <a class=' navButton' href='createTask.php'>Create Task</a>
      <a class='navButton' href="logout.php">SignOut</a>
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
  </main>
  <script>
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script>

</body>