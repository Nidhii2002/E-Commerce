<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Setting Page</title>
	<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div>
    <ul>
      <li><a href="signUp.php"><span class="glyphicon glyphicon-user">Signup</span></a></li>
      <li><a href="Login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
      <div class="center"><li><a href="index.html"><b>LifeStyle Store</b></a></li></div>
    </ul>
  </div>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
   				<form action="changepass.php" method="post">
    				<h1 class="setting">Change Password</h1>
    				<div class="form-group">
    					<input type="text" class="form-control" placeholder="Old Password" name="password">
    				</div>
    				<div class="form-group">
    					<input type="text" class="form-control" placeholder="New Password" name="newpass">
    				</div>
    				<div class="form-group">
    					<input type="text" class="form-control" placeholder="Reenter New Password" name="repass">
    				</div>
    				<button class="btn btn-primary">Change</button>
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