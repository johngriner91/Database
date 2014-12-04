<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="en">
<?php
	require './config.inc.php';
?>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Project Print Preview</title>
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

	<img class="img-responsive img-center" src="intro.gif" alt=""><br>

					  <div class="table-responsive">
					  <table>
								<tr>         <!--row0-->
									<th>Tag#</th>
									<th>Rev#</th>
									<th>Date</th>
								</tr>
								<tr>
									<td> <form method="post"> <input type="text" style="width:90px" name="tagNumber" id="NO" readonly> </form> </td>
									<td> <form method="post"> <input type="text" style="text-align:right; width:40px" name="Rev#" id="Rev" readonly> </form></td>
									<td> <form method="post"> <input type="text" style="width:80px" name="Date" id="Date" readonly></form></td>
								</tr>
								<tr>
									<th>Sub-Category</th>
									<th>Complexity</th>
									<th>Lead Time</th>
									<th>User</th>
								</tr>
								<tr>         <!--row1-->
									<td> <form method="post"> <input type="text" style="width:175px" name="SubCategory" id="SubCategory" readonly></form></td>
									<td> <form method="post"> <input type="text" style="width:80px" name="Complexity" id="Complexity" readonly></form></td>
									<td> <form method="post"> <input type="text" style="width:75px; text-align:right" name="LeadTime" id="LeadTime" readonly></form></td>
									<td> <form method="post"> <input type="text" style="width:75px; text-align:right" name="User" id="User" readonly></form></td>
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
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="Description" readonly></textarea>
										</div></form></td>
								</tr>

								<tr>  	<!--row2-->
								   <td> Tag Notes: </td>
								   </tr>

							   <tr>		<!--row3-->
								   <td> <div class="form-group">
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="Notes" readonly></textarea>
										</div></form></td>
							   </tr>

							  <tr>  	<!--row2-->
							       <td> Price Note </td>
							   </tr>
							   <tr>		<!--row3-->
								   <td>  <div class="form-group">
											<textarea class="form-control" style="width:460px; height:75px" rows="5" id="PriceNotes" readonly></textarea>
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
								<td><input type="checkbox" class="checkbox" id="HVL" disabled/> </td>
								<td> &nbsp; HVL &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLUSA" id="HVLUSA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCA" id="HVLCA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLMEX" id="HVLMEX" readonly></form></td>
							</tr>
							<tr>	<!--row2-->
								<td><input type="checkbox" class="checkbox" id="HVLCC" disabled/> </td>
								<td> &nbsp; HVL/CC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCUSA" id="HVLCCUSA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCCA" id="HVLCCCA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="HVLCCMEX" id="HVLCCMEX" readonly></form></td>
							</tr>
							<tr>	<!--row3-->
								<td><input type="checkbox" class="checkbox" id="MetalClad" disabled/> </td>
								<td> &nbsp; Metal Clad &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCUSA" id="MCUSA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCCA" id="MCCA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MCMEX" id="MCMEX" readonly></form></td>
							</tr>
							<tr>	<!--row4-->
								<td><input type="checkbox" class="checkbox" id="MVMCC" disabled/> </td>
								<td> &nbsp; MVMCC &nbsp;&nbsp; </td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCUSA" id="MVMCCUSA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCCA" id="MVMCCCA" readonly></form></td>
								<td><form method="post"> <input type="text" style="width:100px; text-align:center" name="MVMCCMEX" id="MVMCCMEX" readonly></form></td>
							</tr>
						</table></div>

						<div class="table-responsive">
						<br><br>
						<table>
							<tr>
								<th> Applied FO: </td>
							</tr>
						</table><br> </div>
						<div class="table-responsive">
							<table data-toggle="table" data-url="" data-cache="false" class="table table-bordered table-striped">
								<thead>
									<tr>
										<td data-field="tag#"><center>Tag Number</center></td>
										<td data-field="fo#"><center>FO Number Applied To</center></td>
										<td data-field="notes"><center>Notes to Next Engineer</center></td>
									</tr>
								</thead>
								<tbody class="result"></tbody>
							</table>
					  </div> <!--table-responsive-->
						<br>
					<aside>
					<div>
						<h4><i>Pricing Information </i></h4>
						<table>
							<tr>	<!--row0-->
								<th>Material: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Material" id="Material" readonly></form></th>
							</tr>
							<tr>	<!--row1-->
								<th>Labor: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Labor" id="Labor" readonly></form></th>
							</tr>
							<tr>	<!--row2-->
								<th>Engineering: </th>
								<th><form method="post"> <input type="text" style="width:200px; text-align:right" name="Engineering" id="Engineering" readonly></form></th>
							</tr>
						</table>
						<hr style="width:400px" align="left">
						<br><br>
						<table>
							<tr>	<!--row0-->
								<th nowrap>Install Cost: </th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="Install" id="Install" readonly></form></th>
							</tr>
							<tr>	<!--row1-->
								<th nowrap>Price Expires: &nbsp;</th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="PriceExpires" id="PriceExpires" readonly></form></th>
							</tr>
						</table>						
						<br>
						<button type="button" class="btn btn-default" onclick="window.print();">Print Me</button>
					</div>
					</aside>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">

			window.onload = populateAndCalc;

			function getFO(){
				var TagNO = document.getElementById("NO").value;
				var RevNO = document.getElementById("Rev").value;
				var action = 'popFO';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
				'TagNo': TagNO,
				'RevNo': RevNO};
				$.post(ajaxurl,data,function(response){
					$(".result").html(response);
				});
			}

			function populateAndCalc(){
				var tag = readCookie('tag');
				var rev = readCookie('rev');
				alert(tag + " : " + rev);
				var action = 'display';
				var ajaxurl = 'ajax.php',
				data = {'action':action,
						'tag':tag,
						'rev':rev};
				$.post(ajaxurl,data,function(response){
					//$(".result").html(response);		//debug stuff
					var jsonData = JSON.parse(response);
					var matCost = parseFloat(jsonData.tag.MatCost);
					var labCost = (parseFloat(jsonData.tag.LabCost) * parseFloat(jsonData.hourly[1].Value));
					var engCost = (parseFloat(jsonData.tag.EngCost) * parseFloat(jsonData.hourly[0].Value));
					var insCost = (matCost + labCost + engCost);
					document.getElementById("NO").value = jsonData.tag.NO;
					document.getElementById("Description").value = jsonData.tag.Description;
					document.getElementById("SubCategory").value = jsonData.tag.SubCategory;
					document.getElementById("Rev").value = jsonData.tag.Rev;
					document.getElementById("Date").value = jsonData.tag.CurrentDate;
					document.getElementById("Complexity").value = jsonData.tag.Complexity;
					document.getElementById("LeadTime").value = jsonData.tag.LeadTime;
					document.getElementById("Notes").value = jsonData.tag.Notes;
					document.getElementById("PriceNotes").value = jsonData.tag.PriceNotes;
					document.getElementById("Material").value = matCost.toFixed(2);
					document.getElementById("Labor").value = labCost;
					document.getElementById("Engineering").value = engCost;
					document.getElementById("Install").value = insCost.toFixed(2);
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
					if(jsonData.tag.Obsolete == 1){
						document.getElementById("Obsolete").checked = true;
					}
					eraseCookie('tag');
					eraseCookie('rev');
					getFO();
				});
			}

			function editTag(){
				createCookie('tag',document.getElementById('NO').value,0);
				createCookie('rev',document.getElementById('Rev').value,0);
				document.getElementById('HVL').disabled="false";
				document.getElementById('HVLCC').disabled="false";
				document.getElementById('MetalClad').disabled="false";
				document.getElementById('MVMCC').disabled="false";
				document.getElementById('Obsolete').disabled="false";
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
