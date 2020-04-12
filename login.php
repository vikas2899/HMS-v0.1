<?php
ob_start();
session_start();
if(isset($_SESSION['uemail'])){
  header('location:login_configure.php');
}

?>
<?php
define('myheader',TRUE);
require('header.php');
?>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
<h1 style="font-style: oblique; font-family: century gothic;" align="center"><font color="#00BFFF">Admin Login </font></h1>
<div class="d1" >
    <form action="login.php" method="post">
      <div style="width: 50%;margin:0px auto;">
        <div class="input-group input-group-md" style="padding:10px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Admin ID</span>
            </div>
            <input type="text"  name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" autocomplete="off" required>
        </div>
        <div class="input-group input-group-md" style="padding:10px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-lg">Password</span>
            </div>
            <input type="password"  name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" autocomplete="off" required>
        </div> 
        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block" style="width:97%; margin:0px auto;" >Submit</button>
      </div> 
    </form>
</div>
<center>
    <p id="message" style="color:red;display:none;">*Invalid Username or Password</p> 
    <footer>
        <p class="p1"><h4 style="background-color:#f0f8ff; font-style: oblique; font-family: century gothic;">© copyrights reserved by ABC Hostels Pvt. Ltd. </h4></p>            
    </footer>
</center>
</body>
</html>

<?php
// if(!isset($_POST['submit'])){
//   header('location:login.php');
// }
define('fromMain',TRUE);
$con = mysqli_connect('localhost','root','','building_data');
if(isset($_POST["submit"])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM admin_table WHERE email='$email' AND password='$pass'";
  $run=mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
  if($row<1){
?>
  <script type="text/javascript">
    document.getElementById("message").style.display = "block";    
  </script>
  <?php 
  }
  else{
    $data = mysqli_fetch_assoc($run);
    $id = $data['email'];
    $_SESSION['uemail'] = $id;
    $_SESSION['fromLogin'] = '1';
    header('location:login_configure.php');
  }
}
?>