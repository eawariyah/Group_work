<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>

<body>
	

	

	<h2>Register Here</h2>
	<!-- register form -->
	<form>
	  <label>User Name:</label><br>
	  <input type="text" name="uname"  id="uname"><br>
	  <label>User Pass:</label><br>
	  <input type="text" name="upass" id="upass"><br><br>
	  <input type="submit" name="register" id="register" value="Register" onclick="validatepost();">
	</form> 

	<!-- link to register -->
	<a href="login.php">Go to Login Page</a>

	<script type="text/javascript">
		function validatepost() 
		{
			event.preventDefault();

			//colect the form data
			var useremail = document.getElementById('uname');
			var userpass = document.getElementById('upass');
			var userbutton = document.getElementById('register');

			//validate the email 
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

			if (useremail.value.match(mailformat)) 
			{
				//alert('email is valid');
				//call the ajax post function
				loadDoc(useremail.value, userpass.value, userbutton.value);

			}
			else
			{
				alert('email is wrong');
				return false;
			}

			//alert('run this anyway');
		}
		//make http post to backend register_proc.php
		function loadDoc(umail, upass, ubutton) 
		{
			  const xhttp = new XMLHttpRequest();
			  xhttp.onload = function() 
			  {
			    // document.getElementById("demo").innerHTML = this.responseText;
			     //alert(this.responseText);
			     //check if action was successful
			     if(this.responseText == 'success')
			     {
			     	window.location.href = 'loginDoctor.html';
			     }
			     else
			     {
			     	alert(this.responseText);
			     	return false;
			     }
			    	
			    }
			  xhttp.open("GET", "register_proc.php?uname="+umail+"&upass="+upass+"&register="+ubutton, true);
			  xhttp.send();
		}
					
		
	</script>
</body>
</html>