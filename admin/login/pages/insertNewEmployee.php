<?php
session_start();


	$connections = mysqli_connect("localhost","root","","nachos-admin");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	if(isset($_POST['submit'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$mname = $_POST['middlename'];
		$position = $_POST['position'];
		$sex = $_POST['gender'];
		$date = $_POST['currDate'];
		$
		$query = mysqli_query($connections,"INSERT INTO employees (emp_id,lastname,firstname,middlename,position,job_start,job_end) values (");
	}
?>