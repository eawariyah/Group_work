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
  <title>Admin</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
  <div class="sidebar">
    <header class="avatar">
    <!-- <img src = "adm.jpg"/> -->
      </header>
    <button><a href="admin_page.php">Home</a></button>
    <a href="calendar.php">Calendar</a>
    <a href="createEmployee.php" class="button">Register doctor</a>
    <a href="logout.php">Sign Out</a>
  </div>


    
  <div class="content">
    <div class = "patients">
        <p style="color: rgb(255, 255, 255);"></p>
    </div>
    <div class = "right">
       <h2>This is the right side.</h2>
    </div>
   <div class = "left">
    <h2>Doctors</h2>
    <table>
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
                 
                 <td><button><a href='update.php?updateid=".$row["emplyee_id"]."'>Update</a></button></td>
                 <td><button><a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a></button>
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
    <!-- <form method="post" action="add_doctor.php">
      <input type="text" name="Doctor_Id" placeholder="Enter ID">
      <input type="text" name="Firstname" placeholder="Enter First name">
      <input type="text" name="Lastname" placeholder="Enter Last name">
      <input type="number" name="Room_office" placeholder="Enter room number">
      <input type="submit" name="submit" value="Add Data">
    </form> -->

     <h2>Nursery Data</h2>
  <table>
    <tr>
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
            <td><button><a href='update.php?updateid=".$row["emplyee_id"]."'>Update</a></button></td>
                 <td><button><a href='delete.php?deleteid=".$row["emplyee_id"]."'>Delete</a></button>
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
