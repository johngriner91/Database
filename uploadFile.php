<?php

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
  $fileName = $_FILES['userfile']['name'];
  $tmpName  = $_FILES['userfile']['tmp_name'];
  $fileSize = $_FILES['userfile']['size'];
  $fileType = $_FILES['userfile']['type'];

  $fp      = fopen($tmpName, 'r');
  $content = fread($fp, filesize($tmpName));
  $content = addslashes($content);
  fclose($fp);
  $servername = 'mysql.cs.mtsu.edu';
  $username = 'jls7h';
  $password = 'database2014';
  $database = 'jls7h';

  if(!get_magic_quotes_gpc())
  {
    $fileName = addslashes($fileName);
  }
  include 'library/config.php';
  include 'library/opendb.php';

  $query = "INSERT INTO upload (name, size, type, content ) ".
  "VALUES (0, 0, '$fileName', '$content')";

  mysql_query($query) or die('Error, query failed');
  include 'library/closedb.php';

  echo "<br>File $fileName uploaded<br>";
}
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
              <form method="post" enctype="multipart/form-data">
                <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                  <tr>
                    <td width="246">
                      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                      <input name="userfile" type="file" id="userfile">
                    </td>
                    <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
                  </tr>
                </table>
              </form>
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
