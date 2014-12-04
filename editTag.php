<?php
	require './config.inc.php';
?>
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
		  <a class="navbar-brand" href="whereIsHome.php" target=""><b>Schneider Electric</b></a>
		  <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="glyphicon glyphicon-chevron-down"></span>
		  </a>
		</div>
		<ul class="nav navbar-nav navbar-right navbar-user">
              <li><a href="userLogout.php"><i class="fa fa-power-off"></i><b>Log Out</b></a></li>
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
						<!--<div class="panel-heading" style="background-color:#64F797"></div>
					<div class="panel-body">
					<ul class="nav nav-stacked">
						<li><a href="searchTag.php">Tag Search</a></li>
						<li><a href="insertTag.php">Tag Insert</a></li>
						<li><a href="viewTag.php">Tag View</a></li>
					</ul>

					</div>/panel body-->
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
									<td> <form method="post"> <input type="text" style="width:90px" name="NO" id="NO" readonly> </form> </td>
									<td> <form method="post"> <input type="text" style="text-align:right; width:40px" name="Rev#" id="Rev" readonly> </form></td>
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
										    <select name='SubCategory' id='SubCategory'>
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

										$menu="<form id='Complex' name='Complex' method='post' action=''>
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
								<td><input type="checkbox" class="checkbox" id="MetalClad"/> </td>
								<td> &nbsp; Metal Clad &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCUSA" id="MCUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCCA" id="MCCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCMEX" id="MCMEX"></form></td>
							</tr>
							<tr>	<!--row4-->
								<td><input type="checkbox" class="checkbox" id="MVMCC"/> </td>
								<td> &nbsp; MVMCC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCUSA" id="MVMCCUSA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCCA" id="MVMCCCA"></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCMEX" id="MVMCCMEX"></form></td>
							</tr>
						</table></div>

						<div class="table-responsive">
						<br><br>
						<table name="checks">
							<tr>
								<th> Applied FO: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
								<td> <input type="checkbox" name="ckQ" id="ckQ" class="checkbox"/> </td>
								<td> &nbsp;&nbsp; Quote &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<td> <input type="checkbox" name="ckF" id="ckF" class="checkbox"/> </td>
								<td> &nbsp;&nbsp; Factory order </th>
							</tr>
						</table><br> </div>
						<div class="table-responsive">
							<table data-toggle="table" data-url="" data-cache="false" class="table table-bordered table-striped">
								<thead>
									<tr>
										<td></td>
										<td></td>
										<td data-field="fo#">FO Number Applied To</td>
										<td data-field="notes"><center>Notes to Next Engine</center></td>
									</tr>
									</thead>
									<tbody class="result2"></tbody>
									<tr>
										<td>
									</td>
										<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="tag#" id="tag#"></form></td>
										<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="fo#" id="fo#"></form></td>
										<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="notes" id="notes"></form></td>
									</tr>
							</table>
					  </div> <!--table-responsive-->
					  <table align="right">
								<tr>	<!--row0-->
									<th><button type="button" class="btn btn-default" onclick="newFO()" >Apply new FO</button>&nbsp;&nbsp;&nbsp;</th>
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
								<th><form method="post"> <input type="date" style="width:150px; text-align:right" name="PriceExpires" id="PriceExpires"></form></th>
							</tr>
						</table>
						<br>
						<table id="obsoleteCB">
							<tr>	<!--row0-->
								<td><input type="checkbox" class="checkbox" id="Obsolete"/></td>
								<td>&nbsp;Check To Make TAG Permanently Obsolete</td>
							</tr>
						</table>
					<br>
					<form method="post" enctype="multipart/form-data">
							<table align="center">
								<tr>	<!--row0-->
									<th><button type="button" style="width:150px" class="button" name="save" value="update" id="saveBtn" onclick="save();">Save</button> </th>
								</tr>
							</table> <br>
							<table align="center">
								<tr></tr>
								<tr colspan="2">
								<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
								<input name="userfile" type="file" id="userfile">
							</tr>
								<tr>
									<td width="80"><input name="upload" type="submit" class="box" id="upload" value="Add Attachment"></td>
								</tr>
							</table>
						</form>

					  </div><!--/panel-body-->
						<div>
							<hr><h4><center><i>Attachments</i></center></h4>
							<br>
							<table data-toggle="table" data-url="" data-cache="false" class="table table-bordered table-striped">
								<thead>
									<tr>
										<td data-field="notes">File Name</td>
									</tr>
								</thead>
								<tbody class="result3"></tbody>
							</table>
							<br><hr><br>
						</div>
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

			window.onload = populateAndCalc();

			function getAttachments(){
				var TagNo = document.getElementById("NO").value;
				var RevNo = document.getElementById("Rev").value;
				var action = 'getAttachments';
				var ajaxurl = 'ajax.php',
				data = { 'action':action,
									'TagNo': TagNo,
									'RevNo': RevNo};
				$.post(ajaxurl,data,function(response){
					$(".result3").html(response);
				});
			}

			function getFO(){
				var TagNO = document.getElementById("NO").value;
				var RevNO = document.getElementById("Rev").value;
				var action = 'popFO';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
				'TagNo': TagNO,
				'RevNo': RevNO};
				$.post(ajaxurl,data,function(response){
					$(".result2").html(response);
					getAttachments();
				});
			}

			function newFO(){

				var TagNO = document.getElementById("NO").value;
				var RevNO = document.getElementById("Rev").value;
				var FoNo = document.getElementById("fo#").value;
				var Notes = document.getElementById("notes").value;
				var x = document.getElementById("ckQ").checked;
				if(x){
					var CkQ = 1;
				}
				else{
					var CkQ = 0;
				}
				var y = document.getElementById("ckF").checked;
				if(y){
					var CkF = 1;
				}
				else{
					var CkF = 0;
				};
				var action = 'newFO';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
				'TagNO':TagNO,
				'RevNO':RevNO,
				'FoNo':FoNo,
				'Notes':Notes,
				'CkQ':CkQ,
				'CkF':CkF};
				$.post(ajaxurl,data,function(response){
					var jsonData = JSON.parse(response);
					if(jsonData){
						alert("Added FO successfully.");
					}else{
						alert("Error adding FO.");
					}
				});
			}

			/*
			function upload(){
				var TagNO = document.getElementById("NO").value;
				var RevNO = document.getElementById("Rev").value;

				var action = 'uploadFile';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
										'TagNo':TagNo,
										'RevNo':RevNo,
										'fileName':filename};
				$.post(ajaxurl,data,function(response){
					var jsonData = JSON.parse(response);
					if(jsonData){
						alert("Attached successfully.");
					}else{
						alert("Error attaching file.");
					}
					window.location = "whereIsHome.php";
				});
			}
			*/

			//Populates entry fields and calculates values for current tag info
			function populateAndCalc(){
				var tag = readCookie('tag');
				var rev = readCookie('rev');
				var action = 'display';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
						'tag':tag,
						'rev':rev};
				$.post(ajaxurl,data,function(response){
					//$(".result").html(response);		//debug stuff
					var jsonData = JSON.parse(response);
					document.getElementById("NO").value = jsonData.tag.NO;
					document.getElementById("Description").value = jsonData.tag.Description;
					document.getElementById("Rev").value = jsonData.tag.Rev;
					document.getElementById("Date").value = jsonData.tag.CurrentDate;
					document.getElementById("SubCategory").value = jsonData.tag.SubCategory;
					document.getElementById("Complexity").value = jsonData.tag.Complexity;
					document.getElementById("LeadTime").value = jsonData.tag.LeadTime;
					document.getElementById("Notes").value = jsonData.tag.Notes;
					document.getElementById("PriceNotes").value = jsonData.tag.PriceNotes;
					document.getElementById("Material").value = jsonData.tag.MatCost;
					document.getElementById("Labor").value = jsonData.tag.LabCost;
					document.getElementById("Engineering").value = jsonData.tag.EngCost;
					document.getElementById("Install").value = jsonData.tag.InsCost;
					document.getElementById("User").value = jsonData.tag.TAGMember;
					document.getElementById("PriceExpires").value = jsonData.tag.PriceExpires;
					if(jsonData.tag.HVL == 1){
						document.getElementById("HVL").checked = true;
						document.getElementById("HVLUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("HVLCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("HVLMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[0].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					}
					if(jsonData.tag.HVLCC == 1){
						document.getElementById("HVLCC").checked = true;
						document.getElementById("HVLCCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("HVLCCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("HVLCCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[1].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					}
					if(jsonData.tag.MetalClad == 1){
						document.getElementById("MetalClad").checked = true;
						document.getElementById("MCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("MCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("MCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[2].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					}
					if(jsonData.tag.MVMCC == 1){
						document.getElementById("MVMCC").checked = true;
						document.getElementById("MVMCCUSA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[2].Mult)).toFixed(2);
						document.getElementById("MVMCCCA").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[0].Mult)).toFixed(2);
						document.getElementById("MVMCCMEX").value = (parseFloat(jsonData.tag.InsCost) * parseInt(jsonData.product[3].Mult) * parseFloat(jsonData.country[1].Mult)).toFixed(2);
					}
					if(jsonData.tag.Obsolete == 1)
						document.getElementById("Obsolete").checked = true;
					eraseCookie('tag');
					eraseCookie('rev');
					getFO();
				});
			}

			//Handles button functionality
			function save(){
		        var tag = $('#NO').val();
		        var rev = $('#Rev').val();
		        var date = $('#Date').val();
		        var sub = $('#Subcat option:selected').html();
		        var comp = $('#Complex option:selected').html();
		        var mat = $('#Material').val();
		        var lab = $('#Labor').val();
		        var eng = $('#Engineering').val();
		        var ins = $('#Install').val();
		        var exp = $('#PriceExpires').val();
		        var notes = $('#Notes').val();
		        var price = $('#PriceNotes').val();
		        var time = $('#LeadTime').val();
		        var user = $('#User').val();
		        var hvl = $("#HVL").is(':checked');
		        var cc = $("#HVLCC").is(':checked');
		        var metal = $("#MetalClad").is(':checked');
		        var mvmcc = $("#MVMCC").is(':checked');
		        var obs = $("#Obsolete").is(':checked');
		        var action = 'update';
		        var ajaxurl = 'ajax.php',
		        data = {'action':action,
		        		'NO':tag,
		        		'SubCategory':sub,
		        		'Rev':rev,
		        		'CurrentDate':date,
		        		'Complexity':comp,
		        		'LeadTime':time,
		        		'Notes':notes,
		        		'PriceNotes':price,
		        		'MatCost':mat,
		        		'LabCost':lab,
		        		'EngCost':eng,
		        		'InsCost':ins,
		        		'PriceExpires':exp,
		        		'TAGMember':user,
		        		'HVL':hvl,
		        		'HVLCC':cc,
		        		'MetalClad':metal,
		        		'MVMCC':mvmcc,
		        		'Obsolete':obs};
		        $.post(ajaxurl, data, function (response) {
		        	$(".result").html(response);			//debug stuff
					var jsonData = JSON.parse(response);
					alert(jsonData.success);
					rev = parseInt(rev)+1;
					createCookie("tag",tag,0);		//current tag
					createCookie("rev",rev,0);	//next revision
					window.location="viewTag.php";
		        });
		    }

			//Creates cookie with specified name:value pair and length of existance
			function createCookie(name,value,days){
				if(days){
					var date = new Date();
					date.setTime(date.getTime()+(days*24*60*60*1000));
					var expires = "; expires=" + date.toGMTString();
				}
				else var expires = "";
				document.cookie = name + "=" + value + expires + "; path=/";
			}

			//Returns value of specified cookie key
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

			//Erases cookie of specified key
			function eraseCookie(name){
				createCookie(name,"",-1);
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
