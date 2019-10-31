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
	Question Answer Summery Report | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Case Report</div>
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
							</div>
							 <div class="row">
							
							<div class="col-md-2 col-sm-3 col-xs-2 col-lg-2 s">
                            <input type=Submit name=DateWise value=Search  class="b" >
                        </div>
						
						</form>
						</div>
						
						
						</form>
						</div>
						
						</div>
					
				
			
			
				<?php
							
							if(isset($_POST['DateWise']))
							{
								$sql="select taluka,tid from taluka";
								$result=mysql_query($sql);
								echo "<div class=table-responsive>";
							echo "<table class='table table-bordered' id=d>";
							echo "<tr><th>Taluko</th><th colspan=3>A</th><th colspan=3>B</th><th colspan=3>C</th><th colspan=3>D</th></tr>";
							echo "<tr><th></th><th>New</th><th>Follow Up</th><th>Total</th><th>New</th><th>Follow Up</th><th>Total</th><th>New</th><th>Follow Up</th><th>Total</th><th>New</th><th>Follow Up</th><th>Total</th></tr>";
							$a=0;
							$b=0;
							$c=0;
							$d=0;
							
								while($data=mysql_fetch_array($result))
								{
											echo "<tr><td>".$data[0]."</td>";
											$sql1="select sum(newcase),sum(folloupcase) from rog where taluka=".$data[1]." and date between '".$_POST['todate']."' and '".$_POST['fromdate']."' and rogname='Kidney'";
											$result1=mysql_query($sql1);
											$data1=mysql_fetch_array($result1);
											$a=$data1[0]+$data1[1];
											echo "<td>".$data1[0]."</td><td>".$data1[1]."</td><td>".$a."</td>";
											
											$sql1="select sum(newcase),sum(folloupcase) from rog where taluka=".$data[1]." and date between '".$_POST['todate']."' and '".$_POST['fromdate']."' and rogname='Cancer'";
											
											$result1=mysql_query($sql1);
											$data1=mysql_fetch_array($result1);
											$b=$data1[0]+$data1[1];
												echo "<td>".$data1[0]."</td><td>".$data1[1]."</td><td>".$b."</td>";
											$sql1="select sum(newcase),sum(folloupcase) from rog where taluka=".$data[1]." and date between '".$_POST['todate']."' and '".$_POST['fromdate']."' and rogname='Thalassemia'";
											
											$result1=mysql_query($sql1);
											$data1=mysql_fetch_array($result1);
											$c=$data1[0]+$data1[1];
											echo "<td>".$data1[0]."</td><td>".$data1[1]."</td><td>".$c."</td>";
											$sql1="select sum(newcase),sum(folloupcase) from rog where taluka=".$data[1]." and date between '".$_POST['todate']."' and '".$_POST['fromdate']."' and rogname='Heart'";
											
											$result1=mysql_query($sql1);
											$data1=mysql_fetch_array($result1);
											$d=$data1[0]+$data1[1];
												echo "<td>".$data1[0]."</td><td>".$data1[1]."</td><td>".$d."</td></tr>";
								}
								echo "</table>";
							}
							
							
							
							
						
				
			?>
			</div>
						</div>
						</div>
						</div>
						
</div>
</body>
</html>

<script>
 $(document).ready(function(){  
  $('#d').DataTable();
 
 });  
 </script>