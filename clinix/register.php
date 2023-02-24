<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<style>
		body {
			background-color:  #ADD8E6;
			color: #fff;
			font-family: Arial, sans-serif;
			padding: 20px;
		}
		
		h2 {
			color: #00f;
		}
		
		label {
			display: block;
			margin-bottom: 10px;
			font-size: 16px;
			font-weight: bold;
		}
		
		input[type="text"], input[type="password"] {
			display: block;
			margin-bottom: 20px;
			padding: 10px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			background-color: #fff;
			color: #000;
		}
		
		input[type="submit"] {
			background-color: #00f;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			font-size: 16px;
			cursor: pointer;
		}
		
		a {
			color: #00f;
			text-decoration: none;
			margin-top: 20px;
			display: block;
		}
	</style>
</head>
<body>

	<h2>Register Here</h2>
	<!-- register form -->
	<form action="register_back.php" method="POST">
		  
		  <label>User Name:</label>
		  <input type="text" name="uname">
		  <label>User Pass:</label>
		  <input type="password" name="upass">
		  <label> Doctor_Id :</label>
		  <input type="text" name="txt">
		  <input type="submit" name="register" value="Register">
	</form> 

	<!-- link to register -->
	<a href="doc_login.php">Go to Login Page</a>

</body>
</html>
