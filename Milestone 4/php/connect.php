<?php
	/*$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_hash = password_hash($password, PASSWORD_DEFAULT);

	// Database connection
	$conn = new mysqli('localhost','cen4010_fa21_g13','p51sDaSStq','cen4010_fa21_g13');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Registration(firstName, lastName, email, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $firstName, $lastName, $email, $password_hash);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}*/

	$serverName = "localhost";
	$dbUserName = 'cen4010_fa21_g13';
	$dbPassword = "p51sDaSStq";
	$dbName = "cen4010_fa21_g13";

	$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

?>