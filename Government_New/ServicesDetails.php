<?php
if(!isset($_SESSION['login']))
{
	header("Location:index.php");
}
else
{
include 'db.php';
	
}
?>
<html>
<head>
<title> Provided Service Details | કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ </title>
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
					<div class="panel-heading" style='background-color:#FF5050;radius:0px'>High Risk Details</div>
						<div class="panel-body" style='color:black;radius:0px'>
                        <div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Place : <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="place" class="us" placeholder="Enter Place Name">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Checking and Reasion : <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="reasion" class="us" placeholder="Enter Reasion and Issue Details">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Treatment :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="treatment" class="us" placeholder="Enter Treatment Details">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Follow up Service :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="fservices" class="us" placeholder="Enter Service Details">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Treatment Officer Name :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="tname" class="us" placeholder="Name of Treatment Officer" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Designation :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="phc" class="us" placeholder="Example : MBBS">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								More Treatment is Needed ? :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="treatmentneed" class="us" >
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Referd Place :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="referdplace" class="us" placeholder="Enter Place Name">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Contact :  <span class="required"> *</span>
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s">
								<input type=text name="contact" class="us" placeholder="Enter Contact No.">
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-4 s title">
								Notes :
							</div>
							<div class="col-md-6 col-sm-12 col-xl-2 col-lg-8 s title">
								<input type=text name="Notes" class="us">
							</div>
					
						<div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=Submit name=save value=Save  class="b" >
                        </div>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                            <input type=reset name=reset value=Clear  class="b">
                        </div>
							</form>
						<form name=f1 method=post action=question_display.php>
						 <div class="col-md-2 col-sm-3 col-xs-12 col-lg-4 s text-center">
                           <input type=submit name=display value=Display  class="b">
                        </div>
						</form>
		</div>
						</div>
						</div>
			</div>
				</div>
			</div>
			</div>
</body>
</html>

