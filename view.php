<?php

include("connect.php"); 
session_start();

$email=$_SESSION['email'];
$result=mysqli_query($conn,"SELECT * FROM registration WHERE Email='$email'");
$retrive=mysqli_fetch_array($result);
$name=$retrive['Name'];
$email1=$retrive['Email'];
$password=$retrive['Password'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="topnav">
	<a class="a1" href="view.php">View</a>
    <a class="a1" href="update.php">Update</a>
    <a class="a1" href="#">Delete</a> 
    <a href="logout.php">Logout</a>
    </div>
	<div class="container">
		<h3>Name : <?php echo ucfirst("$name");?></h3><br>
		<h3>Email : <?php echo "$email1";?></h3>

		
	</div>

</body>
</html>