<?php
if(isset($_GET['deleteid'])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";


$id=$_GET['deleteid']; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Retrieve data from the database table
$sql = "Delete  FROM employee where emplyee_id='$id'";
$result = $conn->query($sql);

if ($result){
    // echo"deleted successfully";
    header('location: doctorsList.php');
}

}


?>