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
	
	<h1 style="text-align: center;"><i>UPDATE</i></h1>
	<p>Name before Update : <?php echo "$name"?></p>
	<p>Email before Update : <?php echo "$email"?></p>
	<div class="container">
		<form class="form1" id="demo1" action="update1.php" method="post" name="log1">
		<input type="text" class="txtfield" placeholder="Update Name" name="uname" id="uname1"><br>
        <input type="text" class="txtfield" placeholder="Update Email" name="uemail" id="umail1">
        <input class="button1" name="reg" type="submit" id="btnsubmit" value="Update">
        </form>		
	</div>

</body>
</html>