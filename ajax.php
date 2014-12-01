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
	$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.NO=".$_POST['tag']." AND B.Rev=".$_POST['rev'].";";
	$result = $db->query($query);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "<p>".$row['NO'].$row['Rev'].$row['Description'].$row['TAGMember'].$row['PriceExpires'].$row['Complexity']."</p>";
		}
	}else{
		echo "EMPTY<br>";
	}
	exit;
}

function search(){
	require("config.inc.php");
	echo "<strong>Search Results:</strong><br>";
	echo "<table class=" . '"' . "table table-responsive" . '"' . "align=" . '"' . "center". '"' .">";
	$obs = 0;
	if($_POST['obs'] == "true"){
		$obs = 1;
	}
	//SEARCH BY TAG NO
	if(isset($_POST['tag']) && notEmpty($_POST['tag'])){
		$tag = $_POST['tag'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE A.NO=$tag AND Obsolete=$obs";
	}
	//SEARCH BY Revision Number
	if(isset($_POST['rev']) && notEmpty($_POST['rev'])){
		$rev = $_POST['rev'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.Rev=$rev AND Obsolete=$obs";
	}
	//SEARCH BY Date
	if(isset($_POST['date']) && !empty($_POST['date'])){
		$date = $_POST['date'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.CurrentDate='$date' AND Obsolete=$obs";
	}
	//SEARCH BY Sub-Category
	if(isset($_POST['sub']) && !empty($_POST['sub'])){
		$sub = $_POST['sub'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE A.SubCategory='$sub' AND Obsolete=$obs";
	}
	//SEARCH BY Complexity
	if(isset($_POST['comp']) && !empty($_POST['comp'])){
		$comp = $_POST['comp'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.Complexity='$comp' AND Obsolete=$obs";
	}
	//SEARCH BY Lead Time
	if(isset($_POST['time']) && !empty($_POST['time'])){
		$time = $_POST['time'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.LeadTime=$time AND Obsolete=$obs";
	}
	//SEARCH BY TAGMember
	if(isset($_POST['user']) && !empty($_POST['user'])){
		$user = $_POST['user'];
		$query = "SELECT * FROM TAGS A JOIN REVISIONS B ON A.NO=B.NO WHERE B.TAGMember='$user' AND Obsolete=$obs";
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

function notEmpty($var){
	return ($var==="0"||$var);
}
?>		