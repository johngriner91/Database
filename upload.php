<?php
  require("config.inc.php");
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
                    <td>Tag Number <input type=text id="TagNo" name="TagNo"><br></td>
                    <td>Rev Number <input type=text id="RevNo" name="RevNo"><br></td>
                    <td width="246">
                      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                      <input name="userfile" type="file" id="userfile">
                    </td>
                    <td width="80"><input name="upload" onclick="uploadFile()" type="submit" class="box" id="upload" value=" Upload "></td>
                    <td width="80"><input name="review" onclick="getAttachments()" type="button" class="box" id="review" value=" Review "></td>                  </tr>
                </table>
              </form>
              <br><br><br>
              <table align="center" style="width:200px" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <td data-field="Attachments">Attachments</td>
                  </tr>
                </thead>
                <tbody class="result"></tbody>
              </table>
            </div> <!--table-responsive-->
            <br><br><br>
          </div><!--/panel-->
        </div>
        <div class="result9"></div>
      </div> <!--/end mid column-->
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">

    function downloadAttachments(id){
      var action = 'downloadAttachments';
      var ajaxurl = 'ajax.php',
      data = {'action':action, 'id':id};
      $.post(ajaxurl,data,function(response){
        $(".result9").html(response);
      });
    }


    function getAttachments(){
      var action = 'getAttachments';
      var TagNo = document.getElementById("TagNo").value;
      var RevNo = document.getElementById("RevNo").value;
      var ajaxurl = 'ajax.php',
      data = {'action':action, 'TagNo':TagNo, 'RevNo':RevNo};
      $.post(ajaxurl,data,function(response){
        $(".result").html(response);
      });
    }
    </script>
  </body>
</html>


<?php

if(isset($_POST['upload'])){

  $fileName = $_FILES['userfile']['name'];
  $tmpName  = $_FILES['userfile']['tmp_name'];
  $fileSize = $_FILES['userfile']['size'];
  $fileType = $_FILES['userfile']['type'];
  $TagNo = $_POST['TagNo'];
  $RevNo = $_POST['RevNo'];

  $fp      = fopen($tmpName, 'r');
  $content = fread($fp, filesize($tmpName));
  $content = addslashes($content);
  fclose($fp);

  if(!get_magic_quotes_gpc())
  {
    $fileName = addslashes($fileName);
  }

  $query = "INSERT INTO FILETESTING (filecontents, filename, filesize, filetype, TagNo, RevNo ) VALUES ('".$content."', '".$fileName."', '".$fileSize."', '".$fileType."', '".$TagNo."', '".$RevNo."');";

  $result = $db->query($query) or die('Error, query failed');
  if($result){
    echo "<br>File $fileName uploaded<br>";
  }else{
    echo "<br>File $fileName not uploaded.<br>";
  }
}
?>
