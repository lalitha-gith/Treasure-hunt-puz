<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Treasure Hunt!</title>
	<style>
		/* Add some basic styles to make the page look nice */
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			//background-color:#f96d00;
		}
		h1 {
			text-align: center;
			color: #1a1a1a;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 50px 20px;
			text-align: center;
			background-color:#dfddc7;
			box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
		}
		/* Add some animation to the confetti */
		@keyframes confetti {
			0% {
				transform: translate(0, -10px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(180deg);
				opacity: 1;
			}
		}
		.confetti,.confetti2,.confetti3,.confetti4,.confetti5 {
			position: absolute;
			width: 20px;
			height: 20px;
			background-color: #ffeb3b;
			
			border-radius: 50%;
			animation: confetti 5s ease-in-out infinite;
			z-index: -1;
		}
		.confetti-message {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 24px;
			font-weight: bold;
			color: #1a1a1a;
			z-index: 1;
		}
	@keyframes confetti {
			0% {
				transform: translate(0, -10px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(180deg);
				opacity: 1;
			}
		}
		@keyframes confetti2 {
			0% {
				transform: translate(0, -20px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(360deg);
				opacity: 1;
			}
		}
		@keyframes confetti3 {
			0% {
				transform: translate(0, -30px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(-180deg);
				opacity: 1;
			}
		}
		@keyframes confetti4 {
			0% {
				transform: translate(0, -40px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(90deg);
				opacity: 1;
			}
		}
		@keyframes confetti5 {
			0% {
				transform: translate(0, -50px) rotate(0deg);
				opacity: 0;
			}
			100% {
				transform: translate(0, 500px) rotate(-90deg);
				opacity: 1;
			}
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			font-size: 16px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Welcome to the Treasure Hunt, <?php echo $_SESSION['name']; ?>!</h1>
		<p>Get ready to embark on a thrilling adventure to find the treasure!</p>
		<div class="confetti" style="top: 100px; left: 82%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 3%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 46%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 100px; left: 27%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 8%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 13%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 100px; left: 10%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 25%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 40%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 100px; left: 30%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 85%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 40%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 100px; left: 50%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 65%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 30%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 100px; left: 90%; animation-name: confetti2;"></div>
		<div class="confetti" style="top: 150px; left: 75%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 60%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 200px; left: 20%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 150px; left: 5%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 95%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 200px; left: 80%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 150px; left: 18%; animation-name: confetti3;"></div>
		<div class="confetti" style="top: 200px; left: 28%; animation-name: confetti4;"></div>
		<div class="confetti" style="top: 200px; left: 33%; animation-name: confetti4;"></div>
		<div class="confetti-message" style="padding-top:50px">
<h3>Instructions to the player</h3><h5>Treasure is inside a room ,inorder to reach the treasure you have to do some activities and need to answer some tricky questions...We will help you by providing some clues.<br>press the start button to begin the game</h5>
		<div><button type="button" onclick="location.href='first.html'">Start</button></div>
	</div>
</body>
</html>
