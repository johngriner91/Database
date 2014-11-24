<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
    function checkPassword(){
        $testPassword = $_POST['enteredPassword'];
        $testUsername = $_POST['enteredName'];
        $servername = 'mysql.cs.mtsu.edu';
        $username = 'jmg6m';
        $password = 'From1248';

        $database = 'jmg6m';

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $con=mysqli_connect($servername,$username,$password,$database);
        
        $result = mysqli_query($con,"SELECT `Password` FROM `PEOPLE` WHERE `Username` = '.$testUsername.'");

        $row = mysqli_fetch_array($result);
        echo "Returned ".$row." from query.";
        if($row == $testPassword){
            echo "Returned ".$row." from query.";
            $result = mysqli_query($con,"SELECT `Type` FROM `PEOPLE` WHERE `Username` = '.$testUsername.'");
            if($result = "Admin")
                header("Location: admin.html");
            else
                header("Location: homepage.html");
        }
        else{
                header("Location: password.html");
        }
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
		  <a class="navbar-brand" target="ext" href="index.html"><b>Schneider Electric</b></a>
		  <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="glyphicon glyphicon-chevron-down"></span>
		  </a>
		</div>
		</div>
	</nav><!-- /.navbar -->

	<div class="container">
						<h1 class="text-center login-title" name="Warning" >Guess what... only fools forget passwords.</h1>
						<a href="index.html">Back</a>
	</div> 

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>