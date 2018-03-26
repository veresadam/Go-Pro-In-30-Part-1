<?php
	$sn = "localhost";
	$uname = "root";
	$password = "";
	$dbname = "project";
	$conn = new mysqli($sn, $uname, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed " . $conn->connect_error);
	}
?>