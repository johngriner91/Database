<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
    //FOR THE NEW DATABASE, HOWEVER FOR TESTING I WAS USING MY OWN DATABASE
    //username: jls7h
    //password: database2014
    //database: jls7h

    function functionFun(){
        $testName = $_POST['enteredName'];
        $lastLoggedIn = $_COOKIE['lastLoggedIn'];

        echo "testName is ".$testName.". ";
        echo "lastLoggedIn is ".$lastLoggedIn.". ";

        if($testName == $lastLoggedIn){
          $servername = 'mysql.cs.mtsu.edu';
          $username = 'jls7h';
          $password = 'database2014';
          $database = 'jls7h';
          $query = 'SELECT Admin FROM USERS WHERE Uname = "'.$testName.'";';

          if (!mysql_connect($servername, $username, $password))
            die("Can't connect to database");

          if (!mysql_select_db($database))
            die("Can't select database");

          // sending query
          $result = mysql_query($query);
          if (!$result) {
            die("Query to show fields from table failed");
          }
          else{
            $fields_num = mysql_num_fields($result);
            // printing table rows
            while($row = mysql_fetch_row($result)){
              foreach($row as $cell){
                $loginEntryIP = $_SERVER['REMOTE_ADDR'];
                $time = date('h:i:s a', time());
                $date = date('Y-m-d', time());
                $name = gethostname();
                $query2 = 'INSERT INTO SESSIONS (Time, Date, Machine, IP,Uname)
                VALUES ("'.$time.'", "'.$date.'", "'.$name.'", "'.$loginEntryIP.'", "'.$testName.'"
                );';
                echo "Query 2 is ".$query2;
                $result2 = mysql_query($query2);
                if (!$result2) {
                  die("Query to show fields from table failed");
                }
                if($cell){
                  header("Location: adminHomepage.html");
                }
                else{
                  $query3 = 'SELECT OE FROM USERS WHERE Uname = "'.$testName.'";';
                  $result3 = mysql_query($query3);
                  while($row3 = mysql_fetch_row($result3)){
                    foreach($row3 as $cell3){
                      if($cell3){
                        header("Location: Homepage.html");

                      }
                      else{
                        $query4 = 'SELECT TAGMember FROM USERS WHERE Uname = "'.$testName.'";';
                        $result4 = mysql_query($query4);
                        while($row4 = mysql_fetch_row($result4)){
                          foreach($row4 as $cell4){
                            if($cell4){
                              header("Location: Homepage.html");
                            }
                            else{
                              header("Location: sadHomepage.html");
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
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
