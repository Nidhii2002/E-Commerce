<?php
$con = new mysqli("localhost", "root","", "store") or die(mysqli_error());
session_start();


$item_id = $_GET['item_id'];

$email = $_SESSION['email'];
$password = $_SESSION['pass'];

//$_SESSION['item_id'] = $item_id;

$query = "SELECT user_id from users WHERE email='$email' and password='$password' ";
 $result=$con->query($query);

	 if($result->num_rows >= 1){

	 	 while($row=$result->fetch_assoc()){
	 	 	$x=$row['user_id'];
	 	 }
	 	}

$_SESSION['u_id'] = $x;
//$u_id = $_SESSION['u_id'];


$sql = "INSERT into users_items(user_id,item_id,status) values ('$x', '$item_id','Added to Cart')";


$con->query($sql);


//echo "Successfully added cart";
header('Location: products.php');

?>







