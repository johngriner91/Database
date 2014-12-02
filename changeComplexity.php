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
      <a class="navbar-brand" href="whereIsHome.php" target=""><b>Schneider Electric</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>
    <ul class="nav navbar-nav navbar-right navbar-user">
              <li><a href="#"><i class="fa fa-power-off"></i><b> Log Out</b></a></li>
        </ul>
    </div>
  </nav><!-- /.navbar -->

  <h1><center>Change Complexity</center></a></h1><br>

  <!-- Begin Body -->
  <div class="container">
    <div class="no-gutter row">

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
                    <td data-field="complexity">Complexity</td>
                  </tr>
                </thead>
                <tbody class="result"></tbody>
              </table>
            <br>
            <table class="table table-borderless">
              <tr>	<!--row0-->
                <th> Insert	<br></th>
                <td><input type="text" style="width:100px; text-align:center" id="ICV" name="ICV">Insert Complexity</td>
                <th> Delete	<br></th>
                <td><input type="text" style="width:100px; text-align:center" id="DCV" name="DCV">Delete Complexity</td>
              </tr>
            </table><!--/div-->
            <table align="center">
                <tr>	<!--row0-->
                  <button type="button" style="float:right;" class="button" name="save" onclick="updateComplexities()" value="Save">Save</button>
                </tr>
              </table>
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


    function updateComplexities(){
      var ICE = document.getElementById("ICV");
      if(ICE != null){
        var IC = ICE.value;
      }
      var DCE = document.getElementById("DCV");
      if(DCE != null){
        var DC = DCE.value;
      }
      var action = 'updateComplexities';
      var ajaxurl = 'ajax.php',
      data = {'action':action,
                  'IC':IC,
                  'DC':DC};
      $.post(ajaxurl,data,function(response){
        var jsonData = JSON.parse(response);
        if(jsonData){
          alert("Complexities updated successfully.");
        }else{
          alert("Error updating complexities.");
        }
        window.location = "adminHomepage.html";
      });
    }

    function getComplexities(){
      var action = 'getComplexities';
      var ajaxurl = 'ajax.php',
      data = {'action':action};
      $.post(ajaxurl,data,function(response){
        $(".result").html(response);
      });
    }
  </script>
</body>
</html>
