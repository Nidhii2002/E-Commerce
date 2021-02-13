<?php
$con = new mysqli("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();

echo 'Your Order Successfully Placed';

?>