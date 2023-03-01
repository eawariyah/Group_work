<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="createEmployee.css">
</head>
<body>

    <h1>Add new patient</h1>

    <div id="popupform">
        <form class="container" action="add_employee.php" method="POST">
            <label for="f_name">First Name</label><br>
            <input type="text" name="f_name" class="f_name" id="f_name"><br>
    
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" class="l_name" id="l_name"><br>
    
            <label for="patientEmail">Email Address</label><br>
            <input type="text" name="patientEmail" class="employeeEmail" id="patientEmail"><br>

            <label for="employeeNumber">Phone Number</label><br>
            <input type="tel" name="patientNumber" class="employeeNumber" id="patientNumber"><br>
    
            <label for="DOB">DOB</label><br>
            <input type="text" name="DOB" class="defaultPassword" id="DOB"><br>

            <label for="height">Height</label><br>
            <input type="text" name="height" class="defaultPassword" id="height"><br>

            <label for="Weight">Weight</label><br>
            <input type="text" name="weight" class="defaultPassword" id="Weight"><br>

            <label for="bloodgroup">BloodGroup</label><br>
            <input type="text" name="bloodgroup" class="defaultPassword" id="bloodgroup"><br>

            <label for="history">Medical History</label><br>
            <input type="text" name="history" class="defaultPassword" id="history"><br>

            <label for="genderSelect">Gender</label><br>
            <select id="genderSelect" class="genderSelect" name="gender"><br>
                <option value="male">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
              </select><br>
    
            

           

            <input type="Submit" class = "Submit" value="Submit" name="Submit">
            
    
        </form>

        <button type="button" onclick="document.getElementById('popupform').style.display='none'">Close</button>
    </div>

    <button onclick="showForm()">Show Form</button>

    <script>
        function showForm() {
            document.getElementById("popupform").style.display = "flex";
        }
    </script>
</body>
</html>