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
<title>Display PHC Center | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
	$sql="select p.phcid,p.phcname,u.username from phc p,user u where p.uid=u.userid";
	$result=mysql_query($sql);
	echo "<div class='table-responsive'>";
	echo "<table class='table table-bordered'>";
	echo "<tr><th>SRNO</th><th>PHC Name </th><th>User</th><th>Update</th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$srno+=1;
		echo "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td><a href=PHC_Update.php?n=".$dataset[0].">Update</a></td></tr>";
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