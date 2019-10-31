<?php

require 'db.php';
$user_name=$_POST["userName"];
$user_pass=$_POST["Password"];


$mysql_qry="select * from user where userName='".$user_name."' and Password='".$user_pass."'";
$result=mysql_query($mysql_qry,$conn);
if(mysql_num_rows($result)>0)
{
	echo "success";
}
else
{
	echo "Username and Password are incorrect";
}
?>