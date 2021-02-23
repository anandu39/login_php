<?php

include("connect.php");


$name =  $_POST['name']; 
$email = mysqli_real_escape_string($conn,$_POST['email']); 
$password=mysqli_real_escape_string($conn,$_POST['pswrd']);
$hash1=md5($password);
$query=mysqli_query($conn,"SELECT * FROM registration WHERE Email='$email'");

if(mysqli_num_rows($query)>0)
{
	?>
	<script>
     alert('Email id already in use.');
	window.location="login.php";
	</script>
<?php
}

else
{
	$sql = "INSERT INTO registration(Name,Email,Password)  VALUES ('$name','$email','$hash1')"; 
	if(mysqli_query($conn,$sql)){
	?> 
	"<script>
		alert('Registration success.');
		window.location="login.php";
	</script>";
	<?php
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
    }

?>