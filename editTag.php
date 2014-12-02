<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
	require './config.inc.php';
?>
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
									<th>Tag#</th>
									<th>Rev#</th>
									<th>Date</th>
								</tr>
								<tr>
									<td> <form method="post"> <input type="text" style="width:90px" name="tagNumber" id="NO"> </form> </td>
									<td> <form method="post"> <input type="text" style="text-align:right; width:40px" name="Rev#" id="Rev"> </form></td>
									<td> <form method="post"> <input type="date" style="width:150px" name="Date" id="Date"></form></td>
								</tr>
								<tr>
									<th>Sub-Category</th>
									<th>Complexity</th>
									<th>Lead Time</th>
									<th>User</th>
								</tr>
								<tr>         <!--row1-->
									<td>
									<?php
										$options = '<option></option>';
										$subcat="SELECT * FROM SUBCATEGORIES";
										$result = $db->query($subcat);
										while($row = $result->fetch_assoc()) {
										    $options .="<option value=" . '"' . $row['SubCategory'] . '"' . ">" . $row['SubCategory'] . "</option>";
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
										    $options .="<option value=" . '"' . $row['Complexity'] . '"' . ">" . $row['Complexity'] . "</option>";
										}

										$menu="<form id='Complexity' name='Complexity' method='post' action=''>
										    <select name='Complexity' id='Complexity'>
										      " . $options . "
										    </select>
										</form>";

										echo $menu;
									?>
									</td>
									<td> <form method="post"> <input type="text" style="width:75px; text-align:right" name="LeadTime" id="LeadTime"></form></td>
									<td> <form method="post"> <input type="text" style="width:75px; text-align:right" name="User" id="User"></form></td>
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
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="Description"></textarea>
										</div></form></td>
								</tr>

								<tr>  	<!--row2-->
								   <td> Tag Notes: </td>
								   </tr>

							   <tr>		<!--row3-->
								   <td> <div class="form-group">
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="Notes"></textarea>
										</div></form></td>
							   </tr>

							  <tr>  	<!--row2-->
							       <td> Price Note </td>
							   </tr>
							   <tr>		<!--row3-->
								   <td>  <div class="form-group">
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="PriceNotes"></textarea>
										</div>
							</tr>
							 <tr>   <!--row4-->
							       <td> <strong>Product Lines Tag May be Applied To: </strong> </td>
							 </tr>
						</table></div>

						<div class="table-responsive">
						<br>						
						<table>
							<tr>	<!--row0-->
								<th>	</th>
								<th>	</th>
								<th> <center>USA$	</center><br></th>
								<th> <center>Canada$</center><br></th>
								<th> <center>Mexico$</center><br></th>
							</tr>
							<tr>	<!--row1-->
								<td><input type="checkbox" class="checkbox" id="HVL"/> </td>
								<td> &nbsp; HVL &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA" id="HVLUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCA" id="HVLCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMEX" id="HVLMEX"></form></td>
							</tr>
							<tr>	<!--row2-->
								<td><input type="checkbox" class="checkbox" id="HVLCC"/> </td>
								<td> &nbsp; HVL/CC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCUSA" id="HVLCCUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCCA" id="HVLCCCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCMEX" id="HVLCCMEX"></form></td>
							</tr>
							<tr>	<!--row3-->
								<td><input type="checkbox" class="checkbox" id="MetalClad" /> </td>
								<td> &nbsp; Metal Clad &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCUSA" id="MCUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCCA" id="MCCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCMEX" id="MCMEX"></form></td>
							</tr>
							<tr>	<!--row4-->
								<td><input type="checkbox" class="checkbox" id="MVMCC" /> </td>
								<td> &nbsp; MVMCC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCUSA" id="MVMCCUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCCA" id="MVMCCCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCMEX" id="MVMCCMEX"></form></td>
							</tr>
						</table></div>

						<div class="table-responsive">
						<br><br>
						<table>
							<tr>
								<th> Applied FO: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
								<td> <input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp;&nbsp; Quote &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<td> <input type="checkbox" class="checkbox"/> </td>
								<td> &nbsp;&nbsp; Factor order </th>
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
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Material" id="Material"></form></th>
							</tr>
							<tr>	<!--row1-->
								<th>Labor: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Labor" id="Labor"></form></th>
							</tr>
							<tr>	<!--row2-->
								<th>Engineering: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Engineering" id="Engineering"></form></th>
							</tr>
						</table>
						<hr>
						<table class="table table-borderless">
							<tr>	<!--row0-->
								<th nowrap>Install Cost: </th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="Install" id="Install"></form></th>
							</tr>
							<tr>	<!--row1-->
								<th nowrap>Price Expires: &nbsp;</th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="PriceExpires" id="PriceExpires"></form></th>
							</tr>
						</table>
						<br>
						<table>
							<tr>	<!--row0-->
								<td><input type="checkbox" class="checkbox" id="Obsolete"/></td>
								<td><strong> &nbsp;Obsolete </strong></td>
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
		<div class="result"></div>
	</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">

			$(document).ready(populateAndCalc());
			
			function populateAndCalc(){
				var tag = readCookie('tag');
				var rev = readCookie('rev');
				var action = 'display';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
						'tag':tag,
						'rev':rev};
				$.post(ajaxurl,data,function(response){
					$(".result").html(response);
					var jsonData = JSON.parse(response);
					document.getElementById("NO").value = jsonData.tag.NO;
					document.getElementById("Description").value = jsonData.tag.Description;
					//document.getElementById("SubCategory").value = jsonData.tag.SubCategory;
					document.getElementById("Rev").value = jsonData.tag.Rev;
					document.getElementById("Date").value = jsonData.tag.CurrentDate;
					//document.getElementById("Complexity").value = jsonData.tag.Complexity;
					document.getElementById("LeadTime").value = jsonData.tag.LeadTime;
					document.getElementById("Notes").value = jsonData.tag.Notes;
					document.getElementById("PriceNotes").value = jsonData.tag.PriceNotes;
					document.getElementById("Material").value = jsonData.tag.MatCost;
					document.getElementById("Labor").value = jsonData.tag.LabCost;
					document.getElementById("Engineering").value = jsonData.tag.EngCost;
					document.getElementById("Install").value = jsonData.tag.InsCost;
					document.getElementById("User").value = jsonData.tag.TAGMember;
					document.getElementById("PriceExpires").value = jsonData.tag.PriceExpires;
					if(jsonData.tag.HVL == 1)
						document.getElementById("HVL").checked = true;
						document.getElementById("HVLUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("HVLCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("HVLMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					if(jsonData.tag.HVLCC == 1)
						document.getElementById("HVLCC").checked = true;
						document.getElementById("HVLCCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("HVLCCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("HVLCCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					if(jsonData.tag.MetalClad == 1)
						document.getElementById("MetalClad").checked = true;
						document.getElementById("MCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("MCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("MCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					if(jsonData.tag.MVMCC == 1)
						document.getElementById("MVMCC").checked = true;
						document.getElementById("MVMCCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("MVMCCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("MVMCCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					if(jsonData.tag.Obsolete == 1)
						document.getElementById("Obsolete").checked = true;
					eraseCookie('tag');
					eraseCookie('rev');
				});
			}

			function editTag(){
				createCookie('tag',document.getElementById('NO'),0);
				createCookie('rev',document.getElementById('Rev'),0);
				window.location = "editTag.php";
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