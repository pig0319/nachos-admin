<?php

	session_start();


	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}
	if(isset($_POST['Pending'])){
		$value = $_POST['Customer_ID'];
		echo $value;
		$query = mysqli_query($connections,"UPDATE 
		reservations set status = 'Pending' where cust_id = $value");

	
	}else if(isset($_POST['Approved'])){
		$value = $_POST['Customer_ID'];
		echo $value;
		$query = mysqli_query($connections,"UPDATE 
		reservations set status = 'Approved' where cust_id = $value");

	}else if(isset($_POST['Declined'])){
		$value = $_POST['Customer_ID'];
		echo $value;
		$query = mysqli_query($connections,"UPDATE 
		reservations set status = 'Declined' where cust_id = $value");
	}

		header("location: tableReservation.php");

?>