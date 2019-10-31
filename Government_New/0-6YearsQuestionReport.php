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
	0-6 Year Questions Form | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>
</head>
<body>
	<?php
	include 'mainpage.php';
	?>
	<div class="container-fluid">
				<form method="post" action="0-6YearsDatewiseReport.php">
				<center>
					<input type=Submit name=show value="<< Back" class="b">
				</center>
				</form>
				
				
				
		<?php
							
							
							$sql="select c.childid,c.distict,c.mobilehealthteam,c.awcname,c.awcid,c.ashaname,c.ashaid,c.childname,c.mother,c.father,c.gender,c.contact,c.emamtano,c.adharno,c.address,c.weight,c.weightforage,c.height,heightforage,c.head,c.headforage,c.muac,c.muacforage from childrendetails c, user u where c.uid=u.userid and c.childid=".$id."";
							$result=mysql_query($sql);
							$data=mysql_fetch_array($result);
							echo "<table class='table table-bordered'>";
							echo "<tr><td colspan=12><a href=0-6YearExcel.php?n=".$id.">Export To Excel</a></td></tr>";
							echo "<tr><th colspan=12><center>શાળા આરોગ્ય-રાષ્ટ્રીય બાળ સ્વાસ્થ્ય કાર્યકમ, 0-6 વર્ષ સુધીના બાળક માટે ચકાસણી પત્રક</center></td></tr>";
							
							echo "<tr><td colspan=2 class=title>જિલ્લો/કોર્પોરેશન :</td><td>".$data['distict']."</td><td colspan=2 class=title>મોબાઇલ હેલ્થ ટીમ આઈ.ડી :</td><td>".$data['mobilehealthteam']."</td><td class=title>AWCનું નામ :</td><td colspan=2>".$data['awcname']."</td><td colspan=2 class=title>AWC આઈ.ડી :</td><td>".$data['awcid']."</td><tr><td colspan=3 class=title>આશાનું નામ અને સંપર્ક નંબર :</td><td colspan=6>".$data['ashaname']."</td><td colspna=2 class=title>આશા આઈ.ડી :</td><td colspan=2>".$data['ashaid']."</td></tr>";
							
							echo "<tr><td class=title>બાળકનું નામ :</td><td colspan=3>".$data['childname']."</td><td colspan=4 class=title>માતા-પિતા / વાલીનું નામ :</td><td colspan=4>".$data['mother']."".$data['father']."</td></tr>";
							
							echo "<tr><td colspna=2 class=title>જાતિ :</td><td>".$data['gender']."</td><td class=title colspan=2>સંપર્ક નંબર :</td><td colspan=2>".$data['contact']."</td><td class=title colspan=2>ઈ-મમતા નંબર :</td><td colspan=2>".$data['emamtano']."</td></tr>";
							
							echo "<tr><td class=title>આધાર નંબર :</td><td colspan=2>".$data['adharno']."</td><td colspan=2 class=title>સરનામું:</td><td colspan=7>".$data['address']."</td></tr>";
							
							echo "<tr><td class=title>વજન(કિ.ગ્રા) :</td><td colspan=2>".$data['weight']."</td><td class=title>ઊંચાઈ/લંબાઈ(સેમી)માં</td><td colspan=2>".$data['height']."</td><td class=title>માથાનો ઘેરાવો(સેમી) </td><td colspan=2>".$data['weight']."</td><td class=title>MUAC(સેમી)</td><td colspan=2>".$data['weight']."</td></tr>";
							
							echo "<tr><td colspan=2 class=title>વેઈટ ફોર એજ વર્ગીકરણ : (જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)  :</td><td>".$data['weightforage']."</td><td colspan=2 class=title>હાઈટ ફોર એજ વર્ગીકરણ : (જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)   </td><td>".$data['heightforage']."</td><td colspan=2 class=title>માથાનો ઘેરાવઆનું વર્ગીકરણ : (જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)   </td><td>".$data['headforage']."</td><td colspan=2 class=title>MUAC વર્ગીકરણ : (જોબ એઈડ્સમાં ચાર્ટ રીફર કરવો)   </td><td>".$data['muacforage']."</td></tr>";
							$srno=0;
							
							echo "</table>";
							
							
						
						
						
							
							
				
			
							
							$sql="select q.question,a.answer from questionanswer a,question q where q.qid=a.qid and childid=".$id."";
							$result=mysql_query($sql);
							echo "<table class='table table-bordered'><tr><th>Srno</th><th>Question</th><th>Answer</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td class=title>".$dataset[0]."</td><td>".$dataset[1]."</td></tr>";
									
								}
							echo "</table>";
							
							include 'sandarbh_display1.php';
	?>
	
	
</div>
</body>
</html>