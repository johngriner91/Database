<?php

//FILE: ajax.php
//PURPOSE: Contains functions for TAGS database interactions

require("config.inc.php"); 

//Switch on value 'action' in post
if(!empty($_POST)){
	if(isset($_POST['action']) && !empty($_POST['action'])){
		switch($_POST['action']){
			case 'search': search();break;
			case 'display': display();break;
			case 'update': update();break;
			case 'attachments': attachments();break;
		}
	}
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
		. $_POST['TAGMember'] . "', '"
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
	print json_encode($response);
	exit;
}

//Fetches list of tags that match search criteria
function search(){
	require("config.inc.php");
	$fields = array('NO','Rev','CurrentDate','SubCategory','Complexity','LeadTime','TAGMember','HVL','HVLCC','MetalClad','MVMCC','Obsolete');
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

	//print_r($conditions);

	$query = "SELECT * FROM view_TAGS ";
	if(count($conditions)>0){
		$query .= "WHERE " . implode(' AND ', $conditions);
	}
	
	//echo $query;
	
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