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

    <h1>Add new employee</h1>

    <div id="popupform">
        <form class="container" action="add_employee.php" method="POST">
            <label for="f_name">First Name</label><br>
            <input type="text" name="f_name" class="f_name" id="f_name"><br>
    
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" class="l_name" id="l_name"><br>
    
            <label for="employeeEmail">Email Address</label><br>
            <input type="text" name="employeeEmail" class="employeeEmail" id="employeeEmail"><br>
    
            <label for="defaultPassword">Password</label><br>
            <input type="text" name="defaultPassword" class="defaultPassword" id="defaultPassword"><br>

            <label for="employeeNumber">Phone Number</label><br>
            <input type="tel" name="employeeNumber" class="employeeNumber" id="employeeNumber"><br>

            <label for="genderSelect">Gender</label><br>
            <select id="genderSelect" class="genderSelect" name="genderSelect"><br>
                <option value="male">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
              </select><br>
    
            <label for="roleSelect">Role</label><br>
            <select id="roleSelect" class = "roleSelect" name="roleSelect">
                <option value="d">Doctor</option>
                <option value="n">Nurse</option>
                <!-- <option value="adminRole">Admin</option> -->
            </select>

            <label for="Speciality">Doctor only</label><br>
            <select id="Speciality" class = "Speciality" name="Speciality" required>
                <option value="none">none</option>
                <option value="Immunology">Immunology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Cardiology">Cardiology</option>
            </select>

            <br><br><input type="Submit" class = "Submit" value="Submit" name="Submit">
            
    
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