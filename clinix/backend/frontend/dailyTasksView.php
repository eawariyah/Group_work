<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Schedule</title>
  <link href="dailySchedule.css" rel="stylesheet" type="text/css" />
</head>

<body onload="showTasks_fxn()">
  <input type='text' name='search' placeholder="search" class='searchBar'>
  <main>
    <div class='navBar'>
      <img>
      <a href="./../nursesHome.php">Dashboard</a>
      <a href="./../patientsList.php">Patients</a>
      <a href="createAppointmentView.php">Create Appointment</a>
      <a href="dailyTasksView.php">Schedule</a>
      <a href="logout.php">SignOut</a>
    </div>

    <div class='navBar2'>
      <button onclick="myFunction()" class="dropbtn">Menu</button>
      <div id="myDropdown" class="dropdown-content">
      <a href="./../../clinix/nursesHome.php">Dashboard</a>
      <a href="./../../clinix/patientsList.php">Patients</a>
      <a href="createAppointmentView.php">Create Appointment</a>
      <a href="dailyTasksView.php">Schedule</a>
      <a href="logout.php">SignOut</a>
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
  <div id='blankCanvas'></div>
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
          req.open("POST", './../display/displayTasks.php');

          const params = 
          `fullDate=${fullDate}`
    
          //set the header
          req.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded"
          );
          req.send(params);
      }
      function showTasks_fxn(){
            handleAjax();
          }
    
</script>
<script src='taskAppointments.js'></script>
</html>