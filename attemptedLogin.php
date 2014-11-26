<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
    function functionFun(){
        $testName = $_POST['enteredName'];
        $lastLoggedIn = $_COOKIE['lastLoggedIn'];
        
        echo "testName is ".$testName.". ";
        echo "lastLoggedIn is".$lastLoggedIn.". ";
        
        if($testName == $lastLoggedIn){
            header("Location: homepage.html");
        }
        else{
            setCookie('tryLogin', $testName, time() + (86400 * 1), "/");        
            header("Location: password.html");
        }
    }

    function initializeFunctionFun(){
        $testName = $_POST['enteredName'];
        setCookie('tryLogin', $testName, time() + (86400 * 1), "/");
        $loggedInName = $testName;
        
        header("Location: password.html");
    }

    if (isset($_COOKIE['lastLoggedIn'])) {
        functionFun();
    }
    else{
        echo "Before anything, The last logged in Cookie is not set. ";
        initializeFunctionFun();
    }
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