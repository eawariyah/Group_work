<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link rel="stylesheet" href="createEmployee.css">
</head>

<body>
	

	

	<h2>Register Here</h2>
	<!-- register form -->
	<div id="popupform">
        <form class="container" action="register_proc.php" method="POST" onsubmit="return validate()">
            <label for="f_name">First Name</label><br>
            <input type="text" name="f_name" class="f_name" id="f_name"><br>
    
            <label for="l_name">Last Name</label><br>
            <input type="text" name="l_name" class="l_name" id="l_name"><br>
    
            <label for="employeeEmail">Email Address</label><br>
            <input type="text" name="employeeEmail" class="employeeEmail" id="uname"><br>
    
            <label for="defaultPassword">Password</label><br>
            <input type="text" name="defaultPassword" class="defaultPassword" id="upass"><br>

            <label for="employeeNumber">Phone Number</label><br>
            <input type="tel" name="employeeNumber" class="employeeNumber" id="employeeNumber"><br>

            <label for="genderSelect">Gender</label><br>
            <select id="genderSelect" class="genderSelect" name="genderSelect"><br>
                <option value="male">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
              </select><br>
    
           

           

            <br><br><input type="Submit" class = "Submit" value="Register" name="register">
            
    
        </form>

        <button type="button" onclick="document.getElementById('popupform').style.display='none'">Close</button>
    </div>

    <button onclick="showForm()">Show Form</button>


	<!-- link to register -->

	<script type="text/javascript">
		 function showForm() {
            document.getElementById("popupform").style.display = "flex";
        }
		function validate(){
        var email = document.getElementById('uname').value;
        var emailRGEX = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        var emailResult = emailRGEX.test(email);

        var password = document.getElementById('upass').value;
        var passwordRGEX = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
        var passwordResult = passwordRGEX.test(password);

        if (emailResult == false) {
            var box = document.getElementById('uname');
            box.style.borderWidth = '2px';
            box.style.borderColor = "#ff0000";
            alert('Please enter a valid email address');
            return false;
        }
        else {
            var box = document.getElementById('uname');
            box.style.borderWidth = '2px';
            box.style.borderColor = "#0FFF50";
        }

        if (passwordResult == false) {
            var box2 = document.getElementById('upass');
            box2.style.borderWidth = '2px';
            box2.style.borderColor = "#ff0000";
            alert('Your password must be:\nAt least one upper case English letter\nAt least one lower case English letter\nAt least one digit\nAt least one special character\nMinimum eight characters in length');
            return false;
        }
        else {
            var box2 = document.getElementById('uname');
            box2.style.borderWidth = '2px';
            box2.style.borderColor = "#0FFF50";
        }
}		
		
	</script>
</body>
</html>