<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve data from the database table
$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);
$qry = "SELECT * FROM nurses"; 
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
        <th>Doctor_Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Room_office</th>
        <th>Register</th>
      </tr>
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                 <td>". $row["Doctor_Id"]. "</td>
                 <td>".$row["Firstname"]."</td>
                 <td>".$row["Lastname"]."</td>
                 <td>".$row["Room_office"]."</td>
                 
                 <td><a href='Update.php?doctor_id=".$row["Doctor_Id"]."'>delete</a></td>
                 </tr>";
                //  <td><a href='Update.php?doctor_id=".$row["update"]."'>update</a></td>
        }
        
      } else {
        echo "<tr>
              <td colspan='3'>No data found</td>
              </tr>";
      }
      ?>
    </table>
    <form method="post" action="add_doctor.php">
      <input type="text" name="Doctor_Id" placeholder="Enter ID">
      <input type="text" name="Firstname" placeholder="Enter First name">
      <input type="text" name="Lastname" placeholder="Enter Last name">
      <input type="number" name="Room_office" placeholder="Enter room number">
      <input type="submit" name="submit" value="Add Data">
    </form>

     <h2>Nursery Data</h2>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Nurse ID</th>
      <th>Telephone</th>
    </tr>
    <?php
    // code to retrieve data from "nursery" table
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
          echo "<tr>
                 
                 <td>".$row["Fname"]."</td>
                 <td>".$row["Lname"]."</td>
                 <td>". $row["Nurse_Id"]. "</td>
                 <td>".$row["Tel_number"]."</td>
                 </tr>";
                //  <td><a href='Update.php?doctor_id=".$row["Doctor_Id"]."'>delete</a></td>
                //  <td><a href='Update.php?doctor_id=".$row["Doctor_Id"]."'>update</a></td>
        }
      } else {
        echo "<tr>
              <td colspan='3'>No data found</td>
              </tr>";
      }
    ?>
  </table>

  <form method="post" action="add_nurse.php">
    <input type="text" name="Fname" placeholder="Enter First name">
    <input type="text" name="Lname" placeholder="Enter Last name">
    <input type="text" name="Nurse_Id" placeholder="Enter new ID">
    <input type="number" name="Tel_number" placeholder="Enter Telephone Number">
    <input type="submit" name="submit" value="Add Data">
  </form>
</div>

 
</div>

  </div>
</body>
