<?php
// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form data
    $name = $_POST["name"];
	$mbiemri = $_POST["mbiemri"];
    $email = $_POST["email"];
    $nrtel = $_POST["nrtel"];
	$pass = $_POST["pass"];
	$role = "user";

	include 'db_connect.php';
	
    // sanitize input data
    $name = $conn->real_escape_string($name);
    $mbiemri = $conn->real_escape_string($mbiemri);
    $email = $conn->real_escape_string($email);
	$nrtel = $conn->real_escape_string($nrtel);
	$pass = $conn->real_escape_string($pass);
	$role = $conn->real_escape_string($role);
	
	// Hash the password
    $hashed_password = hash('sha256', $pass);

    // prepare SQL statement to insert user into database
    $stmt = $conn->prepare("INSERT INTO user (name, surname, email, phone, password, role) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss",$name, $mbiemri, $email, $nrtel, $hashed_password, $role);
    $stmt->execute();

    // check if user was successfully registered
    if ($stmt->affected_rows == 1) {
        echo "User registered successfully.";
    } else {
        echo "User registration failed.";
    }

    // close database connection object
    $conn->close();
}
?>
