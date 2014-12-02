<?php

require("config.inc.php"); 

if(!empty($_POST)){
	if(isset($_POST['action']) && !empty($_POST['action'])){
		switch($_POST['action']){
			case 'search': search();break;
			case 'display': display();break;
		}
	}
}

function display(){
	require("config.inc.php");
	$tag = $_POST['tag'];
	$rev = $_POST['rev'];
	$response = array();
	$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.NO=".$_POST['tag']." AND B.Rev=".$_POST['rev'].";";
	$result = $db->query($query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$response['tag'] = $row;
		}
	}else{
		die("Failed to fetch $tag : $rev!");
	}
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

function notEmpty($var){
	return ($var==="0"||$var);
}

?>		