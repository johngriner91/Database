<?php

//FILE: ajax.php
//PURPOSE: Contains functions for TAGS database interactions

require("config.inc.php");

//Switch on value 'action' in post
if(!empty($_POST)){
	if(isset($_POST['action']) && !empty($_POST['action'])){
		switch($_POST['action']){
			case 'search': search();break;
			case 'uploadFile': uploadFile();break;
			case 'display': display();break;
			case 'update': update();break;
			case 'attachments': attachments();break;
			case 'addUser': addUser();break;
			case 'getUsers': getUsers();break;
			case 'getUser':getUser();break;
			case 'saveUser':saveUser();break;
			case 'getCountries':getCountries();break;
			case 'getComplexities':getComplexities();break;
			case 'updateCountry':updateCountry();break;
			case 'insert':insertTag();break;
			case 'updateComplexities':updateComplexities();break;
			case 'popFO':popFO();break;
			case 'newFO':newFO();break;
		}
	}
}

function newFO(){
	require ("config.inc.php");
	$query = "INSERT INTO FO_TABLE (NO, Rev, FOapp, Notes, FO, Quote) VALUES ('".$_POST['TagNO']."','".$_POST['RevNO']."', '".$_POST['FoNo']."','".$_POST['Notes']."','".$_POST['CkQ']."','".$_POST['CkF']."');";
	$result = $db->query($query);
	if($result2 = $db->query($query2)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	exit;
}

function popFO(){
	require ("config.inc.php");
	$query = "SELECT NO, FOapp, Notes FROM FO_TABLE WHERE NO='".$_POST['TagNo']."';";
	$result = $db->query($query);
	if($result->num_rows > 0){
		echo "<h1>We found $result->num_rows rows.</h1>";
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['Name']."</td><td>".$row['FOapp']."</td><td>".$row['Notes']."</td>";
			echo "</tr>";
		}
	}
	exit;
}

function insertTag(){
	require("config.inc.php");
	$NO ='';
	$query = "INSERT INTO TAGS (Description,SubCategory) VALUES('".$_POST['Description']."', '".$_POST['SubCategory']."');";
	if($result = $db->query($query)){
		$query = "SELECT LAST_INSERT_ID();";
		$result = $db->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$NO = $row['LAST_INSERT_ID()'];
			}
		}
		if($_POST['HVL'] == "true"){
			$_POST['HVL'] = 1;
		}else{
			$_POST['HVL'] = 0;
		}
		if($_POST['HVLCC'] == "true"){
			$_POST['HVLCC'] = 1;
		}else{
			$_POST['HVLCC'] = 0;
		}
		if($_POST['MetalClad'] == "true"){
			$_POST['MetalClad'] = 1;
		}else{
			$_POST['MetalClad'] = 0;
		}
		if($_POST['MVMCC'] == "true"){
			$_POST['MVMCC'] = 1;
		}else{
			$_POST['MVMCC'] = 0;
		}
		$query = "INSERT INTO REVISIONS ("
			."NO, Rev, CurrentDate, Complexity, LeadTime, Notes, PriceNotes, "
			."MatCost, LabCost, EngCost, TAGMember, PriceExpires, "
			."HVL, HVLCC, MetalClad, MVMCC) "
			."VALUES("
			. $NO . ", "
			. $_POST['Rev'] . ", '"
			. $_POST['CurrentDate'] . "', '"
			. $_POST['Complexity'] . "', "
			. $_POST['LeadTime'] . ", '"
			. $_POST['Notes'] . "', '"
			. $_POST['PriceNotes'] . "', "
			. $_POST['MatCost'] . ", "
			. $_POST['LabCost'] . ", "
			. $_POST['EngCost'] .", '"
			. $_COOKIE['lastLoggedIn'] . "', '"
			. $_POST['PriceExpires'] . "', "
			. $_POST['HVL'] . ", "
			. $_POST['HVLCC'] . ", "
			. $_POST['MetalClad'] . ", "
			. $_POST['MVMCC'] . ");";
		echo $query;
		if($result = $db->query($query)){
			$success = "Tag successfully added.";
		}else{
			$success = "There was a problem inserting into the database.";
		}
	}
	print json_encode($success);
	exit;
}

