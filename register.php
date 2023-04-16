<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			background-color: #f2f2f2;
			
		}
		
		h2 {
			color: #333;
			margin-top: 50px;
			margin-bottom: 20px;
			text-align: center;
		}
		
		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			width: 50%;
			margin: 0 auto;
		}
		
		label {
			display: block;
			font-size: 18px;
			color: #333;
			margin-bottom: 5px;
		}
		
		input[type=text], input[type=email], input[type=password] {
			padding: 10px;
			width: 100%;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}
		
		input[type=submit] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 18px;
			transition: background-color 0.3s ease;
		}
		
		input[type=submit]:hover {
			background-color: #555;
		}
		
	</style>
</head>
<body>
	<h2>Registration Page</h2>
	<form method="post" >
		<label>Id:</label>
		<input type="text" name="id">
		<label>Email Address:</label>
		<input type="email" name="email">
		<label>Password:</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Register">
	</form>
       <a href="login.php">Already have an account</a>
</body>
</html>



<?php

if (isset($_POST['submit'])) 
{
	
	$name=$_POST['id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email address";
		exit;
	}
	if (strlen($password) < 8) {
		echo "Password must be at least 8 characters";
		exit;
	}
	
	
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
	
	$conn=mysqli_connect("localhost","root","","project");
	$q="insert into puz values('$name','$email','$password');";
	mysqli_query($conn,$q);
	header("location:login.php");
}
?>
