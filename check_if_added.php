<?php


//$item_id=$_SESSION['item_id'];
//user_id=$_SESSION['user_id'];

function check_if_added($passingValue) {


	$conn=  new mysqli("localhost", "root", "", "store") or die(mysqli_error($conn));

	//echo "nidhi;";

	//$item_id = $_SESSION['$item_id'];
	//echo "nidhi;";






	$sql = "SELECT * FROM users_items WHERE item_id='$passingValue' AND status='Added to cart'";
	//echo $sql;
	 $result=$conn->query($sql);

	 if($result->num_rows >= 1){

	 	// while($row=result->fetch_assoc()){
	 	// 	$x=$row['status'];
	 	// }
	return 1;
}else{
	return 0;
}
}



//if(mysqli_num_rows = 1) {
//if($conn->num_rows>=1) {
//	return 1;


//} else {
//	return 0;
//}
//echo  check_if_added(1);
?>