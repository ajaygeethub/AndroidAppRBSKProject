<?php
session_start();
include 'db.php';
if(isset($_SESSION['login']))
{
	
}
else
{
		header("Location:index.php");
}
$id=$_GET['n'];
$sql="delete from health where hid=".$id."";
$result=mysql_query($sql);
$sql1="delete from answer where mainid=".$id."";
$result1=mysql_query($sql1);
if($result>0)
{
	header("location:6-18YearsDatewiseReport.php");
}
?>