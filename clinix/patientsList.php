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
         <a class='button' id="calendarpg" href='calendar.php'>Calendar</a>
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='createTask.php'>Create Task</a>
         <a class='button' id="patientpg" href='patient.php'>A patient</a>
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
    
    <a class='button' id = "addnurse" href='createPatient.php'>Add Patient</a>
    <div class = "left">
    
               <h2>Patients</h2>
               <table id = 'doctorTable'>
                  <tr>
                     <th>ID</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                     <th>Gender</th>
                     <th>DOB</th>
                     <th>Height</th>
                     <th>Weight</th>
                     <th>Ethnicity</th>
                     <th>Blood Group</th>
                     <th>Medical History</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                  </tr>
                   <?php
                     if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                         echo "<tr>
                                <td>".$row["Patient_id"]."</td>
                                <td>". $row["Firstname"]. "</td>
                                <td>".$row["Lastname"]."</td>
                                <td>".$row["Gender"]."</td>
                                <td>".$row["DOB"]."</td>
                                <td>".$row["Height"]."</td>
                                <td>".$row["Patient_weight"]."</td>
                                <td>".$row["Ethnicity"]."</td>
                                <td>".$row["BloodGroup"]."</td>
                                <td>".$row["MedicalHistory"]."</td>
                                <td>".$row["Email"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                
                                <td><button><a href='update.php?updateid=".$row["Patient_id"]."'>Update</a></button></td>
                                <td><button><a href='delete.php?deleteid=".$row["Patient_id"]."'>Delete</a></button>
                                </td>
                                </tr>";
                               //  <td><a href='Update.php?doctor_id=".$row["Doctor_Id"]."'>delete</a></td>
                               //  <td><a href='Update.php?doctor_id=".$row["update"]."'>update</a></td>
                       }
                       
                     } else {
                       echo "<tr>
                             <td colspan='3'>No data found</td>
                             </tr>";
                     }
                     ?> 
               </table>
                    </div>
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
</body>