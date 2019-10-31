<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
}

?>
<html>
<head>
<title>Display Question | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
</head>
<body>

<?php
	include 'mainpage.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="column side">
			<?php
					include 'menu.php';
				?>
        </div>
        <div class="column middle" style="padding:10px;padding-top:0px;">
			
	<?php

	if(!isset($_COOKIE["login"]))
	{
		header("Location:index.php");
	}
	else
	{
		
	include 'db.php';
	$sql="select q.qid,q.question,u.username,ac.question from question q,question_category ac,user u where q.uid=u.userid and ac.cid=q.cid";
	mysql_query("set question utf8_decode");
	$result=mysql_query($sql);
	echo "<div class='table-responsive'>";
	echo "<table class='table table-bordered'>";
	echo "<tr><th>SRNO</th><th>Question </th><th>Category </th><th>User</th><th>Update</th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$srno+=1;
		echo "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[3]."</td><td>".$dataset['username']."</td><td><a href=question_update.php?n=".$dataset['qid'].">Update</a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "</form>";
}
?>
		</div>
		
</div>
</div>
</body>
</html>