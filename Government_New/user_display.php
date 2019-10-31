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
<title>
	User Display | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
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
			<div class="column middle">
			</div>
				<?php
							echo '<div class="column middle">';
							$output='';
							$sql="select u.userid,u.username,u.password,u.contact,u.email,u.usertype,u.status,t.taluka from user u , taluka t where u.taluka=t.tid";
							$result=mysql_query($sql);
							$output.= "<table class='table table-bordered'><th>SRNO</th><th>Name</th><th>Contact</th><th>Type</th><th>Status</th><th>Taluka</th><th>Update</th><th>Delete</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									if($dataset[0]=="1")
									{
										if($_COOKIE['login']==$dataset[1])
										{
											$srno+=1;
									$output.= "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[3]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td>".$dataset[7]."</td><td><a href=user_update.php?n=".$dataset[0].">Update</a></td><td><a href=user_delete.php?n=".$dataset[0].">Delete</a></td></tr>";
										}
										else
										{
										$srno+=1;
									$output.= "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[3]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td>".$dataset[7]."</td><td></td><td></td></tr>";
									}
									}
									else
									{
									$srno+=1;
									$output.= "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[3]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td>".$dataset[7]."</td><td><a href=user_update.php?n=".$dataset[0].">Update</a></td><td><a href=user_delete.php?n=".$dataset[0].">Delete</a></td></tr>";
									}
								}
							$output.= "</table>";
							echo $output;
						echo '</div>';
				
			?>
</div>
</body>
</html>