function updateCountry(){
	require ("config.inc.php");
	$query = "UPDATE COUNTRY SET Mult=".$_POST['caMult']." WHERE Name='CA';";
	if($result = $db->query($query)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	$query = "UPDATE COUNTRY SET Mult=".$_POST['mexMult']." WHERE Name='MEX';";
	if($result = $db->query($query)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	$query = "UPDATE COUNTRY SET Mult=".$_POST['usMult']." WHERE Name='US';";
	if($result = $db->query($query)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	print json_encode($success);
	exit;
}

function updateComplexities(){
	require ("config.inc.php");
	$query = "DELETE FROM COMPLEXITIES WHERE Complexity='".$_POST['DC']."';";
	if($result = $db->query($query)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	$query2 = "INSERT INTO COMPLEXITIES (Complexity) VALUES ('".$_POST['IC']."');";
	if($result2 = $db->query($query2)){
		$success = "true";
	}else{
		$success = "false";
		print json_encode($success);
		exit;
	}
	print json_encode($success);
	exit;
}

function getCountries(){
	require ("config.inc.php");
    $query = 'SELECT * FROM COUNTRY';
    $result = $db->query($query);
    if($result->num_rows > 0){
    	while($row = $result->fetch_assoc()){
    		echo "<tr>";
    		echo "<td>".$row['Name']."</td>";
    		echo "<td><form method=".'"'."post".'"'."><input type=".'"'."text".'"'." style=".'"'."width:80px;".'"';
    		echo " id=".'"'.$row['Name'].'"'." value=".'"'.$row['Mult'].'"'."></form></td>";
    		echo "</tr>";
    	}
    }
    exit;
}

function getComplexities(){
	require ("config.inc.php");
	$query = 'SELECT * FROM COMPLEXITIES';
	$result = $db->query($query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['Complexity']."</td>";
			echo "</tr>";
		}
	}
	exit;
}

//Updates the specified user record
function saveUser(){
	require("config.inc.php");
	if($_POST['Admin'] == "true"){
		$_POST['Admin'] = 1;
	}else{
		$_POST['Admin'] = 0;
	}
	if($_POST['OE'] == "true"){
		$_POST['OE'] = 1;
	}else{
		$_POST['OE'] = 0;
	}
	if($_POST['TAGMember'] == "true"){
		$_POST['TAGMember'] = 1;
	}else{
		$_POST['TAGMember'] = 0;
	}

	$query = "UPDATE USERS SET "
		."Uname='".$_POST['Uname']."', "
		."Pword='".$_POST['Pword']."', "
		."Fname='".$_POST['Fname']."', "
		."Lname='".$_POST['Lname']."', "
		."Admin='".$_POST['Admin']."', "
		."OE='".$_POST['OE']."', "
		."TAGMember='".$_POST['TAGMember']."' "
		."WHERE Uname='".$_POST['oldUname']."';";
	if($result = $db->query($query)){
		$response['success'] = "User updated successfully.";
	}else{
		$response['success'] = $query;
	}
	print json_encode($response);
	exit;
}

//Get User specified by Uname
function getUser(){
	require("config.inc.php");
	$query = "SELECT * FROM USERS WHERE Uname='".$_POST['Uname']."';";
	$response = array();
	$result = $db->query($query);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$response['user'] = $row;
		}
	}
	print json_encode($response);
	exit;
}

//Get Users
function getUsers(){
	require("config.inc.php");
	$query = "SELECT * FROM USERS";
	$result = $db->query($query);
	if ($result->num_rows > 0) {

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr>";
	        echo "<td>" . $row["Fname"] . "</td><td>" . $row["Lname"] . "</td><td>" . $row["Uname"] . "</td><td>" . $row["Pword"] . "</td>";
	        if($row["Admin"]){
	        	echo "<td>X</td>";
	        }else{
	        	echo "<td></td>";
	        }
	        if($row["OE"]){
	        	echo "<td>X</td>";
	        }else{
	        	echo "<td></td>";
	        }
	        if($row["TAGMember"]){
	        	echo "<td>X</td>";
	        }else{
	        	echo "<td></td>";
	        }
	        echo "<td><a onclick=".'"'."userCookie('".$row["Uname"]."'); ".'"'."href=" . '"' . "editUser.html" . '"' . ">Edit</a></td></tr>";
	    }
	} else {
	    echo "0 results";
	}
	exit;
}

