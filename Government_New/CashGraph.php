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
	Question Wise Graph Report | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
	<?php
	include 'mainpage.php';
	?>
	<form method="post" action="GraphReports.php">
				
					<input type=Submit name=show value="<< Back To Reports" class="b1">
				
				</form>
	<div class="container-fluid">
		<div class="row">
		
		
		<form name=f1 method=post>
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Case Graph</div>
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
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Question :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-4 col-lg-4 s">
								<select name=taluka>
									<?php
										include 'db.php';
										$result=mysql_query("select tid,taluka from taluka");
										while($data=mysql_fetch_array($result))
										{
											echo "<option value=".$data[0].">".$data[1]."</option>";
										}
									?>
								</select>
							</div>
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
						$result5=mysql_query("select taluka from taluka where tid=".$_POST['taluka']."");
						$question=mysql_fetch_array($result5);
						echo '<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 s title">
							'.$question[0].'
                        </div>';
				?>
			
			<script type="text/javascript">
						google.charts.load('current', {'packages':['corechart']});
						google.charts.setOnLoadCallback(drawChart);
						function drawChart() 
						{
							var data = google.visualization.arrayToDataTable([
							['Taluka', 'Answer'],
				
						
					<?php
						
								$sql1="select sum(newcase),sum(folloupcase) from rog where taluka=".$_POST['taluka']." and date between '".$_POST['todate']."' and '".$_POST['fromdate']."'";
								$result1=mysql_query($sql1);
								
								$data1=mysql_fetch_array($result1);
						
						echo ' ["New",'.$data1[0].'],';
						echo ' ["FollowUp",'.$data1[1].'],';
					
					?>
										 
										 
						]);
						var options = {
						title: 'Answer'
						};
										
						var chart = new google.visualization.PieChart(document.getElementById('piechart'));

						chart.draw(data, options);
						}
					</script>
					
					<?php
					}
					?>
			</div>
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 s" id="piechart">
						
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