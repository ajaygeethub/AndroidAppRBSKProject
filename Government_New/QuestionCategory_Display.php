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
<title>Display Question Category | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
		 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Question Category</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">	
	<?php

	if(!isset($_COOKIE["login"]))
	{
		header("Location:index.php");
	}
	else
	{
		
		
		
	include 'db.php';
	$sql="select q.cid,q.question,u.username from question_category q,user u where q.uid=u.userid";
	$result=mysql_query($sql);
	echo "<div class='table-responsive'>";
	echo "<table class='table table-bordered'>";
	echo "<tr><th>SRNO</th><th>Question Category</th><th>User</th><th>Update</th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$srno+=1;
		echo "<tr><td>".$srno."</td><td>".$dataset['question']."</td><td>".$dataset['username']."</td><td><a href=Question_Category_Update.php?n=".$dataset['cid'].">Update</a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "</form>";
}
?>
		</div>
		
		</div>
                    </div>
					</div>
							
		
</div>
</div>
</body>
</html>