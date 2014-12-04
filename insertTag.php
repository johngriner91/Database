
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<?php
	require './config.inc.php';
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(n,t,e){function r(e){if(!t[e]){var o=t[e]={exports:{}};n[e][0].call(o.exports,function(t){var o=n[e][1][t];return r(o?o:t)},o,o.exports)}return t[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({QJf3ax:[function(n,t){function e(n){function t(t,e,a){n&&n(t,e,a),a||(a={});for(var u=c(t),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,e);return s}function a(n,t){f[n]=c(n).concat(t)}function c(n){return f[n]||[]}function u(){return e(t)}var f={};return{on:a,emit:t,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=n("gos");t.exports=e()},{gos:"7eSDFh"}],ee:[function(n,t){t.exports=n("QJf3ax")},{}],gos:[function(n,t){t.exports=n("7eSDFh")},{}],"7eSDFh":[function(n,t){function e(n,t,e){if(r.call(n,t))return n[t];var o=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,t,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return n[t]=o,o}var r=Object.prototype.hasOwnProperty;t.exports=e},{}],D5DuLP:[function(n,t){function e(n,t,e){return r.listeners(n).length?r.emit(n,t,e):(o[n]||(o[n]=[]),void o[n].push(t))}var r=n("ee").create(),o={};t.exports=e,e.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(n,t){t.exports=n("D5DuLP")},{}],XL7HBI:[function(n,t){function e(n){var t=typeof n;return!n||"object"!==t&&"function"!==t?-1:n===window?0:i(n,o,function(){return r++})}var r=1,o="nr@id",i=n("gos");t.exports=e},{gos:"7eSDFh"}],id:[function(n,t){t.exports=n("XL7HBI")},{}],loader:[function(n,t){t.exports=n("G9z0Bl")},{}],G9z0Bl:[function(n,t){function e(){var n=v.info=NREUM.info;if(c(d,function(t,e){t in n||(n[t]=e)}),n&&n.agent&&n.licenseKey&&n.applicationID&&f&&f.body){v.proto="https"===l.split(":")[0]||n.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var t=f.createElement("script");t.src=v.proto+n.agent,f.body.appendChild(t)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=n("handle"),c=n(1),u=window,f=u.document,s="addEventListener",p="attachEvent",l=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-488.min.js"},v=t.exports={offset:i(),origin:l,features:{}};f[s]?(f[s]("DOMContentLoaded",o,!1),u[s]("load",e,!1)):(f[p]("onreadystatechange",r),u[p]("onload",e)),a("mark",["firstbyte",i()])},{1:11,handle:"D5DuLP"}],11:[function(n,t){function e(n,t){var e=[],o="",i=0;for(o in n)r.call(n,o)&&(e[i]=t(o,n[o]),i+=1);return e}var r=Object.prototype.hasOwnProperty;t.exports=e},{}]},{},["G9z0Bl"]);</script>
	<meta charset="utf-8">
	<title>Project Tag Insert</title>
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

	<h1><center>Tag Insert</center></a></h1><br>

	<!-- Begin Body -->
	<div class="container">
		<div class="no-gutter row">
			<!-- left side column -->
			<div class="col-md-1">
				<div class="panel panel-default" id="sidebar">
					<!--<div class="panel-heading" style="background-color:#64F797"></div>
					<div class="panel-body">
						<ul class="nav nav-stacked">
							<li><a href="searchTag.html">Tag Search</a></li>
							<li><a href="insertTag.html">Tag Insert</a></li>
							<li><a href="viewTag.html">Tag View</a></li>
						</ul>

					</div>/panel body-->
				</div><!--/panel-->
			</div><!--/end left column-->


			<!--mid column-->
			<div class="col-md-6">
				<div class="panel" id="midCol">
					<div class="panel-heading" style="background-color:#3DC66D"></div>
					<div class="panel-body">
					  <!--div class="table-responsive"-->
					  <table class="table table-borderless">
								<tr>         <!--row0-->
									<td>Sub-Category</td>
									<td>Complexity</td>
									<td>Lead Time</td>
								</tr>

								<tr>         <!--row1-->
									<td>
									<?php
										$options = '<option></option>';
										$subcat="SELECT * FROM SUBCATEGORIES";
										$result = $db->query($subcat);
										while($row = $result->fetch_assoc()) {
										    $options .="<option>" . $row['SubCategory'] . "</option>";
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
										    $options .="<option>" . $row['Complexity'] . "</option>";
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
								</tr>
						</table>
						<!--/div-->
						<!--div class="table-responsive"-->
						

								<!--div class="table-responsive"-->
								<table class="table table-borderless">
									<tr>		<!--row0-->
										<td> Tag Description: </td>
									</tr>

								<tr>		<!--row1-->
									<td> <div class="form-group">

									<tr>		<!--row1-->
										<td> <div class="form-group">
											<textarea class="form-control" style="width:440px; height:100px" rows="5" id="Description"></textarea>
										</div></form></td>
									</tr>

									<tr>  	<!--row2-->
										<td> Tag Notes: </td>
									</tr>

							   <tr>		<!--row3-->
								   <td> <div class="form-group">
									<tr>		<!--row3-->
										<td> <div class="form-group">
											<textarea class="form-control" style="width:440px; height:100px" rows="5" id="Notes"></textarea>
										</div></form></td>
									</tr>

							  <tr>  	<!--row2-->
							       <td> Price Note </td>
							   </tr>
							   <tr>		<!--row3-->
								   <td>  <div class="form-group">
											<textarea class="form-control" style="width:440px; height:100px" rows="5" id="PriceNotes"></textarea>
										</div>
							</tr></table>

								
									<!--div--> <!--table-responsive-->
								</div>
							</div><!--/panel-->
						</div><!--/end mid column-->
			<div class="col-md-4">
				<div class="panel" id ="rightcol">
					<div class="panel-heading" style="background-color:#057A2E"></div>
					<div class="panel-body">
						<h4><center><i>Product Types</i></center></h4>
						<table align="center">
							<tr>
							<td><input type="checkbox" class="checkbox" id="HVL"/></td><td> &nbsp;HVL </td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><input type="checkbox" class="checkbox" id="HVLCC"/></td><td> &nbsp;HVL/CC </td>
							</tr>
							<tr>
							<td><input type="checkbox" class="checkbox" id="MetalClad"/></td><td> &nbsp;Metal Clad </td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><input type="checkbox" class="checkbox" id="MVMCC"/></td><td> &nbsp;MVMCC </td>
							</tr>
						</table>
						<hr>

						<h4><center><i>Pricing Information </i></center></h4>
						<table class="table table-borderless">
							<tr>	<!--row0-->
								<th>Material: </th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="Material" id="Material">$</form></th>
							</tr>
							<tr>	<!--row1-->
								<th>Labor: </th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="Labor" id="Labor">hrs</form></th>
							</tr>
							<tr>	<!--row2-->
								<th>Engineering: </th>
								<th><form method="post"> <input type="text" style="width:150px; text-align:right" name="Engineering" id="Engineering">hrs</form></th>
							</tr>
						</table>
						<hr>
						<table align="center">
							<tr>	<!--row1-->
								<th>Price Expires: &nbsp;</th>
								<th><form method="post"> <input type="date" style="width:150px; text-align:right" name="PriceExpires" id="PriceExpires"></form></th>
							</tr>
						</table>
						<br>
						<br>
						<table align="center">
							<tr>	<!--row0-->
								<th><button type="button" style="width:150px" class="button" onclick="insertTag()">Save</button> </th>
							</tr>
						</table> <br>
					  </div><!--/panel-body-->
					</div><!--/panel-->
					<!--/end right column-->
			</div>
		</div><div class="result"></div>
	</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript">

		function insertTag(){
			var rev = 0;
			var date = currDate();
			var desc = document.getElementById('Description').value;
			var notes = document.getElementById('Notes').value;
			var price = document.getElementById('PriceNotes').value;
			var sub = document.getElementById('SubCategory').value;
			var comp = document.getElementById('Complexity').value;
			var time = document.getElementById('LeadTime').value;
			var user = 'Tony';
			var mat = document.getElementById('Material').value;
			var lab = document.getElementById('Labor').value;
			var eng = document.getElementById('Engineering').value;
			var exp = document.getElementById('PriceExpires').value;
			var hvl = document.getElementById('HVL').checked;
			var hvlcc = document.getElementById('HVLCC').checked;
			var mc = document.getElementById('MetalClad').checked;
			var mvmcc = document.getElementById('MVMCC').checked;
			var action = 'insert';
			var ajaxurl = 'ajax.php',
			data = {'action':action, 
	        		'Rev':rev, 
	        		'CurrentDate':date, 
	        		'Description':desc,
	        		'Notes':notes,
	        		'PriceNotes':price,
	        		'SubCategory':sub, 
	        		'Complexity':comp, 
	        		'LeadTime':time, 
	        		'TAGMember':user,
	        		'MatCost':mat,
	        		'LabCost':lab,
	        		'EngCost':eng,
	        		'PriceExpires':exp,
	        		'HVL':hvl,
	        		'HVLCC':hvlcc,
	        		'MetalClad':mc,
	        		'MVMCC':mvmcc};
	        $.post(ajaxurl, data, function(response){
	        	//$(".result").html(response);		//debug stuff
	        	var jsonData = JSON.parse(response);
	        	alert(jsonData);
	        	window.location = "searchTag.php";
	        });
		}

		function currDate(){
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth()+1;
			var y = date.getFullYear();
			if(d<10){
				d='0'+d;
			}
			if(m<10){
				m='0'+m;
			}
			date = m+'/'+d+'/'+y;
			return date;
		}

		</script>
	</body>
</html>
