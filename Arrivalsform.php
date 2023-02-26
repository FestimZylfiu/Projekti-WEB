<?php
	include 'db_connect.php';
	
	$sql = "SELECT id, name, photo, price, createdBy, createdDate FROM products order by createdDate desc 
       limit 3";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
        echo '
		<div class="product" data-name="p-1">
         <img src="../'.$row["photo"].'" alt="">
         <h3>'.$row["name"].'</h3>
         <div class="price">'.$row["price"].'</div>
		</div> 
		
		';
	  }
	} else {
		echo "0 results";
	}
	$conn->close();

?>

		
