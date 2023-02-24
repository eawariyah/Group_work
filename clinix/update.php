<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Update data in the "doctor" table
if (isset($_POST['update'])) {
  $Doctor_Id = $_POST['Doctor_Id'];
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $Room_office = $_POST['Room_office'];

  $sql = "UPDATE doctor SET Firstname='$Firstname', Lastname='$Lastname', Room_office='$Room_office' WHERE Doctor_Id='$Doctor_Id'";

  if ($conn->query($sql) === TRUE) {
    echo "Data updated successfully";
  } else {
    echo "Error updating data: " . $conn->error;
  }
}

// Delete data from the "nurses" table
if (isset($_GET['delete'])) {
  $Nurse_Id = $_GET['delete'];

  $sql = "DELETE FROM nurses WHERE Nurse_Id='$Nurse_Id'";

  if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully";
  } else {
    echo "Error deleting data: " . $conn->error;
  }
}

// Close database connection
$conn->close();
?>