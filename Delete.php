<?php
    // Connect to the database
	include 'db_connect.php';
    if(!$conn){
        die('error in db' . mysqli_error($conn));
    }

    $id = $_GET['id'];

    $qry = "delete from contact where id = $id";
    if(mysqli_query($conn, $qry)){
        header('location: userlist.php');
    }else{
        echo mysqli_error($conn);
    }

?>
