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
	Cash Report Data | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Cash Reports Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								To Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="ToDate" class="us" value="<?php echo date('Y-m-01'); ?>">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								From Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="FromDate" class="us" value="<?php echo date('Y-m-d'); ?>">
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
							$sql="select * from rog where (date between '".$_POST['ToDate']."' and '".$_POST['FromDate']."')";
							$result=mysql_query($sql);
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered' id=d>";
							
							echo "<thead><tr><th>Srno</th><th>Date</th><th>Name</th><th>Followup Case</th><th>Old Case</th><th>Taluka</th><th>Username </th><th>Delete</th></tr></thead><tbody>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td>".$dataset['date']."</td><td>".$dataset['rogname']."</td><td>".$dataset['folloupcase']."</td><td>".$dataset['newcase']."</td><td>".$dataset['taluka']."</td><td>".$dataset['uid']."</td><td><a href=cashreportdeletedata.php?n=".$dataset[0].">Delete</a></td></tr>";
									
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