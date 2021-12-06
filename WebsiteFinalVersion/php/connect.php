<?php
	
	$serverName = "localhost";
	$dbUserName = 'cen4010_fa21_g13';
	$dbPassword = "p51sDaSStq";
	$dbName = "cen4010_fa21_g13";

	$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>