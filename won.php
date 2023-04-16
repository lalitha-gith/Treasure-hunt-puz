<?php
session_start()
?>

<html>
<head>
	<title>Falling Coins</title>
<style>
*{
padding:0;
margin:0;
}
h1{
padding-top:10px;
height:50px;
}
p{
padding-bottom:10px;
}
</style>	
</head>
<body>
<div  style="background-color:#FFD700">
	 <h1 align="center" style="background-color:#FFD700;padding-top:5">Congratulations! <?php echo $_SESSION['name']?></h1>
	<p align="center" style="background-color:#FFD700">You've found the treasure!</p>
</div>
	<canvas id="canvas"></canvas>
        
	<script type="text/javascript">
		// Initialize canvas
		var canvas = document.getElementById('canvas');
		var ctx = canvas.getContext('2d');
		canvas.width = window.innerWidth;
		canvas.height = window.innerHeight;

		// Create an array to hold all the coins
		var coins = [];

		// Create a Coin class to represent each coin
		class Coin {
			constructor(x, y, radius) {
				this.x = x;
				this.y = y;
				this.radius = radius;
				this.color = 'gold';
				this.speed = Math.floor(Math.random() * 5) + 1;
			}

			// Draw the coin on the canvas
			draw() {
				ctx.beginPath();
				ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
				ctx.fillStyle = this.color;
				ctx.fill();
			}

			// Update the position of the coin
			update() {
				this.y += this.speed;
				if (this.y > canvas.height + this.radius) {
					this.y = 0 - this.radius;
				}
			}
		}

		// Create 50 coins and add them to the coins array
		for (var i = 0; i < 50; i++) {
			var x = Math.floor(Math.random() * canvas.width);
			var y = Math.floor(Math.random() * canvas.height);
			var radius = Math.floor(Math.random() * 20) + 10;
			var coin = new Coin(x, y, radius);
			coins.push(coin);
		}

		// Animate the coins
		function animate() {
			// Clear the canvas
			ctx.clearRect(0, 0, canvas.width, canvas.height);

			// Update and draw each coin
			for (var i = 0; i < coins.length; i++) {
				coins[i].update();
				coins[i].draw();
			}

			// Request the next frame of animation
			requestAnimationFrame(animate);
		}

		// Start the animation
		animate();
	</script>

</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Player Won!</title>
	<style>
		body {
			background-color: #F9F3E3;
		}
		h1 {
			text-align: center;
			font-size: 48px;
			margin-top: 150px;
			color: #FF8C00;
		}
		p {
			text-align: center;
			font-size: 24px;
			margin-top: 50px;
			color: #0c67ae;
		}
		.confetti {
			position: absolute;
			width: 10px;
			height: 10px;
			background-color: #f0d33f;
			box-shadow: 
				3px 3px 5px rgba(0, 0, 0, 0.1), 
				-3px -3px 5px rgba(255, 255, 255, 0.7);
			animation: confetti 3s ease-in-out infinite;
			z-index: 1;
		}
		.confetti:nth-child(2n) {
			background-color: #e5483f;
		}
		.confetti:nth-child(3n) {
			background-color: #3fe57f;
		}
		.confetti:nth-child(4n) {
			background-color: #3f72e5;
		}
		.confetti:nth-child(5n) {
			background-color: #8a3fe5;
		}
		@keyframes confetti {
			0% {
				transform: rotate(0) translate(0, -500px);
			}
			100% {
				transform: rotate(720deg) translate(100px, 1000px);
			}
		}
	</style>
</head>
<body>
	<h1>Congratulations!<?php echo $_SESSION['name']?></h1>
	<p>You've found the treasure!</p>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
	<div class="confetti"></div>
</body>
</html>
-->
