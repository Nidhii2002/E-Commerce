<?php
//$user_registration_query = "insert into users(email, password) values ('$email','$password')";
//die ($user_registration_query);
//$user_registration_submit = mysqli_query($con , $user_registration_query) or die(mysqli_error($con));
//echo "user successfully inserted";
?>
//else { ?>
									<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
								//
							//} ?>
		

<?php 
								if(!isset($_session['email'])) { ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
							    //<?php }
								else {
								 ?>
									<a href="cart.php" role="button" class="btn btn-block btn-success"disabled>Added To Cart</a>
								<?php }
								?>
 <?php 
							    //$_session['item_id']= 1;
								if(!isset($_session['$email'])) { 
									//echo $item_id; ?>
									<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
									
								 } 
								else {} 
									<a href="cart-add.php?=1" role="button" class="btn btn-block btn-success">Add To Cart</a>
								}
								<?php }
								//while(!empty($y)) {

// $sql = "SELECT * from items where item_id = '$y' ";

// $fres = $con->query($sql);

// //die(mysqli_error($con));
// //echo $fres;
// if($fres->num_rows >= 1) {

// 	while($row=$fres->fetch_assoc()) {
// 		$i = $row['item_id'];
// 		$n = $row['name'];
// 		$p = $row['price'];
// 	}
// }

								 <a href="cart-add.php?item_id=1" role="button" class="btn btn-block btn-primary">Add To Cart</a>