<?php
session_start();
if(isset($_SESSION['login']))
{
	
}
else
{
		header("Location:index.php");
}
?>
<html>
<head>
<title>
	Display Village | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>
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
				<?php
							echo '<div class="column middle">';
							$output='';
							$sql="select v.vid,v.vname,v.pincode,u.username from village v,user u where u.userid=v.uid";
							$result=mysql_query($sql);
							$output.= "<table class='table table-bordered'><th>SRNO</th><th>Name</th><th>Pin Code</th><th>Username</th><th>Update</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									$output.= "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td><a href=Village_Update.php?n=".$dataset[0].">Update</a></td></tr>";
									
								}
							$output.= "</table>";
							echo $output;
						echo '</div>';
				
			?>
</div>
</body>
</html>