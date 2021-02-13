<?php
$con = new mysqli("localhost", "root","", "store") or die(mysqli_error());
session_start();

$u_id = $_SESSION['u_id'];
$i_id=$_SESSION['i_id'] ;

//$i_id =$_SESSION['item_id'];

$sql = "DELETE FROM users_items WHERE user_id = '$u_id' and item_id = '$i_id' ";


$result=$con->query($sql);

header('Location: cart.php');





?>