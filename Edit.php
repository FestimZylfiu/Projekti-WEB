<?php
    // Connect to the database
	include 'db_connect.php'; 
    if(!$conn){
        die('error in db' . mysqli_error($conn));
    }else{
    $id = $_GET['id'];
    $qry = "select * from contact where id = $id";
    $run = $conn -> query($qry);
    if($run -> num_rows > 0){
        while($row = $run -> fetch_assoc()){
               $name = $row['name'];
               $email = $row['email'];
               $phone = $row['phone'];
               $subject = $row['subject'];
               $message = $row['message'];
             }
        }   
    }

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <title>Edit Contact</title>
 </head>
 <body>
 
 <form method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <br><br>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <br><br>
        <label>Phone</label>
        <input type="number" name="phone" value="<?php echo $phone; ?>">
        <br><br>
        <label>Subject</label>
        <input type="text" name="subject" value="<?php echo $subject; ?>">
        <br><br>
        <label>message</label>
        <input type="text" name="message" value="<?php echo $message; ?>">
        <br><br>
        <input type ="submit" name="update" value="Update">
    </form>

    
 </body>
 </html>


 <?php

    if(isset ($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


        $qry = "Update contact set name='$name',
         email='$email', phone='$phone', subject='$subject', message='$message' 
         where id = $id";
        if(mysqli_query($conn, $qry)){
            header('location: userlist.php');
        }else{
            echo mysqli_error($conn);
        }        
    }



 ?>
