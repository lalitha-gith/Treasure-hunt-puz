<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			padding: 20px;
			background-image:url('https://t4.ftcdn.net/jpg/05/44/41/71/240_F_544417194_da4yN8R0idxcVW785JuWAB1pTJi1PAhV.jpg');
                        background-size:cover;
                         
		}
		h2 {
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}
		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			padding: 20px;
			max-width: 400px;
			margin: 0 auto;
		}
		label {
			display: block;
			margin-bottom: 5px;
			color: #333;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
			margin-bottom: 20px;
			font-size: 16px;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.2s ease;
		}
		input[type="submit"]:hover {
			background-color: #555;
		}
		.forgot-password {
			text-align: center;
			margin-top: 20px;
		}
		.forgot-password input[type="submit"] {
			background-color: transparent;
			color: #333;
			font-size: 14px;
			padding: 0;
			border: none;
			cursor: pointer;
		}
		.forgot-password input[type="submit"]:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<h2>Login Page</h2>
	<form method="post">
		<label>ID:</label>
		<input type="text" name="id">
		<label>Password:</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Login">
	</form>
	<div class="forgot-password">
		<form method="post" action="forgot.html">
			<input type="submit" name="submit" value="Forgot Password?">
		</form>
	</div>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["id"];
    $email = $_POST["password"];


    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "project";
    $conn = mysqli_connect($host, $uname, $password, $dbname);
    if ($conn) {
        echo "Connection successful.";
    } else {
        echo "Connection Failed.";
        die("Connection Failed:" . mysqli_connect_error());
    }
    $sql = "select * from puz where id='$name' and password='$email'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) >0) {
        session_start();

        $_SESSION['name'] = $name;
	$_SESSION['inc']=0;
        header('location:dashboard.php');
    } else {
        echo "<script> alert('Invalid Credentials')</script>";
        header('Location:register.php');
    }
}
?>