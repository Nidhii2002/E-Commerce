<?php
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();

$password = $_POST['password'];
$new_pass = $_POST['newpass'];
$re_enter_pass = $_POST['repass'];

$sql = "SELECT * from users WHERE password='$password' ";

$result = mysqli_query($con,$sql) or
die(mysqli_error($result));



if($new_pass == $re_enter_pass) {
	if($result->num_rows > 0) {
			$new="UPDATE users SET password='$new_pass' WHERE password='$password' ";
			//$con->query($new);
			mysqli_query($con,$new);
			echo "Password Change Successfully";
		}
} else {
		echo "Reenter the Correct Password";
	}
?>
	
