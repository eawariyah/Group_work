<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="login.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src=script.js></script>
</head>

<body>
  

  <form action="login_proc.php" method="POST" onsubmit="return validate()">
    <img src='assets/logo.jpg' id='logo'>
    <p id='welcomeBack'><b>Welcome back!</b></p>
    <p class='mmm'>Login with your details to continue</p>
    
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>

    <div class='passwordSection'>
      <input type="password" id="password" name="password" placeholder="Password"
        oninvalid="this.setCustomValidity('Password can not be blank')" oninput="this.setCustomValidity('')" /><br>
    </div>


    <input id="signIn" type="submit" name="login" value="Sign In"><br>
    <!-- <p id='noAccount'>Don't have an account? Sign Up <a id='link' href='index.html'>here</a></p> -->
  </form>

  <script>
    function validate(){
        var email = document.getElementById('email').value;
        var emailRGEX = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        var emailResult = emailRGEX.test(email);

        var password = document.getElementById('password').value;
        var passwordRGEX = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
        var passwordResult = passwordRGEX.test(password);

        if (emailResult == false) {
            var box = document.getElementById('email');
            box.style.borderWidth = '2px';
            box.style.borderColor = "#ff0000";
            alert('Please enter a valid email address');
            return false;
        }
        else {
            var box = document.getElementById('email');
            box.style.borderWidth = '2px';
            box.style.borderColor = "#0FFF50";
        }

        if (passwordResult == false) {
            var box2 = document.getElementById('password');
            box2.style.borderWidth = '2px';
            box2.style.borderColor = "#ff0000";
            alert('Your password must be:\nAt least one upper case English letter\nAt least one lower case English letter\nAt least one digit\nAt least one special character\nMinimum eight characters in length');
            return false;
        }
        else {
            var box2 = document.getElementById('email');
            box2.style.borderWidth = '2px';
            box2.style.borderColor = "#0FFF50";
        }
}
  </script>
</body>

</html>