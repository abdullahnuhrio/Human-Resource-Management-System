<?php
	$conn = new mysqli('localhost', 'root', '', 'hrms');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>