<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$email = $_POST['email'];
	// $localhost = '3306';
	// $username = 'o9w2w6lymas6igde';
	// $password = 'dwvordeam413ho4p';
	// $database = 'aiu6dk5d4qhsumdv';

	// Database connection
	$conn = new mysqli('localhost:127.0.0.1', 'o9w2w6lymas6igde', 'dwvordeam413ho4p', 'aiu6dk5d4qhsumdv');
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