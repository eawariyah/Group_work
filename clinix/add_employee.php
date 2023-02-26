<?php
if (isset($_POST['Submit'])) 
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clinic_db";
    $conn= mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        echo "There are some problem while connecting the data";
    }

//check if the form has been submitted 

    //Get the user_ID and password from the form 
    $firstname = $_POST['f_name'];
    $lastname = $_POST['l_name'];
    $employee_email = $_POST['employeeEmail'];
    $employee_pass = $_POST['defaultPassword'];
    $employee_number = $_POST['employeeNumber'];
    $gender = $_POST['genderSelect'];
    $employee_role = $_POST['roleSelect'];
    $speciality = $_POST['Speciality'];

    
   //insert the data into the doctor table

    $sql = "INSERT INTO employee(FirstName, LastName,Email, emp_pass,PhoneNumber,Gender,emp_role,Specialization) VALUES ('$firstname', '$lastname', '$employee_email', '$employee_pass','$employee_number','$gender','$employee_role','$speciality')"; 
    
    
        if($conn->query($sql) === TRUE){
            header("Location : admin_page.php");
            exit();
        }
        else {echo "Error: " . $sql . "<br>" . $conn->error;
         
    }
}
else{
    echo"error"; 
}
$conn->close();;
?>