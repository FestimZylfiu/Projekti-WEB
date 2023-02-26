<?php
	include 'db_connect.php';
	
	$sql = "SELECT id, title, content, photo, createdBy, createdDate FROM aboutus";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		$string = $row["title"];
		echo '<section class="contact">
        <h1 class="heading">';
		
		$chars = str_split($string);

		foreach ($chars as $char) {
			echo '<span> '.  $char . '</span>';
		}
        echo '</h1> 
		<div class="row">
            <div class="kontentt"> 
				<img src="../'.$row["photo"].'" alt="">'.
				'<p id="kozmetikaa">
					'.$row["content"].'
					<br><br>Created By: '. $row["createdBy"].'<br>Created Date:  '. $row["createdDate"]. '</p>
				  </div>
			</div>
			</section>';
	  }
	} else {
		echo "0 results";
	}
	$conn->close();

?> 
