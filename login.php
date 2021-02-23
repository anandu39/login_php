<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="logstyles.css">  <!-- used for linking the styles from .css file -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Balsamiq Sans' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script language="javascript" src="demo.js"></script>
  <script language="javascript" src="jquery.js"></script>
</head>
<body class="body1m">
  <div class=container>
    <div class="part1" >  <!-- To define what all contents are in the column1. -->   
      <form class="form1" id="text1" action="dbvalues.php" method="post" name="reg1">
        <h1 class="head2m"><b>Register</b></h1>
        <div style="text-align: center;"> <!-- To define the section for social icons.  -->
          <a href="#" class="social-item" ><i class="fa fa-facebook"></i></a>
          <a href="#" class="social-item"><i class="fa fa-twitter" ></i></a><br>
        </div>
        <p class="para2m" style="margin-bottom:-20px; ">or use your account</p><br>
        <input type="text" class="txtfield" placeholder="Name" name="name" id="name1"><br>
        <input type="email" class="txtfield" placeholder="Email" name="email" id="email1"><br>
        <input type="password" class="txtfield" placeholder="Password" name="pswrd" id="txtpswrd">
        <input type="password" class="txt1" placeholder="Confirm Password" name="cpswrd" id="ctxtpswrd">
        <input type="checkbox" onclick="myfunc1()">Show Password
        <p class="para2m">Already have an account?<a class="para2m"  data-rel="1"><u>Login</u></a><br></p>
        <input class="button1" name="reg" type="submit" id="btnsubmit" value="Register">
      </form>


      <form class="form1" id="demo1" action="index.php" method="post" name="log1">
        <h1 class="head2m"><b>Login</b></h1>
        <div style="text-align: center;"> <!-- To define the section for social icons.  -->
          <a href="#" class="social-item" ><i class="fa fa-facebook"></i></a>
          <a href="#" class="social-item"><i class="fa fa-twitter" ></i></a><br>
        </div>
        <p class="para2m" style="margin-bottom:-20px; ">or use your account</p><br>
        <input type="text" class="txtfield" placeholder="Email" name="email" id="email2"><br>
        <input type="password" class="txtfield" placeholder="Password" name="pswrd" id="txtpswrd1">
        <input type="checkbox" onclick="myfunc()">Show Password
        <p class="para2m">New user?<a class="para2m" data-rel="1"><u>Register</u></a><br></p>
        <input class="button1" name="log" type="submit" id="btnsubmit1" value="Login">
      </form>
    </div><!-- To define what all contents are in the column1. -->
    <div class="part2">
      
    </div>
  </div>
  <script>

    
  </script>
</body>