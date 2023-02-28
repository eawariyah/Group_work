<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="personsList.css" rel="stylesheet" type="text/css" />
  <link href="doctorsNursesHome.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class='navBar2'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="createAppointment.php">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>

  <input type='text' name='search' placeholder="search" class='searchBar'>
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
      <a class='button' id = "doctorsHomepg" href='doctorsHome.php'>Home</a>
         <a class='button' id="calendarpg" href='calendar.php'>Calendar</a>
         <a class='button' id="patientsListpg" href='patientsList.php'>Patients</a>
         <a class='button' id="nursesListpg" href='nursesList.php'>Nurses</a>
         <a class='button' id="createTaskpg" href='createTask.php'>Create Task</a>
         <a class='button' id="patientpg" href='patient.php'>A patient</a>
         <a class='button' href='logout.php' id='signOut'>SignOut</a>
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

  <script src="script.js"></script>
  <script>
    function closeAllSelect(elmnt) {
      /* A function that will close all select boxes in the document,
      except the current select box: */
      var x, y, i, xl, yl, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {if (elmnt == y[i]) {arrNo.push(i)} else {y[i].classList.remove("select-arrow-active");} }
      for (i = 0; i < xl; i++) {if (arrNo.indexOf(i)) {x[i].classList.add("select-hide");} }
    } /* If the user clicks
    anywhere outside the select box, then close all select boxes: */ document.addEventListener("click", closeAllSelect);
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script>

</body>