<html>
<head>
<title>
	Display Answer | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ
</title>
</head>
<body>
	<?php
	include 'mainpage.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="column side">
				<?php
					include 'menu.php';
				?>
			</div>
			<div class="column middle">
			<form name=f1 method=post>
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Children Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-1 col-lg-1 s title">
								To Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="ToDate" class="us" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-1 col-lg-1 s title">
								From Date :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<input type=date name="FromDate" class="us" >
							</div>
							<div class="col-md-2 col-sm-3 col-xs-2 col-lg-2 s">
                            <input type=Submit name=DateWise value=Search  class="b" >
                        </div>
						
						</form>
						</div>
						
						
						
						<form name=f1 method=post>
			 <div class="panel" style='border:1px solid #FF5050;color:white;radius:0px'>
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>Question Wise Reports</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-1 col-lg-1 s title">
								Question :<span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-2 s">
								<select name=question>
									
								</select>
							</div>
						
							<div class="col-md-2 col-sm-3 col-xs-2 col-lg-2 s">
                            <input type=Submit name=DateWise value=Search  class="b" >
                        </div>
						
						</form>
						</div>
						
						</div>
					
				
			
			
				<?php
							
							if(isset($_POST['DateWise']))
							{
							$output='';
							$sql="select h.hdate,h.childname,h.weight,h.height,h.bmi,h.checkupreq,u.username,h.hid from health h,user u where u.userid=h.uid and (h.hdate between '".$_POST['ToDate']."' and '".$_POST['FromDate']."')";
							$result=mysql_query($sql);
							$output.= "<table class='table table-bordered'><tr><th>Srno</th><th>Date</th><th>Name</th><th>Weight</th><th>Height</th><th>BMI</th><th>CheckUp Requirement</th><th>Username</th><th>View Answer</th></tr>";
							$srno=0;
							while($dataset=mysql_fetch_array($result))
								{
									
									$srno+=1;
									$output.= "<tr><td>".$srno."</td><td>".$dataset[0]."</td><td>".$dataset[1]."</td><td>".$dataset[2]."</td><td>".$dataset[3]."</td><td>".$dataset[4]."</td><td>".$dataset[5]."</td><td>".$dataset[6]."</td><td><a href=view_answer.php?n=".$dataset[7].">View</a></td></tr>";
									
								}
							$output.= "</table>";
							
							echo $output;
							
							}
							
							
							
						
				
			?>
			</div>
</div>
</body>
</html>