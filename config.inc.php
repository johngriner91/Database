<?php

	$host = "mysql.cs.mtsu.edu";
	$dbname = "jls7h";
	$username = "jls7h";
	$password = "database2014";

	//Connect to MSSQL
	$dbhandle = mysql_connect($host, $username, $password);

	if (!$dbhandle){
	    die("Couldn't connect to $host");
	}

	//Select DB
	$selected = mysql_select_db($dbname);

	if(!$selected){
		die("Couldn't open database $dbname");
	}
?>