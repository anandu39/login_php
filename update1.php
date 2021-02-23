<?php
include 'connect.php';
session_start();

$email=$_SESSION['email'];
$uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$query=mysqli_query($conn,"SELECT * FROM registration WHERE Email='$uemail'");
$retrive=mysqli_fetch_array($query);
$bname=ucfirst($retrive['Name']);
if(mysqli_num_rows($query)>0 && $uemail!=$email)
{
	?>
	<script>
     alert('Email id already in use.');
	window.location="update.php";
	</script>
<?php
}

else
{
$query1=mysqli_query($conn,"UPDATE registration SET Name='$uname',Email='$uemail' WHERE Email='$email'");
}
$result=mysqli_query($conn,"SELECT * FROM registration WHERE Email='$uemail'");
$retrive=mysqli_fetch_array($result);
$name=ucfirst($retrive['Name']);
$email1=$retrive['Email'];
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
		<?php
		if($name==$bname){
			?> 
			<h3>Name not Updated : <?php echo ucfirst("$name");?></h3><br>
			<?php
			if($email==$email1){
				?>	
				<h3>Email not Updated : <?php echo ("$email1");?></h3><br>
				<?php
			}
			else{
				?>
				<h3>Email Updated : <?php echo ("$email1");?></h3><br>
				<?php
			} 
			?>
			<?php
		}
		else{
			?>
			<h3>Name Updated : <?php echo ucfirst("$name");?></h3><br>
			<?php
			if($email==$email1){
				?>	
				<h3>Email not Updated : <?php echo ("$email1");?></h3><br>
				<?php
			}
			else{
				?>
				<h3>Email Updated : <?php echo ("$email1");?></h3><br>
				<?php
			} 
			?>
			<?php
		}
		?>	
	

		
	</div>

</body>
</html>