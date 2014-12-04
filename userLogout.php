<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
  if(isset($_COOKIE['currentlyLoggedIn'])) {
    unset($_COOKIE['currentlyLoggedIn']);
    setcookie('tryLogin', '', time() - 3600); // empty value and old timestamp
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
      <a class="navbar-brand" href="index.html" target=""><b>Schneider Electric</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
    <ul class="nav navbar-nav navbar-right navbar-user">
      <li><a href="index.html"><i class="fa fa-power-off"></i><b>Log Back In</b></a></li>
    </ul>
    </div>
  </nav><!-- /.navbar -->

  <div class="container">
    <h1 class="text-center login-title" name="Warning" >You have logged out.  :(  </h1>
  </div>


  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
