<?php
ob_start();
session_start();
if(!isset($_SESSION['uemail'])){
  header('location:login.php');
}
session_destroy();
?>
<?php

ob_start();
define('myheader',TRUE);
require('header.php');
session_start();
$_SESSION['fromMain'] = true;
?>
<!DOCTYPE html>
<html>
<script type="text/javascript">
  document.getElementById("alloc").style.display = "block";
  document.getElementById("realloc").style.display = "block";
  document.getElementById("drop").style.display = "none";
  document.getElementById("logout").style.display = "block";
</script>
<!-- <style>
input[type=text],input[type=email] ,input[type=tel],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: SlateBlue;
}
div.d1 {
   margin-top: auto;
  margin-bottom: auto;
  margin-right: auto;
  margin-left:auto;
  border-radius: 5px;
  background-color: #f0f8ff;
  padding: 20px;
  align-content: center;
  height: 600px;
  width: 400px;
}
h1{
  text-align: center;
  color: #00BFFF;
}
</style>
<body>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <header>
            <h1 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;" align="center"><font color="#00BFFF"> Hostel Management System</font></h1>
           
        </header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">ABC Hostel Management</a>
    </div>
    <ul class="nav navbar-nav">
                
                <li style="display: none;"><a href="index.html" >Home</a></li>
                <li style="display: block;"><a href="student_form.php" >Allocation</a></li>
                <li style="display: block;"><a href="realloc.php">Reallocation</a></li>
                <li style="display:none";> <a href="login.php">Login</a></li>
                <li  ><div class="dropdown" >
            <li style="display: block;" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="building_report.php">Building Wise</a></li>
          <li><a href="student_report.php">Student's Wise</a></li>
          <li><a href="room_report.php">Available rooms</a></li>
          <li><a href="institute_count.php">Institute Wise</a></li>

        </ul>
        <li>
          
            <form class="form-inline" action="login_configure.php" method="post">
    <button  style = "margin-top: 10px; margin-left:660px;" class="btn btn-danger" type="submit" value="logout" name="logout" id="button">Log out</button>
  </form> 

      </li>
  </li>
      
    </div>
  </div> </li>
            </nav> -->

<h1 style="font-style: oblique; font-family: century gothic;" align="center"><font color="#00BFFF">Allocation Form</font></h1>

<div class="d1" style="width:50%;margin:0px auto;">
  <form action="student_addData.php" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="name" name="firstname" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Guardian's Name</span>
        </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="gname" name="gname" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
        </div>
    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email" name="email" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Residential Address</span>
        </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="raddress" name="raddress" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
        </div>
    <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="phone" name="phone" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Institute</span>
        </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="institute" name="institute" autocomplete="off" required>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Gender</span>
      </div>    
          <select class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
    </div>
     <button type="submit" name="submit" class="btn btn-primary btn-md btn-block" style="width:100%; margin:0px auto;" >Submit</button>
  </form>
</div>
<center>
         <footer>
            <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
        </footer>
      </center>
</body>
</html>
<?php
$_SESSION['fromMain'] = true;
define('fromM',TRUE);
//require('student_addData.php');
?>