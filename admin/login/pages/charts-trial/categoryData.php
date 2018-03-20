<?php
	$connections = mysqli_connect("localhost","root","","nachos");

	if(!$connections){
		die("Connection failed: " . $mysqli->error);
	}
	$strQuery = sprintf("SELECT category,COUNT(category) as count from transaction t join nachosmenu n on t.order_name = n.order_name group by category order by count desc");


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
