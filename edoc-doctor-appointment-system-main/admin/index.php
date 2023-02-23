<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
        
    <title>Dashboard</title>
    <style>
        .dashbord-tables{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-Y-bottom  0.5s;
        }
        .sub-table{
            animation: transitionIn-Y-bottom 0.5s;
        }
.clock {
      position: absolute;
      right: 5%;
      top: 10%;
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

  </style>
    
</head>
<body>
    <?php

    //learn from w3schools.com

    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: ../login.php");
        }

    }else{
        header("location: ../login.php");
    }
    
    //import database
    include("../connection.php");
    ?>
    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title">Administrator</p>
                                    <p class="profile-subtitle">admin@edoc.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="../logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active" >
                        <a href="index.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-doctor ">
                        <a href="doctors.php" class="non-style-link-menu "><div><p class="menu-text">Doctors</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-patient">

                        <a href="patient.php" class="non-style-link-menu"><div><p class="menu-text">Nurses</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-add">
                        <a href="schedule.php" class="non-style-link-menu"><div><p class="menu-text">Add doctors</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-adding">
                        <a href="appointment.php" class="non-style-link-menu"><div><p class="menu-text">Add Nurses</p></a></div>
                    </td>
                </tr>
                
            </table>
        </div>
        <div class="dash-body" style="margin-top: 15px">
           
            <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                        
                        <tr >
                            <td colspan="2" class="nav-bar" >
                                
                                <form action="doctors.php" method="post" class="header-search">
        
                                    <input type="search" name="search" class="input-text header-searchbar" placeholder="Search Doctor name or Email" list="doctors">&nbsp;&nbsp;
                                    
                                    <?php
                                        echo '<datalist id="doctors">';
                                        $list11 = $database->query("select  docname,docemail from  doctor;");
        
                                        for ($y=0;$y<$list11->num_rows;$y++){
                                            $row00=$list11->fetch_assoc();
                                            $d=$row00["docname"];
                                            $c=$row00["docemail"];
                                            echo "<option value='$d'><br/>";
                                            echo "<option value='$c'><br/>";
                                        };
        
                                    echo ' </datalist>';
                                    ?>
                                    
                                    <input type="Submit" value="Search" class="login-btn btn-primary-soft btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
    
                                </form>
                                
                            </td>
                            <td width="15%">
                                <p style="font-size: 14px;color: rgb(119, 119, 119);padding: 0;margin: 0;text-align: right;">
                                    Today's Date
                                </p>
                                <p class="heading-sub12" style="padding: 0;margin: 0;">
                                    <?php 
                                date_default_timezone_set('Asia/Kolkata');
        
                                $today = date('Y-m-d');
                                echo $today;


                                $patientrow = $database->query("select  * from  patient;");
                                $doctorrow = $database->query("select  * from  doctor;");
                                $appointmentrow = $database->query("select  * from  appointment where appodate>='$today';");
                                $schedulerow = $database->query("select  * from  schedule where scheduledate='$today';");


                                ?>
                                </p>
                            </td>
                            <td width="10%">
                                <button  class="btn-label"  style="display: flex;justify-content: center;align-items: center;"><img src="../img/calendar.svg" width="100%"></button>
                            </td>            
                        </tr>
                  <center>
  <table class="filter-container doctor-header" style="border: none;width:65%; padding-right: 10px" border="0">
    <tr>
      <td>
        <h3>Welcome!</h3>
        <p>Thanks for joining with us. We are always trying to provide you with complete service.</p>
        <br>
        <br>
      </td>
      <td style="text-align: right; width: auto;">
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

      <!--<div class='innerTools'>
        <div class='canvas' id='canvas' , name='canvas'>
          "Canvas Info here"
        </div>
         <div class='clockDisplay'>
          "Clock Here"
        </div> 
      </div>-->
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

      
    </script>
      </td>
    </tr>
  </table>
