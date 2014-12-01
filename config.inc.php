<?php
	
	$server = "mysql.cs.mtsu.edu";
	$dbname = "jls7h";
	$username = "jls7h";
	$password = "database2014";

	$db = new mysqli($server, $username, $password, $dbname);
	
	if($db->connect_error){
		die("CONNECTION FAILED: " . $db->connect_error);
	}
?>