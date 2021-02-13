<?php
$con = new mysqli("localhost", "root", "", "store") or die (mysql_error($con));

session_start();
 $email = $_SESSION['email'];
 $password = $_SESSION['pass'];

 $query = "SELECT user_id from users WHERE email='$email' and password='$password' ";
  $result=$con->query($query);

 	 if($result->num_rows >= 1){

 	 	 while($row=$result->fetch_assoc()){
 	 	 	$x=$row['user_id'];
 	 	 }
 	 	}

$query = "SELECT * from users_items where user_id = '$x' and status = 'Added to Cart' ";
echo $query;

$result=$con->query($query);

 if($result->num_rows >= 1) {

	 	 while($row=$result->fetch_assoc()){
	 	 	//echo $row[0];
	 	 	//$arr=explode(" ",$row);  
	 	 	//print_r($arr);
	 	 	$y=$row['item_id'];
	 	 	echo $y;
	 	}
	}

?>


