<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
		
	include 'db.php';
	$sql="select s.subcid,s.subcname,p.phcname from  sub_center s,phc p where  s.phcid=p.phcid";
	$result=mysql_query($sql);
	$output="";
	$output.= "<table border=2>";
	$output.=  "<tr><th colspan=3><center>Sub Center List</center></th></tr>";
	$output.=  "<tr><th>SRNO</th><th>Sub Center Name </th><th>PHC Name</th></tr>";
	$srno=0;
	while($dataset=mysql_fetch_array($result))
	{
		$srno+=1;
		$output.=  "<tr><td>".$srno."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td></tr>";
	}
	$output.=  "</table>";
	header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=SubCenterList.xls");
echo $output;
}
?>
		</div>
		
</div>
</div>
</body>
</html>