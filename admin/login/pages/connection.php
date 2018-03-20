<!-- //pdf maker -->

<?php
	var $dbhost = "localhost";
	var $userame = "root";
	var $password = "";
	var $dbname = "nachos";
	var $conn;

	function getConnString(){
		$con = mysqli_connect($this->dbhost,$this->username,$this->password,$this->dbname) or die("Connection failed".mysqli_connect_error());

		if(mysqli_connect_errno()){
			printf("Connection failed: %s\n",mysqli_connect_error());
			exit();
		}else{
			$this->conn = $con;
		}
		return $this->conn;
	}
?>