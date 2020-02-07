<?php
	if ($_SERVER['SERVER_NAME'] == "localhost") {
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "teelos";
	} else {
		$servername = "localhost";
		$username = "teelos";
		$password = "Teelos123!";
		$database = "teelos";
	}

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>