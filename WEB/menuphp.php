<?php
		session_start();
	
		// Create connection
 		$conn = mysqli_connect("localhost", "root", "", "nachos1");	
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connected";
		}
		if (isset($_POST['submit1'])){
			$quantity= $_POST['qty_duo'];
			
			 $sql= mysqli_query($conn, "INSERT INTO menu (prod_name,quantity,price) VALUES ('Duo',$quantity,160)");
			   
			
		}	
		
		if (isset($_POST['submit1'])){
			   $quantity= $_POST['qty_combo'];
			   $sql= mysqli_query($conn, "INSERT INTO menu (prod_name,quantity,price) VALUES ('combo',$quantity,195)");
			   
			
		}	
		
		if (isset($_POST['submit3'])){
				$quantity= $_POST['qty_overload'];
				
			   $sql= mysqli_query($conn, "INSERT INTO menu (prod_name,quantity,price) VALUES ('overload',$quantity,220)");
			   
			
		}
		
		if (isset($_POST['submit4'])){
				$quantity= $_POST['qty_halfdozen'];
				
			   $sql= mysqli_query($conn, "INSERT INTO menu (prod_name,quantity,price) VALUES ('half dozen',$quantity,199)");
			   
			
		}
		
		if (isset($_POST['submit5'])){
				 	$quantity= $_POST['qty_onedozen'];
			   $sql= mysqli_query($conn, "INSERT INTO menu (prod_name,quantity,price,status) VALUES ('one dozen',$quantity,395)");
			   
			
		}
		
		mysqli_close($conn);
	
	
?>