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
<title>Display PHC Sub Center | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ</title>
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
		
	include 'db.php';
	$sql="select s.subcid,s.subcname,p.phcname,u.username from sub_center s,phc p,user u where s.uid=u.userid and p.phcid=s.phcid";
	$result=mysql_query($sql);
	echo "<div class='table-responsive'>";
	echo "<table class='table table-bordered'>";
	echo "<tr><th>SRNO</th><th>Sub Center Name </th><th>PHC Center Name </th><th>User</th><th>Update</th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$srno+=1;
		echo "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td><a href=Sub_Center_Update.php?n=".$dataset[0].">Update</a></td></tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "</form>";

?>
		</div>
		
</div>
</div>
</body>
</html>