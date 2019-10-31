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
	Question Answer Wise Report | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>0-6 Year Children Details</div>
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
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s title">
								Answer :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=radio name=answer value="Y" required> Yes
								<input type=radio name=answer value="N" required> No
								
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
							$sql="select distinct childid from questionanswer where qid=".$_POST['question']." and answer='".$_POST['answer']."'";
							//$sql="select c.date,c.ChildName,c.mother,c.father,c.Gender,u.username,c.ChildId from CHildrenDetails c,user u where u.userid=c.uid and (c.date between '".$_POST['todate']."' and '".$_POST['fromdate']."') and c.childid=(select distinct childid from questionanswer where qid=".$_POST['question']." and answer='".$_POST['answer']."')";
							
							$result=mysql_query($sql);
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered' id=d>";
							
							echo "<thead><tr><th>Srno</th><th>Date</th><th>Name</th><th>Mother Name</th><th>Father Name</th><th>Gender</th><th>Username </th><th>Child ID</th><th>View Answer</th></tr></thead><tbody>";
							$srno=0;
							while($data=mysql_fetch_array($result))
							{
							$sql1="select c.date,c.ChildName,c.mother,c.father,c.Gender,u.username,c.ChildId from CHildrenDetails c,user u where u.userid=c.uid and (c.date between '".$_POST['todate']."' and '".$_POST['fromdate']."') and c.childid='".$data[0]."'";
							$result1=mysql_query($sql1);
							
							while($dataset=mysql_fetch_array($result1))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td>".date("d-m-Y",strtotime($dataset[0]))."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td>".$dataset[4]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td><a href=0-6YearsQuestionReport.php?n=".$dataset[6].">View</a></td></tr>";
									
								}
							}
							echo "</tbody></table>";
							
							
							
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