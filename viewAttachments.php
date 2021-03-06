<?php
  require './config.inc.php';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Project Complexity</title>
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
      <a class="navbar-brand" href="whereIsHome.php" target=""><b>Schneider Electric: Administrator</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
    <ul class="nav navbar-nav navbar-right navbar-user">
              <li><a href="userlogout.php"><i class="fa fa-power-off"></i><b> Log Out</b></a></li>
        </ul>
    </div>
  </nav><!-- /.navbar -->

  <h1><center>Attachments for <?phpecho "$_POST['TagNo']";?></center></a></h1><br>

  <!-- Begin Body -->
  <div class="container">
    <div class="no-gutter row">
        <!-- left side column -->
        <div class="col-md-2">
          <div class="panel panel-default" id="sidebar">
          <!--<div class="panel-heading" style="background-color:#64F797"></div>
          <div class="panel-body">
          <ul class="nav nav-stacked">
            <li><a href="newAccount.html">Add User </a></li>
            <li><a href="deleteUser.html">Edit/Delete User</a></li>
          </ul>

          </div>-->
          </div>
        </div><!--/end left column-->

        <!--mid column-->
        <div class="col-md-8">
          <div class="panel" id="midCol">
          <div class="panel-heading" style="background-color:#3DC66D"></div>
          <div class="panel-body">


            <!--div class="table-responsive"-->
            <br><br>
            <table align="center" style="width:200px" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td data-field="complexity">Attachments</td>
                  </tr>
                </thead>
                <tbody class="result"></tbody>
              </table>
            <br>
           </div><!--/panel-->
        </div>
      </div> <!--/end mid column-->
    </div>
  </div>

  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">

    window.onload=getComplexities;




    function getAttachments(){
      var action = 'getAttachments';
      var TagNumber = $_POST['TagNo'];
      var RevNumber = $_POST['RevNo'];
      var ajaxurl = 'ajax.php',
      data = {'action':action,
              'TagNumber':TagNumber,
              'RevNumber':RevNumber};
      $.post(ajaxurl,data,function(response){
        $(".result").html(response);
      });
    }
  </script>
</body>
</html>
