<?php

	//Konektimi me databaze permes MySQLi Object-Oriented
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "plaza_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Kontrollimi i konektimit
	if ($conn->connect_error) {
	  die("Connection failed...: " . $conn->connect_error);
	}
?>
