<?php
  //  session_start();
	// 	if ($_SESSION['uid']){
	// 		if ($_SESSION['user_role']=='a'){
				
  //        }
	// 	}
	// 	else{
	// 		echo header("Location: login_page.php");
	// 		exit();
		// }
    //   ?>
<?php
// Database connection
$servername = "localhost";
    $username = "ClinicXcare";
    $password = "clinix@16";
    $dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);
// Retrieve data from the database table
$sql = "SELECT * FROM employee where emp_role='d'";
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
      <title>Admin</title>
      <link rel="stylesheet" href="admin.css">
      <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />
   </head>

   <body>

      <div class='navBar2'>
        <button onclick="myFunction()" class="dropbtn">Menu</button>
        <div id="myDropdown" class="dropdown-content">
          <a href='admin_page.php'>Home</a>
          <a href='doctorsList.php'>Manage doctors</a>
          <a href='nursesList.php'>Manage nurses</a>


        </div>
      </div>
      
      <main>
      <div class='navBar'>
         <div class="image_placeholder">
            <img src="">
         </div>
         <!-- <div class="name_placeholder">
            <b id="Fname" ><?php echo $first_name;?></b>
            <b id="Lname" ><?php echo $last_name;?></b>
         </div>
         <b id="emailVal"><?php echo $email;?></b> -->
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
               <img src="session-iceblue.png" class = "doctorLogo">
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
  </script> 

   </body>