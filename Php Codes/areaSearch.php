<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="searchtype1.css" media="screen" />
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
<script type='text/javascript' src='script.js'></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_doc";
    //echo "hi";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully hi";   
    //print_r($_POST);

    $sql = "SELECT distinct area FROM verified_doctor_area";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
    else
      echo "success"; 

    $area = "";
    while($row = mysqli_fetch_assoc($result))
    {
      $area =  $row["area"];
      echo $area;
    }
    ?>

<div id="main_container">
  <!--<div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="64" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a class="current" href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Appointments</a></li>
          <li><a href="#">Doctors login</a></li>
        </ul>
      </div>
    </div> 
  </div>
  <div id="middle_box">
    <div class="middle_box_content"><img src="box_bg.gif" alt="" width="30" height="20"/></div>
  </div>-->
  <div class="header">
    <div id="logo"><a href="#"><img src="images/logo.png" alt="" width="165" height="62" border="0" /></a></div>
    <div class="right_header">
      <div id="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a class="current" href="searchType.php">Search Doctor</a></li>
          <li><a href="Userlogin.php">Appointments</a></li>
          <li><a href="Doctorlogin.php">Doctors login</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="main_content">
          <div class="title_icon"><img src="images/doctors.png" width="233" height="233"alt="" /></div> 
          <div class="pattern_content">
      <form>
     <h1> <span class="dark_blue">Area</span>
    <div class="styled-select">
   <select>
      <option>Jhalwa</option>
      <option>Civil lines</option>
      <option>Junction</option>
      <option>Rajroopur</option>
   </select>
  </div>
    <h1> <span class="dark_blue">Doctor</span>
    <div class="styled-select">
   <select>
      <option>Choose Doctor</option>
      <option>Dr.Ross</option>
      <option>Dr.Chandler</option>
      <option>Dr.Tribyaani</option>
      <option>Dr.Phoebe</option>
      <option>Dr.Rachel</option>
      <option>Dr.Monika</option>
   </select>
  </div>
    <br> 
    <a href="#" class="myButton"> OK </a>
    <br>
    </form>
      </div>
      <div class="title_icon1"><img src="images/doctor.png" width="283" height="233"alt="" /></div>
          </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
</body>
</html>
