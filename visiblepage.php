<html>

<link rel="stylesheet" href="style1.css" type="text/css">
<link rel=stylesheet href="css/bootstrap.css">
<link rel=stylesheet href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style5.css" type="text/css">

<head>
<title>Dance academy</title>


 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="regvalid.js"> </script>
		

		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style5.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

</head>
<body style="background:pink.jpg; ">
<div class=wrapper style="height:1500px; background:white"> 

<div class=header>

<div class=logo>

<img src="logo.png">

</div>

<div class=navigation>
<nav>

<form><li><button class="btn btn-primary btn-lg btn-block login-button" style="width:100px; margin-left:1250px; background:red" name="logout">Log Out</button></a>
   </form>
</nav>
</div>

</div>

<?php
session_start();
$uid=$_SESSION['uid'];
echo "<br><br>";
echo "<b><font color=green size=15px style='font-family: Comic Sans MS; text-shadow:3px 3px black '>WELCOME $uid!!</font></b><br><br>";
echo "<p><font size=15px color=darkblue style='font-family:Trebuchet MS; text-shadow:3px 3px white'>&nbsp&nbsp&nbsp&nbspYou can now join <font color=orange size=15px style='font-family: Comic Sans MS; text-shadow:2px 2px black'>Dance Academy</font> and 
have a great experience with our teachers and your team-mates.You can join us for coming <font color=orange size=15px style='font-family: Comic Sans MS; 
text-shadow:2px 2px black;'>SUMMER WORKSHOP!</font></font></p>";
echo"<p><font size=15px color=darkblue style='font-family:Trebuchet MS; text-shadow:3px 3px white'>&nbsp&nbsp&nbsp&nbsp
It will help you to showcase your talents in front of the outside world.You can now enroll in the following courses and get valuable discounts.<font color=white size=30px style='font-family: Comic Sans MS; 
text-shadow:6px 6px red;'> HURRY UP!!</font></font></p>";
?>

<?php

if(isset($_GET['logout']))
{
	header("Location: login.php");
     exit;
	
}


?>
<div style="margin-top:50px">
<div class="container" style="float:right; margin-right:-300px" >
			<div class="row main">
				<div class="main-login main-center">
				<h5><b><font size=15 style="font-family:Verdena"><center>ENROLLMENT FORM</center></font></b></h5>
					<form class="" method="get"  name="myform" onSubmit="return validate();" action="login.php">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required />
								</div>
								<span id="err3" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="ema" id="ema"  placeholder="Enter your Email" required>
								</div>
								<span id="err" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Interested Course</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<!--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
								<select class="form-control" name="username" id="username"  placeholder="Enter Interested Course" required>
								<option></option>
								<option>Hip-Hop</option>
								<option>Jazz</option>
								<option>Salsa</option>
								<option>Bharatnatyam</option></select>
								</div>
								<span id="err4" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Duration</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<select class="form-control" name="passd" id="passd"  placeholder="Enter Duration" required>
									<option></option>
									<option>3 months</option>
									<option>6 months</option>
									</select>
								</div>
								<span id="err1" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Contact No</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="confirm" id="confirm"  placeholder="Enter your contact no." maxlength=10 required/>
								</div>
								<span id="err2" style="font-size:15px;color:red; float:right"></span>
							</div>
						</div>

						<div class="form-group ">
						<input type=submit class="btn btn-primary btn-lg btn-block login-button" value="Enroll" name="register" required>
						<!--	<input class="btn btn-primary btn-lg btn-block login-button"  type="submit" name="register" Value="Register"></button>-->
						</div>
											</form>
											
											
					</div>

						<?php
	if(isset($_GET['register']))
	{
		
		$name=$_GET['name'];
		$emailid=$_GET['ema'];
		$username=$_GET['username'];
		$password=$_GET['passd'];
		
		if(!($name=="" || $emailid==""||$username=="" || $password==""))
		{

	$cn=mysqli_connect("localhost","root","riya")or die("Error in connection_aborted!!");
	$d=mysqli_select_db($cn,"dance")or die("Error in connection_aborted db!!");
		mysqli_query($cn,"insert into register values('$name','$emailid','$username','$password')") or die("Error in connection_aborted!! insert");
		echo"<script>alert('Record saved successfully')</script>";
		
		}
		
}

						?>
				</div>
			</div>
		</div>
		

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<div class="container">
  <img src="gal3.jpg" style="margin-top:100px; float:left; height:490px; margin-bottom:150px; margin-left:-300px">
</div>

<!--<div class="container">
  <img src="jazz.jpg" style="margin-top:100px; float:left; height:490px; margin-bottom:150px; margin-left:-300px">
</div>-->


<div class=footer style="margin-top:600px">

<div class=footer1>

<h3 style="margin-top:80px; ">Class-Centers</h3>
<ul style="display:inline; list-style:none">
<li><h4>Mumbai</h4></li>
<li><h4>Delhi</h4></li>
<li><h4>Chennai</h4></li>
<li><h4>Kolkata</h4></li>
</ul>

</div>


<div class=footer2>
<h3 style="margin-top:100px; ">Choreographers</h3>
<ul>
<li><h4>Remo</h4></li>
<li><h4>Terrence</h4></li>
<li><h4>K.K</h4></li>
<li><h4>A.D</h4></li>
</ul>
</div>

<div class=footer3>
<h3 style="margin-top:120px; ">Related-links</h3>
<ul>
<li><a href="#"><h4>dance-academy-mumbai</h4></a></li>
<li><a href="#"><h4>dance-academy-delhi</h4></a></li>
<li><a href="#"><h4>dance-academy-chennai</h4></a></li>
<li><a href="#"><h4>dance-academy-kolkata</h4></a></li>
</ul>
</div>

<div class=footer4>
<h3 style="margin-top:140px; ">Contact-us</h3>
<ul>
<li><h4>0253-226445</h4></li>
<li><h4>a@gmail.com</h4></li>
<li><h4>Fax no:225-33456</h4></li>
<li><h4>www.danceac.com</h4></li>
</ul>
</div>

</div>
</body>
</html>