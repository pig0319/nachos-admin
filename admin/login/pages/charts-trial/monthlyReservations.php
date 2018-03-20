<?php
	$connections = mysqli_connect("localhost","root","","nachos");

	if(!$connections){
		die("Connection fialed: " . $mysqli->error);
	}

	//monthly
	$strQuery = sprintf("SELECT count(month) as res, month_name from reservations join months on reservations.month = months.month_num group by month");

	$result = $connections->query($strQuery);

	$data = array();
	foreach($result as $row){
		$data[] = $row;
	}

	$result->close();

	$connections->close();

	print json_encode($data);
	
	


	//source: https://www.youtube.com/watch?v=mmz79gH0l6c&pbjreload=10


?>

