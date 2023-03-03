
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="tasksAppointments.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class='navBar'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="landingPage.php">Dashboard</a>
      <a href="doctorsList.php">Nurses</a>
      <a href="dailySchedule.php">Schedule</a>
      <a href="#">SignOut</a>
    </div>
  </div>

  <form class='scheduleForm' name='createAppointmentForm' action='./../form_procs/createTask_proc.php' method='POST'>
  <select name='selectTaskDate' id='selectTaskDate' required>
      <option>Select Date</option>
      <option>2023-03-04</option>
      <option>2023-03-05</option>
      <option>2023-03-06</option>
      <option>2023-03-07</option>
      <option>2023-03-08</option>
      <option>2023-03-09</option>
      <option>2023-03-10</option>
  </select>
  <select name='selectStartTime' id='selectStartTime' required>
      <option> Select StartTime</option>
      <option value='8'>8:00</option>
      <option value='9'>9:00</option>
      <option value='10'>10:00</option>
      <option value='11'>11:00</option>
      <option value='12'>12:00</option>
      <option value='13'>13:00</option>
      <option value='14'>14:00</option>
      <option value='15'>15:00</option>
      <option value='16'>16:00</option>
    </select>

    <input type="button" 
      value="View Free Nurses"
      class="verify" 
      id='showFreeNurses' 
      name='showFreeNurses'
      onclick="showFreeNurses_fxn()">
    </input>

    <select name='selectNurse' id='selectNurse' required>
        <p>SELECT NURSE</p>
    </select>

    <input type='text' class='taskDescr' name='taskDescr' placeholder='Description'  required/>
    <input class="assign" type="submit" value="Assign Task" name='assignTask'><br>
  </form>
</body>

<script>
      let date = document.getElementById('selectTaskDate');
			let startTime = document.getElementById('selectStartTime');
			let showFreeDoctors = document.getElementById('showFreeNurses');
			let req = new XMLHttpRequest();

      function handler(){
				if(req.readyState === XMLHttpRequest.DONE){
					//check status code
					if(req.status === 200){
            document.getElementById('selectNurse').innerHTML = this.responseText;
					}
					else{
						alert('Something went wrong');
					}
				}
			}
    
			function handleAjax(){
				req.onreadystatechange = handler;
				req.open("POST", './../display/displayFreeNurses.php', false);
				const params = `selectDate=${date.value}&selectStartTime=${startTime.value}&selectEndTime=${parseInt(startTime.value)+1}&showFreeNurses=''`
				req.setRequestHeader(
					"Content-Type",
					"application/x-www-form-urlencoded"
				);
			  req.send(params);
			}


      function showFreeNurses_fxn(){
        handleAjax();
      }

    //Function for dropdwon menu
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
</html>

