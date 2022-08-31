<?php
	$conn = mysqli_connect("localhost", "root", "", "plant_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>