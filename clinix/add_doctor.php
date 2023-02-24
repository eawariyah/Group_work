<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
    echo "There are some problem while connecting the data";
}

//check if the form has been submitted 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Get the user_ID and password from the form 
    $doctor_Id = $_POST['Doctor_Id'];
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname']; 
    $office = $_POST['Room_office']; 

   //insert the data into the doctor table

    $qry = "INSERT INTO doctor(Doctor_Id, Lastname,Firstname, Room_office) VALUES ('$doctor_Id', '$firstname', '$lastname', '$office')"; 
    
    $insert = mysqli_query($con, $qry);
        if($insert){
            header("Location : admin_page.php");
            exit();
        }
        else {echo "Error";
         
    }
}
mysql_close($con);
?>