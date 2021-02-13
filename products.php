<?php
require_once('check_if_added.php');
$con = new mysqli("localhost", "root","", "store") or die(mysqli_error());

session_start();
$u_id = $_SESSION['u_id'];

	// $passingValue='1';

	// //echo check_if_added($passingValue);

	// if(check_if_added($passingValue)==0){
	// 	echo "added";
	// }else{
	// 	echo "not added";
	// }
 //    die();
//echo "Welcome ". $_SESSION['name'];
//die();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<div>
		<ul>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout </span></a></li>
			<li><a href="setting.php"><span class="glyphicon glyphicon-user">Settings</span></a></li>
			<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
			<div class="center"><li><a href="#"><b>LifeStyle Store</b></a></li>
			</div>
		</ul>
	</div>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome to our LifeStyle store!</h1>
			<p>We have the best Cameras,Watches and Shirts for you.No need to hunt around,we all have in one place!</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/5.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>CannonEOS</h2>
								<p>Price Rs:36,000.00</p>
							   <?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '1' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){
										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled">Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=1" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-sm-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/2.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>SonyDSLR</h2>
								<p>Price Rs:50,000.00</p>
								 <?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '2' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled">Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=2" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
								
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-sm-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/3.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Sony DSLR</h2>
								<p>Price Rs:50,000.00</p>
								 <?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '3' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=3" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
								
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-sm-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/4.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Olympus DSLR</h2>
								<p>Price Rs:80,000.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '4' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=4" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/9.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Titan Model #301</h2>
								<p>Price Rs:1300.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '5' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=5" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/10.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Titan Model #201</h2>
								<p>Price Rs:3000.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '6' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=6" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-lg-3">
	
					<div class="items">
						<a href="cart.php">
							<img src="image/11.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>HMT Milan</h2>
								<p>Price Rs:8000.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '7' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=7" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/12.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Faber Luba #111</h2>
								<p>Price Rs:180000.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '8' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=8" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
			
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/6.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>H&W</h2>
								<p>Price Rs:800.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '9' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=9" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
		
			</div>
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/8.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Luis Phil</h2>
								<p>Price Rs:1000.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '10' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=10" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
				
			</div>
			<div class="col-lg-3">
				
					<div class="items">
						<a href="cart.php">
							<img src="image/13.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>John Zok</h2>
								<p>Price Rs:1500.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '11' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=11" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
			    	</div>
			</div>
			<div class="col-lg-3">
					<div class="items">
						<a href="cart.php">
							<img src="image/14.jpg" alt="" class="thumbnail">
							<div class="caption">
								<h2>Jhalsani</h2>
								<p>Price Rs:1300.00</p>
								<?php 
							   if(!isset($_SESSION['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									<?php }
										     else { 
										     	$sql = "SELECT * FROM users_items WHERE user_id = '$u_id' and item_id = '12' ";
										     	 $result=$con->query($sql);

	 												if($result->num_rows >= 1){


										     	?>
											    <a href="#" role="button" class="btn btn-block btn-success disabled" >Added To Cart</a>
										    <?php } else { ?>
										    	 <a href="cart-add.php?item_id=12" role="button" class="btn btn-block btn-primary">Add To Cart</a>
										   <?php } }

									    ?>
							</div>
						</a>
					</div>
			</div>
		</div>
		<div class="footer">
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
