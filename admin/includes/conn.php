<?php
	// $conn = new mysqli('localhost', 'root', '', 'appattendance5');
	$conn = new mysqli('localhost', 'root', '', 'hrm');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>