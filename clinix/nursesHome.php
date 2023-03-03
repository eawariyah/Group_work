
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <main>
    <div class='navBar'>
      <div class="image_placeholder">
        <img src="">
      </div>
      <div class="name_placeholder">
        <b id="Fname">Fname lname</b>
      </div>
      <b id="emailVal">Fname.lname@abc.com</b>
      <img>
      <a class='button' id = "doctorsHomepg"; href='nursesHome.php'>Home</a>
      <a class='button' id = "patientsListpg"; href='patientsList.php'>Patients</a>
      <a class='button' id = "createTaskpg"; href='/backend/frontend/createAppointmentView.php'>Create Appointment</a>
      <a class='button' id = "patientpg"; href='createPatient.php'>Create a patient</a>
      <a class='button' href='logout.php' id='signOut'>SignOut</a>
    </div>

    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
      <a href='nursesHome.php'>Home</a>
      <a href='patientsList.php'>Patients</a>
      <a href='/backend/frontend/createAppointmentView.php'>Create Appointment</a>
      <a href='createPatient.php'>Create a patient</a>
      <a href='logout.php' id='signOut'>SignOut</a>
      </div>
    </div>

    <div class='tools'>
    <div class='informationBar'>
      <div>
        <h1 id="pageName">Home</h1>
        <p id="welcomeNote">Welcome!</p>
        <!-- <p id="pageName">Home</p> -->
      </div>
        <div class='informationBlock' id='informationBlock1'>
            <i class='fa fa-info-circle' style="font-size:24px;"></i>
            <h2>Information Block 1</h2>
            <!-- <p>Here is some information.</p> -->
        </div>
        <div class='informationBlock' id='informationBlock2'>
            <i class='fa fa-warning' style="font-size:24px;"></i>
            <h2>Information Block 2</h2>
            <!-- <p>Here is some information.</p> -->
        </div>
        <div class='informationBlock' id='informationBlock3'>
            <i class='fa fa-check'></i>
            <h2>Information Block 3</h2>
        </div>
        <div class='informationBlock' id='informationBlock4'>
            <i class='fa fa-info-circle' style="font-size:24px;"></i>
            <h2>Information Block 4</h2>
            <!-- <p>Here is some information.</p> -->
        </div>
      </div>
      
      <div class='innerTools'>
      
        <div class='canvas' id='canvas' , name='canvas'>
        
                    </div>
        </div>
        <div class="clock">
          <div class="hour"></div>
          <div class="min"></div>
          <div class="sec"></div>
        </div id = "date_val">
          <p style="position: absolute;  font-weight:400; color: '#777777'; top: 1%;  right: 6%; font-family: 'Inter', sans-serif;">Today's Date</p>
        </div>
  
       <div class="box">
        <div class="date">
           <div id="day"></div>
           <div id="daymonth"></div>
           <div id="year"></div>
        </div>
        </div>
        </div>
      </div>
    </div>

    <script>
    const deg = 6;

const hour = document.querySelector(".hour");
const min = document.querySelector(".min");
const sec = document.querySelector(".sec");

const setClock = () => {
let day = new Date();
let hh = day.getHours() * 30;
let mm = day.getMinutes() * deg;
let ss = day.getSeconds() * deg;

hour.style.transform = `rotateZ(${hh + mm / 12}deg)`;
min.style.transform = `rotateZ(${mm}deg)`;
sec.style.transform = `rotateZ(${ss}deg)`;
};

setClock();
setInterval(setClock, 1000);
      function myFunction() {        
        document.getElementById("myDropdown").classList.toggle("show");
      }
      var date = new Date(),
         year = date.getFullYear(),
         month = date.getMonth(),
         day = date.getUTCDate(),
         days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
         months = ["January", "February", "March", "April", "May", "June", "July", "Augast", "September", "October", "Novamber", "December"];
         
         document.getElementById('daymonth').innerHTML = day + " " +months[month] + " ";
         document.getElementById('year').innerHTML = year;
         
         function time() {
         var d = new Date(),
           s = d.getSeconds() * 6,
           m = d.getMinutes() * 6 + (s / 60),
           h = d.getHours() % 12 / 12 * 360 + (m / 12);
         
         document.getElementById('day').innerHTML = days[d.getDay()] + ", ";
         }
         time();
    </script>
</body>