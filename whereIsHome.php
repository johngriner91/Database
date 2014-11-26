<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php

function functionFun(){
  $currentlyLoggedIn = $_COOKIE['currentlyLoggedIn'];

  $servername = 'mysql.cs.mtsu.edu';
  $username = 'jls7h';
  $password = 'database2014';
  $database = 'jls7h';
  $query = 'SELECT Admin FROM USERS WHERE Uname = "'.$currentlyLoggedIn.'";';

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
      foreach($row as $cell)
      if($cell){
        echo "Currently an administrator.";
        header("Location: adminHomepage.html");
      }
      else{
        echo "Currently not an administrator.";
        header("Location: homepage.html");
      }
    }
  }
}

if (isset($_COOKIE['lastLoggedIn'])) {
  functionFun();
}
else{

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
    <h1 class="text-center login-title" name="Warning" >Something broke, please log in again.</h1>
    <a href="index.html">Back</a>
  </div>

  <!-- script references -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
