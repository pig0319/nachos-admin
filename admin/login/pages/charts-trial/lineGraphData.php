<?php
	$connections = mysqli_connect("localhost","root","","nachos");

	if(!$connections){
		die("Connection fialed: " . $mysqli->error);
	}

	$query = sprintf("SELECT sum(total)as total,SUBSTR(dte,1,2) as date from transaction group by date");

	$result = $connections->query($query);

	$data = array();
	foreach($result as $row){
		$data[] = $row;
	}

	$result->close();
	$connections->close();

	print json_encode($data);
?>