//Add user
function addUser(){
	require("config.inc.php");
	if($_POST['Admin'] == "true"){
		$_POST['Admin'] = 1;
	}else{
		$_POST['Admin'] = 0;
	}
	if($_POST['OE'] == "true"){
		$_POST['OE'] = 1;
	}else{
		$_POST['OE'] = 0;
	}
	if($_POST['TAGMember'] == "true"){
		$_POST['TAGMember'] = 1;
	}else{
		$_POST['TAGMember'] = 0;
	}

	$query = "INSERT INTO USERS(Uname,Pword,Fname,Lname,Admin,OE,TAGMember) VALUES('"
		.$_POST['Uname']."', '"
		.$_POST['Pword']."', '"
		.$_POST['Fname']."', '"
		.$_POST['Lname']."', '"
		.$_POST['Admin']."', '"
		.$_POST['OE']."', '"
		.$_POST['TAGMember']."');";
	if($result = $db->query($query)){
		$response['success'] = "User added successfully.";
	}else{
		$response['success'] = "There was a problem inserting into the database.";
	}
	print json_encode($response);
	exit;
}

//Review attachments
function attachments(){
	require("config.inc.php");
	print "ATTACHMENTS";
	exit;
}

//Updates information for specified tag and revision
function update(){
	require("config.inc.php");
	$response = array();
	$_POST['Rev'] = $_POST['Rev'] + 1;
	if($_POST['Obsolete'] == "true"){
		$_POST['Obsolete'] = 1;
	}else{
		$_POST['Obsolete'] = 0;
	}
	if($_POST['HVL'] == "true"){
		$_POST['HVL'] = 1;
	}else{
		$_POST['HVL'] = 0;
	}
	if($_POST['HVLCC'] == "true"){
		$_POST['HVLCC'] = 1;
	}else{
		$_POST['HVLCC'] = 0;
	}
	if($_POST['MetalClad'] == "true"){
		$_POST['MetalClad'] = 1;
	}else{
		$_POST['MetalClad'] = 0;
	}
	if($_POST['MVMCC'] == "true"){
		$_POST['MVMCC'] = 1;
	}else{
		$_POST['MVMCC'] = 0;
	}

	$query = "INSERT INTO REVISIONS ("
		."NO, Rev, CurrentDate, Complexity, LeadTime, Notes, PriceNotes, "
		."MatCost, LabCost, EngCost, InsCost, TAGMember, PriceExpires, "
		."HVL, HVLCC, MetalClad, MVMCC, Obsolete) "
		."VALUES("
		. $_POST['NO'] . ", "
		. $_POST['Rev'] . ", '"
		. $_POST['CurrentDate'] . "', '"
		. $_POST['Complexity'] . "', "
		. $_POST['LeadTime'] . ", '"
		. $_POST['Notes'] . "', '"
		. $_POST['PriceNotes'] . "', "
		. $_POST['MatCost'] . ", "
		. $_POST['LabCost'] . ", "
		. $_POST['EngCost'] . ", "
		. $_POST['InsCost'] . ", '"
		. $_COOKIE['lastLoggedIn'] . "', '"
		. $_POST['PriceExpires'] . "', "
		. $_POST['HVL'] . ", "
		. $_POST['HVLCC'] . ", "
		. $_POST['MetalClad'] . ", "
		. $_POST['MVMCC'] . ", "
		. $_POST['Obsolete'] . ");";
	if($result = $db->query($query)){
		$response['success'] = "Changes saved successfully.";
	}else{
		$response['success'] = "There was a problem inserting into the database.";
	}
	print json_encode($response);
	exit;
}

