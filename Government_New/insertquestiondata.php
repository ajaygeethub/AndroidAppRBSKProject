
<?php
include 'db.php';
$q=1;
for($i=1;$i<=25;$i+=1)
{
	$sql="insert into QuestionAnswer(qid,answer,ChildId) values(".$q.",'N','3')";
	$result=mysql_query($sql);
	$q+=1;
}

?>