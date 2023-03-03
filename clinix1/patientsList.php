<?php
   // Database connection
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic_db";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   // Retrieve data from the database table
   $sql = "SELECT * FROM patients";
   $result = $conn->query($sql);
   
   
   ?>
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
      <main>
      <div class='navBar'>
      <div class="image_placeholder">
        <img src=""><img>

      </div>
      <div class="name_placeholder">
        <b id="Fname">Fname lname</b>
      </div>
      <b id="emailVal">Fname.lname@abc.com</b>
         <a class='button' id = "doctorsHomepg" href='doctorsHome.php'>Home</a>
         <a class='button' id = "doctorsHomepg" href='./../backend/frontend/dailyAppointmentsView.php'>Schedule</a>
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='./../backend/frontend/createTasksView.php'>Create Task</a>
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
      <a href='patient.php'>A patient</a>
      </div>
    </div>
    
    <a class='button' id = "addnurse" href='createPatient.php'>Add Patient</a><br><br>

    <div class = "left">
    
               <h2>Patients</h2>
               <table id = 'patientsTable'>
                  <tr>
                     <th>ID</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                     <th>Gender</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th> Operations</th>
                  </tr>
                   <?php
                     if ($result->num_rows > 0) {
                      
                       while($row = $result->fetch_assoc()) {
                        $getid = $row['Patient_Id'];
                         echo "<tr>
                                <td>".$row["Patient_Id"]."</td>
                                <td>". $row["Firstname"]. "</td>
                                <td>".$row["Lastname"]."</td>
                                <td>".$row["Gender"]."</td>
                                <td>".$row["Email"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                <td><a href='deletePatient.php?deleteid=".$row["Patient_Id"]."'>delete</a>
                                <a href='updatePatient.php?updateid=".$row["Patient_Id"]."'>update</a>
                                <a href = 'viewPatient.php?uid=".$getid."'>View</a>'</td>
                               
                                </td>
                                </tr>";
                              
                       }
                       
                     } else {
                       echo "<tr>
                             <td colspan='3'>No data found</td>
                             </tr>";
                     }
                     ?> 
               </table>
                  
    <!-- <div class='personGrid'>
      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jilly Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <p><button>ViewSchedule</button></p>
      </div>


      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>John Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p>
      </div>

      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jane Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p>
      </div>


      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jack Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James Uni</p>
        <p><button>ViewSchedule</button></p>
      </div>

      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jack Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p> -->
      </div>
    </div>
  </main>
  <script>
    function myFunction(){document.getElementById("myDropdown").classList.toggle("show");}
  </script>
  <script type="text/javascript">

//make http post to backend register_proc.php
  function loadDoc(uid) 
  {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() 
      {
        // document.getElementById("demo").innerHTML = this.responseText;
         alert(this.responseText);
       }
      xhttp.open("GET", "viewing.php?uid="+uid, true);
      xhttp.send();
      }</script>
</body>