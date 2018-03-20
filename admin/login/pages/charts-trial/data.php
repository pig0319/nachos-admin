<?php
	$connections = mysqli_connect("localhost","root","","nachos");

	if(!$connections){
		die("Connection fialed: " . $mysqli->error);
	}
	$strQuery = sprintf("SELECT order_name, sum(quantity) as quantity from transaction group by order_name order by sum(quantity) desc limit 10");

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

