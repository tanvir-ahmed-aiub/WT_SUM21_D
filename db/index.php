<?php
	include 'header.php';
	include 'db_config.php';
	
	
		$query = "insert into users values (NULL,'farooq hauqe','farooq12','3456')";
		//echo execute($query);
		
		/*if(mysqli_query($conn,$query)){
			echo "row inserted";
		}
		else{
			 if(mysqli_errno($conn) == "1136"){
				 echo "There may be problem with db insertion: column mismatch. Provide this error to your administrator";
			 }
		}*/
		
		$query = "select * from users";
		$result = get($query);
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		echo "<table border='1'>";
			echo "<tr>
					<th>Id</th><th>Name</th><th>Username</th>
				  </tr>";
		foreach($result as $row){
			echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["username"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	
	include 'footer.php';
?>