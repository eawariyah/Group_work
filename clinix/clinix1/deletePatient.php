<?php
if(isset($_GET['deleteid'])){
    $servername = "localhost";
    $username = "ClinicXcare";
    $password = "clinix@16";
    $dbname = "clinic_db";


$id=$_GET['deleteid']; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve data from the database table
$sql = "Delete  FROM patients where Patient_Id='$id'";
$result = $conn->query($sql);

if ($result){
    // echo"deleted successfully";
    header('location: patientsList.php');
}

}


?>