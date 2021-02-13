<?php
$con = new mysqli("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
 $name = $_POST['name'];
 $city = $_POST['city'];
 $address = $_POST['address'];
 $contact = $_POST['contact'];

 $e_mail = $_POST['email'];
 $pass_word =  $_POST['password'];
$user_registration_query = "insert into users (user_id,name,email,password,contact,city,address) values ('','$name','$e_mail','$pass_word','$contact','$city','$address')";

	//die ($user_registration_query);
	//$user_registration_submit = mysqli_query($con , $user_registration_query) or die(mysqli_error($con));
	//$con->query($user_registration_query);

if ($con->query($user_registration_query) === TRUE) {
	header("Location: products.php");
} else {
  echo $user_registration_query . "<br>" . $con->error;
}
//if ($con->query($user_registration_query) === TRUE) {
 //if (empty($name) || empty($city) || empty($address) || empty($contact) || empty($e_mail) || empty($pass_word)) {
	//die("Please Fill All Required Feilds :))");
//} else {
	//header("Location: products.php");
//}
//}
 //echo "user successfully inserted";
 //echo "<br><br>";

 //echo "<a href='login.php'><span class='glyphicon glyphicon-user'>Go to LOGIN page</span></a>";
?>
