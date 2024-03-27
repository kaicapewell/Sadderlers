<!DOCTYPE html>
<html>

<head>
	<title>www.sadderlercenter.com</title>

	<link rel="stylesheet" href="style.css">

	<!--this script allows the Language button to function-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<img id="img1" src="images/logo.jpg" alt="logo">

	<div class="button"><a href="shops.html" style="color:black">Shops</a></div>
	<div class="button"><a href="food.html" style="color:black">Food</a></div>
	<div class="button"><a href="banks.html" style="color:black">Banks</a></div>
	<div class="button"><a href="infomation.html" style="color:black">Infomation</a></div>
	<div class="button"><a href="parking.html" style="color:black">Parking</a></div>

	<a href="index.html">
		<img id="back" src="images/back_but.png" alt="backintime">
	</a>

	<div class="container">
		<div id="lang" class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Language Option
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">English</a></li>
				<li><a href="#">Japanese</a></li>
				<li><a href="#">Spanish</a></li>
				<li><a href="#">Galatic Basic</a></li>
			</ul>

			<img id="speaker" src="images/speaker.png" alt="fordeathpeople">
		</div>
	</div>

	<?php
		// PHP code can be added here if needed
	?>
</body>

</html>