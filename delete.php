<?php

include("connect.php"); 
session_start();
$email=$_SESSION['email'];
$result=mysqli_query($conn,"DELETE FROM registration WHERE Email='$email'");

if($result===TRUE){
	?>
	<script>
	alert('User account deleted Successfully');
	window.location="login.php";
	</script>
<?php	
}
?>