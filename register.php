<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$mi = $_POST['mi'];
		$cno = $_POST['cno'];
        $address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		mysqli_query($conn, "INSERT INTO `registration` VALUES('', '$lastname', '$firstname', '$mi', '$cno',  '$address', '$username', '$password')") or die(mysqli_error());
		echo "<h3 class='text-success'>User account registered!</h3>";
	}
?>