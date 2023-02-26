<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="calendar.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class='navBar'>
    <button onclick="myFunction()" class="dropbtn">Menu</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="createAppointment.php">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>

  <main>
    <div id='backArrow' onclick="prevMonth()"> [<]</div>
        <div id='frontArrow' onclick="nextMonth()">[>]</div>
        <p class='monthTitle'>Month Here</p>
        <div class="grid-container">
          <div class="grid-item title" name='Sun'>Sun</div>
          <div class="grid-item title" name='Mon'>Mon</div>
          <div class="grid-item title" name='Tue'>Tue</div>
          <div class="grid-item title" name='Wed'>Wed</div>
          <div class="grid-item title" name='Thu'>Thu</div>
          <div class="grid-item title" name='Fri'>Fri</div>
          <div class="grid-item title" name=Sat>Sat</div>
          <div class="grid-item" id='1' name='1'>1</div>
          <div class="grid-item" id='2' name='2'>2</div>
          <div class="grid-item" id='3' name='3'>3</div>
          <div class="grid-item" id='4' name='4'>4</div>
          <div class="grid-item" id='5' name='5'>5</div>
          <div class="grid-item" id='6' name='6'>6</div>
          <div class="grid-item" id='7' name='7'>7</div>
          <div class="grid-item" id='8' name='8'>8</div>
          <div class="grid-item" id='9' name='9'>9</div>
          <div class="grid-item" id='10' name='10'>10</div>
          <div class="grid-item" id='11' name='11'>11</div>
          <div class="grid-item" id='12' name='12'>12</div>
          <div class="grid-item" id='13' name='13'>13</div>
          <div class="grid-item" id='14' name='14'>14</div>
          <div class="grid-item" id='15' name='15'>15</div>
          <div class="grid-item" id='16' name='16'>16</div>
          <div class="grid-item" id='17' name='17'>17</div>
          <div class="grid-item" id='18' name='18'>18</div>
          <div class="grid-item" id='19' name='19'>19</div>
          <div class="grid-item" id='20' name='20'>20</div>
          <div class="grid-item" id='21' name='21'>21</div>
          <div class="grid-item" id='22' name='22'>22</div>
          <div class="grid-item" id='23' name='23'>23</div>
          <div class="grid-item" id='24' name='24'>24</div>
          <div class="grid-item" id='25' name='25'>25</div>
          <div class="grid-item" id='26' name='26'>26</div>
          <div class="grid-item" id='27' name='27'>27</div>
          <div class="grid-item" id='28' name='28'>28</div>
          <div class="grid-item" id='29' name='29'>29</div>
          <div class="grid-item" id='30' name='30'>30</div>
          <div class="grid-item" id='31' name='31'>31</div>
          <div class="grid-item" id='32' name='32'>32</div>
          <div class="grid-item" id='33' name='33'>33</div>
          <div class="grid-item" id='34' name='34'>34</div>
          <div class="grid-item" id='35' name='35'>35</div>
        </div>
  </main>
  <script>
    function myFunction() {document.getElementById("myDropdown").classList.toggle("show");}
  </script>

  <script>
    const d = new Date();
    const currYear = d.getFullYear();
    const currMonth = d.getMonth();
    const currDate = d.getDate();
    const currDay = d.getDay();
    var displayMonth = currMonth;
    const startMonth = 0;
    const endMonth = 11;
    displayCalendar(currMonth);

    let YearBegins = {
      2023: 0,
      2024: 1,
      2025: 2,
      2026: 3,
      2027: 4,
      2028: 5,
      2029: 6,
      2030: 0,
      2031: 1,
      2032: 2,
      2033: 3,
      2034: 4,
      2035: 5,
      2036: 6
    }

    let DateTracker = {
      0: {
        1: 1,
        2: 2,
        3: 3
      },
      1: {
        1: 32,
        2: 33
      }
    }

    function getDayOfWeek(monthCode, date) {
      var dayCode = (DateTracker[monthCode][date] % 7) - (YearBegins[currYear] - 1);
      alert(dayCode);
      return dayCode;
    };

    function loadGrid() {
      let empty_grid = [
        [[], [], [], [], [], [], []],
        [[], [], [], [], [], [], []],
        [[], [], [], [], [], [], []],
        [[], [], [], [], [], [], []],
        [[], [], [], [], [], [], []],
      ]
      return empty_grid;
    };

    //Shift display to next month
    function nextMonth() {
      if (displayMonth != endMonth) {
        displayCalendar(displayMonth += 1)
        displayMonth += 1
      }
    }

    //Shift display for previous month  
    function prevMonth() {
      if (displayMonth != startMonth) {
        displayCalendar(displayMonth -= 1)
        displayMonth -= 1
      }
    }

    //Displays the details of a certain month
    function displayCalendar(month) {
      grid = loadGrid();
      for (let i = 0; i < length_of_months[month]; i++) {
        if (i <= 6) {
          grid[0][getDayOfWeek(month, i)] = i;
        }
        else if (6 < i <= 11) {
          grid[1][getDayOfWeek(month, i)] = i;
        }
        else if (11 < i <= 16) {
          grid[2][getDayOfWeek(month, i)] = i;
        }
        else if (16 < i <= 21) {
          grid[3][getDayOfWeek(month, i)] = i;
        }
        else if (31 <= i <= 26) {
          grid[4][getDayOfWeek(month, i)] = i;
        };
      };
      flat_grid = grid.flat(1);
      for (let i = 0; i <= flat_grid.length; i++) {
        if (flat_grid[i] != 0 || flat_grid[i] != null) {
          var position = document.getElementById(i);
          position.innerHTML = flat_grid[i];
        };
      };
    };

  </script>
</body>

</html>