<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="personsList.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <input type='text' name='search' placeholder="search" class='searchBar'>
  <main>
    <div class='navBar'>
      <img>
      <a class='button' href='patientsList.php'>Home</a>
      <a class='button' href='calendar.php'>Calendar</a>
      <a class='button' href='patientsList.php'>Patients</a>
      <a class='button' href='nursesList.php'>Nurses</a>
      <a class='button' href='createTask.php'>Create Task</a>
      <a class='button' href='patient.php'>A patient</a>
      <a class='button'>SignOut</a>
    </div>

    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="createAppointment.php">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>

    <div class='personGrid'>
      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jilly Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <p><button>ViewSchedule</button></p>
      </div>


      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>John Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p>
      </div>

      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jane Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p>
      </div>


      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jack Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James Uni</p>
        <p><button>ViewSchedule</button></p>
      </div>

      <div class='person'>
        <img src="img.jpg" alt="John" style="width:100%">
        <h1>Jack Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>James University</p>
        <p><button>ViewSchedule</button></p>
      </div>
    </div>
  </main>
  <script>
    function myFunction(){document.getElementById("myDropdown").classList.toggle("show");}
  </script>
</body>