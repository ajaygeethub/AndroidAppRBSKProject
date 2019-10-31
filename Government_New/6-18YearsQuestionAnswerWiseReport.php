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
										$result=mysql_query("select qid,question from question where cid=1");
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
								<input type=radio name=answer value="Y"> Yes
								<input type=radio name=answer value="N"> No
								
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
							
							
							include 'db.php';
							$d=date("Y-m-d");
							$sql="select h.date,h.ChilName,h.mothername,h.fathername,h.gender,h.dob,abs(DATEDIFF(dob,'".$d."')/365),u.username,h.hid from health h,user u where u.userid=h.uid and (h.date between '".$_POST['todate']."' and '".$_POST['fromdate']."') and abs(DATEDIFF(dob,'".$d."')/365)>=6 and h.hid=(select distinct mainid from answer where questionid=".$_POST['question']." and answer='".$_POST['answer']."')";
							$result=mysql_query($sql);
							echo "<div class=table-responsive>";
							echo "<table class='table table-bordered' id=d>";
							
							echo "<thead><tr><th>Srno</th><th>Date</th><th>Name</th><th>Mother Name</th><th>Father Name</th><th>Gender</th><th>DOB</th><th>Age</th><th>Username </th><th>View Answer</th></tr></thead><tbody>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									echo "<tr><td>".$srno."</td><td>".date("d-m-Y",strtotime($dataset[0]))."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td>".$dataset[4]."</td><td>".$dataset[5]."</td><td>".date("d-m-Y",strtotime($dataset[6]))."</td><td>".$dataset[7]."</td><td><a href=view_answer.php?n=".$dataset[8].">View</a></td></tr>";
									
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