<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
    function checkPassword(){
        $testPassword = $_POST['enteredPassword'];
        $db_host = 'mysql.cs.mtsu.edu';
        $db_user = 'jmg6m';
        $db_pwd = 'From1248';

        $database = 'jmg6m';

        if (!mysql_connect($db_host, $db_user, $db_pwd))
            die("Can't connect to database");

        if (!mysql_select_db($database))
            die("Can't select database");

        // sending query
        $result = mysql_query("SELECT Password FROM PEOPLE WHERE Username = $testPassword");
        if (!$result) {
            die("Query to show fields from table failed");
        }
        
        echo "HERE IS THE RESULT!!! : ".$result."!!!"

    }
    checkPassword();
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Project Sign in</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Custom CSS -->
		<link href="css/landing-page.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
		
	</head>
	<body>
	
	<nav class="navbar navbar-static">
	   <div class="container">
		<div class="navbar-header">
		  <a class="navbar-brand" target="ext"><b>Schneider Electric</b></a>
		  <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="glyphicon glyphicon-chevron-down"></span>
		  </a>
		</div>
		</div>
	</nav><!-- /.navbar -->

	<div class="container">
		
						<a href="index.html">Back</a>
	</div> 

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>