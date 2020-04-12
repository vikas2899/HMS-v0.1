<?php
ob_start();
define('myheader',TRUE);
require('header.php');
session_start();
echo $_SESSION["fromData"];
$uid =  $_SESSION["uid"];
$pass = $_SESSION["pass"];
if($_SESSION["fromData"] == '1'){
	$_SESSION["fromData"] == '0';
	$_SESSION["fromRoom"] = '1';
$selected_build = isset($_POST['building']) ? $_POST['building'] : false;
$selected_floor = isset($_POST['floor']) ? $_POST['floor'] : false;
 $con = mysqli_connect("localhost", "root", "", "building_data");
 if($selected_build=='b1'|| $selected_build=='b2'){
 	echo "<form action='check.php' method='post'><label>Room No</label><select name='room'>";
 	$sql = "select room_no from boys_hostel where building_no='$selected_build' and floor_no='$selected_floor' and available>0";
 	$result = mysqli_query($con, $sql);
 	if(mysqli_num_rows($result) > 0){
	 	while($row = mysqli_fetch_array($result)){
	         echo "<option value=".$row['room_no'].">".$row['room_no']."</option>";
	 	}
	 	echo "</select>";
	 	echo "<input type='hidden' name='build' value=".$selected_build.">";
	 	echo "<input type='hidden' name='floor' value=".$selected_floor.">";
	 	echo"<input type='submit' name='submit' value='Get Selected Values' /></form>";
	}else{
		?>
		<script>
		   alert("No room Available");
		</script>
	<?php	
		$query = "DELETE FROM `student_table` WHERE ID = '$uid'";
		$query1 = "DELETE FROM `student_login` WHERE PASSWORD = '$pass'";
		$run1 = mysqli_query($con,$query);
		$run2 = mysqli_query($con,$query1);
		header( "refresh:1;url=student_addData.php" );
	}
 }else{
 	echo "<form action='check.php' method='post'><label>Room No</label><select name='room'>";
 	$sql = "select room_no from girls_hostel where building_no='$selected_build' and floor_no='$selected_floor' and available>0";
 	$result = mysqli_query($con, $sql);
 	if(mysqli_num_rows($result) > 0){
	 	while($row = mysqli_fetch_array($result)){
	         echo "<option value=".$row['room_no'].">".$row['room_no']."</option>";
	 	}
	 	echo "</select>";
	 	echo "<input type='hidden' name='build' value=".$selected_build.">";
	 	echo "<input type='hidden' name='floor' value=".$selected_floor.">";
	 	echo "<input type='submit' name='submit' value='Get Selected Values' /></form>";
	 }else{
	 	?>
	 	<script>
	 	   alert("No room available");
	 	</script>
	 <?php
	 }
 }
}
else{
	 header('location:login.php');
} 
?>
<style>
   #navbarDropdownMenuLink{
      display: none;
   }
</style>