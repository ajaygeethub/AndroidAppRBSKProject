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
									<option value="All">--All--</option>
									<?php
										include 'db.php';
										$result=mysql_query("select qid,question from question where cid=1");
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
							if($_POST['question']!="All")
							{
							$sql="select question from question where qid=".$_POST['question']."";
							$result=mysql_query($sql);
							$question=mysql_fetch_array($result);
							
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered'>";
							echo "<tr><td colspan=4 class=title>".$question[0]."</td></tr>";
							
							
							
							$sql1="select count(answer) from answer where questionid=".$_POST['question']." and answer='Y'";
							$result1=mysql_query($sql1);
							$answerY=mysql_fetch_array($result1);
							
							
							
							$sql2="select count(answer) from answer where questionid=".$_POST['question']." and answer='N'";
							$result2=mysql_query($sql2);
							$answerN=mysql_fetch_array($result2);
							
							
							echo "<tr><td></td><td class=titlegreen>".$answerY[0]."</td><td class=titlered>".$answerN[0]."</td></tr>";
							
							echo "</table>";
							}
							else
							{
							$sql="select question,qid from question where cid=1";
							$result=mysql_query($sql);
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered'>";
							$i=1;
							echo "<tr><th>SrNo</th><th>Question</th><th>Yes</th><th>No</th></tr>";
							while($question=mysql_fetch_array($result))
							
							{
							echo "<tr><td>".$i."</td><td class=title>".$question[0]."</td>";
							
							$i+=1;
							
							$sql1="select count(answer) from answer where questionid=".$question[1]." and answer='Y'";
							$result1=mysql_query($sql1);
							$answerY=mysql_fetch_array($result1);
							
							
							
							$sql2="select count(answer) from answer where questionid=".$question[1]." and answer='N'";
							$result2=mysql_query($sql2);
							$answerN=mysql_fetch_array($result2);
							
							
							echo "<td class=titlegreen>".$answerY[0]."</td><td class=titlered>".$answerN[0]."</td></tr>";
							echo "<tr><td></td><td></td></tr>";
							
							}
							echo "</table>";
							}
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