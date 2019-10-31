<?php
session_start();
if(isset($_SESSION['login']))
{
	
}
else
{
		header("Location:index.php");
}
$id=$_GET['n'];
?>
<html>
<head>
<title>
	6-18 Years Child Check Up Details | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>
</head>
<body>
	<?php
	include 'mainpage.php';
	?>
	<form method="post" action="report.php">
				<center>
					<input type=Submit name=show value="<< Reports" class="b">
				</center>
				</form>
	<div class="container-fluid">
						
						
						
						
						
						<?php
							include 'db.php';
							$d=date("Y-m-d");
							$sql="select h.date,h.ChilName,h.mothername,h.fathername,h.gender,h.dob,abs(DATEDIFF(dob,'".$d."')/365),u.username,h.contact,h.emamta,h.adhar,h.address,h.hid from health h,user u where u.userid=h.uid and h.hid=".$id."";
							$result=mysql_query($sql);
							$data=mysql_fetch_array($result);
							echo "<table class='table table-bordered'>";
							echo "<tr><td colspan=12><a href=6-18YearsExcel.php?n=".$id.">Export To Excel</a></td></tr>";
							echo "<tr><th colspan=6><center>શાળા આરોગ્ય-રાષ્ટ્રીય બાળ સ્વાસ્થ્ય કાર્યકમ, 6-18 વર્ષ સુધીના બાળક માટે ચકાસણી પત્રક</center></td></tr>";
							
							echo "<tr><td class=title>Child Name :</td><td>".$data['ChilName']."</td><td  class=title>Mother Name :</td><td>".$data['mothername']."</td><td class=title>Father Name : </td><td>".$data['fathername']."</td></tr><tr><td class=title>Gender : </td><td>".$data['gender']."</td><td class=title>DOB : </td><td>".$data['dob']."</td><td class=title>Age : </td><td>".$data[6]."</td></tr><tr><td class=title>Contact : </td><td>".$data['contact']."</td><td class=title>Adhar No : </td><td>".$data['adhar']."</td><td class=title>Emamta No : </td><td>".$data['emamta']."</td></tr><tr><td class=title>Address : </td><td colspan=5>".$data['address']."</td></tr>";	
							echo "</table>";
							
							
						
						
						
							
							$sql="select h.hdate,h.weight,h.height,h.bmi,h.checkupreq,u.username,h.hid from health h,user u where u.userid=h.uid and h.hid=".$id."";
							$result=mysql_query($sql);
							echo "<table class='table table-bordered'><tr><th>Srno</th><th>Date</th><th>Weight</th><th>Height</th><th>BMI</th><th>CheckUp Requirement</th><th>Username</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$dataset[6]."</td><td>".$dataset[0]."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td>".$dataset[4]."</td><td>".$dataset[0]."</td></tr>";
									
								}
							echo "</table>";
						
				
			
							
							$sql="select q.question,a.answer from answer a,question q where q.qid=a.questionid and mainid=".$id."";
							$result=mysql_query($sql);
							echo "<table class='table table-bordered'><tr><th>Srno</th><th>Question</th><th>Answer</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td class=title>".$dataset[0]."</td><td>".$dataset[1]."</td></tr>";
									
								}
							echo "</table>";
							
							include 'sandarbh_display.php';
							
				
			?>
</div>
</body>
</html>