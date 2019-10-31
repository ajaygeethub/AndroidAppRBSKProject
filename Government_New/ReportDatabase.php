<?php
	include 'db.php';
	
	$sql="INSERT INTO `rog`( `newcase`, `folloupcase`, `date`, `rogname`, `taluka`, `uid`) VALUES ('".$_POST['nc']."','".$_POST['fc']."','".$_POST['reportDate']."','".$_POST['deces']."','".$_POST['tlk']."','uid')";
	if (mysql_query($sql)) {
		echo "success";
	}
	else
	{
		echo "sory ";
	}
?>