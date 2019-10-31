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
$sql="delete from CHildrenDetails where childid=".$id."";
$result=mysql_query($sql);
$sql1="delete from questionanswer where childid=".$id."";
$result1=mysql_query($sql1);
if($result>0)
{
	header("location:0-6YearsDatewiseReport.php");
}
?>