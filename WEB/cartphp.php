<?php
				$conn = mysqli_connect("localhost","root", "","nachos1");
				if ($conn-> connect_error) {
					die("Connection failed:". $conn-> connect_error);
				
				$sql = "SELECT prod_name,price,quantity from menu";
				$result = $conn-> query($sql);
				
				if ($result -> num_rows > 0){
					while($row = $result -> fetch_assoc()) {
						echo "<tr><td>".$row[prod_name]."</td><td>"
						.$row[price]."</td><td>" .$row[quantity]."</td><tr>";
					}
					echo"</table>";
				}
					else{
						echo "0 result";
					}
				$conn -> close();
				
?>