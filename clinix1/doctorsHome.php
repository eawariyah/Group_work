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
$qry = "SELECT * FROM employee where emp_role='n'"; 
$res = $conn->query($qry);
// $abc= "SELECT Firstname,Lastname,Email FROM employee where emplyee_id=$_SESSION[uid]";

$results_nurse = mysqli_query($conn, "SELECT COUNT(*) FROM employee where emp_role='n'"); 
$number_of_nurse_rows = mysqli_fetch_row($results_nurse); 

$results_doctors = mysqli_query($conn, "SELECT COUNT(*) FROM employee where emp_role='d'"); 
$number_of_doctor_rows = mysqli_fetch_row($results_doctors);

// $results = mysqli_query($conn, $abc); 
$row=mysqli_fetch_assoc($result);
// $first_name=$row['FirstName'];
// $last_name=$row['LastName'];
// $email=$row['Email'];
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title>replit</title>
      <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
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
         <a class='button' id = "doctorsHomepg1" href='doctorsHome.php'>Home</a>
         <a class='button' id = "calendarpg1" href='./../backend/frontend/dailyAppointmentsView.php'>Schedule</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='./../backend/frontend/createTaskView.php'>Create Task</a>
         <a class='button' id="patientpg" href='patientsList.php'>Patients</a>
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
      </div>

      <div class='navBar2'>
         <button onclick="myFunction()" class="dropbtn">Menu</button>
         <div id="myDropdown" class="dropdown-content">
         <a href='doctorsHome.php'>Home</a>
         <a href='./../backend/frontend/dailyAppointmentsView.php'>Schedule</a>
         <a href='patientsList.php'>Patients</a>
         <a href='nursesList.php'>Nurses</a>
         <a href='./../backend/frontend/createTaskView.php'>Create Task</a>
      </div>
      </div>
      <div class='tools'>
         <div class='informationBar'>
            <div>
              <p id="pageName">Home</p>
              <p id="welcomeNote">Welcome Doctor!</p>
            </div>
            <div class='informationBlock' id='informationBlock1'>
               <i class='fa fa-info-circle' style="font-size:24px;"></i>
               <h2>Information Block 1</h2>
               <!-- <p>Here is some information.</p> -->
            </div>
            <div class='informationBlock' id='informationBlock2'>
               <i class='fa fa-warning' style="font-size:24px;"></i>
               <h2>Information Block 2</h2>
               <!-- <p>Here is some information.</p> -->
            </div>
            <div class='informationBlock' id='informationBlock3'>
               <i class='fa fa-check'></i>
               <h2>Information Block 3</h2>
            </div>
            <div class='informationBlock' id='informationBlock4'>
               <i class='fa fa-info-circle' style="font-size:24px;"></i>
               <h2>Information Block 4</h2>
               <!-- <p>Here is some information.</p> -->
            </div>
         </div>
         <div class='innerTools'>

            <div class='canvas' id='canvas' , name='canvas'>

            <p class="doctorTitle">Quickview doctors</p>

               
            <table class = 'doctorTable1'>
                  <tr>
                     <th>ID</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                     <th>PhoneNumber</th>
                     <th>Email</th>
                  </tr>
                  <?php
                     if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                         echo "<tr>
                                <td>".$row["Patient_Id"]."</td>
                                <td>". $row["Firstname"]. "</td>
                                <td>".$row["Lastname"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                <td>".$row["Email"]."</td>                                
                                
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
                     <!-- <td><button><a href='update.php?updateid=".$row["emplyee_id"]."'>Update</a></button></td>
                                <td><button><a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a></button> -->
               </table>
            </div>


            <div class="clock">
               <div class="hour"></div>
               <div class="min"></div>
               <div class="sec"></div>
            </div id = "date_val">
              <p style="position: absolute;  font-weight:400; color: '#777777'; top: 1%;  right: 6%; font-family: 'Inter', sans-serif;">Today's Date</p>
            </div>
            <div class="box">
               <img src="calendar.svg" id="calendarImg">
               <div class="date">
                  <div id="day"></div>
                  <div id="daymonth"></div>
                  <div id="year"></div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script>
         const deg = 6;
         
         const hour = document.querySelector(".hour");
         const min = document.querySelector(".min");
         const sec = document.querySelector(".sec");
         
         const setClock = () => {
         let day = new Date();
         let hh = day.getHours() * 30;
         let mm = day.getMinutes() * deg;
         let ss = day.getSeconds() * deg;
         
         hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
         min.style.transform = `rotateZ(${mm}deg)`;
         sec.style.transform = `rotateZ(${ss}deg)`;
         };
         
         setClock();
         setInterval(setClock, 1000);
           function myFunction() {        
             document.getElementById("myDropdown").classList.toggle("show");
           }
           var date = new Date(),
              year = date.getFullYear(),
              month = date.getMonth(),
              day = date.getUTCDate(),
              days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
              months = ["January", "February", "March", "April", "May", "June", "July", "Augast", "September", "October", "Novamber", "December"];
              
              document.getElementById('daymonth').innerHTML = day + " " +months[month] + " ";
              document.getElementById('year').innerHTML = year;
              
              function time() {
              var d = new Date(),
                s = d.getSeconds() * 6,
                m = d.getMinutes() * 6 + (s / 60),
                h = d.getHours() % 12 / 12 * 360 + (m / 12);
              
              document.getElementById('day').innerHTML = days[d.getDay()] + ", ";
              }
              time();
      </script>
   </body>