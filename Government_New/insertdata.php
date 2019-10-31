<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("government",$con);
$sql="insert into androiduser(username,password) values('".$_POST['username']."','".$_POST['password']."')";
$result=mysql_query($sql);

$sql="select * from androiduser";
$result=mysql_query($sql);
while($data=mysql_fetch_array($result))
{
	echo $data[0];
	
}
?>