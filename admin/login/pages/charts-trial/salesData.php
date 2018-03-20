<?php
	$connections = mysqli_connect("localhost","root","","nachos");

	if(!$connections){
		die("Connection failed: " . $mysqli->error);
	}
	$strQuery = sprintf("SELECT sum(total) as total, month from transaction where year = 2018 group by month");

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
