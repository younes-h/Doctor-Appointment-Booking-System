<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Medical Clinic</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="doctordetails.css" media="screen" />
<link rel="stylesheet" type="text/css" href="test1.css" media="screen" />
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


    $userid = $_GET['userid'];
   $password = $_GET['password'];


   $sql = "SELECT * FROM verified_doctor where verified_doctor.d_id = '{$userid}' and verified_doctor.password = '{$password}'";
    $result = mysqli_query($conn,$sql);
    if(!$result)
      echo "failed";
    else
      echo "success"; 

    $first_name = "";
    $last_name ="";
    $specialisation ="";
    $address = "";
    $email = "";
    $phone = "";
    while($row = mysqli_fetch_assoc($result))
    {
      $first_name =  $row["first_name"];
      $last_name =  $row["last_name"];
      $specialisation =  $row["specialisation"];
      $address =  $row["address"];
      $phone =  $row["phone"];
      $email =  $row["email"];
      print_r($row);
    }

    //print_r($_POST);
    //echo $address;
    ?>
<a href="#"><?php echo $address ; ?> </a>
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
      <div id="menu" style="width:370px">
        <ul>
          <li><a href="index.php">Home</a></li>
          
          <li><a class="current" href="DoctorDetails.php">My Details</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
    <div id="main_content">
          
          <!--  
    <form action="http://localhost/doctorprocess.php" method="post">
     <h1> <span class="dark_blue">First Name</span>
      <input type="text" name="first">
     <h1> <span class="dark_blue">Last Name</span>
        <input type="text" name="last">
 
          <h1> <span class="dark_blue">Address</span>
          <input type="text" name="address">
           <h1> <span class="dark_blue">Phone no.</span>
          <input type="text" name="phone">
           <h1> <span class="dark_blue">Email-ID</span>
          <input type="text" name="email">
          <h1> <span class="dark_blue">Specialisation</span>
          <input type="text" name="spec">
          <h1> <span class="dark_blue">Password</span>
          <input type="password" name="password">
    <br> 
    <!-<a href="Userlogin.html" class="myButton"> Submit </a>
    <br>

    <input type="submit" name="submit" value="submit">
    <br>
    </form>
      </div>-->
      <div class="pattern_content">
    
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      
    </div>
    <div class="modal-body">
    <h2>THANKS FOR YOUR REGISTRATION </h2>
    <br><br><br>
      <h1 >Please use <b>'abcd'</b> as your User ID for login. </h1>
    <a href="Userlogin.php">
   <input type="button" class="buttona" value="OK">  </a>
    </div>
  </div>

</div>


      <div class="title_icon1"><img src="images/doctor.png" width="283" height="233"alt="" /></div>
    <br><br>
      <div class="signup-wrap">
  <form action="http://localhost/DoctorDetails.php" method="post"><a class="signup"></a>
  <br>
      <input type="text" name="first" value="Firstname: Pre'SHIT'"  /><br>
      <input type="text" name="last" value="Lastname: Chupta"/><br>
    <input type="text" name="fees" value="SEX: Others" /><br>
    <input type="text" name="age" value="Age: Bhool Chuka Hoon" /><br>
      <input type="text" name="area" value="Area: Where Shit is found" /><br>
      <input type="text" name="address" value="Address: All places having shit" /><br>
      <input type="text" name="phone" value="Phone: pooopoooo" /><br>
      <input type="text" name="email" value="Email-id: poopoo@poooooooooh.com" /><br>
      <input type="text" name="spec" value="Specialisation: shitting" /><br>
      <input type="text" name="fees" value="Fess: Your Shit is enough for me" /><br>
      <br>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type ="submit" id ='a1' value="UPDATE"></a>
     <!-- <input type="submit" id='a1' value="UPDATE" onclick="func('a1')" />-->
    </form>
    </div>
    </div>
    </div>
    <div class="clear"></div>
    <div id="footer">
    <div class="copyright"> <img src="images/footer_logo.gif" alt="" /> </div>
    <div class="center_footer">&copy; Medical Clinic 2008. All Rights Reserved</div>
  </div>
  </div>
 
