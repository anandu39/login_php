<?php
include 'connect.php';
session_start();
$email = mysqli_real_escape_string($conn, $_POST['email']); 
$password = mysqli_real_escape_string($conn, $_POST['pswrd']); 
$password = md5($password); 
$query = "SELECT * FROM registration WHERE Email='$email' AND Password='$password'"; 
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) == 1) { 
	$_SESSION['email'] = $email; 
	// Welcome message 
	 
              
    // Page on which the user is sent 
    // to after logging in 
    header('location: home.php'); 
} 
else {
	?>
	<script>
	alert('Email or Password incorrect');
	window.location="login.php";
	</script>
	<?php	  
} 

?>