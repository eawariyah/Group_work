<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Schedule</title>
  <link href="dailySchedule.css" rel="stylesheet" type="text/css" />
</head>

<body onload="showAppointments_fxn()">
  
  <input type='text' name='search' placeholder="search" class='searchBar'>
  <main>
  <div class='navBar'>
      <img>
      <a class='button' href='doctorsHome.html'>Home</a>
      <a class='button' href='dailyActivities.html'>Schedule</a>
      <a class='button' href='patientsList.html'>Patients</a>
      <a class='button' href='nursesList.html'>Nurses</a>
      <a class='button' href='createTask.html'>Create Task</a>
      <a class='button' href='modal.html'>SignOut</a>
    </div>
  
    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#">Home</a>
        <a href="#">Schedule</a>
        <a href="#">Patients</a>
        <a href="#">Nurses</a>
        <a href="#">Create Task</a>
        <a href="#">Sign out</a>
      </div>
    </div>

    <div class='taskTemplate'>
      <div id='timeBar'>
      </div>
      <div class='dailyScheduler' id='dailyScheduler'>
        <div class='hours' id='8'></div>
        <div class='hours' id='9'></div>
        <div class='hours' id='10'></div>
        <div class='hours' id='11'></div>
        <div class='hours' id='12'></div>
        <div class='hours' id='13'></div>
        <div class='hours' id='14'></div>
        <div class='hours' id='15'></div>
        <div class='hours' id='16'></div>
      </div>
    </div>
  </main>
</body>
<script>
      const req = new XMLHttpRequest();
      let d = new Date('2023-04-01');
      let year = d.getFullYear().toString();
      let month = d.getMonth().toString();
      let date = d.getDate().toString();
      let fullDate = year+'-'+month+'-'+date;

      function handler(){
				if(req.readyState === XMLHttpRequest.DONE){
					if(req.status === 200){
            document.getElementById('dailyScheduler').innerHTML = this.responseText;
					}
					else{
						alert("Something went wrong")
					}
				}
			}

			function handleAjax(){
          req.onreadystatechange = handler;
          req.open("POST", './../display/displayAppointments.php');

          const params = 
          `fullDate=${fullDate}`
    
          //set the header
          req.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
          );
          req.send(params);
      }
      function showAppointments_fxn(){
            handleAjax();
      }
</script>
<script src='taskAppointments.js'></script>
</html>