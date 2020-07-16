<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost:127.0.0.1','root','','contact_list');
	if($conn->connect_error){
		die('Connection Failed : ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into email(email)
		values(?)");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		echo "registration succesful...";
		$stmt->close();
		$conn->close();
	}
?>