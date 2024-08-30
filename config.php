<?php 
	$conn = mysqli_connect("localhost", "root", "", "MySociety");

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}
?>
