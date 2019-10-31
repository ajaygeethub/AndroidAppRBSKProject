<?php
include 'db.php';
		$result2=mysql_query("select ChildId from childrendetails where uid='1' order by Childid desc limit 1");
		$childid=mysql_fetch_array($result2);
			$j=0;
			for($i=0;$i<25;$i+=1)	//question ni id pramane loop set krvi
			{
				$j+=1;
				$result=mysql_query("insert into questionanswer(qid,answer,childid) values('".$j."','".$_POST[$j]."','".$childid[0]."')");
			}
?>

