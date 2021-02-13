<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LogIn</title>
	<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div>
		<ul>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
			<li><a href="signUp.php"><span class="glyphicon glyphicon-user">Signup</span></a></li>
			<div class="center"><li><a href="#"><b>LifeStyle Store</b></a></li></div>
		</ul>
	</div>
	<div class="container">
		<div class="row rtop">
			<div class="col-xs-6">
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Log In</h4></div>
					<div class="panel-body">
						<p class="text-warning">Login to make a purchase</p>
						<form method="post" action="Login_submit.php">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Password" name="password">
							</div>
							<button class="btn btn-primary">LogIn</button>
						</form>
					<div class="panel-footer">
						<h5>Don't have an account?<a href="signUp.php" class="red">Register</a></h5>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer log">
		<div class="container">
			<p>
				<center>
					Copyright @LifeStyle Store.All Right Reserved| Contact us: +9833369864.
				</center>
			</p>
		</div>
	</div>
	<?php
	if(isset($_session['item_id'] )) { ?>
		<a href="cart.php"></a>
	<?php } ?>
</body>
</html>