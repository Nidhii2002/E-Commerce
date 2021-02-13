<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LifeStyle Store</title>
	<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
					<span class= "icon-bar"></span>
					<span class= "icon-bar"></span>
					<span class= "icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">LifeStyle Store</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<?php 
					if(isset($_SESSION['email'])) {
						?>
						<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
						<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
						<li><a href="logout_script.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
						?>
						<?php
					} else {
						?>
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Log In</a></li>
							<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>