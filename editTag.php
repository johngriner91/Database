<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Project Tag Edit</title>
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
		  <a class="navbar-brand" href="index.html" target="ext"><b>Schneider Electric</b></a>
		  <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="glyphicon glyphicon-chevron-down"></span>
		  </a>
		</div>
		</div>
	</nav><!-- /.navbar -->
	
	<h1><center>Tag Edit</center></a></h1><br>
	
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
				<div class="col-md-6">
				  <div class="panel" id="midCol">
					<div class="panel-heading" style="background-color:#3DC66D"></div> 
					<div class="panel-body">
					  <div class="table-responsive">
					  <table>
								<tr>         <!--row0-->
									<td>Tag Number</td>
									<td>Rev#</td>
									<td>Date</td>
									<td>Sub-Category</td>
									<td>Complexity</td>
									<td>Lead Time</td>
								</tr>
									 
								<tr>         <!--row1-->
									<td> <form method="post"> <input type="text" style="width:30px" name="Tag"> <input type="text" style="width:70px" name="Number"> </form> </td>
									<td> <form method="post"> <input type="text" style="text-align:right; width:40px" name="Rev#"> </form></td>
									<td> <form method="post"> <input type="text" style="width:80px" name="Date"></form></td>
									<td> <form method="post"> <input type="text" style="width:175px" name="Sub-Category"></form></td>
									<td> <form method="post"> <input type="text" style="width:80px" name="Complexity"></form></td>
									<td> <form method="post"> <input type="text" style="width:75px; text-align:right" name="LeadTime"></form></td>
								</tr>
						</table> <br>
						</div>
						
						<div class="table-responsive">
						<table>
								<tr>		<!--row0-->
								    <td> Tag Description: </td>
								</tr>
								 
								<tr>		<!--row1-->
									<td> <div class="form-group">
											<textarea class="form-control" style="width:560px; height:100px" rows="5" id="tagDescription"></textarea>
										</div></form></td>
								</tr> 
   
								<tr>  	<!--row2-->
								   <td> Tag Notes: </td>
								   </tr>
	 
							   <tr>		<!--row3-->
								   <td> <div class="form-group">
											<textarea class="form-control" style="width:560px; height:100px" rows="5" id="tagNotes"></textarea>
										</div></form></td>
							   </tr> 
							 
							  <tr>  	<!--row2-->
							       <td> Price Note </td>
							   </tr>						 
							   <tr>		<!--row3-->
								   <td>  <div class="form-group">
											<textarea class="form-control" style="width:560px; height:100px" rows="5" id="comment"></textarea>
										</div>
							</tr> 							 
							 <tr>   <!--row4-->
							       <td> <strong>Product Lines Tag May be Applied To: </strong> </td>
							 </tr>
						</table></div>
						
						<div class="table-responsive">
						<br><br><br><br><br>
						<table>
							<tr>	<!--row0-->
								<th>	</th>
								<th>	</th>
								<th> <center>USA$	</center><br></th>
								<th> <center>Canada$</center><br></th>
								<th> <center>Mexico$</center><br></th>
							</tr>
							<tr>	<!--row1-->
								<td><input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp; HVL &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCanda"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMexico"></form></td>
							</tr>	
							<tr>	<!--row2-->
								<td><input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp; HVL/CC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCanda"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMexico"></form></td>
							</tr>
							<tr>	<!--row3-->
								<td><input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp; Metal Clad &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCanda"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMexico"></form></td>
							</tr>
							<tr>	<!--row4-->
								<td><input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp; MVMCC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCanda"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMexico"></form></td>
							</tr>
						</table></div>
						
						<div class="table-responsive">
						<br><br>
						<table>
							<tr>
								<td> Applied FO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
								<td> <input type="checkbox" class="checkbox"/> </td>
								<th> &nbsp;&nbsp; Quote &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<td> <input type="checkbox" class="checkbox"/> </td>
								<th> &nbsp;&nbsp; Factor order </th>
							</tr>
						</table><br> </div>
						<div class="table-responsive">
							<table data-toggle="table" data-url="" data-cache="false" class="table table-bordered table-striped">
								<thead>
									<tr>
										<td></td>
										<td data-field="tag#">Tag Number</td>
										<td data-field="fo#">FO Number Applied To</td>
										<td data-field="notes"><center>Notes to Next Engine</center></td>
									</tr>
								</thead>
							</table>
					  </div> <!--table-responsive-->
					  <table align="right">
								<tr>	<!--row0-->
									<th><button type="button" class="btn btn-default">Apply new FO</button>&nbsp;&nbsp;&nbsp;</th>								
									<th><button type="button" class="btn btn-default"><img style="width:20px; length:20px"src="images.jpg" style="width:400px; height=300px" alt=""></img></button></th>
								</tr>
					 </table>
				   </div> 
				   </div><!--/panel-->
				</div><!--/end mid column-->
				
				<!-- right content column-->
				<div class="col-md-4">
					<div class="panel" id ="rightcol">
					<div class="panel-heading" style="background-color:#057A2E"></div>   
					<div class="panel-body">
					  
						<h4><center><i>Pricing Information </i></center></h4>
					
						<table class="table table-borderless">
							<tr>	<!--row0-->
								<th>Material: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Material"></form></th>
							</tr>			
							<tr>	<!--row1-->
								<th>Labor: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Labor"></form></th>
							</tr>
							<tr>	<!--row2-->
								<th>Engineering: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Engineering"></form></th>
							</tr>
						</table>
						<hr> 
						<table class="table table-borderless">
							<tr>	<!--row0-->
								<th>Install Cost </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="InstalCost"></form></th>
							</tr>	
						</table>	
						<br><br>
						<table align="center">
							<tr>	<!--row0-->
								<th>Tag Member: &nbsp;</th>
								<th><form method="post"> <input type="text" style="width:150px" name="TagMember"></form><br></th>
							</tr>	
							<tr>	<!--row1-->
								<th>Price Expires &nbsp;</th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="PriceExpires"></form></th>
							</tr>
						</table>
						<br>
						<table class="table table-borderless">
							<tr>	<!--row0-->
								<td><input type="checkbox" class="checkbox"/></td>
								<td>Click Box to Make TAG Permanently Obsolete </td>
							</tr>	
						</table>						
					<br>				
							<table align="center">
								<tr>	<!--row0-->
									<th><button type="button" style="width:150px" class="btn btn-default">Save</button> </th>
								</tr>
							</table> <br>
							<table align="center">
								<tr>
									<th><button type="button" style="width:150px" class="btn btn-default">Add Attachments</button> </th>
								</tr>
							</table>

					  </div><!--/panel-body-->
					</div><!--/panel-->
					<!--/end right column-->
			</div> 
		</div>
	</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">
			var tag = readCookie('tag');
			var rev = readCookie('rev');
			alert(tag + " : " + rev);
				
			$(document).ready(function(){
				var action = 'display',
				var ajaxurl = 'ajax.php',
				data = {'action':action,
						'tag':tag,
						'rev':rev};
				$.post(ajaxurl,data,function(response){
					$(".result").html(response);
					alert("result!");
					eraseCookie('tag');
					eraseCookie('rev');
				});
			});
			

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