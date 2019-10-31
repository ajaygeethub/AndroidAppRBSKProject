<?php
session_start();
include 'db.php';
if(isset($_SESSION['login']))
{
	$id=$_GET['n'];
	$sql="delete from highrisk where HighRiskId=".$id."";
	$result=mysql_query($sql);

	if($result>0)
	{
		header("location:HighRiskDateWiseReport.php");
	}
}
else
{
		header("Location:index.php");
}

?>