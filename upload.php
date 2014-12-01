<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?
# connect to mysql database

//=============Configuring Server and Database=======
$host = 'mysql.cs.mtsu.edu';
$user = 'jls7h';
$pass = 'database2014';
$dbname = 'jls7h';

$link = mysql_connect($hostname, $user, $pass);
mysql_select_db($dbname, $link);
?>
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
  <body>
    <div class="container">
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
            <br><br><br>
          </div><!--/panel-->
        </div>
      </div> <!--/end mid column-->
    </div>

    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
  <?php
  if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
  {
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileType = $_FILES['userfile']['type'];
    $fileSize = $_FILES['userfile']['size'];
    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);
    if(!get_magic_quotes_gpc())
    {
      $fileName = addslashes($fileName);
    }
    $query = "INSERT INTO FILETESTING (filename, filetype, filesize, filecontents) ".
    "VALUES ('$fileName', '$fileType', '$fileSize', '$content')";
    mysql_query($query) or die('Error, query failed');
    echo "<br>File $fileName uploaded<br>";
  }
  ?>
  
