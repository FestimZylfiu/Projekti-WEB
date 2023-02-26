<?php
session_start();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Connect to the database
    include 'db_connect.php';

    // Get the user's credentials
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	
	// Hash the password
    $hashed_password = hash('sha256', $password);

    // Check if the user exists in the database
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$hashed_password'";
    $result = mysqli_query($conn, $sql);
	
    if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$user_role = $row['role'];
        // User found, set session variables and redirect to homepage
        $_SESSION['email'] = $email;
		$_SESSION['role'] = $user_role;
        header('Location: ../index.php');
    } else {
        // User not found, display error message
        echo "Invalid email or password";
    }
}
?>
