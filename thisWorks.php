<?php

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Project Login View Page</title>
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
        <li><a href="#"><i class="fa fa-power-off"></i><b> Log Out</b></a></li>
      </ul>
    </div>
  </nav><!-- /.navbar -->

  <h1><center>Login View Page</center></a></h1><br>

  <!-- Begin Body -->
  <div class="container">
    <div class="no-gutter row">
      <!-- left side column -->
      <div class="col-md-2">
        <div class="panel panel-default" id="sidebar">
          <div class="panel-heading" style="background-color:#64F797"></div>
          <div class="panel-body">
            <ul class="nav nav-stacked">
              <li><a href="newAccount.html">Add User </a></li>
              <li><a href="deleteUser.html">Edit/Delete User</a></li>
            </ul>

          </div><!--/panel body-->
        </div><!--/panel-->
      </div><!--/end left column-->

      <!--mid column-->
      <div class="col-md-8">
        <div class="panel" id="midCol">
          <div class="panel-heading" style="background-color:#3DC66D"></div>
          <div class="panel-body">
            <div class="table-responsive">
              <table data-toggle="table" data-url="" data-cache="false" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td data-field="time">ID</td>
                    <td data-field="date">Link to File</td>
                    <td data-field="link">Link</td>
                  </tr>
                </thead>
                <?php
                $servername = 'mysql.cs.mtsu.edu';
                $username = 'jls7h';
                $password = 'database2014';
                $database = 'jls7h';

                $query = 'SELECT id, filename FROM FILETESTING';
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
                    $time     = $row[0];
                    $date     = $row[1];
                    echo "<tr><td>".$time."</td><td>".$date."</td><td>";
                    ?><a href="downloadFile.php?$date=$_GET['id']">download file</a>
                    <?php
                    echo "</td></tr>";
                  }
                }
                ?>
              </table>
            </div> <!--table-responsive-->
          </div><!--/panel-->
        </div>
      </div> <!--/end mid column-->
    </div>
  </div>

  <!-- script references -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
