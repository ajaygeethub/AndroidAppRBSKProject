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
include 'db.php';
						
							$output="";
							$d=date("Y-m-d");
							$sql="select h.date,h.ChilName,h.mothername,h.fathername,h.gender,h.dob,abs(DATEDIFF(dob,'".$d."')/365),u.username,h.contact,h.emamta,h.adhar,h.address,h.hid from health h,user u where u.userid=h.uid and h.hid=".$id."";
							$result=mysql_query($sql);
							$data=mysql_fetch_array($result);
							$output.="<table border=2>";
							
							$output.="<tr><th colspan=6><center>શાળા આરોગ્ય-રાષ્ટ્રીય બાળ સ્વાસ્થ્ય કાર્યકમ, 6-18 વર્ષ સુધીના બાળક માટે ચકાસણી પત્રક</center></td></tr>";
							
							$output.="<tr><td class=title>Child Name :</td><td>".$data['ChilName']."</td><td  class=title>Mother Name :</td><td>".$data['mothername']."</td><td class=title>Father Name : </td><td>".$data['fathername']."</td></tr><tr><td class=title>Gender : </td><td>".$data['gender']."</td><td class=title>DOB : </td><td>".$data['dob']."</td><td class=title>Age : </td><td>".$data[6]."</td></tr><tr><td class=title>Contact : </td><td>".$data['contact']."</td><td class=title>Adhar No : </td><td>".$data['adhar']."</td><td class=title>Emamta No : </td><td>".$data['emamta']."</td></tr><tr><td class=title>Address : </td><td colspan=5>".$data['address']."</td></tr>";	
							$output.="</table>";
							
							
						
						
						
							
							$sql="select h.date,h.weight,h.height,h.bmi,h.checkupreq,u.username,h.hid from health h,user u where u.userid=h.uid and h.hid=".$id."";
							$result=mysql_query($sql);
							$output.="<table border=2><tr><th>Date</th><th>Weight</th><th>Height</th><th>BMI</th><th>CheckUp Requirement</th><th>Username</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									$output.="<tr><td>".$dataset['date']."</td><td>".$dataset['weight']."</td><td>".$dataset['height']."</td><td>".$dataset['bmi']."</td><td>".$dataset['checkupreq']."</td><td>".$dataset['username']."</td></tr>";
									
								}
							$output.="</table>";
							
							$sql="select q.question,a.answer from answer a,question q where q.qid=a.questionid and mainid=".$id."";
							$result=mysql_query($sql);
							$output.= "<table border=2><tr><th>Srno</th><th colspan=4>Question</th><th>Answer</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									$output.= "<tr><td>".$srno."</td><td colspan=10>".$dataset[0]."</td><td>".$dataset[1]."</td></tr>";
									
								}
							$output.= "</table>";
							
							header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=6-18YearsChildForm.xls");
echo $output;
							
				
			?>
</div>
</body>
</html>