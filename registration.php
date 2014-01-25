<html>
<head>
	<title>Emamination Web App</title>
	<link type="text" rel="stylesheet" href="css/bootstrap.css">
  	<link type="text" rel="stylesheet" href="style.css">
<body class = "back">
	<div class = "thumbnail span6 offset3" style = "margin-top:20px">
		<center>
			<form method = "POST" action = "login.php">
				<h2><font color = "blue" face = "Century Gothic">Register</h2></font><br>
				<input type = "text" name="fname" id="fname" placeholder=" Enter First name" style ="margin-left:10px;height:30px;"></b><br><br>
				<input type = "text" name="lname" id="lname" placeholder=" Enter Last name" style ="margin-left:10px;height:30px;"></b><br><br>
				<input type = "email" name = "email" style ="margin-left:10px;height:30px;" placeholder = "Enter your Email"></b><br><br>
				<input type = "password" name = "password" style ="margin-left:10px;height:30px;" placeholder = "Enter your Password"></b><br><br>
				<input type = "password" style ="margin-left:10px;height:30px;" name = 'cpassword' placeholder = "Confirm Password"></b><br>
		</center>
				<input type = "submit" class = "btn btn-primary" name = "submit" value = "Submit" id = "button1">
				<a href = "login.php"><input type = "reset" class = "btn btn-success" name = "reset" value = "Reset" id = "button2"></a>
				<u><a href = "login.php" id = "login">Login</a></u>
			</form>
		
</div>
</body>
</head>
</html>