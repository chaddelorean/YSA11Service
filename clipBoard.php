<?php
	include "mysqlconnect.php";
	
	$results = mysqli_query($con, "call sp_getClipboard();");
	$to_encode = array();
	while ($row = mysqli_fetch_array($results) ){
		$to_encode[] = $row;
	}
	header("Content-type: application/json");
	echo json_encode($to_encode);
	mysqli_close($con);
?>