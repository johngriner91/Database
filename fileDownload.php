<?php
	require ("config.inc.php");
	$id = $_COOKIE['id'];
	$query = 'SELECT * FROM FILETESTING WHERE id='.$id.';';
	$result = $db->query($query);
	$row = $result->fetch_assoc();
	$bytes = $row['content'];
	$type = $row['filetype'];
	$name = $row['filename'];
	$size = $row['filesize'];

	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header("Content-Disposition: attachment; filename=$name");
	header("Content-length: $size");
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-type: $type");
	header("Content-Description: PHP Generated Data");
?>