//Fetches information of specified tag and revision to be displayed on page
function display(){
	require("config.inc.php");
	$tag = $_POST['tag'];
	$rev = $_POST['rev'];
	$response = array();

	//Get TAG and REVISION info
	$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.NO=".$_POST['tag']." AND B.Rev=".$_POST['rev'].";";
	$result = $db->query($query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$response['tag'] = $row;
		}
	}else{
		print "<script type='text/javascript'>alert('Failed to fetch TAG. Try Tag Search instead.');</script>";
		exit;
	}

	//Get COUNTRY multipliers
	$query = "SELECT * FROM COUNTRY";
	$result = $db->query($query);
	if($result->num_rows > 0){
		$country = array();
		$count = 0;
		while($row = $result->fetch_assoc()){
			$country[$count] = $row;
			$count++;
		}
		$response['country'] = $country;
	}

	//Get PRODUCT TYPE multipliers
	$query = "SELECT * FROM PRODUCT_TYPE";
	$result = $db->query($query);
	if($result->num_rows > 0){
		$product = array();
		$count = 0;
		while($row = $result->fetch_assoc()){
			$product[$count] = $row;
			$count++;
		}
		$response['product'] = $product;
	}

	//Get HOURLY_COST multipliers
	$query = "SELECT * FROM HOURLY_COST";
	$result = $db->query($query);
	if($result->num_rows > 0){
		$hourly = array();
		$count = 0;
		while($row = $result->fetch_assoc()){
			$hourly[$count] = $row;
			$count++;
		}
		$response['hourly'] = $hourly;
	}

	print json_encode($response);
	exit;
}

//Fetches list of tags that match search criteria
function search(){
	require("config.inc.php");
	$fields = array('NO','Rev','CurrentDate','SubCategory','Complexity','LeadTime','TAGMember','HVL','HVLCC','MetalClad','MVMCC');
	$conditions = array();
	echo "<strong>Search Results:</strong><br>";
	echo "<table class=" . '"' . "table table-responsive" . '"' . "align=" . '"' . "center". '"' .">";
	if($_POST['Obsolete'] == "true"){
		$_POST['Obsolete'] = 1;
	}else{
		$_POST['Obsolete'] = 0;
	}
	if($_POST['HVL'] == "true"){
		$_POST['HVL'] = 1;
	}else{
		$_POST['HVL'] = 0;
	}
	if($_POST['HVLCC'] == "true"){
		$_POST['HVLCC'] = 1;
	}else{
		$_POST['HVLCC'] = 0;
	}
	if($_POST['MetalClad'] == "true"){
		$_POST['MetalClad'] = 1;
	}else{
		$_POST['MetalClad'] = 0;
	}
	if($_POST['MVMCC'] == "true"){
		$_POST['MVMCC'] = 1;
	}else{
		$_POST['MVMCC'] = 0;
	}

	foreach($fields as $field){
		if(isset($_POST[$field]) && !empty($_POST[$field])){
			$conditions[] = "$field LIKE '%" . $_POST[$field] . "%'";
		}
	}

	$query = "SELECT * FROM view_TAGS ";
	if(count($conditions)>0){
		$query .= "WHERE " . implode(' AND ', $conditions);
	}
	$result = $db->query($query);
	if ($result->num_rows > 0) {

		echo "<tr><th>NO</th><th>Rev#</th><th>Description</th><th nowrap>Sub-Category</th><th>Edit</tr></tr>";
		echo "<tbody style=" . '"' . "overflow-y:scroll;" . '"' . ">";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr>";
	        echo "<td><a onclick=".'"'."tagCookie('".$row["NO"]."','".$row['Rev']."'); ".'"'."href=" . '"' . "viewTag.php" . '"' . ">" . $row["NO"] . "</a>" . "</td><td>" . $row["Rev"] . "</td><td>" . $row["Description"] . "</td><td>" . $row["SubCategory"];
	        echo "<td><a onclick=".'"'."tagCookie('".$row["NO"]."','".$row['Rev']."'); ".'"'."href=" . '"' . "editTag.php" . '"' . ">Edit</a><br>";
	        echo "</tr>";
	    }
	} else {
	    echo "0 results";
	}

	echo "</tbody></table";
	exit;
}

//
function notEmpty($var){
	return ($var==="0"||$var);
}

?>
