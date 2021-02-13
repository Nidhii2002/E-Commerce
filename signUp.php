<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SignUp</title>
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
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
			<div class="center"><li><a href="index.html"><b>LifeStyle Store</b></a></li></div>
		</ul>
	</div>
	<div class="container">
		<div class="row row-style">
			<div class="col-xs-4">
				<div class="su">Sign Up</div>
				<form action="signup.inc.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Name" name="name" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" pattern=".{4,}" required title="The Password must contain atleast 4  characters">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" placeholder="Contact" name="contact" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="City" name="city" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address" name="address" required>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="footer bn">
		<div class="container">
			<p>
				<center>
					Copyright @LifeStyle Store.All Right Reserved| Contact us: +9833369864.
				</center>
			</p>
		</div>
	</div>
	</body>
</html>