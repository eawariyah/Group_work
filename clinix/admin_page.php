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
$abc=

$results_nurse = mysqli_query($conn, "SELECT COUNT(*) FROM employee where emp_role='n'"); 
$number_of_nurse_rows = mysqli_fetch_row($results_nurse); 

$results_doctors = mysqli_query($conn, "SELECT COUNT(*) FROM employee where emp_role='d'"); 
$number_of_doctor_rows = mysqli_fetch_row($results_doctors);
?>

<!DOCTYPE html>

<html>
   <head>
      <title>Admin</title>
      <link rel="stylesheet" href="admin.css">
      <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />
   </head>

   <body>
      <?php
   session_start();
		if ($_SESSION['uid']){
			if ($_SESSION['user_role']=='a'){
				
         }
		}
		else{
			echo header("Location: login_page.php");
			exit();
		}
      ?>
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
         <a class='button' id = "adminHomepg1" href='admin_page.php'>Home</a>
         <a class='button' id="doctorsListpg1" href='doctorsList.php'>Manage doctors</a>
         <a class='button' id="nursesListpg1" href='nursesList.php'>Manage nurses</a>
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
      </div>

      <p class="statusTitle">Status</p>
      <p class="doctorTitle">Quickview doctors</p>
      <p class="nurseTitle">Quickview nurses</p>
      <p class="welcomeNote">Welcome Admin!</p>


            <div class='numberPatients' id='numberPatients'>
               <i class='fa fa-warning' style="font-size:24px;"></i>
               <h2 class = 'nurseSize1'>Nurses</h2>
               <p class = 'nurseSize'>
                  <?php
                    echo $number_of_nurse_rows[0];
                  ?>
               </p>

               <!-- <p>Here is some information.</p> -->
            </div>

            <div class='numberDoctors' id='numberDoctors'>
               <i class='fa fa-warning' style="font-size:24px;"></i>
               <h2 class="doctorSize1">Doctors</h2>
               <img src="doctors-hover.png" class = "doctorLogo">
               <p class = 'doctorSize'>
                  <?php
                    echo $number_of_doctor_rows[0];
                  ?>
               </p>
               <!-- <p>Here is some information.</p> -->
            </div>

               <table id = 'doctorTable'>
                  <tr>
                     <th>ID</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Gender</th>
                     <th>Specialization</th>
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
                  
               <table id="nurseTable">
                  <tr>
                     <th>ID</th>
                     <th>FirstName</th>
                     <th>LastName</th>
                     <th>Email</th>
                     <th>PhoneNumber</th>
                     <th>Gender</th>
                  </tr>
                  <?php
                     // code to retrieve data from "nursery" table
                     if ($res->num_rows > 0) {
                         while($row = $res->fetch_assoc()) {
                           echo "<tr>
                             <td>".$row["emplyee_id"]."</td>   
                             <td>". $row["FirstName"]. "</td>
                             <td>".$row["LastName"]."</td>
                             <td>".$row["Email"]."</td>
                             <td>".$row["PhoneNumber"]."</td>
                             <td>".$row["Gender"]."</td>
             
                           
                           </tr>";
                                  
                                 
                         }
                       } else {
                         echo "<tr>
                               <td colspan='3'>No data found</td>
                               </tr>";
                       }
                     ?>
               </table>
<!-- 
               <td><button><a href='update.php?updateid=".$row["emplyee_id"]."'>Update</a></button></td>
                                  <td><button><a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a></button>
                                  </td> -->

               <!-- <form method="post" action="add_nurse.php">
                  <input type="text" name="Fname" placeholder="Enter First name">
                  <input type="text" name="Lname" placeholder="Enter Last name">
                  <input type="text" name="Nurse_Id" placeholder="Enter new ID">
                  <input type="number" name="Tel_number" placeholder="Enter Telephone Number">
                  <input type="submit" name="submit" value="Add Data">
                  </form> -->
            </div>
         </div>
      </div>
   </body>