</center>
                <tr>
                    <td colspan="4">
                        
                        <center>
                        <table class="filter-container" style="border: none;" border="0">
                            <tr>
                                <td colspan="4">
                                    <p style="font-size: 20px;font-weight:600;padding-left: 12px;">Status</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 33%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <?php    echo $doctorrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Doctors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/doctors-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 33%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;">
                                        <div>
                                                <div class="h1-dashboard">
                                                    <?php    echo $patientrow->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard">
                                                    Nurses &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="background-image: url('../img/icons/patients-hover.svg');"></div>
                                    </div>
                                </td>
                                <td style="width: 33%;">
                                    <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex; ">
                                        <div>
                                                <div class="h1-dashboard" >
                                                    <?php    echo $appointmentrow ->num_rows  ?>
                                                </div><br>
                                                <div class="h3-dashboard" >
                                                    NewBooking &nbsp;&nbsp;
                                                </div>
                                        </div>
                                                <div class="btn-icon-back dashboard-icons" style="margin-left: 0px;background-image: url('../img/icons/book-hover.svg');"></div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>
                    </td>
                </tr>

                <tr>
                    <td colspan="4">
                        <table width="100%" border="0" class="dashbord-tables">
                            <tr>
                                <td>
                                    <p style="padding:10px;padding-left:48px;padding-bottom:0;font-size:23px;font-weight:700;color:var(--primarycolor);">
                                        Upcoming Appointments until Next <?php  
                                        echo date("l",strtotime("+1 week"));
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <p style="text-align:right;padding:10px;padding-right:48px;padding-bottom:0;font-size:23px;font-weight:700;color:var(--primarycolor);">
                                        Upcoming Sessions  until Next <?php  
                                        echo date("l",strtotime("+1 week"));
                                        ?>
                                    </p>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <center>
                                        <?php
                                                // Database connection
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "clinic_db";

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Retrieve data from the database table
                                                $sql = "SELECT * FROM doctor";
                                                $result = $conn->query($sql);
                                                $qry = "SELECT * FROM nurses"; 
                                                $res = $conn->query($qry);

                                                ?>
                                                <table width="85%" class="sub-table scrolldown" border="0">
                                                  <tr>
                                                    
                                                    
                                                    <th class="table-headin">Lastname</th><br>
                                                    
                                                    <th  class="table-headin">Room_office</th>

                                                    <th class="table-headin">Delete </th>
                                                    
                                                  </tr>
                                                  <?php
                                                  if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                      echo "<tr>
                                                             
                                                             <td>".$row["Lastname"]."</td>
                                                             <td>".$row["Room_office"]."</td>
                                                             
                                                             <td><a href='Update.php?doctor_id=".$row["Doctor_Id"]."'>delete</a></td>
                                                             </tr>";
                                                    }
                                                  } else {
                                                    echo "<tr>
                                                          <td colspan='3'>No data found</td>
                                                          </tr>";
                                                  }
                                                  ?>
                                                </table>
                                        </center>
                                </td>
                                <td width="50%" style="padding: 0;">
                                    <center>
                                        
                                        <?php
                                                // Database connection
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "clinic_db";

                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Retrieve data from the database table
                                                
                                                $qry = "SELECT * FROM nurses"; 
                                                $res = $conn->query($qry);

                                                ?>
                                                <table width="85%" class="sub-table scrolldown" border="0" height = "70%">
                                                  <tr>
                                                    
                                                    
                                                    <th class="table-headin">Lastname</th><br>
                                                    
                                                    <th  class="table-headin">Nurse_Id</th>

                                                    <th  class="table-headin">Tel_Number</th>

                                                    <th class="table-headin">Delete </th>
                                                    
                                                  </tr>
                                                  <?php
                                                  if ($res->num_rows > 0) {
                                                    while($row = $res->fetch_assoc()) {
                                                      echo "<tr>
                                                             
                                                             
                                                             <td>".$row["Lname"]."</td>
                                                             <td>". $row["Nurse_Id"]. "</td>
                                                             <td>".$row["Tel_number"]."</td>
                                                             <td><a href='Update.php?doctor_id=".$row["Nurse_Id"]."'>delete</a></td>
                                                             </tr>";
                                                    }
                                                  } else {
                                                    echo "<tr>
                                                          <td colspan='3'>No data found</td>
                                                          </tr>";
                                                  }
                                                  ?>
                                                </table>
                                        
                                        </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>
                                        <a href="appointment.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Show all Appointments</button></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="schedule.php" class="non-style-link"><button class="btn-primary btn" style="width:85%">Show all Sessions</button></a>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
                        </table>
                        </center>
                        </td>
                </tr>
            </table>
        </div>
    </div>


</body>
</html>