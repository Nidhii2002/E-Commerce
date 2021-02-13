<?php
$con = new mysqli("localhost", "root", "", "store") or die (mysql_error($con));

session_start();
$u_id = $_SESSION['u_id'];
//echo $u_id;

$query = "SELECT * from users_items where user_id = '$u_id' and status = 'Added to Cart' ";
//echo $query;

$result=$con->query($query);

 // if($result->num_rows >= 1) {

	//  	 while($row=$result->fetch_assoc()){
	//  	 	$y=$row['item_id'];
	//  	 	echo $y;
	 	//}
	//}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
	<link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div style="position: relative; top: -100px">
		<ul>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
			<li><a href="setting.php"><span class="glyphicon glyphicon-user">Settings</span></a></li>
			<li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart">Products</span></a></li>
			<div class="center"><li><a href="#"><b>LifeStyle Store</b></a></li></div>
		</ul>
	</div>
	<table style="width: 200px; height: 200px; border: 2px solid black; position: relative; top: 100px" class="tb table-bordered" >
		<tbody>
			<tr>
				<th>Item Number</th>
				<th>Item Name</th>
				<th>Price</th>
				<th></th>
			</tr>
			<?php

			if($result->num_rows >= 1) {
			$sum = 0;
	 		 while($row=$result->fetch_assoc()){
	 	 		$y=$row['item_id'];
	 	 		//echo $y;

			$sql = "SELECT * from items where item_id = '$y' ";

			$fres = $con->query($sql);

			//die(mysqli_error($con));
			//echo $fres;
			if($fres->num_rows >= 1) {

				while($row=$fres->fetch_assoc()) {
					$i = $row['item_id'];
					$n = $row['name'];
					$p = $row['price'];
				}
				$sum = $sum + $p;
			}?>
			<tr>
				<td><?php  echo $i; ?></td>
				<td><?php  echo $n; ?></td>
				<td><?php  echo $p; ?></td>
				<td><a href="remove.php">Remove</a></td>
			</tr>
			<?php 
			$_SESSION['i_id'] = $i; }} ?>
			<tr>
				<td></td>
				<td>Total</td>
				<td>Rs:<?php echo $sum; ?></td>
				<td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></td>
			</tr>
		</tbody>
	</table>
	<div class="footer foot">
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