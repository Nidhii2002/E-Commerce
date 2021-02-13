<?php
$con =  new mysqli("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();


 $email = $_POST['email'];
 $password =  $_POST['password'];
$_SESSION['email'] = $email;
$_SESSION['pass'] = $password;

 //$item_id = $_session['item_id'];

 $query = "SELECT user_id from users WHERE email='$email' and password='$password' ";
 $result=$con->query($query);

	 if($result->num_rows >= 1){

	 	 while($row=$result->fetch_assoc()){
	 	 	$x=$row['user_id'];
	 	 }

$_SESSION['u_id'] = $x;
		header('Location: products.php');
	} else{
		echo "Incorrect Email or Password ";
	}


?>