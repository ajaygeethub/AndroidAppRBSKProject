<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
		
	include 'db.php';
	$sql="select q.qid,q.question,ac.question from question q,question_category ac where ac.cid=q.cid";
	$result=mysql_query($sql);
	$output="";
	$output.= "<table border=1>";
	$output.=  "<tr><th>ID</th><th>Question </th><th>Category </th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$output.=  "<tr><td>".$dataset[0]."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td></tr>";
	}
	$output.=  "</table>";
	header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=QuestionList.xls");
echo $output;
}
?>
		</div>
		
</div>
</div>
</body>
</html>