<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    :root {
        --main-bg-color: #fff;
        --main-text-color: #888888;
      }

      [data-theme="dark"] {
        --main-bg-color: #1e1f26;
        --main-text-color: #ccc;
      }
      * {
        box-sizing: border-box;
        /* 		transition: all ease 0.2s; */
      }

      .clock {
      position: absolute;
      right: 5%;
      top: 37%;
      min-height: 15em;
      min-width: 15em;
      display: flex;
      justify-content: center;
      align-items: center;
      background: var(--main-bg-color) url("https://imvpn22.github.io/analog-clock/clock.png") center/cover;
      border-radius: 50%;
      border: 4px solid var(--main-bg-color);
      box-shadow: 0 -15px 15px rgba(255, 255, 255, 0.05), inset 0 -15px 15px rgba(255, 255, 255, 0.05),
        0 15px 15px rgba(0, 0, 0, 0.3), inset 0 15px 15px rgba(0, 0, 0, 0.3);
      transition: all ease 0.2s;
      z-index: 5;
    }

    .clock::before {
      content: "";
      height: 0.75rem;
      width: 0.75rem;
      background: var(--main-text-color);
      border: 2px solid var(--main-bg-color);
      position: absolute;
      border-radius: 50%;
      z-index: 10;
      transition: all ease 0.2s;
    }

    .hour,
    .min,
    .sec {
      position: absolute;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      z-index: 5;
    }

    .hour {
      height: 10em;
      width: 10em;
    }

    .hour::before {
      content: "";
      position: absolute;
      height: 50%;
      width: 6px;
      background: var(--main-text-color);
      border-radius: 6px;
    }

    .min {
      height: 12em;
      width: 12em;
    }

    .min::before {
      content: "";
      height: 50%;
      width: 4px;
      background: var(--main-text-color);
      border-radius: 4px;
    }

    .sec {
      height: 14em;
      width: 14em;
    }

    .sec::before {
      content: "";
      height: 50%;
      width: 2px;
      background: var(--main-text-color);
      border-radius: 2px;
    }

      /* Date styles */
      #day {
        position: absolute;
        bottom: 20%;
        right: 17%;
        z-index: 10;
        background-color: #eef1f0;
        /* font-size: 1.5vmin; */
        padding: 1vmin;
        border-radius: 1vmin;
      }


#daymonth {
	position: absolute;
	bottom: 21%;
	right: 10%;
	z-index: 10;
	background-color: #eef1f0;
}

#year {
	position: fixed;
	bottom: 21%;
	right: 6%;
	z-index: 10;
	background-color: #eef1f0;
}

@media (max-width: 800px) {
      .clock, .box {
        display: none;
      }

    }

  </style>
</head>

<body>
  <input type='text' name='search' placeholder="search" class='searchBar'>
  <main>
    <div class='navBar'>
      <img>
      <a class='button' href='doctorsHome.php'>Home</a>
      <a class='button' href='calendar.php'>Calendar</a>
      <a class='button' href='patientsList.php'>Patients</a>
      <a class='button' href='nursesList.php'>Nurses</a>
      <a class='button' href='createTask.php'>Create Task</a>
      <a class='button' href='patient.php'>A patient</a>
      <a class='button' href='logout.php' id='signOut'>SignOut</a>
    </div>

    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="createAppointment.php">Link 1</a>
        <a href="landingPage.php">Home</a>
        <a href="nursesList.php">NursesList</a>
      </div>
    </div>

    <div class='tools'>
      <div class='informationBar'>
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
          <!-- <h2>Information Block 3</h2> -->
         </div>
      </div>
      
      <div class='innerTools'>
        <div class='canvas' id='canvas' , name='canvas'>
          "Canvas Info here"
        </div>
        <div class="clock">
          <div class="hour"></div>
          <div class="min"></div>
          <div class="sec"></div>
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