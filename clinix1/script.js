function load_task(start_time, end_time, duration, description, assignee) {
  //SELECT ALL TASKS FROM DATABASE WHERE TASK IS NOT COMPLETED
  var task_div = document.createElement("div");
  task_div.style.color = 'green';
  task_div.style.width = '40%';

  var numerical_start_time = parseFloat(start_time.replace(/:/g, '.'), 10);
  var numerical_end_time = parseFloat(end_time.replace(/:/g, '.'), 10);

  if (numerical_start_time < 1) {
    var task_height = (100 / 60) * duration;
    var start_height = 100 - (numerical_start_time - 0.0);
    var string_task_height = task_height.toString()+'px';
    var string_start_height = start_height.toString()+'px';
    alert(string_start_height);

    //appending the task to the time block
    var time_block = document.getElementByID('00:00');
    task_div.style.position = "absolute";
    task_div.style.top = string_start_height;
    task_div.style.height = string_task_height;
    task_div.innerHTML = 'Hello'//description + ' ' + 'assigned by' + ' ' + assignee;
    time_block.appendChild(task_div);
  }
}


function load_task_details(){}

function load_appointments(){}

function load_appointment_details(){}

function createAppointment(){}

function createTask(){}

function markTaskAsComplete(){}

function cancelTask(){}

function findAvailableNurses(){}

function getDoctorFreeTime(){}

function load_all_patients(){}

function load_patient_summary(image, name, DOB, sex) {}

function load_patient_details(image, name, DOB, sex, height, race, medicalHistory){}

function load_all_nurses(){}

function load_nurse(image, name, DOB, sex, height, race, speciality){}