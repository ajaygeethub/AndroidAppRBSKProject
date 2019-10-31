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
	High Risk Mother Date Wise Reports | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>
</head>
<body>
	<?php
	include 'mainpage.php';
	?>
				<form method="post" action="report.php">
				
					<input type=Submit name=show value="<<Back To Reports" class="b1">
				
				</form>
	<div class="container-fluid">
		<div class="row">
			
			<form name=f1 method=post>
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>High Risk Mother Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								To Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="todate" class="us" value="<?php echo date('Y-m-01'); ?>">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								From Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="fromdate" class="us" value="<?php echo date('Y-m-d'); ?>">
							</div>
							<div class="col-md-2 col-sm-3 col-xs-2 col-lg-2 s">
                            <input type=Submit name=DateWise value=Search  class="b" >
                        </div>
						
						</form>
						</div>
						
						</div>
						</div>
						</div>
						</div>
					
				
			
			
				<?php
							
							if(isset($_POST['DateWise']))
							{
							$sql="select * from highrisk where DateRBSK between '".$_POST['todate']."' and '".$_POST['fromdate']."'";
							$result=mysql_query($sql);
							echo "<center><h1>High Risk Mother</h1></center>
									<h5>Fortnightly reporting for high risk mother<br>
									Name of RBSK doctros and contact number of rbsk team</h5>";
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered' id=d>";
							
							echo "<thead>
<tr>
	<th>Sr No</th>
	<th>Date of visit by RBSK</th>
	<th>Last date of attending mamta session</th>
	<th>PHC</th>
	<th>Sub Center</th>
	<th>Village</th>
	<th>Checked mother Name</th>
	<th>Phone No. of High Risk Mother Ckecked by RBSK Doctor</th>
	<th>Reason for High Risk</th>
	<th>LMP And Expected Delivery Date</th>
	<th>Does BP match with that recorded In Mamta</th>
	<th>BP/ PEDAL EDEMA</th>
	<th>HB%/Blood Group</th>
	<th>Does HB match with that recorded In Mamta</th>
	<th>If Hb<7, IRON SUCROSE-I/V given? With Date</th>
	<th>Diabetes/Blood sugar</th>
	<th>Thalassemia Test/HIV Test</th>
	<th>Sonography Done Or Not?-If,Yes Mention Date.If no</th>
	<th>Gravida/Para</th>
	<th>TT Dose With Date</th>
	<th>Was High Risk Mother Made Aware Of Her Condition</th>
	<th>H/O Previons Deliveryie</th>
	<th>Any Addition ie Tobacco,Smoking</th>
	<th>Delivery Plan(Hospital)</th>
	
    <th>No.Of Visit by</th>
	<th>Delete</th>
</tr>
</thead><tbody>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td>".date("d-m-Y",strtotime($dataset[1]))."</td><td>".date("d-m-Y",strtotime($dataset[2]))."</td><td>".$dataset[3]."</td><td>".$dataset[4]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td>".$dataset[7]."</td><td>".$dataset[8]."</td><td>".$dataset[9]." ".$dataset[10]."</td><td>".$dataset[11]."</td><td>".$dataset[12]."</td><td>".$dataset[13]." / ".$dataset[14]."</td><td>".$dataset[15]."</td><td>".$dataset[16]." / ".$dataset[17]."</td><td>".$dataset[18]."</td><td>".$dataset[19]." / ".$dataset[20]." / ".$dataset[21]." / ".$dataset[22]."</td><td>".$dataset[23]." / ".$dataset[24]." / ".$dataset[25]."</td><td>".$dataset[26]."</td><td>".$dataset[27]." / ".$dataset[28]."</td><td>".$dataset[29]."</td><td>".$dataset[30]." / ".$dataset[31]."</td><td>".$dataset[32]." / ".$dataset[33]."</td><td>".$dataset[34]."</td><td>".$dataset[35]."</td><td><a href=HighRiskDeleteData.php?n=".$dataset[0].">Delete</a></td></tr>";
									
								}
							echo "</tbody></table>";
							
							}
							
							
							
						
				
			?>
</body>
</html>

<script>
 $(document).ready(function(){  
  $('#d').DataTable();
 
 });  
 </script>