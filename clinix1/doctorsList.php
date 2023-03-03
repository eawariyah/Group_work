<?php
// Database connection
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve data from the database table
$sql = "SELECT * FROM employee where emp_role='d'";
$result = $conn->query($sql);
$qry = "SELECT * FROM employee where emp_role='n'"; 
$res = $conn->query($qry);

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
  <div class='navBar2'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href='doctorsHome.php'>Home</a>
      <a href='patientsList.php'>Patients</a>
      <a href='nursesList.php'>Nurses</a>
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
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="doctorsListpg" href='doctorsList.php'>Doctors</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
      </div>

      <a class='button' id = "addnurse" href='createEmployee.php'>Add Employee</a><br><br>


      <h2>Doctors</h2>
               <table id = 'doctorTable'>
                  <tr>
                     <th>ID</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Gender</th>
                     <th>Specialization</th>
                     <th>Events</th>
                  </tr>
                  <?php
                     if ($result->num_rows > 0) {
                       while($row = $result->fetch_assoc()) {
                         echo "<tr>
                                <td>".$row["emplyee_id"]."</td>
                                <td>". $row["FirstName"]. "</td>
                                <td>".$row["LastName"]."</td>
                                <td>".$row["Email"]."</td>
                                <td>".$row["PhoneNumber"]."</td>
                                <td>".$row["Gender"]."</td>
                                <td>".$row["Specialization"]."</td>
                                <td>
                                    <button class='update_button' role='button'>
                                      <a href='update.php?updateid=".$row["emplyee_id"]."'>Update</a>
                                    </button>&nbsp;&nbsp;&nbsp;&nbsp;

                                    <button class='update_button' role='button'>
                                      <a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a>

                                </td>
                                </td>
                                </tr>";

                                // <td><button><a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a></button>



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
        <p><button>ViewSchedule</button></p>
      </div>
    </div>
  </main> -->

  <!-- <script src="script.js"></script>
  <script>
    function closeAllSelect(elmnt) {
      /* A function that will close all select boxes in the document,
      except the current select box: */
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {if (elmnt == y[i]) {arrNo.push(i)} else {y[i].classList.remove("select-arrow-active");} }
      for (i = 0; i < xl; i++) {if (arrNo.indexOf(i)) {x[i].classList.add("select-hide");} }
    } /* If the user clicks
    anywhere outside the select box, then close all select boxes: */ document.addEventListener("click", closeAllSelect);
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script> -->

</body>