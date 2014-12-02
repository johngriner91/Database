<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">

<?php
	require './config.inc.php';
?>

<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Project Tag Search</title>
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
              <li><a href="userLogout.php"><i class="fa fa-power-off"></i><b> Log Out</b></a></li>
        </ul>


		</div>
	</nav><!-- /.navbar -->
	
	<h1><center>Tag Search</center></a></h1><br>
	
	<!-- Begin Body -->
	<div class="container">
		<div class="no-gutter row">
			<!-- left side column -->
			<div class="col-md-2">
				<div class="panel panel-default" id="sidebar">
				<div class="panel-heading" style="background-color:#64F797"></div> 
				<div class="panel-body">
				<ul class="nav nav-stacked">
					<li><a href="searchTag.php">Tag Search</a></li>
					<li><a href="insertTag.php">Tag Insert</a></li>
					<li><a href="viewTag.php">Tag View</a></li>
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
				  	<table>
				  		<tbody>
							<tr>         <!--row0-->
								<th>Tag#</th>
								<th>Rev#</th>
								<th>Date</th>
								<th>Sub-Category</th>
								<th>Complexity</th>
								<th>Lead Time</th>
								<th>User</th>
							</tr>
								 
							<tr>         <!--row1-->
								<td> <form method="post"> <input type="text" style="width:50px" id="TagNumber" name="TagNumber"> </form> </td>
								<td> <form method="post"> <input type="text" style="text-align:right; width:40px" id="Rev" name="Rev"> </form></td>
								<td> <form method="post"> <input type="date" style="width:130px;" id="Date" name="Date"></form></td>
								<td>
								<?php
									$options = '<option></option>';
									$subcat="SELECT * FROM SUBCATEGORIES";
									$result = $db->query($subcat);
									while($row = $result->fetch_assoc()) {
									    $options .="<option>" . $row['SubCategory'] . "</option>";
									}

									$menu="<form id='Subcat' name='Subcat' method='post' action=''>
									    <select name='Sub' id='Sub'>
									      " . $options . "
									    </select>
									</form>";

									echo $menu;
								?>
								</td>
								<td> 
								<?php
									$options = '<option></option>';
									$comp="SELECT * FROM COMPLEXITIES";
									$result = $db->query($comp);
									while($row = $result->fetch_assoc()) {
									    $options .="<option>" . $row['Complexity'] . "</option>";
									}

									$menu="<form id='Complexity' name='Complexity' method='post' action=''>
									    <select name='Complexity' id='Complexity'>
									      " . $options . "
									    </select>
									</form>";

									echo $menu;
								?>
								</td>
								<td> <form method="post"> <input type="text" style="width:40px; text-align:right" id="LeadTime" name="LeadTime"></form></td>
								<td> <form method="post"> <input type="text" style="width:50px" name="User" id="User"> </form></td>
							</tr>
						</tbody>
					</table> <br>
					</div>
					
					<div class="table-responsive">
					<table>
							<tr>		<!--row0-->
							    <td><strong> Tag Description: </strong></td>
							</tr>
							 
							<tr>		<!--row1-->
								<td> <div class="form-group">
										<textarea class="form-control" style="width:560px; height:100px" rows="5" id="tagDescription"></textarea>
									</div></form></td>
							</tr> 

							<tr>  	<!--row2-->
							   <td><strong> Tag Note: </strong></td>
							   </tr>
 
						   <tr>		<!--row3-->
							   <td> <div class="form-group">
										<textarea class="form-control" style="width:560px; height:100px" rows="5" id="tagNotes"></textarea>
									</div></form></td>
						   </tr> 
						 
						  <tr>  	<!--row2-->
						       <td><strong> Price Note: </strong></td>
						   </tr>						 
						   <tr>		<!--row3-->
							   <td>  <div class="form-group">
										<textarea class="form-control" style="width:560px; height:100px" rows="5" id="comment"></textarea>
									</div>
						</tr> 							 
					</table></div>
					<input type="submit" class="button" name="search" value="Search"/>
			   </div> 
			   </div><!--/panel-->
			</div><!--/end mid column-->
			
			<!-- right content column-->
			<div class="col-md-2">
				<div class="panel" id ="rightcol">
				<div class="panel-heading" style="background-color:#057A2E"></div>   
				<div class="panel-body">
					<div class="table-responsive">
					<h4><strong>Product Types:</strong></h4>
					<table>
						<tr><td><input type="checkbox" class="checkbox" id="hvl"/></td><td> &nbsp;HVL </td><tr>
						<tr><td><input type="checkbox" class="checkbox" id="cc"/></td><td> &nbsp;HVL/CC </td></tr>
						<tr><td><input type="checkbox" class="checkbox" id="metal"/></td><td> &nbsp;Metal Clad </td></tr>
						<tr><td><input type="checkbox" class="checkbox" id="mvmcc"/></td><td> &nbsp;MVMCC </td></tr>
					</table>
					<hr>
					<table>
						<tr><td><input type="checkbox" class="checkbox" id="obsolete"/></td><td><strong> &nbsp;Obsolete </strong></td></tr>
					</table>
					</div>
				</div><!--/panel-body-->
				</div><!--/panel-->
			</div> <!--/end right column-->
		</div>
		<!--results table-->
		<div id="result" name="result" class="result" style="width:100%;"><a href="result"></a></div>

	</div>

	<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


	<!-- script section -->
	<script type="text/javascript">

		//Handles search button functionality
		$(document).ready(function(){
	    	$('.button').click(function(){
		        var tag = $('#TagNumber').val();
		        var rev = $('#Rev').val();
		        var date = $('#Date').val();
		        var sub = $('#Subcat option:selected').html();
		        var comp = $('#Complexity option:selected').html();
		        var time = $('#LeadTime').val();
		        var user = $('#User').val();
		        var hvl = $("#hvl").is(':checked');
		        var cc = $("#cc").is(':checked');
		        var metal = $("#metal").is(':checked');
		        var mvmcc = $("#mvmcc").is(':checked');
		        var obs = $("#obsolete").is(':checked');
		        var action = 'search';
		        var ajaxurl = 'ajax.php',
		        data = {'action':action,
		        		'NO':tag, 
		        		'Rev':rev, 
		        		'CurrentDate':date, 
		        		'SubCategory':sub, 
		        		'Complexity':comp, 
		        		'LeadTime':time, 
		        		'TAGMemmber':user,
		        		'HVL':hvl,
		        		'HVLCC':cc,
		        		'MetalClad':metal,
		        		'MVMCC':mvmcc,
		        		'Obsolete':obs};
		        $.post(ajaxurl, data, function (response) {
		            $( ".result" ).html( response );
					document.getElementById('result').scrollIntoView();
		        });
		    });

		});

		function tagCookie(tag,rev){
			createCookie('tag',tag,1);
			createCookie('rev',rev,1);
		}

		function createCookie(name,value,days){
			if(days){
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires=" + date.toGMTString();
			}
			else var expires = "";
			document.cookie = name + "=" + value + expires + "; path=/";
		}

		function readCookie(name){
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0; i<ca.length; i++){
				var c = ca[i];
				while (c.charAt(0)==' '){
					c = c.substring(1, c.length);
				}
				if(c.indexOf(nameEQ) == 0){
					return c.substring(nameEQ.length, c.length);
				}
			}
			return null;
		}

		function eraseCookie(name){
			createCookie(name,"",-1);
		}

	</script>
	</body>
</html>