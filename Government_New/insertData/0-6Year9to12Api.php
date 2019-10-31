<?php


include 'db.php';

$sql="select Childid from Childrendetails where uid='1' order by ChildId desc limit 1";
$result=mysql_query($sql);
$child=mysql_fetch_array($result);
$j=1;
for($i=82;$i<=87;$i+=1)
{
	$sql1="INSERT INTO `questionanswer`(`qid`, `answer`, `ChildId`) VALUES ('".$i."','".$_POST[$j]."','".$child[0]."')";
	$result1=mysql_query($sql1);
	$j=$j+1;
}
if($result1>0)
{
	echo "success";
}
else
{
	echo "sory";
}

?>