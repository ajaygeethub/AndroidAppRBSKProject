<?php
session_start();
include 'db.php';
if(isset($_SESSION['login']))
{
	$id=$_GET['n'];
	$sql="delete from rog where rogid=".$id."";
	$result=mysql_query($sql);

	if($result>0)
	{
		header("location:CashReportData.php");
	}
}
else
{
		header("Location:index.php");
}

?>