
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
				
					<input type=Submit name=show value="<< Back To Graph Reports" class="b1">
				
				</form>
	<div class="container-fluid">
		<div class="row">
		
		
		<form name=f1 method=post>
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>6-18 Year Children Report</div>
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
								<select name=question>
									<?php
										include 'db.php';
										$result=mysql_query("select qid,question from question where cid=2 or cid=3 or cid=4");
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
						
						$sql="select question from question where qid=".$_POST['question']."";
						$result=mysql_query($sql);
						$question=mysql_fetch_array($result);
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
							['Question', 'Answer'],
				
						
					<?php
						
						
															
						$sql1="select count(answer) from questionanswer where qid=".$_POST['question']." and answer='Y'";
						
						$result1=mysql_query($sql1);
						$answerY=mysql_fetch_array($result1);
															
						$sql2="select count(answer) from questionanswer where qid=".$_POST['question']." and answer='N'";
						
						$result2=mysql_query($sql2);
						$answerN=mysql_fetch_array($result2);
						
						echo ' ["Yes",'.$answerY[0].'],';
						echo ' ["No",'.$answerN[0].'],';
					
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