<?php
// check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	
	// get form data
    $yourName = $_POST["yourName"];
	$yourEmail = $_POST["yourEmail"];
    $yourPhone = $_POST["yourPhone"];
    $subject = $_POST["subject"];
	$message = $_POST["message"];
	
	include 'db_connect.php';
	
	// sanitize input data
    $yourName = $conn->real_escape_string($yourName);
    $yourEmail = $conn->real_escape_string($yourEmail);
    $yourPhone = $conn->real_escape_string($yourPhone);
	$subject = $conn->real_escape_string($subject);
	$message = $conn->real_escape_string($message);


    // prepare SQL statement to insert user into database
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$yourName, $yourEmail, $yourPhone, $subject, $message);
    $stmt->execute();

    // check if user was successfully registered
    if ($stmt->affected_rows == 1) {
        echo "Thank you! We will contact you soon";
    } else {
        echo "There was an error ";
    }

    // close database connection object
    $conn->close();
}
?>
