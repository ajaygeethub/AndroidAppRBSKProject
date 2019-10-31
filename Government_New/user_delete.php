<?php
if(!isset($_COOKIE["login"]))
{
	header("Location:index.php");
}
else
{
include 'db.php';
$id=$_GET["n"];
$up= "delete from user where userid=".$id." ";
$updb=mysql_query($up);
if(isset($updb))
{
	header("Location:create_user.php");
}
else
{
	echo "please check  your database";
}
}
?>